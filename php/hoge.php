<?php
$list = ["apple", "lemon", "banana"];

foreach ( $list as $key=> $value ) {
    echo "({$key}){$value}" . PHP_EOL ;
    if($key === 1 ){
        break;
    }
}