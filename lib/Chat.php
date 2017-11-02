<?php

namespace Chat;

/**
 * Class Chat
 * @package Chat
 */
class Chat implements ChatInterface
{
    /**
     * @return string
     */
    public function getChat()
    {
        $id = $this->generateId();

        return 'new chat ' . $id;
    }

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

    public function sendMessage(){}
    public function getMessages(){}
    public function addUser(){}
    public function shareLink(){}
    public function shareScreen(){}
    public function toArchive(){}
    public function disconnect(){}
}