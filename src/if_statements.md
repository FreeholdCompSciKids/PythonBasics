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
