<?php
$webServiceURL  = "http://login.parsgreen.com/Api/SendSMS.asmx?WSDL";  
$webServiceSignature = "348E3537-42B1-4155-A2B6-440353854D59";  
$webServiceNumber   = "10001391"; 
$Mobiles      = array ( "09331001391","09331001391"); // all mobile add in this array => support one or more
$isFlash = false; // falsh sms => open quick in phone and after close message , cleare from phone ;

mb_internal_encoding("utf-8");
 $textMessage="سلام"; // sms text// the text or body for sending 
 $textMessage= mb_convert_encoding($textMessage,"UTF-8"); // encoding to utf-8
 // OR
 //$textMessage=iconv($encoding, 'UTF-8//TRANSLIT', $textMessage); // encoding to utf-8
 // OR
 //$textMessage =  utf8_encode( $str); // encoding to utf-8

     $parameters['signature'] = $webServiceSignature;
     $parameters['from' ]= $webServiceNumber;
     $parameters['to' ]  = $Mobiles;
     $parameters['text' ]=$textMessage;
     $parameters[ 'isFlash'] = $isFlash;
     $parameters['udh' ]= ""; // this is string  empty
     $parameters['success'] = 0x0; // return refrence success count // success count is number of send sms  success
     $parameters[ 'retStr'] = array( 0  ); // return refrence send status and mobile and report code for delivery
  
 
try 
{
    $con = new SoapClient($webServiceURL);  

    $responseSTD = (array) $con ->SendGroupSMS($parameters); 
    echo  $responseSTD['SendGroupSMSResult'];  /// print status of request // difrent between SendGroupSMSResult and success count 
    // maybe you can send request success but success count and retStr be diferent ;
    
    echo '#';
    echo $responseSTD['success'];
  
    echo '#';
    $responseSTD['retStr'] = (array) $responseSTD['retStr'];
   
   
   if       ( $responseSTD['success']>1)
   {
    
   
    foreach ($responseSTD['retStr']['string'] as $key => $val)
    
     {
          echo '@';
          echo $val;
          // pattern => mobile;sendstatus;reportId
         //@09331001391;0;124172151191542323
         //@09331001391;0;115161825942015958 
     }
     }
     else if ( $responseSTD['success']==1)
     {
       echo  $responseSTD['retStr']['string'];
     }
     else    
     {
        echo 'dont any send';
     }
}
catch (SoapFault $ex) 
{
    echo $ex->faultstring;  
}

?>
 