<?php
session_start();
include "functions.php";




if (isset($_POST['login'])) {
    loginFunc($_POST['username'], $_POST['password'],);
}
