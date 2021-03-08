<?php

namespace Faker\Ghanaian;

use Faker\Extension\CompanyExtension;
use Faker\Extension\GeneratorAwareExtension;
use Faker\Extension\GeneratorAwareExtensionTrait;
use Faker\Extension\Helper;
use Faker\Provider\Company as BaseCompany;

class Company implements GeneratorAwareExtension, CompanyExtension
{
    use GeneratorAwareExtensionTrait;

    private $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}}',
    ];

    private $companySuffix = ['Ltd', 'SARL', 'Tech'];

    private $jobTitles = [
        'Accountant', 'Digital Designer', 'Chief', 'Developer', 'Journalist',
        'Singer', 'UX Designer',
    ];

    public function company(): string
    {
        $format = Helper::randomElement($this->formats);

        return $this->generator->parse($format);
    }

    public function companySuffix(): string
    {
        return Helper::randomElement($this->companySuffix);
    }

    public function jobTitle(): string
    {
        return Helper::randomElement($this->jobTitles);
    }
}
