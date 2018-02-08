<?php

//ini_set('session.gc_maxlifetime', 15);
$maxSessionTime = 60 * 30; // 30 minutes

session_start();
date_default_timezone_set('EST');

$action = (isset($_GET['a'])) ? $_GET['a'] : '';
include 'DB.php';
include './class/Class.php';

if (isset($_SESSION['userID'])) {
    $loggedUser = User::loadFromID($_SESSION['userID']);
    
    if (is_null($loggedUser)) {
        session_destroy();
        session_start();
    } else {
        if ((time() - $_SESSION['loginTime']) >= $maxSessionTime) {
            session_destroy();
            session_start();
            $loggedUser = null;
        } else if ($_SESSION['loginIP'] != $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            session_start();
            $loggedUser = null;
            //showError('Unauthorized access! Session destroyed!');
        }
    }
}

include './parts/header.php';
//**************************************************************

if ($action == 'login') {
    include './parts/Login.php';
} else if ($action == 'logout') {
            session_destroy();
            $i='';
            header('Location: index.php');
} else if ($action == 'doLogin') {
    $u = User::loadFromUsername($_POST['username']);
        
        if (is_null($u)) {
                showError('The user doesn\'t exist.');
                include './parts/Login.php';
        } else if ($u->validatePassword($_POST['password'])) {
                $loggedUser= $u;
                $_SESSION['userID'] = $u->id;
                $_SESSION['loginTime'] = time();
                $_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
                header('Location: index.php');
        } else {
                showError('The entered password is incorrect!');
                include './parts/Login.php';
        }
} else if ($action == 'goProfile') {
        if (empty($_SESSION)) {
                showError('pleass log in.');
                include './parts/Login.php';
        }else {
                $i = Profile::loadFromID($_SESSION['userID']);
                $loggedProfile=$i;
                include './parts/profile.php';
        }
} else if ($action == 'goRegister') {
                include './parts/Register.php';
} else {
    include './parts/body.php';
}
//*****************************************************************

//*****************************************************************
include './parts/footer.php';

if (isset($_SESSION['loginTime'])) {
    echo '<pre>' . date('d-M-Y H:m:s', $_SESSION['loginTime']) . '</pre>';
}

function showError($msg) {
    echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
}

function showSuccess($msg) {
    echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
}

?>