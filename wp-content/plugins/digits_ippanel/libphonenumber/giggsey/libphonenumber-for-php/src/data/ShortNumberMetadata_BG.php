<?php
 return array ( 'generalDesc' => array ( 'NationalNumberPattern' => '1\\d\\d(?:\\d{3})?', 'PossibleLength' => array ( 0 => 3, 1 => 6, ), 'PossibleLengthLocalOnly' => array ( ), ), 'tollFree' => array ( 'NationalNumberPattern' => '1(?:1(?:2|6\\d{3})|50|6[06])', 'ExampleNumber' => '112', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'premiumRate' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'emergency' => array ( 'NationalNumberPattern' => '1(?:12|50|6[06])', 'ExampleNumber' => '112', 'PossibleLength' => array ( 0 => 3, ), 'PossibleLengthLocalOnly' => array ( ), ), 'shortCode' => array ( 'NationalNumberPattern' => '1(?:1(?:2|6(?:000|111))|50|6[06])', 'ExampleNumber' => '112', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'standardRate' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'carrierSpecific' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'smsServices' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'id' => 'BG', 'countryCode' => 0, 'internationalPrefix' => '', 'sameMobileAndFixedLinePattern' => false, 'numberFormat' => array ( ), 'intlNumberFormat' => array ( ), 'mainCountryForCode' => false, 'leadingZeroPossible' => false, 'mobileNumberPortableRegion' => false, ); 