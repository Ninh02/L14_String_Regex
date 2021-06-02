<?php
function checkNameClass($name){
    $pattern="/^[ACP]+[0-9]{4}+[GHIKLM]$/";
    if(preg_match_all($pattern,$name)){
        echo "Ten lop hop le";
    }else{
        echo "Ten lop khong hop le";
    }
}
checkNameClass("C0318G");
echo "<br>";
checkNameClass("M0318G");
echo "<br>";
checkNameClass("P0323A");
