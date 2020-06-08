<?php

namespace Sparav\Notification;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class PushNotificationTokenClientV1
{

    /**
     * @param string $token
     * @param int $user_id
     * @param string $device_type
     * @return Response
     */
    public function addToken(string $token, int $user_id, string $device_type)
    {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_NOTIFICATION_API_AUTH_USERNAME'), env('SPARAV_NOTIFICATION_API_AUTH_PASSWORD'))
            ->post('https://sparavnotificationapiprod.azurewebsites.net/api/v1/pushnotification/token/add', ['token' => $token, 'user_id' => $user_id, 'device_type' => $device_type]);
        return $response;
    }

}
