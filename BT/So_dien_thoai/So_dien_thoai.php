<?php
function checkPhone($phone){
    $pattern="/^[0]+[0-9]{9}$/";
    if(preg_match_all($pattern,$phone)){
        echo "so hop le";
    }else{
        echo "so khong hop le";
    }
}
checkPhone("0362223456");
echo "<br>";
checkPhone("1234567898");
