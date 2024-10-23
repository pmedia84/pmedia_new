<?php
// load site config file and make sure it exists
$config_file = "./config/site_config.json";
if (!file_exists($config_file)) {
    http_response_code(500);
    echo "<h1>" . http_response_code() . " Server error - Config file not found!</h1>";
    exit;
} else {
    //if the json file does exist then load details into config
    //load config file
    $config = file_get_contents($config_file);
    //decode json file
    $file = json_decode($config, TRUE);
    //set up variables
    $email_to = $file['email_config']['email_to'];
    $host = $file['email_config']['host'];
    $username = $file['email_config']['username'];
    $pw = $file['email_config']['pw'];
    $fromname = $file['email_config']['fromname'];

    //load site meta
    $site_name=$file['site_meta']['site_name'];
}
