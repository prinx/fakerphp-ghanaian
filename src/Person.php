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
        'Ada', 'Adela', 'Adele', 'Adéle', 'Adelia', 'Adina', 'Adolfina', 'Agda', 'Agnes', 'Agneta', 'Aina', 'Aino', 'Albertina', 'Alexandra', 'Alfhild', 'Alfrida', 'Alice', 'Alida', 'Ally', 'Alma', 'Alva', 'Amalia', 'Amanda', 'Andrea', 'Anette', 'Angela', 'Anita', 'Anja', 'Ann', 'Anna', 'Anna-Carin', 'Anna-Greta', 'Anna-Karin', 'Anna-Lena', 'Anna-Lisa', 'Anna-Maria', 'Anna-Stina', 'Anne', 'Anneli', 'Annelie', 'Annette', 'Anne-Charlotte', 'Anne-Marie', 'Anni', 'Annica', 'Annie', 'Annika', 'Annikki', 'Anny', 'Ann-Britt', 'Ann-Charlott', 'Ann-Charlotte', 'Ann-Christin', 'Ann-Christine', 'Ann-Katrin', 'Ann-Kristin', 'Ann-Louise', 'Ann-Margret', 'Ann-Mari', 'Ann-Marie', 'Ann-Sofi', 'Ann-Sofie', 'Antonia', 'Arvida', 'Asta', 'Astrid', 'Augusta', 'Aurora', 'Axelia', 'Axelina',
        'Barbro', 'Beata', 'Beatrice', 'Beda', 'Berit', 'Bernhardina', 'Berta', 'Betty', 'Birgit', 'Birgitta', 'Blenda', 'Bodil', 'Boel', 'Borghild', 'Brita', 'Britt', 'Britta', 'Britt-Inger', 'Britt-Louise', 'Britt-Mari', 'Britt-Marie',
        'Camilla', 'Carin', 'Carina', 'Carita', 'Carola', 'Carolina', 'Caroline', 'Catarina', 'Catharina', 'Cathrine', 'Catrin', 'Cecilia', 'Charlott', 'Charlotta', 'Charlotte', 'Christel', 'Christin', 'Christina', 'Christine', 'Clara', 'Clary', 'Constance', 'Cristina',
        'Daga', 'Dagmar', 'Dagny', 'Daisy', 'Davida', 'Desideria', 'Desirée', 'Diana', 'Disa', 'Dora', 'Doris', 'Dorotea',
        'Ebba', 'Edit', 'Edith', 'Edla', 'Eira', 'Eivor', 'Ejvor', 'Elaine', 'Eleonor', 'Eleonora', 'Elfrida', 'Elida', 'Elin', 'Elina', 'Elinor', 'Elisabet', 'Elisabeth', 'Elise', 'Ella', 'Ellen', 'Ellinor', 'Elly', 'Elma', 'Elna', 'Elsa', 'Else', 'Else-Marie', 'Elsi', 'Elsie', 'Elsy', 'Elvi', 'Elvira', 'Elvy', 'Emelia', 'Emerentia', 'Emilia', 'Emma', 'Emmy', 'Erika', 'Erna', 'Ester', 'Estrid', 'Ethel', 'Eufemia', 'Eugenia', 'Eva', 'Eva-Britt', 'Eva-Lena', 'Eva-Lotta', 'Eva-Marie', 'Evelina', 'Evelyn', 'Evy', 'Ewa',
        'Fanny', 'Florence', 'Fredrika', 'Frida', 'Frideborg',
        'Gabriella', 'Gerd', 'Gerda', 'Gertie', 'Gertrud', 'Gisela', 'Greta', 'Gudrun', 'Gull', 'Gullan', 'Gullbritt', 'Gulli', 'Gullvi', 'Gully', 'Gull-Britt', 'Gun', 'Gunborg', 'Gunbritt', 'Gunda', 'Gunhild', 'Gunilla', 'Gunn', 'Gunnel', 'Gunni', 'Gunvor', 'Gun-Britt', 'Gurli', 'Gustava', 'Gärd', 'Görel', 'Göta',
        'Hanna', 'Harriet', 'Hedvig', 'Helen', 'Helén', 'Helena', 'Helene', 'Heléne', 'Helfrid', 'Helga', 'Helmi', 'Helny', 'Henny', 'Henrietta', 'Henriette', 'Herta', 'Hilda', 'Hildegard', 'Hildur', 'Hillevi', 'Hilma', 'Hjördis', 'Hulda',
        'Ida', 'Ines', 'Inez', 'Inga', 'Ingalill', 'Inga-Britt', 'Inga-Lena', 'Inga-Lill', 'Inga-Lisa', 'Inga-Maj', 'Ingbritt', 'Ingeborg', 'Ingegerd', 'Ingegärd', 'Ingela', 'Inger', 'Ingrid', 'Ingvor', 'Ing-Britt', 'Ing-Mari', 'Ing-Marie', 'Iréne', 'Irene', 'Iris', 'Irma', 'Isabella',
        'Jane', 'Janet', 'Jeanette', 'Jenny', 'Jessica', 'Johanna', 'Josefina', 'Judit', 'Judith', 'Julia', 'Juliana', 'Justina',
        'Kaarina', 'Kajsa', 'Karin', 'Karina', 'Karla', 'Karola', 'Karolina', 'Katarina', 'Katharina', 'Katrin', 'Katrina', 'Kersti', 'Kerstin', 'Klara', 'Konstantia', 'Kornelia', 'Kristin', 'Kristina', 'Kristine',
        'Laila', 'Laura', 'Leila', 'Lena', 'Leontina', 'Liisa', 'Lilian', 'Lill', 'Lillemor', 'Lillian', 'Lilly', 'Linda', 'Linnéa', 'Linnea', 'Lisa', 'Lisbet', 'Lisbeth', 'Liselott', 'Liselotte', 'Lise-Lott', 'Lise-Lotte', 'Lizzie', 'Lola', 'Louise', 'Lovisa', 'Lucia', 'Lydia',
        'Madeleine', 'Madelene', 'Magda', 'Magdalena', 'Magnhild', 'Maj', 'Maja', 'Majbritt', 'Majken', 'Majlis', 'Majvor', 'Maj-Britt', 'Maj-Lis', 'Malin', 'Malvina', 'Margaret', 'Margareta', 'Margareth', 'Margaretha', 'Margit', 'Margita', 'Margot', 'Margret', 'Margreta', 'Mari', 'Maria', 'Mariana', 'Mariann', 'Marianne', 'Marie', 'Mariette', 'Marie-Louise', 'Marika', 'Marina', 'Marion', 'Marit', 'Marita', 'Mari-Ann', 'Marja', 'Marjatta', 'Marlene', 'Marta', 'Martha', 'Martina', 'Mary', 'Mathilda', 'Matilda', 'Maud', 'May', 'Mia', 'Mildred', 'Mimmi', 'Mirjam', 'Mona', 'Monica', 'Monika', 'Märit', 'Märta', 'Märtha',
        'Naemi', 'Naima', 'Nancy', 'Nanna', 'Nanny', 'Natalia', 'Nelly', 'Nina', 'Nora',
        'Olga', 'Olivia', 'Ottilia',
        'Paula', 'Paulina', 'Pauline', 'Pernilla', 'Petra', 'Petronella', 'Pia',
        'Ragna', 'Ragnhild', 'Rakel', 'Rebecka', 'Regina', 'Renée', 'Rigmor', 'Rita', 'Rosa', 'Rose', 'Rose-Marie', 'Rosita', 'Ros-Mari', 'Ros-Marie', 'Runa', 'Rut', 'Ruth',
        'Sabina', 'Saga', 'Sally', 'Sara', 'Selma', 'Serafia', 'Sibylla', 'Sigbritt', 'Signe', 'Signhild', 'Sigrid', 'Siri', 'Siv', 'Sofi', 'Sofia', 'Sofie', 'Solbritt', 'Solveig', 'Solvig', 'Sonja', 'Stina', 'Susann', 'Susanna', 'Susanne', 'Suzanne', 'Svea', 'Sylvia', 'Synnöve', 'Syster',
        'Tea', 'Tekla', 'Terese', 'Teresia', 'Therése', 'Therese', 'Theresia', 'Thyra', 'Tina', 'Tora', 'Torborg', 'Tove', 'Tyra',
        'Ulla', 'Ulla-Britt', 'Ulla-Britta', 'Ulrica', 'Ulrika', 'Ursula',
        'Valborg', 'Vanja', 'Vega', 'Vendela', 'Vendla', 'Vera', 'Veronica', 'Veronika', 'Victoria', 'Viktoria', 'Vilhelmina', 'Vilma', 'Viola', 'Virginia', 'Vivan', 'Viveca', 'Viveka', 'Vivi', 'Vivian', 'Viviann', 'Vivianne', 'Vivi-Ann', 'Vivi-Anne',
        'Wilhelmina',
        'Ylva', 'Yvonne',
        'Åsa', 'Åse',
    ];

    /**
     * @var array Ghanaian male first names
     *
     * @see https://github.com/fzaninotto/Faker/pull/2038/files#diff-e2c93ed420fa995acd550d351007b54e3cb86898b5d03edea5c5a14b5861e4d0
     */
    private $firstNameMale = [
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
