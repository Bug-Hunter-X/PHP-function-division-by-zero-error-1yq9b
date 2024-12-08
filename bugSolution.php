function foo(a, b) {
  if ($a === 0 || $b === 0) {
    return NAN; // Handle zero values
  } 
  return $a / $b; 
}