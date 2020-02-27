<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task</title>
</head>
<body>
<?php
$grade=70;
if($grade <50){
  echo "student failed";
}elseif ($grade<65){
  echo "student is accepted";
}elseif ($grade<75){
  echo "student is good";
}
elseif ($grade<85){
  echo "student is vary good";
}else{
  echo "student is wow";
}
?>

</body>
</html>
