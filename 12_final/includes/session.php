<?php

    session_start();

    // get needed message from the session
    function getMessage($type) {

        // check if a message of this type is saved in the session
        if(isset($_SESSION[$type])) {
            // save message into variable
            $message = htmlentities($_SESSION[$type]);

            // delete message from session so it can't be used more than once
            unset($_SESSION[$type]);
            return $message;
        }

        // return false if there is no message
        return false;
    }

    // this function is designed to handle multiple types of messages (login messages and grave form messages)
    function message($type = "graveMessage") {


        // don't remove this
        $message = getMessage($type);

        if($message) {
            $output = "<div class=\"message w3-yellow\">";
            $output .= $message;
            $output .= "</div>";
        } else {
            $output = "";
        }

        return $output;
    }

    function setLoginMessage($message) {
        // create session variable to hold the login error message
        $_SESSION["loginMessage"] = $message;
        // hint: Header.php line 68
    }

    function setMessage($message) {
        // create session variable to hold the most recent regular error/success message
        $_SESSION["graveMessage"] = $message;
        // hint: session.php line 21
    }
?>
