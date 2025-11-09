course.php
<?php
$name1 = htmlspecialchars($_POST['name1'], ENT_QUOTES);
$radio = htmlspecialchars($_POST['radio'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $name1 . "<br>";
print "ご希望の商品は、" . $radio . "<br>";
print "注文数は、" . $number;