<?php

namespace Chat;

/**
 * Class Chat
 * @package Chat
 */
class Chat implements ChatInterface
{
    /**
     * @param null $id
     * @param null $user
     * @param null $message
     * @return array
     */
    public function getChat($id = null, $user = null, $message = null)
    {
        $chat = array();
        $messages = array('user1' => 'message');
        if (!$id) {
            $id = $this->generateId();
            $chat = [
                'chatId' => $id,
                    'user' => $user,
                    'messages' => $messages,
            ];
        }
        
        return $chat;
    }

    /**
     * @param int $length
     * @return string
     */
    public function generateId($length = 32)
    {
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789-=+!';
        $numChars = strlen($chars);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($chars, rand(1, $numChars) -1, 1);
        }

        return $string;
    }

    /**
     * @param $chat
     */
    public function save($chat)
    {
        $_SESSION['storage'] = $chat;
    }

    /**
     * @return array
     */
    public function load()
    {
        $array  = $_SESSION['storage'];
        return $array;
    }


    public function sendMessage(){}
    public function getMessages(){}
    public function addUser(){}
    public function shareLink(){}
    public function shareScreen(){}
    public function toArchive(){}
    public function disconnect(){}
}