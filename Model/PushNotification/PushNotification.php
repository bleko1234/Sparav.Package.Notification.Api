<?php


namespace Sparav\Notification\Model\PushNotification;

/**
 * @OA\Schema(
 *   schema="PushNotification",
 *   type="object"
 * )
 */
class PushNotification
{

    /**
     * @OA\Property(schema="Message")
     */
    public Device $device;

    /**
     * @OA\Property(schema="Message")
     */
    public Message $message;

    public function __construct(string $deviceToken, Message $message)
    {
        $this->deviceToken = $deviceToken;
        $this->message = $message;
    }

}
