<?php


namespace Sparav\Notification\Model\PushNotification;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *   schema="PushNotificationToken",
 *   type="object"
 * )
 */
class PushNotificationToken extends Model
{

    /**
     * @OA\Property(type="string")
     */
    public String $token;

    /**
     * @OA\Property(type="integer")
     */
    public int $customer_id;

    /**
     * @OA\Property(schema="Message")
     */
    public int $device;

}
