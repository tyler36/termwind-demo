<?php

require __DIR__ . '/vendor/autoload.php';

use Zttp\Zttp;

$response = Zttp::get('https://reddit.com/r/laravel.json')->json();

if (array_key_exists('error', $response)) {
    echo $response['message'] . PHP_EOL;
    return;
}

foreach ($response['data']['children'] as $thread) {
    $title = $thread['data']['title'];
    $author = $thread['data']['author'];
    $upvotes = $thread['data']['ups'];

    echo $title . PHP_EOL;
    echo "Author: {$author} | Upvotes: {$upvotes}"  . PHP_EOL;
    echo "" . PHP_EOL;
}
