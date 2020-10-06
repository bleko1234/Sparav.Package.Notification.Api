<?php


namespace Sparav\Notification;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

/**
 * Push Notification Client V1
 * Class PushNotificationClientV1
 * @package Sparav\Notification
 */
class PushNotificationClientV1
{

    /**
     * @param array $pushnotification (array of objects of pushnotification).
     * @return Response
     */
    public function send(array $pushnotification) {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_NOTIFICATION_API_AUTH_USERNAME'), env('SPARAV_NOTIFICATION_API_AUTH_PASSWORD'))
            ->post('https://sparavnotificationapiprod.azurewebsites.net/api/v1/pushnotification/send', $pushnotification);
        return $response;
    }

    /**
     * Gets unreaded push-notifications for the device_token and device_type.
     * @param string $device_token
     * @param string $device_type
     * @return Response
     */
    public function unread(string $device_token, string $device_type) {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_NOTIFICATION_API_AUTH_USERNAME'), env('SPARAV_NOTIFICATION_API_AUTH_PASSWORD'))
            ->get("https://sparavnotificationapiprod.azurewebsites.net/api/v1/pushnotification/unread/{$device_token}/{$device_type}");
        return $response;
    }

    /**
     * Updates the given push-notification messages IDS as raded
     * @param array $ids
     * @return Response
     */
    public function updatetoreaded(array $ids) {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_NOTIFICATION_API_AUTH_USERNAME'), env('SPARAV_NOTIFICATION_API_AUTH_PASSWORD'))
            ->put("https://sparavnotificationapiprod.azurewebsites.net/api/v1/pushnotification/updateRead", ['ids' => $ids]);
        return $response;
    }

}
