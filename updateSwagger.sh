#!/usr/bin/env bash
################################################################################
# This allows the swagger doc for Forrester TAP to be hosted here.
#
# We download the JSON from S3, then run it through bootprint to make
# a static HTML page from it
#
################################################################################

# First check to make sure script is running as root
if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root" 1>&2
   exit 1
fi

nginx_public_directory="/usr/share/nginx/html"
s3_bucket_name=""

### Download all JSON files from API Doc store
echo "Downloading Swagger spec from S3"
cd $HOME
aws s3 sync s3://${s3_bucket_name} .

files="*.json"
for file in ${files}
    do
        echo "${file}"
        # get filename without extension
        filename="${file%.*}"

        echo "${filename}"

        # create filename directory in nginx public directory if it doesn't exist
        if [ ! -d "${nginx_public_directory}/${filename}" ]; then
            mkdir "${nginx_public_directory}/${filename}"
        fi

        # bootprint json into html in the filename directory
        echo "Converting Swagger JSON to HTML"
        # continue on error
        if bootprint openapi "${file}" "${nginx_public_directory}/${filename}"; then
            continue
        fi
done

echo "All Done!!"

