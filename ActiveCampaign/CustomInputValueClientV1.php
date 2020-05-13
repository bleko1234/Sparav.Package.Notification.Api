<?php


namespace Sparav\Notification\ActiveCampaign;


use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Sparav\Notification\Model\ActiveCampaign\CustomField\FieldValueWrapper;

class CustomInputValueClientV1
{

    /**
     * @param FieldValueWrapper $fieldValueWrapper
     * @return Response
     */
    public function update(FieldValueWrapper $fieldValueWrapper)
    {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_NOTIFICATION_API_AUTH_USERNAME'), env('SPARAV_NOTIFICATION_API_AUTH_PASSWORD'))
            ->post('https://sparavnotificationapiprod.azurewebsites.net/api/v1/activecampaign/customfieldvalue/update',(array) $fieldValueWrapper);
        return $response;
    }

}
