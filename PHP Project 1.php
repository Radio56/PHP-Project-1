<!DOCTYPE html>
<html>
<body>

<?php
function Project1() {

  $TVs = array("LG", "Samsung", "Sharp", "Vizio");
  echo "I like " . $TVs[0] . ", " . $TVs[1] . ", " . $TVs[2] . $TVs[3] . "".";

  $TVs[0] = "LG";
  $TVs[1] = "Samsung";
  $TVs[2] = "Sharp";
  $TVs[3] = "Vizio"

  foreach ($TVs as $value) {
  echo "$value <br>";
    ?>
}

Project1();
?>

</body>
</html>
