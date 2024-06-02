<?php
include 'function.php';
include 'config.php';

$transaction_request_id = "UMSPID0206202409471819565";
echo verifyPayment($api_key, $email, $transaction_request_id);