### Data Types
Python support different data types and is able to convert back an forth between them.

##### Strings 
Strings are used to represent text. 

```python
"Hello World"
'This is also text'
"123"                 # This is a string, NOT a number
```
Strings can be concatenated (= writing one afte the other) using the `+` operator.

```python
"I love " + "chocolate"    # = "I love chocoloate"
"i" + "c" + "e" + "cream"  # = "icecream"  
"100"+"23"                 # = "10023" (because "100" and "23" are strings, 
                           #            not numbers so we are concatenating, not adding)
```
It is possible to convert data that is not a string into a string using the `str()` function. 
This maybe be needed when concatenating a string with the result of a numberical computation.

```python
"xyz" + str(3*4)    # = xyz12  (it first computes 3*4, which is 12 as number, 
                    #           then converts it into a string for concatenation )
```

##### Numbers 

Python spports *integers* (e.g., 0,1,2,3,... but also -1, -2, -3) as well as
floating point numbers (e.g.,  3.1415, -0.123455689).

:warning: When performing compuation with integers, the results are rounded.

```python
3+4       # = 7  (adding two interers gives and integer)
3+4.0     # = 7.0 (if one of the numbers is a float, the result is a float
13 / 3    # = 4   (dividing one interger by another, does integer division
13 / 3.0  # = 4.3333333333   (if one number is a float, then it computes a decimal value)

```



