<?php
function checkPhone($phone){
    $pattern="/^[0-9]+[-]+[0]+[0-9]{9}$/";
    if(preg_match_all($pattern,$phone)){
        echo "so dien thoai hop le";
    }else{
        echo "so dien thoai khong hop le";
    }
}
checkPhone("84-0362234457");
echo "<br>";
checkPhone("8a-0362234457");
echo "<br>";
checkPhone("84-1234567898");
