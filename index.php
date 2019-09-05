<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Char need find:<input type="text" name="char"><br>
    <input type="submit" value="Find">
</form>
<?php
$str='Hello.Good morning';
$char=$_POST['char'];
echo $str."<br>";
function findChar($string,$char){
    $count=0;
    for($i=0;$i<strlen($string);$i++){
        if($char==$string[$i]){
            $count++;
        }
    }
    return $count;
}
echo "So lan ky tu ".$char.'xuat hien '.findChar($str,$char);
?>
</body>
</html>
