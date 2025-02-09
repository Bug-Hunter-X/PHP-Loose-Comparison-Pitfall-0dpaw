function foo(a, b) {
  if (a === b) {
    return true; 
  } else {
    return false; 
  }
}

//This function will return false even if the input values are 0 and '0' because it is doing a strict comparison. 
var result = foo(0, '0'); // returns false
console.log(result); //false