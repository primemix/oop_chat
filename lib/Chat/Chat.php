<?php

namespace Chat;

/**
 * Class Chat
 * @package Chat
 */
class Chat implements ChatInterface
{
    protected $id;
    protected $shareLink;
    protected $shareScreen;
    protected $message;
    protected $room;

    /**
     * Chat constructor.
     * @param null $id
     * @param null $user
     */
    public function __construct($id = null, $user = null)
    {
        $this->id = $this->generateId();
        $this->shareLink = $this->shareLink();
        $this->shareScreen = $this->shareScreen();
        $this->message = $this->getMessages();
        $chat = array();
        if (!$id) {
            $chat = [
                'user' => $user,
                'disconnect' => $this->disconnect(),
                'toArchive' => $this->toArchive(),
                'addUser' => $this->addUser(),
            ];
        }
        $this->room = $chat;
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


    /**
     * @return string
     */
    public function sendMessage()
    {
        return 'add message';
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        $messages = array(
            'user1' => 'messageFirst',
            'user2' => 'messageFoo',
            'user3' => 'messageSecond',
        );

        return $messages;
    }

    /**
     * @return string
     */
    public function addUser()
    {
        return 'add user';
    }

    /**
     * @return string
     */
    public function shareLink()
    {
        return 'share link';
    }

    /**
     * @return string
     */
    public function shareScreen()
    {
        return 'share Screen';
    }

    /**
     * @return string
     */
    public function toArchive()
    {
        return 'to Archive';
    }

    public function disconnect()
    {
        return 'disconnect';
    }
}