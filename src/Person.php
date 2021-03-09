<?php

namespace Faker\Ghanaian;

use Faker\Extension\Helper;
use Faker\Extension\PersonExtension;

class Person implements PersonExtension
{
    /**
     * @var array Ghanaian female first names
     *
     * @see https://github.com/fzaninotto/Faker/pull/2038/files#diff-e2c93ed420fa995acd550d351007b54e3cb86898b5d03edea5c5a14b5861e4d0
     */
    private $firstNameFemale = [
        'Aba',
        'Abena',
        'Abigail',
        'Adwoa',
        'Afia',
        'Afua',
        'Akos',
        'Akofa',
        'Akorfa',
        'Akosua',
        'Akua',
        'Akumaa',
        'Alice',
        'Ama',
        'Amanda',
        'Amber',
        'Amelia',
        'Angela',
        'Ann',
        'Annette',
        'Awesi',
        'Baaba',
        'Barbara',
        'Beatrice',
        'COmfort',
        'Caroline',
        'Catherine',
        'Charlotte',
        'Christina',
        'Comfort',
        'Constance',
        'Danielle',
        'Deborah',
        'Debra',
        'Denise',
        'Dora',
        'Dorcas',
        'Dorothy',
        'Eliabeth',
        'Elizabeth',
        'Emily',
        'Emma',
        'Ernestina',
        'Esi',
        'Eunice',
        'Eyram',
        'Felicia',
        'Francesca',
        'Gemma',
        'Georgia',
        'Georgina',
        'Gifty',
        'Grace',
        'Grace',
        'Hannabel',
        'Hannah',
        'Harriet',
        'Helen',
        'Irene',
        'Janet',
        'Janet',
        'Janice',
        'Jasmine',
        'Jennifer',
        'Jessica',
        'Jill',
        'Joanna',
        'Josephine',
        'Joyce',
        'Joyce',
        'Judith',
        'Julia',
        'Juliana',
        'Julie',
        'Karen',
        'Kate',
        'Katherine',
        'Katy',
        'Lawrencia',
        'Linda',
        'Lisa',
        'Lorraine',
        'Lucy',
        'Lucy',
        'Lydia',
        'Lydia',
        'Mandy',
        'Margaret',
        'Margaret',
        'Maria',
        'Marian',
        'Marilyn',
        'Mary',
        'Mary',
        'Maureen',
        'Mawuena',
        'Mawusi',
        'Michelle',
        'Millicent',
        'Nana Ama',
        'Naomi',
        'Natalie',
        'Natasha',
        'Nicola',
        'Nimakoah',
        'Olivia',
        'Pamela',
        'Patricia',
        'Paula',
        'Priscilla',
        'Rachael',
        'Rachel',
        'Rebecca',
        'Rebecca',
        'Regina',
        'Rita',
        'Roselyn',
        'Rosemary',
        'Rosemary',
        'Ruth',
        'Salomey',
        'Samantha',
        'Sandra',
        'Sarah',
        'Sarah',
        'Sarah',
        'Sena',
        'Sharon',
        'Sheila',
        'Shirley',
        'Stephanie',
        'Susan',
        'Susan',
        'Sylvia',
        'Teresa',
        'Tina',
        'Tracy',
        'Vanessa',
        'Veronica',
        'Victoria',
        'Vida',
        'Wendy',
        'Yaa',
        'Yvonne',
    ];

    /**
     * @var array Ghanaian male first names
     *
     * @see https://github.com/fzaninotto/Faker/pull/2038/files#diff-e2c93ed420fa995acd550d351007b54e3cb86898b5d03edea5c5a14b5861e4d0
     */
    private $firstNameMale = [
        'Aaron',
        'Abeiku',
        'Adam',
        'Adrian',
        'Akwesi',
        'Albert',
        'Alex',
        'Alexander',
        'Andrew',
        'Anthony',
        'Antony',
        'Arthur',
        'Ben',
        'Benjamin',
        'Bernard',
        'Bless',
        'Blessing',
        'Bruce',
        'Carl',
        'Charles',
        'Christian',
        'Clifford',
        'Colins',
        'Daniel',
        'Danny',
        'David',
        'Denis',
        'Dennis',
        'Derrick',
        'Dominic',
        'Donald',
        'Douglas',
        'Duncan',
        'Edward',
        'Ekow',
        'Elliot',
        'Elliott',
        'Eyram',
        'Eric',
        'Fiifi',
        'Francis',
        'Frank',
        'Frederick',
        'George',
        'Gerald',
        'Gordon',
        'Graham',
        'Gregory',
        'Harry',
        'Henry',
        'Howard',
        'Isaac',
        'Akwasi',
        'Jack',
        'Jacob',
        'Jake',
        'James',
        'Jason',
        'Jeffrey',
        'Jeremy',
        'Joe',
        'Joel',
        'John',
        'Jonathan',
        'Joojo',
        'Joseph',
        'Josh',
        'Joshua',
        'Josiah',
        'Julian',
        'Justin',
        'Karl',
        'Kenneth',
        'Kevin',
        'Kofi',
        'Kojo',
        'Kujoe',
        'Kwabena',
        'Kwadwo',
        'Kwaku',
        'Kwame',
        'Kwamena',
        'Kwasi',
        'Kweku',
        'Kwesi',
        'Kyle',
        'Lawrence',
        'Leslie',
        'Louis',
        'Luke',
        'Malcolm',
        'Marcus',
        'Mark',
        'Martin',
        'Mathew',
        'Matthew',
        'Max',
        'Michael',
        'Nathan',
        'Nicholas',
        'Nigel',
        'Oliver',
        'Patrick',
        'Paul',
        'Peter',
        'Philip',
        'Phillip',
        'Promise',
        'Raymond',
        'Richard',
        'Robert',
        'Roger',
        'Ronald',
        'Russell',
        'Sam',
        'Samuel',
        'Shaun',
        'Simon',
        'Stanley',
        'Stephen',
        'Steven',
        'Terence',
        'Thomas',
        'Timothy',
        'Thank God',
        'Thy Will Be Done',
        'Tom',
        'Tony',
        'Victor',
        'Vincent',
        'William',
        'Yaw',
    ];

    /**
     * @var array Ghanaian common last names
     *
     * @see https://github.com/fzaninotto/Faker/pull/2038/files#diff-e2c93ed420fa995acd550d351007b54e3cb86898b5d03edea5c5a14b5861e4d0
     */
    private $lastName = [
        'Acheampong',
        'Adadevoh',
        'Adomah',
        'Adomako',
        'Adongo',
        'Adu',
        'Adusei',
        'Adutwum',
        'Afirifa',
        'Afoakwa',
        'Agyapong',
        'Agyapong',
        'Agyare',
        'Agyei',
        'Agyemang',
        'Ahortor',
        'Akoto',
        'Akowua',
        'Akyeamfuɔ',
        'Akyeampong',
        'Akyena',
        'Akyerεko',
        'Amo',
        'Amoa',
        'Amoako',
        'Amoasi',
        'Ampadu',
        'Ampofo',
        'Amponsah',
        'Andorful',
        'Ankra',
        'Anokye',
        'Ansa',
        'Antwi',
        'Antwi',
        'Appia',
        'Appiah',
        'Asamoa',
        'Asamoah',
        'Asante',
        'Asare',
        'Asenso',
        'Asiama',
        'Asiedu',
        'Ata',
        'Awuah',
        'Baa',
        'Baafi',
        'Baah',
        'Baawia',
        'Badu',
        'Boadi',
        'Boadu',
        'Boahen',
        'Boakye',
        'Boaten',
        'Boateng',
        'Bona',
        'Bonsra',
        'Bonsu',
        'Daako',
        'Danso',
        'Darko',
        'Darteh',
        'Dartey',
        'Djokoto',
        'Donkor',
        'Duah',
        'Dwamena',
        'Dzokoto',
        'Fofie',
        'Fosu',
        'Gyamfi',
        'Gyasi',
        'Karikari',
        'Koomson',
        'Kumi',
        'Kusi',
        'Kwaakye',
        'Kwarteng',
        'Kyei',
        'Mensa',
        'Mensah',
        'Nkansa',
        'Nkansah',
        'Nkrumah',
        'Nsia',
        'Nti',
        'Ntiamoa',
        'Ntim',
        'Nyaako',
        'Nyame',
        'Nyantakyi',
        'Obeng',
        'Ofori',
        'Ofosu',
        'Okyere',
        'Okpattah',
        'Omani',
        'Opoku',
        'Oppong',
        'Opuku',
        'Osei',
        'Oti',
        'Otiwa',
        'Otuo',
        'Owusu',
        'Prempeh',
        'Quartey',
        'Safo',
        'Sarpong',
        'Takyi',
        'Tawia',
        'Tutu',
        'Tweneboa',
        'Twumasi',
        'Wiafe',
        'Yaamoa',
        'Yawson',
        'Yeboa',
        'Yeboah',
        'Yirenkyi',
    ];

    private $nameFemaleFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}-{{lastName}}',
        '{{prefixFemale}} {{firstNameFemale}} {{lastName}}',
        '{{prefixFemale}} {{firstNameFemale}} {{lastName}}-{{lastName}}',
    ];

    private $nameMaleFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}-{{lastName}}',
        '{{prefixMale}} {{firstNameMale}} {{lastName}}',
        '{{prefixMale}} {{firstNameMale}} {{lastName}}-{{lastName}}',
    ];

    private $titleMale = ['Mr.', 'Dr.', 'Prof.', 'Agya', 'Owura', 'Osofo', 'Togbe'];

    private $titleFemale = ['Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.', 'Mama', 'Maame', 'Awura', 'Sista', 'Osofo Maame'];

    private static function randomGender()
    {
        if (mt_rand(0, 1)) {
            return PersonExtension::GENDER_MALE;
        }

        return PersonExtension::GENDER_FEMALE;
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @example 'John'
     */
    public function firstName($gender = null): string
    {
        $gender = $gender ?? self::randomGender();

        if (PersonExtension::GENDER_MALE === $gender) {
            return $this->firstNameMale();
        }

        if (PersonExtension::GENDER_FEMALE === $gender) {
            return $this->firstNameFemale();
        }
    }

    public function firstNameMale(): string
    {
        return Helper::randomElement($this->firstNameMale);
    }

    public function firstNameFemale(): string
    {
        return Helper::randomElement($this->firstNameFemale);
    }

    /**
     * @example 'Doe'
     */
    public function lastName(): string
    {
        return Helper::randomElement($this->lastName);
    }

    /**
     * @example 'Mrs.'
     *
     * @param string|null $gender 'male', 'female' or null for any
     */
    public function title($gender = null): string
    {
        $gender = $gender ?? self::randomGender();

        if (PersonExtension::GENDER_MALE === $gender) {
            return $this->titleMale();
        }

        if (PersonExtension::GENDER_FEMALE === $gender) {
            return $this->titleFemale();
        }
    }

    /**
     * @example 'Mr.'
     */
    public function titleMale(): string
    {
        return Helper::randomElement($this->titleMale);
    }

    /**
     * @example 'Mrs.'
     */
    public function titleFemale(): string
    {
        return Helper::randomElement($this->titleFemale);
    }

    public function name($gender = null)
    {
        $gender = $gender ?? self::randomGender();

        if (PersonExtension::GENDER_FEMALE === $gender) {
            $format = Helper::randomElement($this->nameFemaleFormats);
        } else {
            $format = Helper::randomElement($this->nameMaleFormats);
        }

        return $this->generator->parse($format);
    }
}
