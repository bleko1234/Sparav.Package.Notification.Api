<?php

namespace Sparav\Notification;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class EmailClientV1
{

    /**
     * @param $emailRequests
     * @param array $basicAuth
     * @return Response
     */
    public function send($emailRequests)
    {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_NOTIFICATION_API_AUTH_USERNAME'), env('SPARAV_NOTIFICATION_API_AUTH_PASSWORD'))
            ->post('https://sparavnotificationapiprod.azurewebsites.net/api/v1/email/send', $emailRequests);
        return $response;
    }
}
