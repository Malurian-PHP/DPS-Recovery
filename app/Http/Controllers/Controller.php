<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

 $sURL = "https://test.myfloridacounty.com/myflc-pay/OpenPay.do"; // The POST URL
//$sPD = "UserID=12936&serviceID=5733&BILL_TO_FNAME=test&BILL_TO_LNAME=tester&CARD_NUMBER=4111111111111111&CARD_TYPE=VISA&CARD_EXP_MONTH=06&CARD_EXP_YEAR=2020&PAYMENT_AMOUNT=10.00&CONV_FEE=0.00&mode=AS"; // The POST Data
/*$sPD = "UserID=4887&serviceID=1693&BILL_TO_FNAME=test&BILL_TO_LNAME=tester&CARD_NUMBER=41111
11111111111&CARD_TYPE=VISA&CARD_EXP_MONTH=11&CARD_EXP_YEAR=2007&CVV=432&ZIPCODE=12345&PA
YMENT_AMOUNT=0.01&CONV_FEE=0.00&mode=AS";*/
$sPD = "UserID=12936&serviceID=5733&BILL_TO_FNAME=test&BILL_TO_LNAME=tester&CARD_NUMBER=4111111111111111&CARD_TYPE=VISA&CARD_EXP_MONTH=11&CARD_EXP_YEAR=2019&CVV=432&ZIPCODE=12345&PAYMENT_AMOUNT=0.01&CONV_FEE=0.00&mode=AS";

https://myfloridacounty.com/myflc-pay/paynow/expressPay.do/?"&UserID=".56032."&serviceID=".10911.
                    "&BILL_TO_FNAME=".$user->caseNameFirst."&BILL_TO_LNAME=".$user->caseNameLast."&CARD_NUMBER=".5543920394023-."&CARD_TYPE=".Visa."&CARD_EXP_MONTH="
                    .Jul."&CARD_EXP_YEAR=".2022."&CVV=".543."&ZIPCODE=".30424."&PAYMENT_AMOUNT=".$user->balance->balAmtCrntBal."&CONV_FEE=0.00&mode=AS""
$aHTTP = array(
  'http' => // The wrapper to be used
    array(
    'method'  => 'POST', // Request Method
    // Request Headers Below
    'header'  => 'Content-type: application/x-www-form-urlencoded',
    'content' => $sPD
  )
);
$context = stream_context_create($aHTTP);
$contents = file_get_contents($sURL, false, $context);

echo $contents;