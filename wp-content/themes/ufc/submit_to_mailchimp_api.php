<?php
/*
Template Name: Mailchimp API
*/

$email = $_GET["email"];
$status = 'subscribed'; // "subscribed" or "unsubscribed" or "cleaned" or "pending"
$list_id = ( isset( $_GET["list"] ) && $_GET["list"] != '' ) ? $_GET["list"] : get_field('mailchimp_list_id','options') ; // where to get it read above
$merge_fields = array(
    'FNAME' => $_GET["firstname"] ? $_GET["firstname"] : '',
    'LNAME' => $_GET["lastname"] ? $_GET["lastname"] : '',
    'MMERGE10' => $_GET["phone"] ? $_GET["phone"] : '',
    'MMERGE6' => $_GET["address"] ? $_GET["address"] : '',
    'MMERGE7' => $_GET["city"] ? $_GET["city"] : '',
    'MMERGE8' => $_GET["state"] ? $_GET["state"] : '',
    'MMERGE9' => $_GET["zip"] ? $_GET["zip"] : '',
);

// set list & API key
$api_key = get_field('mailchimp_api_key','options');

// call mailchimp API
$result = json_decode( rudr_mailchimp_subscriber_status( $email, 'subscribed', $list_id, $api_key, $merge_fields ) );

// create response data array
$response_array = array();

// print_r( $result ); 
if( $result->status == 400 ){
    $error_text = '';
    if (is_array($result->errors) || is_object($result->errors)) {
        foreach( $result->errors as $error ) {
            $error_text .= '<p>Error: ' . $error->message . '</p>';
        };
    } else {
        $error_text .= '<p>Error: ' . $result->detail . '</p>';
    }
    $response_array['status'] = 'error';
    $response_array['messages'] = trim($error_text);
    echo json_encode($response_array);
} elseif( $result->status == 'subscribed' ){
    $response_array['status'] = 'success';
    $response_array['messages'] = get_field('subscribe_success','options');
    echo json_encode($response_array);
}


// SUBMIT TO MAILCHIMP
function rudr_mailchimp_subscriber_status( $email, $status, $list_id, $api_key, $merge_fields = array('FNAME' => '','LNAME' => '') ){
    $data = array(
        'apikey'        => $api_key,
        'email_address' => $email,
        'status'        => $status,
        'merge_fields'  => $merge_fields
    );
    $mch_api = curl_init(); // initialize cURL connection
 
    curl_setopt($mch_api, CURLOPT_URL, 'https://' . substr($api_key,strpos($api_key,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower($data['email_address'])));
    curl_setopt($mch_api, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic '.base64_encode( 'user:'.$api_key )));
    curl_setopt($mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
    curl_setopt($mch_api, CURLOPT_RETURNTRANSFER, true); // return the API response
    curl_setopt($mch_api, CURLOPT_CUSTOMREQUEST, 'PUT'); // method PUT
    curl_setopt($mch_api, CURLOPT_TIMEOUT, 10);
    curl_setopt($mch_api, CURLOPT_POST, true);
    curl_setopt($mch_api, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($mch_api, CURLOPT_POSTFIELDS, json_encode($data) ); // send data in json
 
    $result = curl_exec($mch_api);
    return $result;
}
?>
