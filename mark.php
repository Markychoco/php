<! DOCTYPE html>
<html>
<head>

<title> PHP Variables</title>
</head>
<style>
h1{text-align: center;}
h2{text-align: center;}
</style>
<body>
<?php
$henry="Roaring teachers' union reduced to a whimper as funds dry up";
$news="The future of Kenya’s oldest teachers’ union, the Kenya National Union of Teachers (Knut), is uncertain after its membership shrank to just a  quarter over the past one year.";
//Display variable values
?>
<h1> <?php echo $henry; ?></h1>
<?php echo "<br>"; ?>
<h2><?php echo $news; ?></h2>
<?php
$kenya="Roaring teachers' union reduced to a whimper as funds dry up";
$nairobi="The future of Kenya’s oldest teachers’ union, the Kenya National Union of Teachers (Knut), is uncertain after its membership shrank to just a  quarter over the past one year.";
//Display variable values
/*
<?php
$kenya="Roaring teachers' union reduced to a whimper as funds dry up";
$nairobi="The future of Kenya’s oldest teachers’ union, the Kenya National Union of Teachers (Knut), is uncertain after its membership shrank to just a  quarter over the past one year.";
*/
?>
<h1> <?php print $kenya; ?></h1>
<?php print "<br>"; ?>
<h2><?php print $henry; ?></h2>
<?php
//Displaying HTML code
echo "<h1> normal header.</h1>";
echo "<h1 style='color:red;'>red</h1>"
?>
<?php
//Displaying print code
print "<h1> normal header.</h1>";
print "<h1 style='color:red;'>red</h1>"
?>

</body>
</html>