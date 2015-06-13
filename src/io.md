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

