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
    public function send($emailRequests, $basicAuth = [])
    {
        $response = Http::timeout(15)
            ->withBasicAuth($basicAuth['username'], $basicAuth['password'])
            ->post('https://sparavnotificationapiprod.azurewebsites.net/api/v1/email/send', $emailRequests);
        return $response;
    }
}
