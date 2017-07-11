
<?php
$os = array("mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Znaleziono Irix";
}
if (in_array("mac", $os)) {
    echo "Znaleziono mac";
}