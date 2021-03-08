<?php

namespace Faker\Ghanaian;

use Faker\Extension\Helper;
use Faker\Extension\PhoneNumberExtension;

class PhoneNumber implements PhoneNumberExtension
{
    /**
     * @var array Ghanaian phone number formats
     */
    private $nationalFormats = [
        '020#######',
        '023#######',
        '024#######',
        '026#######',
        '027#######',
        '028#######',
        '050#######',
        '053#######',
        '054#######',
        '055#######',
        '056#######',
        '057#######',
        '058#######',
    ];

    private $e164formats = [
        '+23320#######',
        '+23323#######',
        '+23324#######',
        '+23326#######',
        '+23327#######',
        '+23328#######',
        '+23350#######',
        '+23353#######',
        '+23354#######',
        '+23355#######',
        '+23356#######',
        '+23357#######',
        '+23358#######',
    ];

    /**
     * @example '0545455545'
     */
    public function phoneNumber(): string
    {
        return Helper::numerify(Helper::randomElement($this->nationalFormats));
    }

    /**
     * @example +233545455545
     */
    public function e164PhoneNumber(): string
    {
        return Helper::numerify(Helper::randomElement($this->e164formats));
    }

    public function nationalPhoneNumber()
    {
        return $this->phoneNumber();
    }

    public function internationalPhoneNumber()
    {
        return $this->e164PhoneNumber();
    }
}
