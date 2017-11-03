<?php

namespace Chat;

/**
 * Class Chat
 * @package Chat
 */
class Chat implements ChatInterface
{
    /**
     * @return array
     */
    public function chatStream()
    {
        $messages = array(
            'user1' => 'messageFirst',
            'user2' => 'messageFoo',
            'user3' => 'messageSecond',
        );

        return $messages;
    }
}


