<?php session_start(); ?>

<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css" />
        <meta http-equiv="x-ua-compatible" content="IE=edge" />
        <title>Home</title>

</head>

<body>
    <?php
    require('header.php');
    ?>
    <main>

        
    <div id="buttons">
        <button id="inscription-button">Inscription</button>
        <button id="connexion-button">Connexion</button>        
    </div>


        <div id="inscription-place">
        </div>


        <div id="isOk"></div>
</main>

    <script type="text/javascript" src="script.js"></script>
</body>