<?php

require __DIR__ . '/vendor/autoload.php';

use Zttp\Zttp;
use function Termwind\{render};

$response = Zttp::get('https://reddit.com/r/laravel.json')->json();

if (array_key_exists('error', $response)) {
    echo $response['message'] . PHP_EOL;
    return;
}

foreach ($response['data']['children'] as $thread) {
    $title = $thread['data']['title'];
    $url = $thread['data']['url'];
    $author = $thread['data']['author'];
    $upvotes = $thread['data']['ups'];

    // echo $title . PHP_EOL;
    // echo "Author: {$author} | Upvotes: {$upvotes}"  . PHP_EOL;
    // echo "" . PHP_EOL;

    $renderHtml = "<div class='mb-2'>
        <a href='{$url}' class='font-bold underline'>{$title}</a><br>
        <span class='bg-blue-700 text-blue-200 p-2'>{$author}</span>
        <span class='bg-green-700 text-green-200 p-2 ml-2'>{$upvotes}</span>
    </div>";

    render($renderHtml);
}
