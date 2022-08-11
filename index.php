<?php
    require "config.php";

    $response = array();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['email']) and isset($_POST['mdp'])) {

            $user = new operations();
            $result = $user->setUser($_POST['email'],$_POST['mdp']);

            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "User is added";
            }else{
                $response['error'] = true;
                $response['message'] = "Unable to add user";
            }
            }else{
                $response['error'] = true;
                $response['message'] = "Please fill all fieds";
            }
            }else{
            $response['error'] = true;
            $response['message'] = "invalid request";
        }

    echo json_encode($response)
?>