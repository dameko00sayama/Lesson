<?php
function vending_machine($price,$juice_name){
    if ($price >= 120 ){
        return $juice_name."のお求めありがとうございました<br>";
    }else{
        return $juice_name."の購入金が足りません<br>";
    }
}
?>
