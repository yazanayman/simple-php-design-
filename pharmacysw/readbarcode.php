<?php
include "dynamsoftbarcodereader.php";

$uploadfile = $_FILES["barcodefile"]["tmp_name"];

$br = new BarcodeReader();
$br->initLicense("<your license key here>");
$br->decodeFile($uploadfile);

$cnt = $br->getBarcodesCount();
echo "Barcode Count: $cnt <br />";
for ($i = 0; $i < $cnt; $i++) {
      $res = $br->getBarcodeResult($i);
      echo "$i. $res->BarcodeFormatString , $res->BarcodeText<br />";
}
?>