<?php
 return array ( 'generalDesc' => array ( 'NationalNumberPattern' => '[1-69]\\d{2,5}', 'PossibleLength' => array ( 0 => 3, 1 => 4, 2 => 5, 3 => 6, ), 'PossibleLengthLocalOnly' => array ( ), ), 'tollFree' => array ( 'NationalNumberPattern' => '1(?:00|12|28|8[015]|9[0-47-9])|4(?:57|82\\d)|911', 'ExampleNumber' => '100', 'PossibleLength' => array ( 0 => 3, 1 => 4, ), 'PossibleLengthLocalOnly' => array ( ), ), 'premiumRate' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'emergency' => array ( 'NationalNumberPattern' => '1(?:12|28|9[023])|911', 'ExampleNumber' => '112', 'PossibleLength' => array ( 0 => 3, ), 'PossibleLengthLocalOnly' => array ( ), ), 'shortCode' => array ( 'NationalNumberPattern' => '1(?:0(?:[02]|3(?:1[2-579]|2[13-9]|3[124-9]|4[1-3578]|5[1-468]|6[139]|8[149]|9[168])|5[0-35-9]|6(?:0|1[0-35-8]?|2[0145]|3[0137]?|4[37-9]?|5[0-35]|6[016]?|7[137]?|8[5-8]|9[1359]))|1[25-8]|2[357-9]|3[024-68]|4[12568]|5\\d|6[0-8]|8[015]|9[0-47-9])|2(?:7(?:330|878)|85959?)|(?:32|91)1|4(?:0404?|57|828)|55555|6(?:0\\d{4}|10000)|(?:133|411)[12]', 'ExampleNumber' => '100', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'standardRate' => array ( 'NationalNumberPattern' => '102|273\\d\\d|321', 'ExampleNumber' => '102', 'PossibleLength' => array ( 0 => 3, 1 => 5, ), 'PossibleLengthLocalOnly' => array ( ), ), 'carrierSpecific' => array ( 'NationalNumberPattern' => '151|(?:278|555)\\d\\d|4(?:04\\d\\d?|11\\d|57)', 'ExampleNumber' => '151', 'PossibleLength' => array ( 0 => 3, 1 => 4, 2 => 5, ), 'PossibleLengthLocalOnly' => array ( ), ), 'smsServices' => array ( 'NationalNumberPattern' => '285\\d{2,3}|321|40404|(?:27[38]\\d|482)\\d|6(?:0\\d|10)\\d{3}', 'ExampleNumber' => '321', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'id' => 'BR', 'countryCode' => 0, 'internationalPrefix' => '', 'sameMobileAndFixedLinePattern' => false, 'numberFormat' => array ( ), 'intlNumberFormat' => array ( ), 'mainCountryForCode' => false, 'leadingZeroPossible' => false, 'mobileNumberPortableRegion' => false, ); 