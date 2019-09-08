#!/bin/bash
# Author: Xcitic
# Bootstrapping a web server using PHP server
# forking new process to run python -mwebbrowser to launch your default browser

php -S localhost:8000 & python -mwebbrowser http://localhost:8000
