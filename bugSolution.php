function foo(a, b) {
  if (is_array(a) || is_object(a)) {
    return deepCompare($a, $b);
  } else {
    return a === b;
  }
}

function deepCompare($a, $b) {
  if (!is_array($a) || !is_array($b)) return false;
  if (count($a) != count($b)) return false;

  foreach ($a as $key => $value) {
    if (!array_key_exists($key, $b) || !foo($value, $b[$key])) {
      return false;
    }
  }

  return true;
}

//Example
$obj1 = new stdClass();
$obj1->name = "John";

$obj2 = new stdClass();
$obj2->name = "John";

if(foo($obj1,$obj2)){echo "true";}else{echo "false";}
//This will return true now.