<?php


namespace Sparav\Notification\ActiveCampaign;


use Sparav\Notification\Model\ActiveCampaign\ContactRequest;

class ContactClientV1
{

    /**
     * Creates an contact in active campaign
     * @param string $contact
     * @param string $tag
     * @return mixed
     */
    public function add(ContactRequest $contactRequest)
    {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_NOTIFICATION_API_AUTH_USERNAME'), env('SPARAV_NOTIFICATION_API_AUTH_PASSWORD'))
            ->post("https://sparavnotificationapiprod.azurewebsites.net/api/v1/activecampaign/contact", (array) $contactRequest);
        return $response;
    }


}