Maths tools
===

This library includes some tools for math operations.

[![Build Status](https://travis-ci.org/thelia/math-tools.png?branch=master)](https://travis-ci.org/thelia/math-tools) [![License](https://poser.pugx.org/thelia/math-tools/license.png)](https://packagist.org/packages/thelia/math-tools) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/thelia/math-tools/badges/quality-score.png?s=61e3e04a69bffd71c29b08e5392080317a546716)](https://scrutinizer-ci.com/g/thelia/math-tools/)

Number
---

Here's an example of rounding problems solved by this lib:
```php
$price = new Number('3.99');

$price->divide('1.2');
echo $price->getNumber(); // 3.33

$price->multiply('1.2');
echo $price->getNumber(); // 3.99, where most of time libs returns 4.00
```

GCD
---

This tool computes the GCD of two numbers.

```php
echo GCD::getGCD(10,5); // 5
echo GCD::getGCD(10,10); // 10
echo GCD::getGCD(20,10); // 10
echo GCD::getGCD(11,10); // 1
```
