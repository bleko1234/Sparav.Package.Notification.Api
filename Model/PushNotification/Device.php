<?php

namespace Sparav\Notification\Model\PushNotification;

/**
 * @OA\Schema(
 *   schema="Device",
 *   type="object"
 * )
 */
class Device
{

    /**
     * @OA\Property(type="integer")
     */
    public int $device;

    /**
     * @OA\Property(type="string")
     */
    public string $token;

}
