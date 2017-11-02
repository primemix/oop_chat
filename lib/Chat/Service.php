<?php

namespace Chat;

/**
 * Class Service
 * @package Chat
 */
class Service
{
    /**
     * @return string
     */
    public function newChat()
    {
        return new Chat();
    }
}