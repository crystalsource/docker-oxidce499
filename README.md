# Docker OXID CE 4.9.9

Run container with
`docker run -d -P crystalsource/oxidce499`

To define ports use
`docker run -d -p 80:80 -p 3306:3306 crystalsource/oxidce499`

You can use this to set an own shop directory
`docker run -d -P -v /own/local/path:/var/www/oxid`