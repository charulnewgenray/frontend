<?php
session_cache_limiter('public');
session_start();
require_once 'dbHandler.php';
require_once 'dbHelper.php';
require_once 'passwordHash.php';
require '.././libs/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app = \Slim\Slim::getInstance();
$db = new dbHelper();
// User id from db - Global Variable
$user_id = NULL;

require_once 'authentication.php';

/**
 * Verifying required params posted or not
 */
function verifyRequiredParams($required_fields,$request_params) {
    $error = false;
    $error_fields = "";
    foreach ($required_fields as $field) {
        if (!isset($request_params->$field) || strlen(trim($request_params->$field)) <= 0) {
            $error = true;
            $error_fields .= $field . ', ';
        }
    }

    if ($error) {
        // Required field(s) are missing or empty
        // echo error json and stop the app
        $response = array();
        $app = \Slim\Slim::getInstance();
        $response["status"] = "error";
        $response["message"] = 'Required field(s) ' . substr($error_fields, 0, -2) . ' is missing or empty';
        echoResponse(200, $response);
        $app->stop();
    }
}
    $app->get('/customers', function() {
        global $db;
        $rows = $db->select("customers","*",array());
        echoResponse(200, $rows);
    });

    $app->get('/customer/:id', function() {
        global $db;
        $rows = $db->select("customers","*",array());
        echoResponse(200, $rows);
    });
/* get dog breeds */

$app->get('/getDogBreeds', function() use ($app) {
    global $db;
    $rows = $db->select("dog_breeds","id,label,value",array());
    echoResponse(200, $rows);
});
$app->get('/getCatBreeds', function() use ($app) {
    global $db;
    $rows = $db->select("cat_breeds","id,label,value",array());
    echoResponse(200, $rows);
});

$app->post('/saveJoin', function() use ($app) {
    $decode = json_decode($app->request->getBody());
    $step = $decode->step;


    if(!isset($_SESSION['session_id']) || is_null($_SESSION['session_id'])){
        $session = uniqid('__ss');
        $_SESSION['session_id'] = $session;
    }

    global $db;
    $mandatory = array('session_id');
    if($_SESSION['session_id']){
        $rows = $db->select("sessions","*" ,array('session_id'=>$_SESSION['session_id']));
        $updateData = unserialize($rows['data'][0]['data']);
        $updateData[$step] = $app->request->getBody();

        $dataObj = new stdClass();
        $dataObj->data = serialize($updateData);
        $dataObj->session_id = $_SESSION['session_id'];

        $condition = array('session_id'=>$_SESSION['session_id']);
        $mandatory = array();
        $rows = $db->update("sessions", $dataObj , $condition, $mandatory);


    }else{
        $data[$step] = $app->request->getBody();
        $dataObj = new stdClass();
        $dataObj->data = serialize($data);
        $dataObj->session_id = $_SESSION['session_id'];


        $rows = $db->insert("sessions", $dataObj, $mandatory);
        if($rows["status"]=="success")
            $rows["message"] = "Join Form has been submitted successfully.";
    }


    echoResponse(200, $rows);


});

function echoResponse($status_code, $response) {
    $app = \Slim\Slim::getInstance();
    // Http response code
    $app->status($status_code);

    // setting response content type to json
    $app->contentType('application/json');

    echo json_encode($response);
}


$app->run();
?>