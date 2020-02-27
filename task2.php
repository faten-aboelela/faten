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
<?php
$t=date("H");
if ($t="6:12"){
  echo "have a good morning!";
}elseif($t="12:5"){
  echo "have agood aftar noon !";

}elseif($t="5:12"){
  echo "have agood evining !";
}else{
    echo "kfaia kda";
}

?>
</body>
</html>
