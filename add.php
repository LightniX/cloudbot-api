<p>HALLO!</p><?php
$user = $_REQUEST["u"];
$id = $_REQUEST["i"];

if ($id !== "") {
  if (strlen($id) == 9) {
    $id = str_replace(" ", "-", $id);
    echo "Das Level [" + $id + "] von " + $user + "wurde hinzugefügt"
  } else {
    echo "Syntax: !add XXX-XXX-XXX";
  }
} else {
  echo "Syntax: !add XXX-XXX-XXX";
}
?>
