<?php

function home_url($path = null){
    if(!$path){
        return SITE_URL;
    }
    return SITE_URL . $path;
}

function get_module_name(){
	//bejay $_SERVER['REQUEST_SCHEME'] az reshte https estefade kardim
    // $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $url = $_SERVER['HTTP_X_FORWARDED_PROTO'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    include_once ('config.php');
    $req = str_replace(SITE_URL, '', $url);
    $question_mark_pos = strpos($req, '?');
    if($question_mark_pos !== false){
        $req = substr($req, 0, $question_mark_pos);
    }
	
    return $req;
}

function is_valid_url($url){
    if(empty($url)){
        return false;
    }
    return (filter_var($url, FILTER_VALIDATE_URL) !== false);
}

function redirect_to($url){
    if(!is_valid_url($url)){
        return;
    }
    header("Location: $url");
    die();
}

//----------------------------- dargah ----------------------------

/**
 * put your gatewat merchant key here.
 * use "zibal" for test
 */
define("ZIBAL_MERCHANT_KEY","zibal");

define("ZIBAL_CALLBACK_URL","https://kikiq.herokuapp.com/callback");

/**
 * connects to zibal's rest api
 * @param $path
 * @param $parameters
 * @return stdClass
 */
function postToZibal($path, $parameters)
{
    $url = 'https://gateway.zibal.ir/v1/'.$path;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($parameters));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response  = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
}

/**
 * returns a string message based on result parameter from curl response
 * @param $code
 * @return String
 */
function resultCodes($code)
{
    switch ($code)
    {
        case 100:
            return "با موفقیت تایید شد";

        case 102:
            return "merchant یافت نشد";

        case 103:
            return "merchant غیرفعال";

        case 104:
            return "merchant نامعتبر";

        case 201:
            return "قبلا تایید شده";

        case 105:
            return "amount بایستی بزرگتر از 1,000 ریال باشد";

        case 106:
            return "callbackUrl نامعتبر می‌باشد. (شروع با http و یا https)";

        case 113:
            return "amount مبلغ تراکنش از سقف میزان تراکنش بیشتر است.";

        case 201:
            return "قبلا تایید شده";

        case 202:
            return "سفارش پرداخت نشده یا ناموفق بوده است";

        case 203:
            return "trackId نامعتبر می‌باشد";

        default:
            return "وضعیت مشخص شده معتبر نیست";
    }
}

/**
 * returns a string message based on status parameter from $_GET
 * @param $code
 * @return String
 */
function statusCodes($code)
{
    switch ($code)
    {
        case -1:
            return "در انتظار پردخت";

        case -2:
            return "خطای داخلی";

        case 1:
            return "پرداخت شده - تاییدشده";

        case 2:
            return "پرداخت شده - تاییدنشده";

        case 3:
            return "لغوشده توسط کاربر";

        case 4:
            return "‌شماره کارت نامعتبر می‌باشد";

        case 5:
            return "‌موجودی حساب کافی نمی‌باشد";

        case 6:
            return "رمز واردشده اشتباه می‌باشد";

        case 7:
            return "‌تعداد درخواست‌ها بیش از حد مجاز می‌باشد";

        case 8:
            return "‌تعداد پرداخت اینترنتی روزانه بیش از حد مجاز می‌باشد";

        case 9:
            return "مبلغ پرداخت اینترنتی روزانه بیش از حد مجاز می‌باشد";

        case 10:
            return "‌صادرکننده‌ی کارت نامعتبر می‌باشد";

        case 11:
            return "خطای سوییچ";

        case 12:
            return "کارت قابل دسترسی نمی‌باشد";

        default:
            return "وضعیت مشخص شده معتبر نیست";
    }
}