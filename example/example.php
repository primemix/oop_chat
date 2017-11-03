<?php
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

$id = new \Chat\IdGenerate();
$shareLink = new \Chat\ShareLink();
$chatStream = new \Chat\Chat();

$chatService = new \Chat\Service($id, $shareLink, $chatStream, $user);

echo '<pre>';
print_r($chatService);
/**
print result:

Chat\Service Object
(
    [id:protected] => QGf8AZn=-SBr8DB!+YHn+-7rAsANDdZD
    [shareLink:protected] => share link
    [shareScreen:protected] => share Screen
    [message:protected] => Array
        (
                [user1] => messageFirst
                [user2] => messageFoo
                [user3] => messageSecond
        )

    [room:protected] => Array
        (
            [user] => Array
                (
                    [1] => user1
                    [2] => user2
                    [3] => user3
                    [4] => user4
                    [5] => user5
                )

            [disconnect] => disconnect
            [toArchive] => to Archive
            [addUser] => add user
        )

        [chatStream:protected] => Chat\Chat Object
                (
                )
)
**/

