<?php


namespace Sparav\Notification\Model\ActiveCampaign;


class ContactTag
{

    public string $contact;
    public string $tag;

    public function __construct(string $contact, string $tag)
    {
        $this->contact = $contact;
        $this->tag = $tag;
    }

}
