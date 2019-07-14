<?php
$user = $_REQUEST["u"];
$id = $_REQUEST["i"];

if ($id == "a") {
  echo $user + ": " + $id;
} else {
  echo "Fehler!"
}
?>
