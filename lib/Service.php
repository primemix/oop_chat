<?php

namespace Chat;

/**
 * Class Service
 * @package Chat
 */
class Service
{
    /** @var  $chatProvider */
    protected $chatProvider;

    /**
     * @param ChatInterface $chatProvider
     */
    public function __constructor(ChatInterface $chatProvider)
    {
            $this->chatProvider = $chatProvider;
    }

    /**
     * @return string
     */
    public function newChat()
    {
        return $this->chatProvider->getChat();
    }
}