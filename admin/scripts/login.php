<?php
function login($username, $password) {


    $pdo = Database::getInstance() -> getConnection();
    ## TODO: Finish the following query to check if the username and password are matching in the DB
    $get_user_query ='SELECT * FROM tbl_user WHERE user_name = :username AND user_pass = :password';

    $user_set = $pdo->prepare($get_user_query);
    $user_set->execute(
        array(
            ':username' =>$username,
            ':password' =>$password
        )
        );

        if($found_user = $user_set->fetch(PDO::FETCH_ASSOC)) {
            ##TODO: DEBUG LATER
            return 'we will log you in'; 

        }else{
            return 'you misspelled your pass or user, idiot.';
        }
}