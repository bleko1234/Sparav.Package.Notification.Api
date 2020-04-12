<?php


namespace Sparav\Notification\Model;


class Email
{

    public To $to;
    public From $from;

    public ?string $message;
    public ?string $subject;

    public ?Template $template;

}
