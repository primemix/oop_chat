<?php

require_once __DIR__ . '/../vendor/autoload.php';

$chatRoom = new \Chat\Chat();
$chatService = new \Chat\Service($chatRoom);

$single = $chatService->newChat();

echo '<pre>';
print_r($single);