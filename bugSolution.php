function foo(a, b) {
  //Use loose comparison (==) if you intend to compare only values regardless of the type
  if (a == b) {
    return true; 
  } else {
    return false; 
  }
}

//This function will return true even if the input values are 0 and '0' because it is doing a loose comparison. 
var result = foo(0, '0'); // returns true
console.log(result); //true

//Safer alternative with explicit type checking
function fooSafe(a, b) {
  if (typeof a === typeof b && a == b) {
    return true; 
  } else {
    return false; 
  }
}

var resultSafe = fooSafe(0, '0'); // returns false
console.log(resultSafe); // false