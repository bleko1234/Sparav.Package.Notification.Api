<?php


namespace Sparav\Notification\Model;


class To
{

    public string $email;
    public string $name;

    public function __construct(string $email, string $name)
    {
        $this->email = $email;
        $this->name = $name;
    }

}
