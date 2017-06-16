<?php
    //connect to mysql db
    
    define ('DB_HOST', 'localhost');
    define ('DB_USER', 'your-user');
    define ('DB_PASSWORD', 'your-password');
    define ('DB_NAME', 'your-db');
    define ('TABLE', 'tours_2017fantasypride');

    $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    // Check connection
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $json = file_get_contents('php://input');

    //prevent empty posting    
    if (!$json) {
        die("Mach disch fodd, du alde Cracknudde!");
    }  
    
    
    $data = json_decode($json,true);
    foreach ($data as $memberid => $member) {
        $mId = $member['id'];
        $mRegistered = $member['registered'];
        $mEventId = $member['eventid'];
        $mFirstName = $member['firstname'];
        $mLastName = $member['lastname'];
        if(isset($member['email'])){$mEmail = $member['email'];}else{$mEmail="";};
        $mPhone = $member['phone'];
        if(isset($member['comment'])){$mComment = $member['comment'];}else{$mComment="";};

        $sql = "INSERT INTO ".TABLE."(id,registered,eventid,firstname,lastname,email,phone,comment)
        VALUES('$mId','$mRegistered','$mEventId','$mFirstName','$mLastName','$mEmail','$mPhone','$mComment')";
        if ($conn->query($sql) === TRUE) {
            echo "Neuer Teilnehmer: $mFirstName $mLastName\n";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }     

    }
   
?>