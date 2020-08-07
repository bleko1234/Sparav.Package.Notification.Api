<?php


namespace Sparav\Notification\Model\ActiveCampaign;

/**
 * @OA\Schema(
 *   schema="ContactRequest",
 *   type="object"
 * )
 */
class ContactRequest
{


    /**
     * @OA\Property(type="string")
     */
    public string $firstName;

    /**
     * @OA\Property(type="string")
     */
    public string $lastName;

    /**
     * @OA\Property(type="string")
     */
    public string $email;

    /**
     * @OA\Property(type="string")
     */
    public string $phone;

    /**
     * ContactRequest constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $phone
     */
    public function __construct(string $firstName, string $lastName, string $email, string $phone)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
    }

}