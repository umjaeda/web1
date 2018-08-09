<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>10</title>
</head>
<body>
  <h1>JavaScript</h1>
  <script>

  list = new Array ( "one", "two ","three");
  i=0;
  while (i < list.length){
document.write("hello ");
    document.write(list[i]+"<br/> ");
    i= 1+ i;
  }
  document.write("<br/>"+ list[1,2]  + list[2,2] + list[2,1] + list[2,3] + list[1,3]) ;
  document.write(list.length);

  </script>
  <h1>php</h1>
  <ul>

  <?php
$list = array ("one", "two","three" ,"four");
$i =0;
while ($i < count($list)) {
echo count($list);
  echo "<li>".$list[$i] . "</li>";
$i = $i+1;
}

echo $list[2] ."haha<br> ";
echo count($list );

  ?>

</ul>
</body>
</html>
