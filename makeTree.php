<?php

// по ссылке создаст древовидное меню
function makeTree(array &$array) {
    array_walk($array, function(&$val, $key) use (&$array) {
        if ($val['IS_PARENT']) {
            $childs = array_filter($array, function ($elt) use ($val) {
                return $elt['CHAIN'][0] === $val['TEXT'] && $elt['TEXT'] !== $val['TEXT'];
            });
            $val['CHILDS'] = $childs;
            for ($i = 1; $i <= count($childs); $i++) {
                unset($array[$key + $i]);
            }
        }
    });
}
