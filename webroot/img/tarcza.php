<?php
  header("Content-type: image/png");

  $data = "";

  if(isset($_GET['data']))
  {
     $data = htmlspecialchars($_GET['data']);
  }

  $dane = explode(";", $data);
  $v = count($dane);

  for($i = 0; $i < $v; $i++)
  {
    $table[$i] = explode(",", $dane[$i]);
  }

  $url = "tarcza.png";

  $image = imagecreatefrompng($url);

  $color = ImageColorAllocate($image, 255, 0, 0);

  $size = 16;

  for($i=0;$i<$v;$i++)
  {
    if($table[$i][0] != null && $table[$i][1] != null)
    imagefilledellipse($image,$table[$i][0],$table[$i][1],$size,$size,$color);
  }

  imagepng($image);


?>
