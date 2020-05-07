<?php


namespace Sparav\Notification\Model\ActiveCampaign;


class Contact
{

    public ContactTag $contactTag;

    public function __construct(ContactTag $contactTag)
    {
        $this->contactTag = $contactTag;
    }

}


