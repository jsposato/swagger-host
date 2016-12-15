#!/usr/bin/env bash
################################################################################
# This allows the swagger doc for Forrester TAP to be hosted here.
#
# We download the JSON from S3, then run it through bootprint to make
# a static HTML page from it
#
################################################################################

# First check to make sure script is running as root (sudo)
if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root" 1>&2
   exit 1
fi

### Download all JSON files from API Doc store
echo "Downloading Swagger spec from S3"
aws s3 cp s3://mobforrester-server-resources/ftap-swagger.json /usr/share/nginx/


### For each JSON file, create nginx directory if it doesn't exist, then bootprint the json to the nginx directory
echo "Converting Swagger JSON to HTML"
bootprint openapi /usr/share/nginx/ftap-swagger.json /usr/share/nginx/html/forrester

echo "All Done!!"

