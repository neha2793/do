<?php
//echo $_REQUEST['shipping_container_id'];
//die;
//$data = $_POST['shipping_container_id'];
//print_r(($data));die;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://2kpaid.com/api/api/update-shipping-visit-container',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('shipping_container_id' => $_POST['shipping_container_id']),
  CURLOPT_HTTPHEADER => array(
    ': '
  ),
));

$response = curl_exec($curl);

curl_close($curl);
