// Array of country objects for the flag dropdown.

// Here is the criteria for the plugin to support a given country/territory
// - It has an iso2 code: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
// - It has it's own country calling code (it is not a sub-region of another country): https://en.wikipedia.org/wiki/List_of_country_calling_codes
// - It has a flag in the region-flags project: https://github.com/behdad/region-flags/tree/gh-pages/png
// - It is supported by libphonenumber (it must be listed on this page): https://github.com/googlei18n/libphonenumber/blob/master/resources/ShortNumberMetadata.xml

// Each country array has the following information:
// [
//    Country name,
//    iso2 code,
//    International dial code,
//    Order (if >1 country with same dial code),
//    Area codes
// ]
var allCountries = [
  [
    "Afghanistan (вЂ«Ш§ЩЃШєШ§Щ†ШіШЄШ§Щ†вЂ¬вЂЋ)",
    "af",
    "93"
  ],
  [
    "Albania (ShqipГ«ri)",
    "al",
    "355"
  ],
  [
    "Algeria (вЂ«Ш§Щ„Ш¬ШІШ§Ш¦Ш±вЂ¬вЂЋ)",
    "dz",
    "213"
  ],
  [
    "American Samoa",
    "as",
    "1684"
  ],
  [
    "Andorra",
    "ad",
    "376"
  ],
  [
    "Angola",
    "ao",
    "244"
  ],
  [
    "Anguilla",
    "ai",
    "1264"
  ],
  [
    "Antigua and Barbuda",
    "ag",
    "1268"
  ],
  [
    "Argentina",
    "ar",
    "54"
  ],
  [
    "Armenia (ХЂХЎХµХЎХЅХїХЎХ¶)",
    "am",
    "374"
  ],
  [
    "Aruba",
    "aw",
    "297"
  ],
  [
    "Australia",
    "au",
    "61",
    0
  ],
  [
    "Austria (Г–sterreich)",
    "at",
    "43"
  ],
  [
    "Azerbaijan (AzЙ™rbaycan)",
    "az",
    "994"
  ],
  [
    "Bahamas",
    "bs",
    "1242"
  ],
  [
    "Bahrain (вЂ«Ш§Щ„ШЁШ­Ш±ЩЉЩ†вЂ¬вЂЋ)",
    "bh",
    "973"
  ],
  [
    "Bangladesh (а¦¬а¦ѕа¦‚а¦Іа¦ѕа¦¦а§‡а¦¶)",
    "bd",
    "880"
  ],
  [
    "Barbados",
    "bb",
    "1246"
  ],
  [
    "Belarus (Р‘РµР»Р°СЂСѓСЃСЊ)",
    "by",
    "375"
  ],
  [
    "Belgium (BelgiГ«)",
    "be",
    "32"
  ],
  [
    "Belize",
    "bz",
    "501"
  ],
  [
    "Benin (BГ©nin)",
    "bj",
    "229"
  ],
  [
    "Bermuda",
    "bm",
    "1441"
  ],
  [
    "Bhutan (аЅ аЅ–аѕІаЅґаЅ‚)",
    "bt",
    "975"
  ],
  [
    "Bolivia",
    "bo",
    "591"
  ],
  [
    "Bosnia and Herzegovina (Р‘РѕСЃРЅР° Рё РҐРµСЂС†РµРіРѕРІРёРЅР°)",
    "ba",
    "387"
  ],
  [
    "Botswana",
    "bw",
    "267"
  ],
  [
    "Brazil (Brasil)",
    "br",
    "55"
  ],
  [
    "British Indian Ocean Territory",
    "io",
    "246"
  ],
  [
    "British Virgin Islands",
    "vg",
    "1284"
  ],
  [
    "Brunei",
    "bn",
    "673"
  ],
  [
    "Bulgaria (Р‘СЉР»РіР°СЂРёСЏ)",
    "bg",
    "359"
  ],
  [
    "Burkina Faso",
    "bf",
    "226"
  ],
  [
    "Burundi (Uburundi)",
    "bi",
    "257"
  ],
  [
    "Cambodia (бћЂбћбџ’бћ–бћ»бћ‡бћ¶)",
    "kh",
    "855"
  ],
  [
    "Cameroon (Cameroun)",
    "cm",
    "237"
  ],
  [
    "Canada",
    "ca",
    "1",
    1,
    ["204", "226", "236", "249", "250", "289", "306", "343", "365", "387", "403", "416", "418", "431", "437", "438", "450", "506", "514", "519", "548", "579", "581", "587", "604", "613", "639", "647", "672", "705", "709", "742", "778", "780", "782", "807", "819", "825", "867", "873", "902", "905"]
  ],
  [
    "Cape Verde (Kabu Verdi)",
    "cv",
    "238"
  ],
  [
    "Caribbean Netherlands",
    "bq",
    "599",
    1
  ],
  [
    "Cayman Islands",
    "ky",
    "1345"
  ],
  [
    "Central African Republic (RГ©publique centrafricaine)",
    "cf",
    "236"
  ],
  [
    "Chad (Tchad)",
    "td",
    "235"
  ],
  [
    "Chile",
    "cl",
    "56"
  ],
  [
    "China (дё­е›Ѕ)",
    "cn",
    "86"
  ],
  [
    "Christmas Island",
    "cx",
    "61",
    2
  ],
  [
    "Cocos (Keeling) Islands",
    "cc",
    "61",
    1
  ],
  [
    "Colombia",
    "co",
    "57"
  ],
  [
    "Comoros (â€«Ø¬Ø²Ø± Ø§Ù„Ù‚Ù…Ø±â€¬â€Ž)",
    "km",
    "269"
  ],
  [
    "Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)",
    "cd",
    "243"
  ],
  [
    "Congo (Republic) (Congo-Brazzaville)",
    "cg",
    "242"
  ],
  [
    "Cook Islands",
    "ck",
    "682"
  ],
  [
    "Costa Rica",
    "cr",
    "506"
  ],
  [
    "CÃ´te dâ€™Ivoire",
    "ci",
    "225"
  ],
  [
    "Croatia (Hrvatska)",
    "hr",
    "385"
  ],
  [
    "Cuba",
    "cu",
    "53"
  ],
  [
    "CuraÃ§ao",
    "cw",
    "599",
    0
  ],
  [
    "Cyprus (ÎšÏÏ€ÏÎ¿Ï‚)",
    "cy",
    "357"
  ],
  [
    "Czech Republic (ÄŒeskÃ¡ republika)",
    "cz",
    "420"
  ],
  [
    "Denmark (Danmark)",
    "dk",
    "45"
  ],
  [
    "Djibouti",
    "dj",
    "253"
  ],
  [
    "Dominica",
    "dm",
    "1767"
  ],
  [
    "Dominican Republic (RepÃºblica Dominicana)",
    "do",
    "1",
    2,
    ["809", "829", "849"]
  ],
  [
    "Ecuador",
    "ec",
    "593"
  ],
  [
    "Egypt (â€«Ù…ØµØ±â€¬â€Ž)",
    "eg",
    "20"
  ],
  [
    "El Salvador",
    "sv",
    "503"
  ],
  [
    "Equatorial Guinea (Guinea Ecuatorial)",
    "gq",
    "240"
  ],
  [
    "Eritrea",
    "er",
    "291"
  ],
  [
    "Estonia (Eesti)",
    "ee",
    "372"
  ],
  [
    "Ethiopia",
    "et",
    "251"
  ],
  [
    "Falkland Islands (Islas Malvinas)",
    "fk",
    "500"
  ],
  [
    "Faroe Islands (FÃ¸royar)",
    "fo",
    "298"
  ],
  [
    "Fiji",
    "fj",
    "679"
  ],
  [
    "Finland (Suomi)",
    "fi",
    "358",
    0
  ],
  [
    "France",
    "fr",
    "33"
  ],
  [
    "French Guiana (Guyane franÃ§aise)",
    "gf",
    "594"
  ],
  [
    "French Polynesia (PolynÃ©sie franÃ§aise)",
    "pf",
    "689"
  ],
  [
    "Gabon",
    "ga",
    "241"
  ],
  [
    "Gambia",
    "gm",
    "220"
  ],
  [
    "Georgia (áƒ¡áƒáƒ¥áƒáƒ áƒ—áƒ•áƒ”áƒšáƒ)",
    "ge",
    "995"
  ],
  [
    "Germany (Deutschland)",
    "de",
    "49"
  ],
  [
    "Ghana (Gaana)",
    "gh",
    "233"
  ],
  [
    "Gibraltar",
    "gi",
    "350"
  ],
  [
    "Greece (Î•Î»Î»Î¬Î´Î±)",
    "gr",
    "30"
  ],
  [
    "Greenland (Kalaallit Nunaat)",
    "gl",
    "299"
  ],
  [
    "Grenada",
    "gd",
    "1473"
  ],
  [
    "Guadeloupe",
    "gp",
    "590",
    0
  ],
  [
    "Guam",
    "gu",
    "1671"
  ],
  [
    "Guatemala",
    "gt",
    "502"
  ],
  [
    "Guernsey",
    "gg",
    "44",
    1
  ],
  [
    "Guinea (GuinÃ©e)",
    "gn",
    "224"
  ],
  [
    "Guinea-Bissau (GuinÃ© Bissau)",
    "gw",
    "245"
  ],
  [
    "Guyana",
    "gy",
    "592"
  ],
  [
    "Haiti",
    "ht",
    "509"
  ],
  [
    "Honduras",
    "hn",
    "504"
  ],
  [
    "Hong Kong (é¦™æ¸¯)",
    "hk",
    "852"
  ],
  [
    "Hungary (MagyarorszÃ¡g)",
    "hu",
    "36"
  ],
  [
    "Iceland (Ãsland)",
    "is",
    "354"
  ],
  [
    "India (à¤­à¤¾à¤°à¤¤)",
    "in",
    "91"
  ],
  [
    "Indonesia",
    "id",
    "62"
  ],
  [
    "Iran (â€«Ø§ÛŒØ±Ø§Ù†â€¬â€Ž)",
    "ir",
    "98"
  ],
  [
    "Iraq (â€«Ø§Ù„Ø¹Ø±Ø§Ù‚â€¬â€Ž)",
    "iq",
    "964"
  ],
  [
    "Ireland",
    "ie",
    "353"
  ],
  [
    "Isle of Man",
    "im",
    "44",
    2
  ],
  [
    "Israel (â€«×™×©×¨××œâ€¬â€Ž)",
    "il",
    "972"
  ],
  [
    "Italy (Italia)",
    "it",
    "39",
    0
  ],
  [
    "Jamaica",
    "jm",
    "1876"
  ],
  [
    "Japan (æ—¥æœ¬)",
    "jp",
    "81"
  ],
  [
    "Jersey",
    "je",
    "44",
    3
  ],
  [
    "Jordan (â€«Ø§Ù„Ø£Ø±Ø¯Ù†â€¬â€Ž)",
    "jo",
    "962"
  ],
  [
    "Kazakhstan (ÐšÐ°Ð·Ð°Ñ…ÑÑ‚Ð°Ð½)",
    "kz",
    "7",
    1
  ],
  [
    "Kenya",
    "ke",
    "254"
  ],
  [
    "Kiribati",
    "ki",
    "686"
  ],
  [
    "Kosovo",
    "xk",
    "383"
  ],
  [
    "Kuwait (â€«Ø§Ù„ÙƒÙˆÙŠØªâ€¬â€Ž)",
    "kw",
    "965"
  ],
  [
    "Kyrgyzstan (ÐšÑ‹Ñ€Ð³Ñ‹Ð·ÑÑ‚Ð°Ð½)",
    "kg",
    "996"
  ],
  [
    "Laos (àº¥àº²àº§)",
    "la",
    "856"
  ],
  [
    "Latvia (Latvija)",
    "lv",
    "371"
  ],
  [
    "Lebanon (â€«Ù„Ø¨Ù†Ø§Ù†â€¬â€Ž)",
    "lb",
    "961"
  ],
  [
    "Lesotho",
    "ls",
    "266"
  ],
  [
    "Liberia",
    "lr",
    "231"
  ],
  [
    "Libya (â€«Ù„ÙŠØ¨ÙŠØ§â€¬â€Ž)",
    "ly",
    "218"
  ],
  [
    "Liechtenstein",
    "li",
    "423"
  ],
  [
    "Lithuania (Lietuva)",
    "lt",
    "370"
  ],
  [
    "Luxembourg",
    "lu",
    "352"
  ],
  [
    "Macau (æ¾³é–€)",
    "mo",
    "853"
  ],
  [
    "Macedonia (FYROM) (ÐœÐ°ÐºÐµÐ´Ð¾Ð½Ð¸Ñ˜Ð°)",
    "mk",
    "389"
  ],
  [
    "Madagascar (Madagasikara)",
    "mg",
    "261"
  ],
  [
    "Malawi",
    "mw",
    "265"
  ],
  [
    "Malaysia",
    "my",
    "60"
  ],
  [
    "Maldives",
    "mv",
    "960"
  ],
  [
    "Mali",
    "ml",
    "223"
  ],
  [
    "Malta",
    "mt",
    "356"
  ],
  [
    "Marshall Islands",
    "mh",
    "692"
  ],
  [
    "Martinique",
    "mq",
    "596"
  ],
  [
    "Mauritania (â€«Ù…ÙˆØ±ÙŠØªØ§Ù†ÙŠØ§â€¬â€Ž)",
    "mr",
    "222"
  ],
  [
    "Mauritius (Moris)",
    "mu",
    "230"
  ],
  [
    "Mayotte",
    "yt",
    "262",
    1
  ],
  [
    "Mexico (MÃ©xico)",
    "mx",
    "52"
  ],
  [
    "Micronesia",
    "fm",
    "691"
  ],
  [
    "Moldova (Republica Moldova)",
    "md",
    "373"
  ],
  [
    "Monaco",
    "mc",
    "377"
  ],
  [
    "Mongolia (ÐœÐ¾Ð½Ð³Ð¾Ð»)",
    "mn",
    "976"
  ],
  [
    "Montenegro (Crna Gora)",
    "me",
    "382"
  ],
  [
    "Montserrat",
    "ms",
    "1664"
  ],
  [
    "Morocco (â€«Ø§Ù„Ù…ØºØ±Ø¨â€¬â€Ž)",
    "ma",
    "212",
    0
  ],
  [
    "Mozambique (MoÃ§ambique)",
    "mz",
    "258"
  ],
  [
    "Myanmar (Burma) (á€™á€¼á€”á€ºá€™á€¬)",
    "mm",
    "95"
  ],
  [
    "Namibia (NamibiÃ«)",
    "na",
    "264"
  ],
  [
    "Nauru",
    "nr",
    "674"
  ],
  [
    "Nepal (à¤¨à¥‡à¤ªà¤¾à¤²)",
    "np",
    "977"
  ],
  [
    "Netherlands (Nederland)",
    "nl",
    "31"
  ],
  [
    "New Caledonia (Nouvelle-CalÃ©donie)",
    "nc",
    "687"
  ],
  [
    "New Zealand",
    "nz",
    "64"
  ],
  [
    "Nicaragua",
    "ni",
    "505"
  ],
  [
    "Niger (Nijar)",
    "ne",
    "227"
  ],
  [
    "Nigeria",
    "ng",
    "234"
  ],
  [
    "Niue",
    "nu",
    "683"
  ],
  [
    "Norfolk Island",
    "nf",
    "672"
  ],
  [
    "North Korea (ì¡°ì„  ë¯¼ì£¼ì£¼ì˜ ì¸ë¯¼ ê³µí™”êµ­)",
    "kp",
    "850"
  ],
  [
    "Northern Mariana Islands",
    "mp",
    "1670"
  ],
  [
    "Norway (Norge)",
    "no",
    "47",
    0
  ],
  [
    "Oman (â€«Ø¹ÙÙ…Ø§Ù†â€¬â€Ž)",
    "om",
    "968"
  ],
  [
    "Pakistan (â€«Ù¾Ø§Ú©Ø³ØªØ§Ù†â€¬â€Ž)",
    "pk",
    "92"
  ],
  [
    "Palau",
    "pw",
    "680"
  ],
  [
    "Palestine (â€«ÙÙ„Ø³Ø·ÙŠÙ†â€¬â€Ž)",
    "ps",
    "970"
  ],
  [
    "Panama (PanamÃ¡)",
    "pa",
    "507"
  ],
  [
    "Papua New Guinea",
    "pg",
    "675"
  ],
  [
    "Paraguay",
    "py",
    "595"
  ],
  [
    "Peru (PerÃº)",
    "pe",
    "51"
  ],
  [
    "Philippines",
    "ph",
    "63"
  ],
  [
    "Poland (Polska)",
    "pl",
    "48"
  ],
  [
    "Portugal",
    "pt",
    "351"
  ],
  [
    "Puerto Rico",
    "pr",
    "1",
    3,
    ["787", "939"]
  ],
  [
    "Qatar (â€«Ù‚Ø·Ø±â€¬â€Ž)",
    "qa",
    "974"
  ],
  [
    "RÃ©union (La RÃ©union)",
    "re",
    "262",
    0
  ],
  [
    "Romania (RomÃ¢nia)",
    "ro",
    "40"
  ],
  [
    "Russia (Ð Ð¾ÑÑÐ¸Ñ)",
    "ru",
    "7",
    0
  ],
  [
    "Rwanda",
    "rw",
    "250"
  ],
  [
    "Saint BarthÃ©lemy (Saint-BarthÃ©lemy)",
    "bl",
    "590",
    1
  ],
  [
    "Saint Helena",
    "sh",
    "290"
  ],
  [
    "Saint Kitts and Nevis",
    "kn",
    "1869"
  ],
  [
    "Saint Lucia",
    "lc",
    "1758"
  ],
  [
    "Saint Martin (Saint-Martin (partie franÃ§aise))",
    "mf",
    "590",
    2
  ],
  [
    "Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)",
    "pm",
    "508"
  ],
  [
    "Saint Vincent and the Grenadines",
    "vc",
    "1784"
  ],
  [
    "Samoa",
    "ws",
    "685"
  ],
  [
    "San Marino",
    "sm",
    "378"
  ],
  [
    "SÃ£o TomÃ© and PrÃ­ncipe (SÃ£o TomÃ© e PrÃ­ncipe)",
    "st",
    "239"
  ],
  [
    "Saudi Arabia (â€«Ø§Ù„Ù…Ù…Ù„ÙƒØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ© Ø§Ù„Ø³Ø¹ÙˆØ¯ÙŠØ©â€¬â€Ž)",
    "sa",
    "966"
  ],
  [
    "Senegal (SÃ©nÃ©gal)",
    "sn",
    "221"
  ],
  [
    "Serbia (Ð¡Ñ€Ð±Ð¸Ñ˜Ð°)",
    "rs",
    "381"
  ],
  [
    "Seychelles",
    "sc",
    "248"
  ],
  [
    "Sierra Leone",
    "sl",
    "232"
  ],
  [
    "Singapore",
    "sg",
    "65"
  ],
  [
    "Sint Maarten",
    "sx",
    "1721"
  ],
  [
    "Slovakia (Slovensko)",
    "sk",
    "421"
  ],
  [
    "Slovenia (Slovenija)",
    "si",
    "386"
  ],
  [
    "Solomon Islands",
    "sb",
    "677"
  ],
  [
    "Somalia (Soomaaliya)",
    "so",
    "252"
  ],
  [
    "South Africa",
    "za",
    "27"
  ],
  [
    "South Korea (ëŒ€í•œë¯¼êµ­)",
    "kr",
    "82"
  ],
  [
    "South Sudan (â€«Ø¬Ù†ÙˆØ¨ Ø§Ù„Ø³ÙˆØ¯Ø§Ù†â€¬â€Ž)",
    "ss",
    "211"
  ],
  [
    "Spain (EspaÃ±a)",
    "es",
    "34"
  ],
  [
    "Sri Lanka (à·à·Šâ€à¶»à·“ à¶½à¶‚à¶šà·à·€)",
    "lk",
    "94"
  ],
  [
    "Sudan (â€«Ø§Ù„Ø³ÙˆØ¯Ø§Ù†â€¬â€Ž)",
    "sd",
    "249"
  ],
  [
    "Suriname",
    "sr",
    "597"
  ],
  [
    "Svalbard and Jan Mayen",
    "sj",
    "47",
    1
  ],
  [
    "Swaziland",
    "sz",
    "268"
  ],
  [
    "Sweden (Sverige)",
    "se",
    "46"
  ],
  [
    "Switzerland (Schweiz)",
    "ch",
    "41"
  ],
  [
    "Syria (â€«Ø³ÙˆØ±ÙŠØ§â€¬â€Ž)",
    "sy",
    "963"
  ],
  [
    "Taiwan (å°ç£)",
    "tw",
    "886"
  ],
  [
    "Tajikistan",
    "tj",
    "992"
  ],
  [
    "Tanzania",
    "tz",
    "255"
  ],
  [
    "Thailand (à¹„à¸—à¸¢)",
    "th",
    "66"
  ],
  [
    "Timor-Leste",
    "tl",
    "670"
  ],
  [
    "Togo",
    "tg",
    "228"
  ],
  [
    "Tokelau",
    "tk",
    "690"
  ],
  [
    "Tonga",
    "to",
    "676"
  ],
  [
    "Trinidad and Tobago",
    "tt",
    "1868"
  ],
  [
    "Tunisia (â€«ØªÙˆÙ†Ø³â€¬â€Ž)",
    "tn",
    "216"
  ],
  [
    "Turkey (TÃ¼rkiye)",
    "tr",
    "90"
  ],
  [
    "Turkmenistan",
    "tm",
    "993"
  ],
  [
    "Turks and Caicos Islands",
    "tc",
    "1649"
  ],
  [
    "Tuvalu",
    "tv",
    "688"
  ],
  [
    "U.S. Virgin Islands",
    "vi",
    "1340"
  ],
  [
    "Uganda",
    "ug",
    "256"
  ],
  [
    "Ukraine (Ð£ÐºÑ€Ð°Ñ—Ð½Ð°)",
    "ua",
    "380"
  ],
  [
    "United Arab Emirates (â€«Ø§Ù„Ø¥Ù…Ø§Ø±Ø§Øª Ø§Ù„Ø¹Ø±Ø¨ÙŠØ© Ø§Ù„Ù…ØªØ­Ø¯Ø©â€¬â€Ž)",
    "ae",
    "971"
  ],
  [
    "United Kingdom",
    "gb",
    "44",
    0
  ],
  [
    "United States",
    "us",
    "1",
    0
  ],
  [
    "Uruguay",
    "uy",
    "598"
  ],
  [
    "Uzbekistan (OÊ»zbekiston)",
    "uz",
    "998"
  ],
  [
    "Vanuatu",
    "vu",
    "678"
  ],
  [
    "Vatican City (CittÃ  del Vaticano)",
    "va",
    "39",
    1
  ],
  [
    "Venezuela",
    "ve",
    "58"
  ],
  [
    "Vietnam (Viá»‡t Nam)",
    "vn",
    "84"
  ],
  [
    "Wallis and Futuna",
    "wf",
    "681"
  ],
  [
    "Western Sahara (â€«Ø§Ù„ØµØ­Ø±Ø§Ø¡ Ø§Ù„ØºØ±Ø¨ÙŠØ©â€¬â€Ž)",
    "eh",
    "212",
    1
  ],
  [
    "Yemen (â€«Ø§Ù„ÙŠÙ…Ù†â€¬â€Ž)",
    "ye",
    "967"
  ],
  [
    "Zambia",
    "zm",
    "260"
  ],
  [
    "Zimbabwe",
    "zw",
    "263"
  ],
  [
    "Ã…land Islands",
    "ax",
    "358",
    1
  ]
];

// loop over all of the countries above
for (var i = 0; i < allCountries.length; i++) {
  var c = allCountries[i];
  allCountries[i] = {
    name: c[0],
    iso2: c[1],
    dialCode: c[2],
    priority: c[3] || 0,
    areaCodes: c[4] || null
  };
}