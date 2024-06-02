<?php
include 'function.php';
include 'config.php';
if(isset($_POST['pay']))
{
  $phone = $_POST['phone'];
  $amount = $_POST['amount'];
  $accountNumber = $_POST['accountNumber'];
  $result = makePayment($api_key, $email, $account_id, $amount, $phone, $accountNumber);
  $data = json_decode($result);
  if(isset($data->success) && $data->success == '200')
  {
    echo '<script>window.location.href="index.php?success=Payment initiated successfully, Please enter your pin to complete the transaction"</script>';
  }else{
    echo '<script>window.location.href="index.php?error=Failed to initiate payment"</script>';
  }
}