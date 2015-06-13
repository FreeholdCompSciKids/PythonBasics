### Data Types
Python support different data types and is able to convert back an forth between them.

##### Strings <a name="data_types__strings"/>
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

##### Numbers <a name="data_types__numbers"/>


##### Booleans <a name="data_types__booleans"/>

