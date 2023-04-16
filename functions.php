<?php

function emitEven(array $nums):Array{
    $eventList = [];
    foreach($nums as $num) {
        if($num % 2 == 0) {
            $eventList[] = $num;
        }
    }
    return $eventList;
}