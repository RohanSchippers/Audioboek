<?php
require "model/hoofdstukkenModel.php";

$index = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
if (isset($index)) {
    $hoofdstuk = getHoofdstuk($index);
} else {
    $hoofdstuk = getHoofdstuk(0);
}
//var_dump($hoofdstuk);

include "view/hoofdstukView.php";
