<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <table>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    for($i = 1; $i < 101;$i++) {
      echo "<tr>";
      for($j = 1;$j < 101; $j++) {
        echo "<th>";
        $val = $i*$j;
        echo "$val";
        echo "</th>";
      }
      echo "<tr>";
    }
    ?>
  </table>
</body>
</html>
