<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo isset( $data['page_title'] ) ? $data['page_title'] : "Untitled Page"; ?> - SimpleMVC</title>
        <link rel="stylesheet" href="/css/main.css?ver=<?php echo filemtime( $_SERVER['DOCUMENT_ROOT'] . "/css/main.css" ); ?>">
    </head>
    <body>
        <header>
            <div class="container">
                <h1>SimpleMVC</h1>
                <p>A light-weight MVC-based application framework written in PHP.</p>
            </div>
        </header>
        <nav>
            <div class="container">
                <ul>
                    <li><a href="/"<?php echo isset( $data['current_page'] ) && $data['current_page'] == "home" ? " class=\"current\"" : ""; ?>>Home</a></li>
                    <li><a href="/about"<?php echo isset( $data['current_page'] ) && $data['current_page'] == "about" ? " class=\"current\"" : ""; ?>>About</a></li>
                    <li><a href="/contact"<?php echo isset( $data['current_page'] ) && $data['current_page'] == "contact" ? " class=\"current\"" : ""; ?>>Contact</a></li>
                </ul>
            </div>
        </nav>
        
        <section class="content">
            <div class="container">
                <h1><?php echo isset( $data['page_title'] ) ? $data['page_title'] : "Untitled Page"; ?></h1>
