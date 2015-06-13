



# Python Basics

Python cheatsheet and simple python examples.

* [Comments](#comments)
* [Data Types](#data_types)
* [Input / Output](#io)
* [Variables](#variables)
* [if Statements](#if_statements)
* [for Loops](#for_loops)
* [Functions](#functions)

<a name="comments"/>

### Comments <a name="comments"/>

Everything in your python program that is not marked as a comment using `#` 
will be read by Python as python code.
In this cheatsheet you will find a lot of short 
code snippets and sometime we will use comments to explain them

```python
print 3+4             # prints 12
```

So here `print 3+4` is interpreted as python code and `# prints 12` 
is a comment that is meant as an explanation for the programmer.


 -------------------------------- 
 <a name="data_types"/>
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




 -------------------------------- 
 <a name="io"/>
### Input and Output

##### Input
We can use the `print` function to print output 

```python
    print "Hello World"   #prints the text:         Hello World
    print 3+4             #print the value of 3+4:  12 
    print 3+4, 3*4        #print the value of 3+4 followed by the value of 3*4:  7 12
```

##### Output
We can use the function `raw_input` to read input from the user.
```python 
    name = raw_input("What is your name? ")
```

:warning: **Important:** `raw_input()` reads the user input as a string. 
If you need it as a number, you have to convert it
```python 
    age = int(raw_input("What is your name? "))
    age = float(raw_input("What is the price of gasonline? "))
```


 -------------------------------- 
 <a name="variables"/>
### Variables 

We use variable to store data that we want to access at a later point. 
In python we can just use a new name that we have not used before and assign a value to it and it becomes a variable.

```python
age = 12
name = "Bob"
```

 -------------------------------- 
 <a name="if_statements"/>
###if Statements

if Statements can be used to chose between two possibilities

```python
if name == "Bob" :
    print "I like my friend", name         # gets printed when name has the value "Bob"
else:
    print "I don't know the person", name  # gets printed when name has a value 
                                           #       different from "Bob"
```

:warning: **NOTE**: Make sure all the lines of code that are in the `if` block or 
the `else` block are indented the same amount of spaces


```python
if name == "Bob" :
    print "I like my friend", name         
    print "I really like him" 
  print "We shoudl hang out again."          # !!! PROBLEM: intendation is wrong
else:
    print "I don't know the person", name  
print "Maybe I should meet this new person" # !!! PROBLEM: identation wrong
                                            
```
p

 -------------------------------- 
 <a name="for_loops"/>
### for Loops

t.b.d.

 -------------------------------- 
 <a name="functions"/>
###Functions

t.b.d.

 -------------------------------- 
 
