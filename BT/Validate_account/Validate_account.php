<?php
function checkAccount($account){
    $pattern="/^[_a-z0-9]{6,}$/";
    if(preg_match_all($pattern,$account)) {
        echo "Tai khoan hop le";
    }else{
        echo "Tai khoan khong hop le";
    }
}
checkAccount("123abc_");
echo "<br>";
checkAccount("12345");