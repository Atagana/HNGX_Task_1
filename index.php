<?php

header('Content-Type: application/json');

date_default_timezone_set('UTC');

if(!isset($_GET['slack_name']) && !isset($_GET['track'])){

echo $response = json_encode([
    'response_code' => 402,
    'message' => "Slack_Name and Track required"
]);
exit();

}else{
 
    $slack_name = $_GET['slack_name'];
    $current_day = date('l');
    $utc_time = date('Y-m-d\TH:i:s\Z');;
    $track = $_GET['track'];
    $github_repo_url = 'https://github.com/Atagana/HNG_X_Task_1/blob/main/index.php';
    $github_url = 'https://github.com/Atagana/HNG_X_Task_1';
    $status_code = 200;
    
    $data = [
        "slack_name" => $slack_name,
       "current_day" =>$current_day,
       "utc_time" => $utc_time,
       "track" => $track,
       "github_repo_url"=> $github_repo_url,
       "github_file_url"=> $github_url,
       "status_code" => $status_code
        ];
    echo json_encode($data);

    }