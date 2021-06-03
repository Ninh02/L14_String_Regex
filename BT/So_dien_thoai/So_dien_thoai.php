<?php
function checkPhone($phone){
    $pattern="/^0\d{9}$/";
    if(preg_match_all($pattern,$phone)){
        echo "so dien thoai hop le";
    }else{
        echo "so dien thoai khong hop le";
    }
}
checkPhone("0362223456");
echo "<br>";
checkPhone("1234567898");
