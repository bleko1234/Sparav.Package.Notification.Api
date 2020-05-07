<?php


namespace Sparav\Notification\ActiveCampaign;


use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class ContactTagClientV1
{

    public function addTag(string $contact, string $tag)
    {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_NOTIFICATION_API_AUTH_USERNAME'), env('SPARAV_NOTIFICATION_API_AUTH_PASSWORD'))
            ->post("https://sparavnotificationapiprod.azurewebsites.net/api/v1/activecampaign/contact/contacttag/?contact={$contact}&tag={$tag}");
        return $response;
    }

}
