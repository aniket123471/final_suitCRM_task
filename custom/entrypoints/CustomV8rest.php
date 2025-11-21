<?php
 
if(!defined('sugarEntry') || !sugarEntry) {
    die('Not a valid entry point');
}
 echo "<h1><mark>list of leads with API v8</mark></h1>";
function create_custom_log($msg) {
    $logFile = 'custom/logs/custom_v8_api.log';
 
    if(!file_exists('custom/logs')) {
        mkdir('custom/logs', 0777, true);
    }
 
    file_put_contents($logFile, date("Y-m-d") . "-" . $msg . "\n", FILE_APPEND);
}
 
create_custom_log("------ V8 API Script Executed ------");
 
$token_url = $GLOBALS['sugar_config']['site_url'] . '/Api/access_token';
 
$auth_data = array(
    "grant_type" => "client_credentials",
    "client_id" => "9d4a96df-246b-1a66-0fe3-691f12327ea8",
    "client_secret" => "apiv8simple",
    "username" => "admin",
    "password" => "123",
);
 
$ch = curl_init($token_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($auth_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$response = curl_exec($ch);
 
curl_close($ch);
 
$token_data = json_decode($response, true);
 
if(empty($token_data['access_token'])) {
    create_custom_log("Token error: " . $response);
    die("Authentication failed");
}
 
$access_token = $token_data["access_token"];
 
create_custom_log("Access token received");
 
// fetching first 10 leads
$api_url = $GLOBALS['sugar_config']['site_url'] . "/Api/V8/module/Leads?sort=date_entered&fields[Leads]=name&page[size]=10";
 
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer " . $access_token,
    "Content-Type: application/json"
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$response = curl_exec($ch);
curl_close($ch);
 
$data = json_decode($response, true);
 
if(!empty($data["data"])) {
    foreach($data["data"] as $lead) {
        $name = $lead["attributes"]["name"] ?? "Unknown Lead";
        create_custom_log("Lead: " . $name);
        $i +=1;
        echo "<div style='padding:4px 2px;font-size:22px; border:1px solid black; width:auto;'><span>$i )</span><b> Lead names: </b> <mark>" . $name. "</mark></div></br>";
    }
}
 
create_custom_log("------ V8 API Execution completed ------");
 
echo "Script Executed Successfully, Please check log file";