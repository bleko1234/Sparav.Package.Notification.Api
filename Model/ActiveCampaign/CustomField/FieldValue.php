<?php


namespace Sparav\Notification\Model\ActiveCampaign\CustomField;


class FieldValue
{

    public int $contact; //int
    public int $field; //int
    public string $value; //String

    public function __construct(int $contact, int $field, string $value)
    {
        $this->contact = $contact;
        $this->field = $field;
        $this->value = $value;
    }

}
