<?php

function estimateReadingTime(string $text): int
{
    $word = str_word_count($text) / 200;
    return ceil($word);
}