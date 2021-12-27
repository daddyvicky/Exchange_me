<?php
require_once 'utils.php';
function islogin()
{
    if (isset($_SESSION['loggedin'])) {
        if ($_SESSION['loggedin'] == true) {
            header("Location: myaccount.php");
        exit;
        } 
    }
}

function getloginame()
{
    $C = connect();
    if (isset($_SESSION['loggedin'])) {
        if ($_SESSION['loggedin'] == true) {
            $sql = sqlSelect($C, 'select email from users where id='. $_SESSION["userID"] . '');
            $data = $sql->fetch_assoc();
            $email=$data['email'];
            if(strlen($email)>9){
                $email=substr($email,0,8).'..';

            }
            return $email;
        }
        else{
            return 'Login&nbsp;/&nbsp;Register';
        }
    }
    else{
        return 'Login&nbsp;/&nbsp;Register';
    }
}
