<?php
function validateAccount($account){
    $pattern='/^[_a-z0-9]{6,}$/';
    if (preg_match($pattern,$account)){
        echo $account. " account hop le".'<br>';
    }else{
        echo $account. " account khong hop le".'<br>';
    }
}
validateAccount('123abc_');
validateAccount('_abc123');
validateAccount('______');
validateAccount('123456');
validateAccount('abcdefg');
validateAccount('.@');
validateAccount('12345');
validateAccount('1234');
validateAccount('abcde');
