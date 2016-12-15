# Swagger Hosting
## Requirements
* Amazon Linux EC2 Instance
* nginx
* nodejs 6.9.2
* bootprint@0.8.5
* bootprint-openapi@0.17.0

## Installation
* Create Amazon Linux instance in AWS and make sure nginx is installed and working properly
* Install nodejs, bootprint and bootprint-openapi
* Upload updateSwagger.sh to the ec2-user home directory
* Create a symlink (` ln -s `) into /etc/cron.daily to ensure automatic updates



## Links
[1] https://github.com/bootprint/bootprint-openapi
[2] https://www.digitalocean.com/community/tutorials/how-to-set-up-password-authentication-with-nginx-on-ubuntu-14-04
