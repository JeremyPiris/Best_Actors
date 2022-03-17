<?php
require_once '../class/DataMovies.php';
require_once '../class/DataKnown.php';
$dataMovie = new DataMovies('k_164sfoei');
$dataKnown = new DataKnown('k_164sfoei');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Les génies du cinéma' ?></title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    
