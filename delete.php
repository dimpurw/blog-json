<?php
    ob_start();
    include 'layouts/header.php'; 
    require 'data.php';

    if (!isset($_POST['id'])) {
        include "layouts/404.html";
        exit;
    }
    $blogId = $_POST['id'];
    deleteBlog($blogId);

    header("Location: index.php");
?>