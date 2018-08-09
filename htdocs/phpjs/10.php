<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>10</title>
</head>
<body>
  <h1>JavaScript</h1>
  <script>
  list = null;
  list = new Array ( "one", "two ","three");
  list[2,3] = "super";
  list[1,3] = "man";
//  document.write(list);
  document.write(list[1,2]  + list[2,2] + list[2,1] + list[2,3] + list[1,3]) ;
  document.write(list.length);
  </script>
  <h1>php</h1>
  <?php
$list = array ("one", "two","three");

echo $list[2] ."<br> ";
echo count($list );

  ?>

</body>
</html>
