<?php

header("Contenct_Type:application/json");
include"model.php";
error_reporting(0);


if ($_GET['method'] == "CREATE") {
    $method = $_GET['method'];
    $f = $_GET['f'];
    $l = $_GET['l'];
    $p = $_GET['p'];
    $e = $_GET['e'];
    echo insert($f, $l, $p, $e);
}elseif($_GET['method'] == "PUT"){
    $method = $_GET['method'];
     $f = $_GET['f'];
    $l = $_GET['l'];
    $p = $_GET['p'];
    $e = $_GET['e'];
    echo update($f, $l, $p, $e);
           
            
} elseif ((!empty($_GET['name']) && $_GET['method'])) {
    $method = $_GET['method'];
    $name = $_GET['name'];
    $detail = get_details($name);
    



    switch ($method) {
       
        case 'DELETE':
            echo delete($name) . " has been deleted from the database";
            break;
        case 'GET':
            if (empty($detail)) {
                //deliver_response(200,"detail not found",null);
                echo "$name not found";
            } else {
                //$t = "firstname<input type='text'>lastname<input type='text'>email<input type='text'> <input type='update'><input type='delete'>";
                echo "<br/><hr>" . json_encode($detail) . "<hr>";

                //deliver_response(200,"detail found",$detail);
            }
            echo "<br/>";
            break;
        default:
            header('HTTP/1.1 405 Method Not Allowed');
            header('Allow: GET, PUT, DELETE');
            break;
    }
} else {
    echo "invalid";
}

function deliver_response($status, $status_massage, $data) {
    header("HTTP/1.1 $status $status_massage ");
    $response['status '] = $status;
    $response['status_message '] = $status_massage;
    $response['data '] = $data;
    $json_response = json_encode($response);
    print_r($json_response);
}


/* if(!empty ($_GET['name'])){
  $name = $_GET['name'];
  $price = get_price($name);

  if(empty($price)){

  deliver_response(200,"book not found", NUll);

  }else{

  deliver_response(200,"book found","<span style='color:red;'>". $price);
  }

  }else{
  deliver_response(400,"not valid", NUll);

  } */
?>