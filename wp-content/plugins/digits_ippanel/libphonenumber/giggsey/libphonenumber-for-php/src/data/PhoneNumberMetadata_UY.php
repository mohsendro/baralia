<?php
 return array ( 'generalDesc' => array ( 'NationalNumberPattern' => '4\\d{9}|[249]\\d{7}|(?:[49]\\d|80)\\d{5}', 'PossibleLength' => array ( 0 => 7, 1 => 8, 2 => 10, ), 'PossibleLengthLocalOnly' => array ( ), ), 'fixedLine' => array ( 'NationalNumberPattern' => '(?:2\\d|4[2-7])\\d{6}', 'ExampleNumber' => '21231234', 'PossibleLength' => array ( 0 => 8, ), 'PossibleLengthLocalOnly' => array ( 0 => 7, ), ), 'mobile' => array ( 'NationalNumberPattern' => '9[1-9]\\d{6}', 'ExampleNumber' => '94231234', 'PossibleLength' => array ( 0 => 8, ), 'PossibleLengthLocalOnly' => array ( ), ), 'tollFree' => array ( 'NationalNumberPattern' => '(?:4\\d{5}|80[05])\\d{4}|405\\d{4}', 'ExampleNumber' => '8001234', 'PossibleLength' => array ( 0 => 7, 1 => 10, ), 'PossibleLengthLocalOnly' => array ( ), ), 'premiumRate' => array ( 'NationalNumberPattern' => '90[0-8]\\d{4}', 'ExampleNumber' => '9001234', 'PossibleLength' => array ( 0 => 7, ), 'PossibleLengthLocalOnly' => array ( ), ), 'sharedCost' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'personalNumber' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'voip' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'pager' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'uan' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'voicemail' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'noInternationalDialling' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'id' => 'UY', 'countryCode' => 598, 'internationalPrefix' => '0(?:0|1[3-9]\\d)', 'preferredInternationalPrefix' => '00', 'nationalPrefix' => '0', 'preferredExtnPrefix' => ' int. ', 'nationalPrefixForParsing' => '0', 'sameMobileAndFixedLinePattern' => false, 'numberFormat' => array ( 0 => array ( 'pattern' => '(\\d{3})(\\d{4})', 'format' => '$1 $2', 'leadingDigitsPatterns' => array ( 0 => '405|8|90', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 1 => array ( 'pattern' => '(\\d{2})(\\d{3})(\\d{3})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '9', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 2 => array ( 'pattern' => '(\\d{4})(\\d{4})', 'format' => '$1 $2', 'leadingDigitsPatterns' => array ( 0 => '[24]', ), 'nationalPrefixFormattingRule' => '', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 3 => array ( 'pattern' => '(\\d{3})(\\d{3})(\\d{4})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '4', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), ), 'intlNumberFormat' => array ( ), 'mainCountryForCode' => false, 'leadingZeroPossible' => false, 'mobileNumberPortableRegion' => false, ); 