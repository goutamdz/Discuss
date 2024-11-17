<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("./client/commonFiles.php") ?>
    <?php include("./client/header.php") ?>
</head>

<body>
<?php
// session_start();
if (isset($_GET['signup'])) {
    include('./client/signup.php');
} else if (isset($_GET['login'])) {
    include('./client/login.php');
} else if (isset($_GET['ask'])) { // Check if 'ask' key is set
    include('./client/ask.php');
} else if (isset($_GET['q-id'])) { // Check if 'q-id' key is set
    $qid = $_GET['q-id'];
    include('./client/question-details.php');
} else if (isset($_GET['c-id'])) { // Check if 'c-id' key is set
    $cid = $_GET['c-id'];
    include('./client/questions.php');
} else if (isset($_GET['u-id'])) { // Check if 'u-id' key is set
    $uid = $_GET['u-id'];
    include('./client/questions.php');
} else if (isset($_GET['latest'])) { // Check if 'latest' key is set
    include('./client/questions.php');
} else if (isset($_GET['search'])) { // Check if 'search' key is set
    $search = $_GET['search'];
    include('./client/questions.php');
} else {
    include('./client/questions.php');
}
?>


</body>

</html>