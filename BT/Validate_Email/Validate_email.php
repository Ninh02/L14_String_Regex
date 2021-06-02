<?php
function checkEmail($email){
    $pattern="/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
    if(preg_match_all($pattern,$email)){
        echo "Email hop le";
    }else{
        echo "Email khong hop le";
    }
}
checkEmail("huyen@gmail.com");
echo "<br>";
checkEmail("ab@gmail.");
