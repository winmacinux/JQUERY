<?php
/*
$input = preg_quote('bl', '~'); // don't forget to quote input string!
$data = array('orange', 'blue', 'green', 'red', 'pink', 'brown', 'black');

$result = preg_grep('~' . $input . '~', $data);

echo $result;
*/
?>

<!DOCTYPE html>
<html>
<body>

<?php
$suggest= "Hello";
echo strlen($suggest)."<br>";
echo substr_compare("world","or",1,2)."<br>";
echo substr_compare("world","ld",-2,2)."<br>";
echo substr_compare("world","orl",1,2)."<br>";
echo substr_compare("world","OR",1,2,TRUE)."<br>";
echo substr_compare("world","or",1,3)."<br>";
echo substr_compare("world","w",0,1)."<br>";
?>

</body>
</html>