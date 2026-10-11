<?php
require_once __DIR__ . '/../functions.php'; 

/*  Default credentials  */
const VALID_EMAIL    = 'test@photog.com';
const VALID_PASSWORD = 'photog123';
const MAX_ATTEMPTS   = 3;
const LOCK_SECONDS   = 300; 

/*  Define variables and set to empty values  */
$email = $password = "";
$emailErr = $passwordErr = $loginErr = "";

$_SESSION['attempts']     = $_SESSION['attempts']     ?? 0;
$_SESSION['locked_until'] = $_SESSION['locked_until'] ?? 0;

// Unlock automatically once the lock time has passed
if ($_SESSION['locked_until'] && time() >= $_SESSION['locked_until']) {
    $_SESSION['attempts']     = 0;
    $_SESSION['locked_until'] = 0;
}
$locked = $_SESSION['locked_until'] > time();

/*  Form handling  */
if (isset($_POST['submit'])) {
    $ok       = true;
    $email    = test_input($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    // Email: required + valid format
    if ($email === '') {
        $emailErr = "Email is required.";
        $ok = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Enter a valid email.";
        $ok = false;
    }

    // Password: required + minimum length
    if ($password === '') {
        $passwordErr = "Password is required.";
        $ok = false;
    } elseif (strlen($password) < 8) {
        $passwordErr = "Password must be at least 8 characters.";
        $ok = false;
    }

    if ($locked) {
        $loginErr = "Too many failed attempts. Login disabled for 5 minutes.";
    } elseif ($ok) {
        if ($email === VALID_EMAIL && $password === VALID_PASSWORD) {
            $_SESSION['attempts']     = 0;
            $_SESSION['locked_until'] = 0;
            $_SESSION['user']         = $email;
            header('Location: index.php');
            exit;
        }

        $_SESSION['attempts']++;
        if ($_SESSION['attempts'] >= MAX_ATTEMPTS) {
            $_SESSION['locked_until'] = time() + LOCK_SECONDS;
            $locked   = true;
            $loginErr = "Too many failed attempts. Login disabled for 5 minutes.";
        } else {
            $left     = MAX_ATTEMPTS - $_SESSION['attempts'];
            $loginErr = "Incorrect email or password. Attempts left: $left";
        }
    }
}