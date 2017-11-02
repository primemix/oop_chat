<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

$user = [
    1 => 'user1',
    2 => 'user2',
    3 => 'user3',
    4 => 'user4',
    5 => 'user5'
];
$id = null;

$chatService = new \Chat\Service();

$single = $chatService->newChat()->getChat($id, $user);

echo '<pre>';
print_r($single);

//result:
//Array
//(
//    [chatId] => H5N-rZYKaN9H5zBkYfQDN6ash4ADy-kR
//        [user] => Array
//        (
//            [1] => user1
//            [2] => user2
//            [3] => user3
//            [4] => user4
//            [5] => user5
//        )
//
//    [messages] => Array
//                (
//                    [user1] => message
//                )
//
//)