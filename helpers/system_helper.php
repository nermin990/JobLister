<?php
    // Redirect to page
    function redirect($page = false, $message = null, $message_type = null){
        if(is_string($page)){
            $location = $page;
        } else{
            $location = $_SERVER['SCRYPT_NAME'];
        }

        // Check for message
        if($message != null){
            // Set message
            $_SESSION['message'] = $message;
        }

        // Check for type
        if($message_type != null){
            // Set message type
            $_SESSION['message_type'] = $message_type;
        }

        // Redirect
        header('Location: '.$location);
        exit;
    }

    // Display message
    function displayMessage(){
        if(!empty($_SESSION['message'])){

            // Assing message var
            $message = $_SESSION['message'];

            if(!empty($_SESSION['message_type'])){
                //Assing type var
                $message_type = $_SESSION['message_type'];

                // Create output
                if($message_type == 'error'){
                    echo '<div class="alert alert-danger">' . $message . '</div>';
                } else{
                    echo '<div class="alert alert-succes">' . $message . '</div>';
                }
            }
            // Unset message
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        } else{
            echo '';
        }
    }