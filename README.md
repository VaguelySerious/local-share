# Local Upload

## Use case

This small php app/website allows you to share files in both direction with anyone on the same network as you.  
Why would you want to do this? For the simple reason that it's faster than filesharing over Slack, Dropbox, or (god forbid) E-Mail, but also works with users that don't know how to quickly `netcat` the file over to you. So solely for those rare times when you need to get files larger than 1GB to or from the machine of a non-technical person.

## Installation

+ Move contents of the `public` folder to a location of your choice like `/var/www`
+ Serve that folder with any http server that supports PHP (e.g. apache httpd)
+ Make sure people have access to your local IP

## Usage

+ Anyone can upload any files and they will land under `public/uploads`
+ Any files you move to `public/uploads` on your machine will be available for download by anyone  

**Note** that while the most basic of exploit vectors should have been foreseen and prevented, this is supposed to be used in an environment that you trust and is by no means something to be considered secure. I recommend only turning your http server on when file exchange is imminent, and disabling it afterwards.

## Planned features

+ Make it a bit prettier
+ Display file types
+ Inline image data if file type is an image
+ Allow in-browser view of PDFs, images and other browser compatible file formats

