<?php
 return array ( 'generalDesc' => array ( 'NationalNumberPattern' => '(?:[3469]\\d|52|[78]0)\\d{6}', 'PossibleLength' => array ( 0 => 8, ), 'PossibleLengthLocalOnly' => array ( ), ), 'fixedLine' => array ( 'NationalNumberPattern' => '(?:3[1478]|4[124-6]|52)\\d{6}', 'ExampleNumber' => '31234567', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'mobile' => array ( 'NationalNumberPattern' => '6\\d{7}', 'ExampleNumber' => '61234567', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'tollFree' => array ( 'NationalNumberPattern' => '80[02]\\d{5}', 'ExampleNumber' => '80012345', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'premiumRate' => array ( 'NationalNumberPattern' => '9(?:0[0239]|10)\\d{5}', 'ExampleNumber' => '90012345', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'sharedCost' => array ( 'NationalNumberPattern' => '808\\d{5}', 'ExampleNumber' => '80812345', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'personalNumber' => array ( 'NationalNumberPattern' => '70[05]\\d{5}', 'ExampleNumber' => '70012345', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'voip' => array ( 'NationalNumberPattern' => '[89]01\\d{5}', 'ExampleNumber' => '80123456', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'pager' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'uan' => array ( 'NationalNumberPattern' => '70[67]\\d{5}', 'ExampleNumber' => '70712345', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'voicemail' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'noInternationalDialling' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'id' => 'LT', 'countryCode' => 370, 'internationalPrefix' => '00', 'nationalPrefix' => '8', 'nationalPrefixForParsing' => '[08]', 'sameMobileAndFixedLinePattern' => false, 'numberFormat' => array ( 0 => array ( 'pattern' => '(\\d)(\\d{3})(\\d{4})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '52[0-7]', ), 'nationalPrefixFormattingRule' => '(8-$1)', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => true, ), 1 => array ( 'pattern' => '(\\d{3})(\\d{2})(\\d{3})', 'format' => '$1 $2 $3', 'leadingDigitsPatterns' => array ( 0 => '[7-9]', ), 'nationalPrefixFormattingRule' => '8 $1', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => true, ), 2 => array ( 'pattern' => '(\\d{2})(\\d{6})', 'format' => '$1 $2', 'leadingDigitsPatterns' => array ( 0 => '37|4(?:[15]|6[1-8])', ), 'nationalPrefixFormattingRule' => '(8-$1)', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => true, ), 3 => array ( 'pattern' => '(\\d{3})(\\d{5})', 'format' => '$1 $2', 'leadingDigitsPatterns' => array ( 0 => '[3-6]', ), 'nationalPrefixFormattingRule' => '(8-$1)', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => true, ), ), 'intlNumberFormat' => array ( ), 'mainCountryForCode' => false, 'leadingZeroPossible' => false, 'mobileNumberPortableRegion' => true, ); 