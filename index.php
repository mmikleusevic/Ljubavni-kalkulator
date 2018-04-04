 <?php 
Your name: 
<input type="text" name="name1" />
<input type="text" name="name2" />
    
$length1 = strlen($_POST['name1']);
$length2 = strlen($_POST['name2']);

// Add the two together
$calculate = $length1 + $length2;

// If 1 is longer than 2, take off 5, otherwise add 3
if($length1 > $length2){
  $calculate = $calculate - 5;
}
else {
  $calculate = $calculate + 3;
}
// Multiply by 42 (the meaning of life!)
$calculate = $calculate * 42;
// Divide by 100+ length of 2
$calculate = $calculate / (100 + $length2);

if($calculate > 10){
  $calculate = 10;
} else {
  $calculate = round($calculate, 0);
}

print $_POST['name1']." and ".$_POST['name2'].
" score ".$calculate." out of 10<br>";

?>