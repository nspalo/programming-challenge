# Brackets

Determine whether a given string of parentheses (multiple types) is properly nested.

## Task

A string **_S_** consisting of **_N_** characters is considered to be properly nested if any of the following conditions
is true:

1. **S** is empty;
1. **S** has the form **_"(U)"_** or **_"[U]"_** or **_"{U}"_** where **U** is a properly nested string;
1. **S** has the form **_"VW"_** where **V** and **W** are properly nested strings. For example, the string **_"{[()()]
   }"_** is properly nested but **_"([)()]"_** is not.

**_Write a function:_**

```php
function solution($S){
// should return 1 | 0
}
```

that, given a string **_S_** consisting of **_N_** characters, returns 1 if **_S_** is properly nested and 0 otherwise.

For example, given **_S_** = **_"{[()()]}"_**, the function should return 1 and given **S** = **_"([)()]"_**, the
function should return 0, as explained above.

**_Write an efficient algorithm for the following assumptions:_**

* **N** is an integer within the range [0..200,000];
* string **S** consists only of the following characters: **"(", "{", "[", "]", "}" and/or ")"**.

## Example:

a. `{[()()]}` is properly nested.

```php
// should return 1
solution('{[()()]}');
```

b. `([)()]` is not properly nested.

```php
// should return 0
solution('([)()]');
```

c. `{[)(]{(}{)}}` is properly nested.

```php
// should return 1
solution('{[)(]{(}{)}}');
```

### *Note:*

> This is not my original idea nor did I wrote it.  
Although the creator made it accessible to the public, still No copyright infringement intended!.  
I encounter this programming problem from Codility's web-site under programming lessons.  
The original source for this challenge can be found in this link:
[Brackets](https://app.codility.com/programmers/lessons/7-stacks_and_queues/brackets/)