<?php
function validateTheNameOfTheClass($name)
{
    $pattern = '/^[ACP][0-9]{4,}+[GM]$/';
    if (preg_match($pattern, $name)) {
        echo $name. " lop hop le" . "<br>";
    } else {
        echo $name . " lop khong  hop le" . "<br>";
    }
}

validateTheNameOfTheClass('C0318G');
validateTheNameOfTheClass('M0318G, P0323A');