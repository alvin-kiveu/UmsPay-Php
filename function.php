<?php

function makePayment($api_key, $email, $account_id, $amount, $msisdn, $reference)
{
  $payload = json_encode(array(
    "api_key" => $api_key,
    "email" => $email,
    'account_id' => $account_id,
    "amount" => $amount,
    "msisdn" => $msisdn,
    "reference" => $reference,
  ));
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.umeskiasoftwares.com/api/v1/intiatestk',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
    ),
  ));
  $response = curl_exec($curl);
  curl_close($curl);
  return $response;
}


function verifyPayment($api_key, $email, $transaction_request_id)
{
  $payload = json_encode(array(
    "api_key" => $api_key,
    "email" => $email,
    "tranasaction_request_id" => $transaction_request_id,
  ));
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.umeskiasoftwares.com/api/v1/transactionstatus',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
    ),
  ));
  $response = curl_exec($curl);
  curl_close($curl);
  return $response;
}
