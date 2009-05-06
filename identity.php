<?php
function random_gen($length) {
    $characters = '0123456789abcdef';
    for($i=0;$i<$length;$i++) {
        $str .= substr($characters, (rand() % (strlen($characters))), 1);
    }
    return $str;
}

$isReversible = false;
$i = 0;
while(!$isReversible) {
    $str = random_gen(32);
    $i++;
    if($i == 10000) {
        echo $str;
        $i = 0;
    }
    $output = hash('md5', $str);
    if($output == $str) {
        $isReversible = true;
        echo 'Hurrah '.$str.' is a reversible md5 hash. Profit!';
    }
}
?>