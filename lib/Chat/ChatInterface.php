<?php

namespace Chat;

/**
 * Interface ChatInterface
 * @package Chat
 */
interface ChatInterface
{
    public function getChat($id, $user, $message);
    public function sendMessage();
    public function getMessages();
    public function disconnect();
    public function addUser();
    public function shareLink();
    public function shareScreen();
    public function toArchive();
}