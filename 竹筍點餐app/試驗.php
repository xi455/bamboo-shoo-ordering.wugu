<?php

$a='1';
$b='5';
$new=$a+$b;
echo $new;

?>
<?php

                            
$username = isset($_POST['1']) ? $_POST['1'] : "";
$email = isset($_POST['2']) ? $_POST['2'] : "";



echo "竹竹: ".$username." "."盤"." </br>";
echo "子子: ".$email." "."盤"." </br>";

$c=$username*50;
$b=$email*50;
$a=$c+$b;
echo "總共:". $a."元";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="0212.css">
</head>
<body>
    <div id="form">a</div>
</body>
</html>


$db = new PDO('mysql:host=localhost;dbname=new', 'root', '');
                    $db->exec('set names utf8');
                    $sql = "SELECT * FROM user";

$c = isset($_POST['a']) ? $_POST['a'] : "";
            $d = isset($_POST['b']) ? $_POST['b'] : "";
            echo "$c </br> ";
            echo "$d ";