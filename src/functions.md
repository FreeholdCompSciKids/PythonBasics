###Functions

Functions allow us to organize our program and group statements together that perform
a well defined task.

```python
def print_banner(text):           # defines a function print_banner()
                                  # It takes one argument text ...
    print "-------------------"
    print "|", m                  # ... and prints it in between lines of "-------"
    print "-------------------"

```

Once the function has been defined, it can be called as often as needed and with 
the arguments that are needed.

For example this code snippet 
```python
print_banner("Hello World")
print_banner("This is Great")
print_banner("Hello World")
```
prints the message
```
-------------------
| Hello World
-------------------
-------------------
| This is Great
-------------------
-------------------
| Hello World
-------------------
```

:warning: Make sure all the statement that you want to be part of the 
          function are indented the same amount.

