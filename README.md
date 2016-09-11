# SinusBot-Stream
Sinusbot Webstream, a web-based player to stream audio from SinusBot music bots.

## Changes
- Very different layout using Bootstrap
- Uses video.js as an audio player
- Support for multiple streams from multiple instances (example.com/SinusBot-Stream/?id=1, or as a dropdown)
- Tries to find thumbnail and song link for youtube videos based on metadata
- Fixed url not including "http://"

## Dependencies
- Apache 2 Webserver
- PHP 5
- Php5-Curl
- Sinusbot
- Video.js
- Bootstrap


## Install
- Go to the directory where you wish to install (typically your web directory)
- Run the command "git clone https://github.com/Zahzi/SinusBot-Stream.git" 
- Edit config.php with your server information and preferences
- Edit sinusbot's config.ini 
    - EnableWebStream = true
    - SampleInterval = 60


## Attributions
- Using the SinusBot PHP Class from https://github.com/marburger93/SinusBot-API-PHP-Class
- Origionally based on https://github.com/crank015/SinusBot-Stream/
