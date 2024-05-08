<?php
 return array ( 'generalDesc' => array ( 'NationalNumberPattern' => '[58]\\d{9}|(?:34|90)0\\d{7}', 'PossibleLength' => array ( 0 => 10, ), 'PossibleLengthLocalOnly' => array ( 0 => 7, ), ), 'fixedLine' => array ( 'NationalNumberPattern' => '340(?:2(?:0[12]|2[06-8]|4[49]|77)|3(?:32|44)|4(?:2[23]|44|7[34]|89)|5(?:1[34]|55)|6(?:2[56]|4[23]|77|9[023])|7(?:1[2-57-9]|2[57]|7\\d)|884|998)\\d{4}', 'ExampleNumber' => '3406421234', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( 0 => 7, ), ), 'mobile' => array ( 'NationalNumberPattern' => '340(?:2(?:0[12]|2[06-8]|4[49]|77)|3(?:32|44)|4(?:2[23]|44|7[34]|89)|5(?:1[34]|55)|6(?:2[56]|4[23]|77|9[023])|7(?:1[2-57-9]|2[57]|7\\d)|884|998)\\d{4}', 'ExampleNumber' => '3406421234', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( 0 => 7, ), ), 'tollFree' => array ( 'NationalNumberPattern' => '8(?:00|33|44|55|66|77|88)[2-9]\\d{6}', 'ExampleNumber' => '8002345678', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'premiumRate' => array ( 'NationalNumberPattern' => '900[2-9]\\d{6}', 'ExampleNumber' => '9002345678', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'sharedCost' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'personalNumber' => array ( 'NationalNumberPattern' => '52(?:3(?:[2-46-9][02-9]\\d|5(?:[02-46-9]\\d|5[0-46-9]))|4(?:[2-478][02-9]\\d|5(?:[034]\\d|2[024-9]|5[0-46-9])|6(?:0[1-9]|[2-9]\\d)|9(?:[05-9]\\d|2[0-5]|49)))\\d{4}|52[34][2-9]1[02-9]\\d{4}|5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}', 'ExampleNumber' => '5002345678', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'voip' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'pager' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'uan' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'voicemail' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'noInternationalDialling' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'id' => 'VI', 'countryCode' => 1, 'internationalPrefix' => '011', 'nationalPrefix' => '1', 'nationalPrefixForParsing' => '1|([2-9]\\d{6})$', 'nationalPrefixTransformRule' => '340$1', 'sameMobileAndFixedLinePattern' => true, 'numberFormat' => array ( ), 'intlNumberFormat' => array ( ), 'mainCountryForCode' => false, 'leadingDigits' => '340', 'leadingZeroPossible' => false, 'mobileNumberPortableRegion' => false, ); 