# Distinct

Compute number of distinct values in an array.

## Task

**_Write a function:_**

```php
function solution($A){
// should return distinct values
}
```

that, given an array **_A_** consisting of **_N_** integers, returns the number of distinct values in array **_A_**. For
example, given array **_A_** consisting of six elements such that

```
A[0] = 2    A[1] = 1    A[2] = 1
A[3] = 2    A[4] = 3    A[5] = 1
```

the function should return 3, because there are 3 distinct values appearing in array **_A_**, namely 1, 2 and 3.

**_Write an efficient algorithm for the following assumptions:_**

* **N** is an integer within the range [0..200,000];
* string **S** consists only of the following characters: **"(", "{", "[", "]", "}" and/or ")"**.

## Example:

a. `A['2,1,1,2,3,1']` contains 3 distinct values

```php
// should return 3
solution(A['2,1,1,2,3,1']);
```

b. `A[7,7,1,2,3,1,3,4,2]`  contains 5 distinct values

```php
// should return 5
solution(A['7,7,1,2,3,1,3,4,2']);
```

c. `A[2,7,2,2,8,8,9,9,2]` contains 4 distinct values

```php
// should return 4
solution(A['2,7,2,2,8,8,9,9,2']);
```

### *Note:*

> This is not my original idea nor did I wrote it.  
Although the creator made it accessible to the public, still No copyright infringement intended!.  
I encounter this programming problem from Codility's web-site under programming lessons.  
The original source for this challenge can be found in this link:
[Distinct](https://app.codility.com/programmers/lessons/6-sorting/distinct/)