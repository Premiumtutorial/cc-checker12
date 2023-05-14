<?php
error_reporting(0);

function getJsonResponse($data)
{
  $checkout = $data;
  if (!empty($checkout)) {
    $url = explode('#', $checkout)[1];
    $cs = Getstr($checkout, 'pay/', '#');
    $pk = Getstr(xor_string(base64_decode(urldecode($url)), 5), '"apiKey":"', '"');
    $site = Getstr(xor_string(base64_decode(urldecode($url)), 5), '"referrerOrigin":"', '"');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/' . $cs . '/init');
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = 'sec-ch-ua: "Not:A-Brand";v="99", "Chromium";v="112"';
    $headers[] = 'sec-ch-ua-mobile: ?1';
    $headers[] = 'sec-ch-ua-platform: "Android"';
    $headers[] = 'sec-fetch-dest: empty';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'sec-fetch-site: same-origin';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 12; M1901F7S) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36';
    $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $pk . ':' . '');
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'key=' . $pk . '&eid=NA&browser_locale=en-US&redirect_type=stripe_js');
    $fim = curl_exec($ch);

    if (strpos($fim, 'No such payment_page')) {
      echo "Expired Link";
    } else {
      $name = Getstr($fim, '"display_name": "', '"');
      $email = Getstr($fim, '"customer_email": "', '"');
      $cur = Getstr($fim, '"currency": "', '"');
      $amt = Getstr($fim, '"amount": ', ',');
      if (empty($amt)) {
        $amt = Getstr($fim, '"total": ', ',');
        if (empty($amt)) {
          $amt = '____';
        }
      }
      if (empty($name)) {
        $name = '____';
      }
      if (empty($pk)) {
        $pk = '____';
      }
      if (empty($site)) {
        $site = '____';
      }
      if (empty($cs)) {
        $cs = '____';
      }
      if (empty($cur)) {
        $cur = '____';
      }
      if (empty($email)) {
        $email = 'Email not found';
      }
      $data = array(
        'name' => $name,
        'pklive' => $pk,
        'cslive' => $cs,
        'amount' => $amt,
        'email' => $email
      );

      $response = json_encode($data);

      // echo $response;
    }
  }
  return json_decode($response, true);
}


function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function xor_string($text, $key)
{
  if (is_int($key)) $key = array($key);
  $output = '';
  for ($i = 0; $i < strlen($text); $i++) {
    $c = ord($text[$i]);
    $k = $key[$i % count($key)];
    $output .= chr($c ^ $k);
  }
  return $output;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $checkout = $_POST['checkoutlink'];

  $jsonResponse = getJsonResponse($checkout);
  header('Content-Type: application/json');
  echo json_encode($jsonResponse);
}
