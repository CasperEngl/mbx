<?php

function widont($str, $numWords = 1) {
    $words = explode(' ', $str);
    $lastWords = array_splice($words, -$numWords);

    return implode(' ', $words) . ' ' . implode('&nbsp;', $lastWords);
}
