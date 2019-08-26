#!/usr/bin/php

<?php
## Author: Sami
## Testing out Foreign Function Interface FFI
## Not available until PHP 7.4 expected launch November 2019


$ffi = FFI::cdef(
    "int printf(const char *format, ...);",
    "libc.so.6");

$ffi->printf("Hello %s!\n", "world");

?>
