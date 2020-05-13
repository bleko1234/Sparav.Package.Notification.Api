<?php


namespace Sparav\Notification\Model\ActiveCampaign\CustomField;


class FieldValueWrapper
{

    public FieldValue $fieldValue;

    public function __construct(FieldValue $fieldValue)
    {
        $this->fieldValue = $fieldValue;
    }

}
