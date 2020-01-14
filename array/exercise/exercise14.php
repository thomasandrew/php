<?php

$len = ['abcd', 'abc', 'de', 'hjjj', 'g', 'wer'];

$ar = array_map('strlen', $len);

print 'minimum => ' . min($ar) . '<br>' . 'maximum => '. max($ar);
