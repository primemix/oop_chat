<?php

namespace Chat;

/**
 * Class Service
 * @package Chat
 */
class Service
{
    protected $id;
    protected $shareLink;
    protected $shareScreen;
    protected $message;
    protected $room;
    protected $chatStream;

    /**
     * Service constructor.
     * @param IdGeneratorInterface $uniqueId
     * @param ShareInterface $link
     * @param ChatInterface $chatStream
     * @param null $user
     */
    public function __construct(IdGeneratorInterface $uniqueId, ShareInterface $link, ChatInterface $chatStream, $user = null)
    {
        $this->id = $uniqueId->generateId();
        $this->shareLink = $link->getShare();
        $this->shareScreen = $this->shareScreen();
        $this->chatStream = $chatStream;
        $this->message = $this->getMessages();
        $chat = [
            'user' => $user,
            'disconnect' => $this->disconnect(),
            'toArchive' => $this->toArchive(),
            'addUser' => $this->addUser(),
        ];

        $this->room = $chat;
        return $chat;
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
        $messages = $this->chatStream->chatStream();

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
