
<?php
  echo '<link rel = "stylesheet" href = "style.css"><h2>Recipt</h2><table align = "center">';

  
  $item1 = $_POST["item1"];
  $item2 = $_POST["item2"];
  $item3 = $_POST["item1"];
  $user = $_POST["user"];
  $pass = $_POST["password"];
  $ship = $_POST["shipping"];

  $shippingPrice = 0;

  if(ship == "free") {
    $shippingPrice = 0;
  }
  else if(ship == "5dollar") {
    $shippingPrice = 5;
  }
  else {
    $shippingPrice = 50;
  }

  $totalPrice = $item1 + 2*$item2 + 3*$item3 + $shippingPrice;
  
  $message = 'User: '.$user.'  Password: '.$pass;
  echo "<script>alert('$message');</script>";
  echo "<tr><th></th><th>Quantity</th><th>Price</th><th>Subtotal</th>";
  echo "</tr><tr><td>Ugly Mug</td>";
  echo "<td>".$item1."</td>";
  echo "<td>$1.00</td>";
  echo "<td>$".$item1.".00</td>";
  echo "</tr><tr><td>Banana</td><td>";
  echo $item2;
  echo "</td><td>$2.00</td><td>$";
  echo (2*$item2);
  echo ".00</td></tr><tr><td>Ream of Paper</td><td>";
  echo $item3;
  echo "</td><td>$3.00</td><td>$";
  echo $item3*3;
  echo ".00</td></tr><tr><th>Total:</th><th></th><th></th><th>$";
  echo $totalPrice;
  echo ".00</th></tr></table>";
?>
