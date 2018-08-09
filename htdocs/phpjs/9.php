<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>9</title>
</head>
<body>

  <ol>

    <script>
    document.write("hello loop");
    for (var i = 0; i < 10 ; ++ i) {
      document.write("<li> hello js </li>" );
    }
    </script>
  </ol>

<ul>

    <?php
    $i =0 ;
    while ($i < 10) {
      echo "<li> hello php " . $i ."</li>";
        $i = ++$i ;

      // code...
    }
    ?>
  </ul>


</body>
</html>
