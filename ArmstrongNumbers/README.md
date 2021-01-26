# Armstrong Numbers

A number is an Armstrong Number or narcissistic number if it is equal to the sum of its own digits raised to the power
of the number of digits.

## Task

Write a function that accepts a number and determine if it's an Armstrong number and then return true, false otherwise.

**_Write a function:_**

```php
function isArmstrongNumber($number) {
// returns true or false
}
```

## Example:

a.) 123 is not an armstrong number.

```
(1^3) + (2^3) + (3^3) = 36
```

b.) 153 is an armstrong number.

```
(1^3) + (5^3) + (3^3) = 153
```

c.) 407 is also an armstrong number.
```
(4^3) + (0^3) + (7^3) = 407
```

d.) 1634 is also an armstrong number.
```
(1^4) + (6^4) + (3^4) + (4^4) = 1634
```