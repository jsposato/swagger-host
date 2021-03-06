# Swagger Hosting
## Requirements
* Amazon Linux EC2 Instance
* nginx
* PHP 5.3.29
* PHP-FPM 5.3.29
* nodejs 6.9.2
* bootprint@0.8.5
* bootprint-openapi@0.17.0
* currently only supports Swagger files in JSON format

## Installation
* Create an IAM instance profile and grant S3 read access to it
* Create Amazon Linux instance with the IAM instance profile created above in 
AWS and make sure nginx is installed and working properly
* Install nodejs, bootprint and bootprint-openapi
* Upload updateSwagger.sh to the ec2-user home directory
* Create a symlink (` sudo ln -s /home/ec2-user/updateSwagger.sh /etc/cron.daily/ `) of updateSwagger.sh into /etc/cron.daily to 
ensure automatic updates
* Configure nginx to parse PHP files
* Upload the index.php file to the document root of your web server

## Authentication
You can use Nginx to provide password authentication to your docs.  There 
is a link in the Links section to an article that explains how
## Notes
This process works with JSON formatted Swagger docs.  To convert a YAML 
formatted Swagger doc you can install 
`yamljs` and run `l2json swagger.yaml -p -i4`

## Links
1. [Bootprint](https://github.com/bootprint/bootprint-openapi)
1. [Authentication with Nginx](https://www.digitalocean.com/community/tutorials/how-to-set-up-password-authentication-with-nginx-on-ubuntu-14-04)
1. [yamljs](https://www.npmjs.com/package/yamljs)
