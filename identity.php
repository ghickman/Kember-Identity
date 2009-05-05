<?php
function random_gen($length) {
    $characters = '0123456789abcdef';
    for($i=0;$i<$length;$i++) {
        $str .= substr($characters, (rand() % (strlen($characters))), 1);
    }
    return $str;
}

$isReversible = false;
while(!$isReversible) {
    $str = random_gen(32);
    //echo $str;
    $output = md5($str);
    if($output == $str) echo 'Hurrah '.$str.' is a reversible md5 hash. Profit!';
}
?>