<?php
function numberPhoneValidate($numbers)
{
    $pattern = '/^[0-9]{2}+(\-[0-9]{10})$/';
    if (preg_match($pattern, $numbers)) {
        echo ($numbers . " So dien thoai hop le") . '<br>';
    } else {
        echo ($numbers . " So dien thoai khong hop le ") . '<br>';
    }
}
numberPhoneValidate("84-2745854999");
numberPhoneValidate("aa-2745854999");
