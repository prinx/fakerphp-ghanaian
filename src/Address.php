<?php

namespace Faker\Ghanaian;

use Faker\Extension\AddressExtension;
use Faker\Extension\GeneratorAwareExtension;
use Faker\Extension\GeneratorAwareExtensionTrait;
use Faker\Extension\Helper;

class Address implements AddressExtension, GeneratorAwareExtension
{
    use GeneratorAwareExtensionTrait;

    private $buildingNumber = ['%###', '%##', '%#', '%#?', '%', '%?'];

    private $streetSuffix = [
        'Link', 'Lane', 'Road', 'Street', 'Lk', 'Ln', 'Rd', 'St'
    ];

    private $streetPrefixWord = [
        'Boame',
    ];

    private $postcode = ['??-###-####', '??-###-####'];

    /**
     * @var array Ghanaian city names
     */
    private $cities = [
        "Goaso",
        "Hwidiem",
        "Kenyasi",
        "Kukuom",
        "Abrepo Junction",
        "Abuakwa",
        "Adum",
        "Afrancho",
        "Agogo",
        "Agona",
        "Ahodwo",
        "Airport",
        "Akumadan",
        "Amakom",
        "Aputuogya",
        "Asafo",
        "Ash-Town",
        "Asokore Mampong",
        "Asokwa",
        "Asuofia",
        "Atonsu",
        "Ayeduasi",
        "Ayigya",
        "Bantama",
        "Barekese",
        "Bekwai",
        "Boadi",
        "Bomso",
        "Breman",
        "Brewery",
        "Buoho",
        "Buokrom Estate",
        "Daban",
        "Dakwadwom",
        "Deduako",
        "Denyame",
        "Effiduase",
        "Ejisu",
        "Ejura",
        "Emina",
        "Esreso",
        "Fawode",
        "Gyinyasi",
        "Jachie Pramso",
        "Kaasi",
        "KNUST",
        "Kodie",
        "Komfo Anokye",
        "Konongo",
        "Kotei",
        "Krofrom",
        "Kumasi",
        "Maakro",
        "Mampong",
        "Mankranso",
        "Manso Nkwanta",
        "Nkawie",
        "North Suntreso",
        "Nyinahin",
        "Obuasi",
        "Oforikrom",
        "Pankrono",
        "Santasi",
        "Sokoban",
        "South Suntreso",
        "Suame",
        "Tafo",
        "Takwa-Maakro",
        "Tanoso",
        "Tepa",
        "TUC",
        "Banda Ahenkro",
        "Brekum",
        "Dormaa Ahenkro",
        "New Drobo",
        "Nsawkaw",
        "Sampa",
        "Sunyani",
        "Atebubu",
        "Buipe",
        "Jema",
        "Kintampo",
        "Kwame Danso",
        "Nkoranza",
        "Prang",
        "Techiman",
        "Wenchi",
        "Yeji",
        "Agona Swedru",
        "Amanfrom",
        "Anomabu",
        "Apam",
        "Bawjiase",
        "Breman Asikuma",
        "Budumburam",
        "Cape Coast",
        "Domeabra",
        "Elmina",
        "Foso",
        "Kasoa Ofaakor",
        "Kasoa Zongo",
        "Liberia Camp",
        "Mankessim",
        "Millennium City",
        "Mumford",
        "Nyakrom",
        "Nyananor",
        "Nyanyano",
        "Oduponkpehe",
        "Opeikuma",
        "Pentecost Seminary",
        "Saltpond",
        "Winneba",
        "Abetifi",
        "Abompe",
        "Aburi",
        "Adeiso",
        "Adjeiikrom",
        "Adukrom",
        "Ahwerease",
        "Akim Oda",
        "Akim Swedru",
        "Akosombo",
        "Akropong",
        "Akwatia",
        "Akyem Hemang",
        "Amanokrom",
        "Apirede",
        "Asamankese",
        "Asesewa",
        "Atimpoku",
        "Ayiensu",
        "Begoro",
        "Bepoase",
        "Bisibom",
        "Bososo",
        "Brekusu",
        "Coaltar",
        "Dawu",
        "Dedesoworako",
        "Donkorkrom",
        "Dwenase",
        "Gyankama",
        "Juaso",
        "Kade",
        "Kibi",
        "Kitase",
        "Koforidua",
        "Kwabeng",
        "Mamfe",
        "Mampong",
        "Mpraeso",
        "New Abirem",
        "Nkawkaw",
        "Nsawam",
        "Nsutam",
        "Obooho",
        "Obosomase",
        "Odumase Krobo",
        "Ofoase",
        "Osino",
        "Peduase",
        "Saaman",
        "Somanya",
        "Summer",
        "Suhum",
        "Tease",
        "Tutu",
        "Abelemkpe",
        "Ablekuma",
        "Abokobi",
        "Abossey Okai",
        "Accra Newtown",
        "Achimota",
        "Adabraka",
        "Adenta",
        "Afienya",
        "Agbogba",
        "Airport",
        "Amasaman",
        "Ashiaman",
        "Ashongman",
        "Aslyum Down",
        "Baatsona - Spintex",
        "Bortianor",
        "Cantonment",
        "Dansoman",
        "Darkuman",
        "Dawhenya",
        "Dodowa",
        "Dome",
        "Dzorwulu",
        "East Legon",
        "Gbawe",
        "Haatso",
        "James Town",
        "Kanda",
        "Kaneshie",
        "Kasoa",
        "Kissieman",
        "Kokrobite",
        "Korle Bu",
        "Kpone",
        "Kwabenya",
        "Kwashieman",
        "Labadi",
        "Labone",
        "Lapaz",
        "Lartebiokorshie",
        "Lashibi",
        "Legon",
        "Madina",
        "Makola",
        "Mallam",
        "McCarthy Hill",
        "Michel Camp",
        "Nima",
        "Nungua",
        "Oblogo Mallam",
        "Odoponkpehe",
        "Odorkor",
        "Osu",
        "Oyarifa",
        "Patang",
        "Prampram",
        "Ridge",
        "Roman Ridge",
        "Sakumono",
        "Santa Maria",
        "Sowutuom",
        "Taifa",
        "Tema",
        "Tema New Town",
        "Tesano",
        "Teshie",
        "Tetegu",
        "Tieman",
        "Tudu",
        "Weija",
        "Westhills",
        "Chinderi",
        "Jasikan",
        "Kadjebi",
        "Kete Krachi",
        "Kpassa",
        "Nkonya",
        "Bole",
        "Buipe",
        "Damango",
        "Salaga",
        "Sawla",
        "Tolon",
        "Bawku",
        "Bolgatanga",
        "Bongo",
        "Navrongo",
        "Paga",
        "Tongo",
        "Funsi",
        "Gwollu",
        "Issa",
        "Jirapa",
        "Kaleo",
        "Lambussie",
        "Lawra",
        "Nadowli",
        "Nandom",
        "Tumu",
        "Wa",
        "Wechiau",
        "Adaklu Waya",
        "Adidome",
        "Aflao",
        "Akatsi",
        "Ave Dakpa",
        "Ho.",
        "Hohoe",
        "Keta",
        "Kpando",
        "Kpetoe",
        "Kpeve",
        "Sogakope",
        "Abase",
        "Aboso",
        "Adiawoso",
        "Adiembra",
        "Adwowa",
        "Agona Nkwanta",
        "Agufo",
        "Ahonozo",
        "Akatachi",
        "Alabokazo",
        "Anaji",
        "Apowa",
        "Apremodo",
        "Asankragua",
        "Awukyere",
        "Axim",
        "Beahu",
        "Bogoso",
        "Busua",
        "Daboase",
        "Dadwen",
        "Diabene",
        "Dixcove",
        "East Tanokrom",
        "Effiakuma",
        "Eikwe",
        "Elubo",
        "Essiama",
        "Essikado",
        "Essipong",
        "Ewusiejo",
        "Fijai",
        "Funko",
        "Half Assini",
        "Hotopo",
        "Inchaban",
        "kansaworado",
        "Kejabil",
        "Kojokrom",
        "Kwawkrom",
        "Kweikuma",
        "kwesimintsim",
        "Manso",
        "Miemia",
        "Mpintsin",
        "New Akwidaa",
        "New Amanfu",
        "New Takoradi",
        "Ngyiresia",
        "Nkroful",
        "Nsein",
        "Ntankoful",
        "Nzulezo",
        "Old Akwidaa",
        "Prestea",
        "Princess Town",
        "Samreboi",
        "Sekondi",
        "Shama",
        "Takoradi",
        "Tarkwa",
        "Tikobo No.1",
        "Tikobo No.2",
        "West Tanokrom",
        "Windy Ridge",
        "Akontombra",
        "Bibiani",
        "Dadieso",
        "Enchi",
        "Juaboso",
        "Sewhi Anhwiaso"
    ];

    /**
     * @var array Ghanaian street name formats
     */
    private $streetNameFormats = [
        '{{Faker\Ghanaian\Address->streetPrefixWord}}{{Faker\Ghanaian\Address->streetSuffix}}',
        '{{Faker\Ghanaian\Address->city}}{{Faker\Ghanaian\Address->streetSuffix}}',
        '{{firstName}}{{lastName}}{{Faker\Ghanaian\Address->streetSuffix}}',
        '{{titleFemale}}{{firstNameFemale}}{{lastName}}{{Faker\Ghanaian\Address->streetSuffix}}',
        '{{titleMale}}{{firstNameMale}}{{lastName}}{{Faker\Ghanaian\Address->streetSuffix}}',
    ];

    /**
     * @var array Ghanaian street address formats
     */
    private $streetAddressFormats = [
        '{{Faker\Ghanaian\Address->streetName}} {{Faker\Ghanaian\Address->buildingNumber}}',
    ];

    /**
     * @var array Ghanaian address formats
     */
    private $addressFormats = [
        "{{Faker\Ghanaian\Address->streetAddress}}\n{{Faker\Ghanaian\Address->postcode}} {{Faker\Ghanaian\Address->city}}",
    ];

    public function buildingNumber(): string
    {
        return strtoupper(Helper::bothify($this->buildingNumber[array_rand($this->buildingNumber)]));
    }

    public function address(): string
    {
        // TODO
        $format = Helper::randomElement($this->addressFormats);

        return $this->generator->parse($format);
    }

    public function city(): string
    {
        return Helper::randomElement($this->cities);
    }

    public function postcode(): string
    {
        return Helper::bothify(Helper::randomElement($this->postcode));
    }

    public function streetName(): string
    {
        $format = Helper::randomElement($this->streetNameFormats);

        return $this->generator->parse($format);
    }

    public function streetAddress(): string
    {
        // TODO
        $format = Helper::randomElement($this->streetAddressFormats);

        return $this->generator->parse($format);
    }

    public function streetSuffix(): string
    {
        return Helper::randomElement($this->streetSuffix);
    }

    public function streetPrefixWord(): string
    {
        return Helper::randomElement($this->streetPrefixWord);
    }
}
