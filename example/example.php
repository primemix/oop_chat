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

$single = $chatService->newChat($id, $user);

echo '<pre>';
print_r($single);
session_destroy();

//Chat\Chat Object
//(
//    [id:protected] => 4DRf4BNTH!=EAQtEDfD!GaeGhRb3hN-y
//    [shareLink:protected] => share link
//    [shareScreen:protected] => share Screen
//    [message:protected] => Array
//        (
//            [user1] => messageFirst
//            [user2] => messageFoo
//            [user3] => messageSecond
//        )
//
//    [room:protected] => Array
//            (
//                [user] => Array
//                    (
//                        [1] => user1
//                        [2] => user2
//                        [3] => user3
//                        [4] => user4
//                        [5] => user5
//                    )
//
//            [disconnect] => disconnect
//            [toArchive] => to Archive
//            [addUser] => add user
//        )
//
//)