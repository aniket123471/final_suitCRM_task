<?php

$url = "http://localhost/final_test_suiteCRM/service/v4_1/rest.php";

echo "<h1>Accounts List(10 Records):</h1>";

// Login user
$login_parameters = array(
    "user_auth" => array(
        "user_name" => "admin",
        "password"  => md5("123"),
        "version"   => "1"
    ),
    "application_name" => "MyApp"
);

$login_result = call("login", $login_parameters, $url);

$session_id = $login_result->id;


//  10 Accounts 
$get_parameters = array(
    "session" => $session_id,
    "module_name" => "Accounts",
    "query" => "",               // no filter
    "order_by" => "date_entered DESC",
    "offset" => 0,
    "select_fields" => array("id", "name", "phone_office", "billing_address_city"),
    "link_name_to_fields_array" => array(),
    "max_results" => 10,         // LIMIT 10
    "deleted" => 0
);

$accounts = call("get_entry_list", $get_parameters, $url);


// Print 
foreach ($accounts->entry_list as $entry) {
    echo $entry->name_value_list->name->value . "\n";
}


// ---- Helper function ----
function call($method, $parameters, $url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, array(
        "method" => $method,
        "input_type" => "JSON",
        "response_type" => "JSON",
        "rest_data" => json_encode($parameters)
    ));

    $result = curl_exec($curl);
    curl_close($curl);

    echo "<pre>";
    return json_decode($result);
}

?>
