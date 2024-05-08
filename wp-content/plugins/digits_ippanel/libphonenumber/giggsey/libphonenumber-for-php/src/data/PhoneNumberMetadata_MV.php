<?php
 return array ( 'generalDesc' => array ( 'NationalNumberPattern' => '(?:800|9[0-57-9]\\d)\\d{7}|[34679]\\d{6}', 'PossibleLength' => array ( 0 => 7, 1 => 10, ), 'PossibleLengthLocalOnly' => array ( ), ), 'fixedLine' => array ( 'NationalNumberPattern' => '(?:3(?:0[0-3]|3[0-59])|6(?:[57][02468]|6[024-68]|8[024689]))\\d{4}', 'ExampleNumber' => '6701234', 'PossibleLength' => array ( 0 => 7, ), 'PossibleLengthLocalOnly' => array ( ), ), 'mobile' => array ( 'NationalNumberPattern' => '46[46]\\d{4}|(?:7\\d|9[13-9])\\d{5}', 'ExampleNumber' => '7712345', 'PossibleLength' => array ( 0 => 7, ), 'PossibleLengthLocalOnly' => array ( ), ), 'tollFree' => array ( 'NationalNumberPattern' => '800\\d{7}', 'ExampleNumber' => '8001234567', 'PossibleLength' => array ( 0 => 10, ), 'PossibleLengthLocalOnly' => array ( ), ), 'premiumRate' => array ( 'NationalNumberPattern' => '900\\d{7}', 'ExampleNumber' => '9001234567', 'PossibleLength' => array ( 0 => 10, ), 'PossibleLengthLocalOnly' => array ( ), ), 'sharedCost' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'personalNumber' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'voip' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'pager' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'uan' => array ( 'NationalNumberPattern' => '4[05]0\\d{4}', 'ExampleNumber' => '4001234', 'PossibleLength' => array ( 0 => 7, ), 'PossibleLengthLocalOnly' => array ( ), ), 'voicemail' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'noInternationalDialling' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'id' => 'MV', 'countryCode' => 960, 'internationalPrefix' => '0(?:0|19)', 'preferredInternationalPrefix' => '00', 'sameMobileAndFixedLinePattern' => false, 'numberFormat' => array ( 0 => array ( 'pattern' => '(\\d{3})(\\d{4})', 'format' => '$1-$2', 'leadingDigitsPatterns' => array ( 0 => '[3467]|9[13-9]', ), 'nationalPrefixFormattingRule' => '', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 1 => array ( 'pattern' => '(\\d{3})(\\d{3})(\\d{4})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '[89]', ), 'nationalPrefixFormattingRule' => '', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), ), 'intlNumberFormat' => array ( ), 'mainCountryForCode' => false, 'leadingZeroPossible' => false, 'mobileNumberPortableRegion' => false, ); 