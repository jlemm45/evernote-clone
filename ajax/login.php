<?php
/**
 * Created by PhpStorm.
 * User: Jaden Lemmon
 * Date: 2/11/16
 * Time: 1:02 PM
 */

require_once '../models/user.php';

$user = new user();

if($user->logIn($data->username,$data->password)) {
    echo 'success';
}
else {
    echo 'error';
}