<?php

namespace Chat;

/**
 * Interface IdGeneratorInterface
 * @package Chat
 */
interface IdGeneratorInterface
{
    /**
     * @return string
     */
    public function generateId();
}
