<?php
    include 'store.php';

    // to store
    $kevin = new people('Kevin', '2000','You like to confuse yourself with OOP');
    
    //display
    echo $kevin -> dob();
    
    // echo $kevin -> get_name();
    // echo $kevin -> get_dob();
    // echo $kevin -> get_hobby();


?>