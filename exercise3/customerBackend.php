<html language="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  $uName = $_POST["email"];
  $passWord = $_POST["password"];
  $numA = $_POST["numA"];
  $numB = $_POST["numB"];
  $numC = $_POST["numC"];
  $Acost = $numA*2000;
  $Bcost = $numB*1000;
  $Ccost = $numC*500;
  $shipping = $_POST["shippingType"];
  if($shipping == "overnight") {
    $shipping = 50;
  }
  elseif($shipping == "3Day") {
    $shipping = 5;
  }
  else {
    $shipping = 0;
  }
  echo "Password is: ", $passWord;
  echo "<h4>Thank You for your Purchase, ", $uName , "!<h4>";
  ?>
  <table>
      <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>
      <tr>
        <td>A</td>
        <td><?php echo $numA; ?></td>
        <td><?php echo "$", $Acost; ?></td>
      </tr>
      <tr>
        <td>B</td>
        <td><?php echo $numB; ?></td>
        <td><?php echo "$", $Bcost; ?></td>
      </tr>
      <tr>
        <td>C</td>
        <td><?php echo $numC; ?></td>
        <td><?php echo "$", $Ccost; ?></td>
      </tr>
      <tr>
        <td>Shipping</td>
        <td><?php echo "$", $shipping; ?></td>
      </tr>
    </table>
    Total Cost: <?php echo "$", $Acost+$Bcost+$Ccost+$shipping; ?>
</body>

</html>
