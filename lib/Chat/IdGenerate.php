<?php

namespace Chat;

/**
 * Class IdGenerate
 * @package Chat
 */
class IdGenerate implements IdGeneratorInterface
{
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
}
