<?php

namespace NotificationChannels\Cmsms\Exceptions;

use Exception;

class InvalidMessage extends Exception
{
    /**
     * @param string $reference
     * @return static
     */
    public static function invalidReference(string $reference)
    {
        return new static("The reference on the CMSMS message may only contain 1 - 32 alphanumeric characters. Was given '{$reference}'");
    }

    /**
     * @param string $originator
     * @return static
     */
    public static function invalidOriginator(string $originator)
    {
        return new static("The originator on the CMSMS message may only contain 1 - 11 characters. Was given '{$originator}'");
    }

    /**
     * @param int $minimum
     * @param int $maximum
     * @return static
     */
    public static function invalidMultipart(int $minimum, int $maximum)
    {
        return new static("The number of message parts for sending a multipart message on the CMSMS message may only contain a integer range from 0 to 8. Was given a minimum of '{$minimum}' and maximum of '{$maximum}'");
    }
}
