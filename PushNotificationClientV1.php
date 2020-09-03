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

}
