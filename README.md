# Tiny UUID

Generates a Random "Mixed Case" string of the specified length consisting only of numbers and letters, e.g: **crkeG**, **zL6VY**, etc.

This utility can be used to generate an alphanumeric ID for URLs when you don't want visitors to know the internals of your database (the ID of a record), and instead a random ID will be exposed.

For example:

Having this URL: http://www.example.com/product/123
we can change to: http://www.example.com/product/Krd2G

# Usage

Add the library as a dependency:

> $ composer require fixwa/tiny-uuid

Then in your code you would call it like the following:

```
<?php
...

use Fixwa\TinyUuid\TinyUuid;

...

$tinyId = TinyUuid::tinyUuid();

```



# Development
Run unit tests

> $ vendor/bin/phpunit -c tests/
