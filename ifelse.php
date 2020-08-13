<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP if-else Statement</title>
</head>
<style>
h1{
text-align:center;
color:#181817;
}
body{background-color:orange}
</style>
<body>

<h1><?php
$d = date("D");
if($d == "Mon"){
    echo "Have a nice Monday!";
} elseif($d == "Wed"){
 echo "Have a nice Tuesday!";
} else{
    echo "Have a nice day!";
}
?></h1>

</body>
</html>