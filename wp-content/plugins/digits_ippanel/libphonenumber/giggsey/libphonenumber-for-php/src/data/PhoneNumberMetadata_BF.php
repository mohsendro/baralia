<?php
 return array ( 'generalDesc' => array ( 'NationalNumberPattern' => '[025-7]\\d{7}', 'PossibleLength' => array ( 0 => 8, ), 'PossibleLengthLocalOnly' => array ( ), ), 'fixedLine' => array ( 'NationalNumberPattern' => '2(?:0(?:49|5[23]|6[56]|9[016-9])|4(?:4[569]|5[4-6]|6[56]|7[0179])|5(?:[34]\\d|50|6[5-7]))\\d{4}', 'ExampleNumber' => '20491234', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'mobile' => array ( 'NationalNumberPattern' => '(?:0[127]|5[1-8]|[67]\\d)\\d{6}', 'ExampleNumber' => '70123456', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'tollFree' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'premiumRate' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'sharedCost' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'personalNumber' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'voip' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'pager' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'uan' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'voicemail' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'noInternationalDialling' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'id' => 'BF', 'countryCode' => 226, 'internationalPrefix' => '00', 'sameMobileAndFixedLinePattern' => false, 'numberFormat' => array ( 0 => array ( 'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})', 'format' => '$1 $2 $3 $4', 'leadingDigitsPatterns' => array ( 0 => '[025-7]', ), 'nationalPrefixFormattingRule' => '', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), ), 'intlNumberFormat' => array ( ), 'mainCountryForCode' => false, 'leadingZeroPossible' => false, 'mobileNumberPortableRegion' => false, ); 