<?php


namespace Sparav\Notification\Model\PushNotification;

/**
 * @OA\Schema(
 *   schema="Message",
 *   type="object"
 * )
 */
class Message
{

    /**
     * @OA\Property(type="string")
     */
    public string $title;

    /**
     * @OA\Property(type="string")
     */
    public string $body;

}
