<?php
 return array ( 'generalDesc' => array ( 'NationalNumberPattern' => '3550\\d{4}|(?:[2579]\\d\\d|800)\\d{5}', 'PossibleLength' => array ( 0 => 8, ), 'PossibleLengthLocalOnly' => array ( ), ), 'fixedLine' => array ( 'NationalNumberPattern' => '2(?:0(?:[19]\\d|3[1-4]|6[059])|[1-357]\\d\\d)\\d{4}', 'ExampleNumber' => '21001234', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'mobile' => array ( 'NationalNumberPattern' => '(?:7(?:210|[79]\\d\\d)|9(?:[29]\\d\\d|69[67]|8(?:1[1-3]|89|97)))\\d{4}', 'ExampleNumber' => '96961234', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'tollFree' => array ( 'NationalNumberPattern' => '800[3467]\\d{4}', 'ExampleNumber' => '80071234', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'premiumRate' => array ( 'NationalNumberPattern' => '5(?:0(?:0(?:37|43)|(?:6\\d|70|9[0168])\\d)|[12]\\d0[1-5])\\d{3}', 'ExampleNumber' => '50037123', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'sharedCost' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'personalNumber' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'voip' => array ( 'NationalNumberPattern' => '3550\\d{4}', 'ExampleNumber' => '35501234', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'pager' => array ( 'NationalNumberPattern' => '7117\\d{4}', 'ExampleNumber' => '71171234', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'uan' => array ( 'NationalNumberPattern' => '501\\d{5}', 'ExampleNumber' => '50112345', 'PossibleLength' => array ( ), 'PossibleLengthLocalOnly' => array ( ), ), 'voicemail' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'noInternationalDialling' => array ( 'PossibleLength' => array ( 0 => -1, ), 'PossibleLengthLocalOnly' => array ( ), ), 'id' => 'MT', 'countryCode' => 356, 'internationalPrefix' => '00', 'sameMobileAndFixedLinePattern' => false, 'numberFormat' => array ( 0 => array ( 'pattern' => '(\\d{4})(\\d{4})', 'format' => '$1 $2', 'leadingDigitsPatterns' => array ( 0 => '[2357-9]', ), 'nationalPrefixFormattingRule' => '', 'domesticCarrierCodeFormattingRule' => '', 'nationalPrefixOptionalWhenFormatting' => false, ), ), 'intlNumberFormat' => array ( ), 'mainCountryForCode' => false, 'leadingZeroPossible' => false, 'mobileNumberPortableRegion' => true, ); 