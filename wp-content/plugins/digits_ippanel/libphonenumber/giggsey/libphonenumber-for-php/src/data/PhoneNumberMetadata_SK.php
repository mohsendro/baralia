<?php
 return array ( 'generalDesc' => array ( 'NationalNumberPattern' => '[2-689]\\d{8}|[2-59]\\d{6}|[2-5]\\d{5}', 'PossibleLength' => array ( 0 => 6, 1 => 7, 2 => 9, ), 'PossibleLengthLocalOnly' => array ( ), ), 'fixedLine' => array ( 'NationalNumberPattern' => '(?:2(?:16|[2-9]\\d{3})|(?:(?:[3-5][1-8]\\d|819)\\d|601[1-5])\\d)\\d{4}|(?:2|[3-5][1-8])1[67]\\d{3}|[3-5][1-8]16\\d\\d', 'ExampleNumber' => '221234567', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'mobile' => array ( 'NationalNumberPattern' => '909[1-9]\\d{5}|9(?:0[1-8]|1[0-24-9]|4[03-57-9]|5\\d)\\d{6}', 'ExampleNumber' => '912123456', 'PossibleLength' => array ( 0 => 9, ), 'PossibleLengthLocalOnly' => array ( ), ), 'tollFree' => array ( 'NationalNumberPattern' => '800\\d{6}', 'ExampleNumber' => '800123456', 'PossibleLength' => array ( 0 => 9, ), 'PossibleLengthLocalOnly' => array ( ), ), 'premiumRate' => array ( 'NationalNumberPattern' => '9(?:00|[78]\\d)\\d{6}', 'ExampleNumber' => '900123456', 'PossibleLength' => array ( 0 => 9, ), 'PossibleLengthLocalOnly' => array ( ), ), 'sharedCost' => array ( 'NationalNumberPattern' => '8[5-9]\\d{7}', 'ExampleNumber' => '850123456', 'PossibleLength' => array ( 0 => 9, ), 'PossibleLengthLocalOnly' => array ( ), ), 'personalNumber' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'voip' => array ( 'NationalNumberPattern' => '6(?:02|5[0-4]|9[0-6])\\d{6}', 'ExampleNumber' => '690123456', 'PossibleLength' => array ( 0 => 9, ), 'PossibleLengthLocalOnly' => array ( ), ), 'pager' => array ( 'NationalNumberPattern' => '9090\\d{3}', 'ExampleNumber' => '9090123', 'PossibleLength' => array ( 0 => 7, ), 'PossibleLengthLocalOnly' => array ( ), ), 'uan' => array ( 'NationalNumberPattern' => '96\\d{7}', 'ExampleNumber' => '961234567', 'PossibleLength' => array ( 0 => 9, ), 'PossibleLengthLocalOnly' => array ( ), ), 'voicemail' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'noInternationalDialling' => array ( 'NationalNumberPattern' => '9090\\d{3}|(?:602|8(?:00|[5-9]\\d)|9(?:00|[78]\\d))\\d{6}', 'PossibleLength' => array ( 0 => 7, 1 => 9, ), 'PossibleLengthLocalOnly' => array ( ), ), 'id' => 'SK', 'countryCode' => 421, 'internationalPrefix' => '00', 'nationalPrefix' => '0', 'nationalPrefixForParsing' => '0', 'sameMobileAndFixedLinePattern' => false, 'numberFormat' => array ( 0 => array ( 'pattern' => '(\\d)(\\d{2})(\\d{3,4})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '21', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 1 => array ( 'pattern' => '(\\d{2})(\\d{2})(\\d{2,3})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '[3-5][1-8]1', 1 => '[3-5][1-8]1[67]', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 2 => array ( 'pattern' => '(\\d{4})(\\d{3})', 'format' => '$1 $2', 'leadingDigitsPatterns' => array ( 0 => '909', 1 => '9090', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 3 => array ( 'pattern' => '(\\d)(\\d{3})(\\d{3})(\\d{2})', 'format' => '$1/$2 $3 $4', 'leadingDigitsPatterns' => array ( 0 => '2', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 4 => array ( 'pattern' => '(\\d{3})(\\d{3})(\\d{3})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '[689]', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 5 => array ( 'pattern' => '(\\d{2})(\\d{3})(\\d{2})(\\d{2})', 'format' => '$1/$2 $3 $4', 'leadingDigitsPatterns' => array ( 0 => '[3-5]', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), ), 'intlNumberFormat' => array ( 0 => array ( 'pattern' => '(\\d)(\\d{2})(\\d{3,4})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '21', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 1 => array ( 'pattern' => '(\\d{2})(\\d{2})(\\d{2,3})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '[3-5][1-8]1', 1 => '[3-5][1-8]1[67]', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 2 => array ( 'pattern' => '(\\d)(\\d{3})(\\d{3})(\\d{2})', 'format' => '$1/$2 $3 $4', 'leadingDigitsPatterns' => array ( 0 => '2', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 3 => array ( 'pattern' => '(\\d{3})(\\d{3})(\\d{3})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '[689]', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), 4 => array ( 'pattern' => '(\\d{2})(\\d{3})(\\d{2})(\\d{2})', 'format' => '$1/$2 $3 $4', 'leadingDigitsPatterns' => array ( 0 => '[3-5]', ), 'nationalPrefixFormattingRule' => '0$1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), ), 'mainCountryForCode' => false, 'leadingZeroPossible' => false, 'mobileNumberPortableRegion' => true, ); 