<?php
require_once __DIR__ . '/../functions.php';   // test_input()

/* ---------- Define variables and set to empty values ---------- */
$name = $location = $mobile = $email = "";
$errors = [];   // e.g. $errors['email'] = "Enter a valid email."

/* ---------- Form handling (page calls itself) ---------- */
if (isset($_POST['submit'])) {
    $name     = test_input($_POST['name'] ?? '');
    $location = test_input($_POST['location'] ?? '');
    $mobile   = test_input($_POST['mobile'] ?? '');
    $email    = test_input($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirmPassword'] ?? '';

    // Name: required + letters and white space only (preg_match)
    if ($name === '') {
        $errors['name'] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z .'-]+$/", $name)) {
        $errors['name'] = "Only letters and white space allowed.";
    }

    // Location: required
    if ($location === '') {
        $errors['location'] = "Location is required.";
    }

    // Mobile: required + exactly 10 digits after +63
    if ($mobile === '') {
        $errors['mobile'] = "Mobile number is required.";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $errors['mobile'] = "Enter exactly 10 digits after +63.";
    }

    // Email: required + valid format (filter_var)
    if ($email === '') {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Enter a valid email.";
    }

    // Password: required + minimum length
    if ($password === '') {
        $errors['password'] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors['password'] = "Password must be at least 8 characters.";
    }

    // Confirm password: required + must match
    if ($confirm === '') {
        $errors['confirmPassword'] = "Please confirm your password.";
    } elseif ($confirm !== $password) {
        $errors['confirmPassword'] = "Passwords do not match.";
    }

    // All valid -> go to login
    if (empty($errors)) {
        header('Location: login.php');
        exit;
    }
}