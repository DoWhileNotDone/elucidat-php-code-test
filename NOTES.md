# Development Notes

## Description

A simple refactor to use a factory and item 'specific' calculators to determine the next day quality. 

## PHP Version

Some calculators use the php version 8 [match syntax](https://www.php.net/manual/en/control-structures.match.php)

Tests can be run using docker: 
```
 docker run --rm -v "$PWD":/app -w "/app" php:8-cli ./vendor/bin/kahlan
```

## Misc Version

* Replaced composer package crysalead/kahlan with recommended kahlan/kahlan
