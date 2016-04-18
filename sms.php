<?php
require 'class-Clockwork.php';
try
{
    // Create a Clockwork object using your API key
    $API_KEY = 'a2e6fc289b5eb01a9e477e37343975a2ff1f01f8';
    $clockwork = new Clockwork( $API_KEY );

    // Setup and send a message
    $message = array( 'to' => '919618022045', 'message' => 'kindly contact 9618022045  to collect food' );
    $result = $clockwork->send( $message );

    // Check if the send was successful
    if($result['success']) {
        echo 'Message sent - ID: ' . $result['id'];
    } else {
        echo 'Message failed - Error: ' . $result['error_message'];
    }
}
catch (ClockworkException $e)
{
    echo 'Exception sending SMS: ' . $e->getMessage();
}
?>
