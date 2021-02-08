<?php

function redirect_to($location=null) {

    if($location!=null){
        header('location'.$location);
        exit;
    }
}