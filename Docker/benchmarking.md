## Use docker image to benchmark with different versions of PHP and configs

This downloads the docker image if not already available.
Binds the directory to the /php directory in the VM.
replace the x with the minor number and 7 can be replaced with 8 when the time comes to
test out PHP 8.


```bash
docker run -v /director/to/bind/:/php -it php:7.x bash
```
