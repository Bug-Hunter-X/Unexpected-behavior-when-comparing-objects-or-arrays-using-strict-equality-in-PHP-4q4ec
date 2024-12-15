function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false; 
  }
}

//The above function works fine with primitive data types such as numbers and strings. However, it will not work correctly with objects or arrays because it uses strict equality (===). When comparing objects or arrays with strict equality, it checks whether the two variables are referring to the same object in memory, not whether they have the same values.

//Example
$obj1 = new stdClass();
$obj1->name = "John";

$obj2 = new stdClass();
$obj2->name = "John";

//This will return false even though the objects have the same value.
if(foo($obj1,$obj2)){echo "true";}else{echo "false";}

//To compare objects or arrays, you should use a function that compares the values of their properties, for instance, a recursive function.