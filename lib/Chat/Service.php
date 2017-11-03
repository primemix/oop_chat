<?php

namespace Chat;

/**
 * Class Service
 * @package Chat
 */
class Service
{
    /**
     * @param $id
     * @param $user
     * @return Chat
     */
    public function newChat($id, $user)
    {
        return new Chat($id, $user);
    }
}