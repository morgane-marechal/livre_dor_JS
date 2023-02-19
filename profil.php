<?php session_start(); ?>

<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css" />
        <meta http-equiv="x-ua-compatible" content="IE=edge" />
        <title>Profil</title>

</head>

<body>    
    
<?php require('header.php');?>
<div id="welcome">
    <?php 
    echo "Bonjour ".$_SESSION['login'].". Voulez-vous modifier vos informations de connexion ?<br>";
?>
</div>


<div id="buttons">
    <button id="profil-button">Modifier le profil</button>
</div>


<?php 
    $login=$_SESSION['login'];
    //echo "<div id='info'<br>Bonjour ".$_SESSION['login']."<br>"; 
    //echo "Vérification session MP : ".$_SESSION['password']."</div>";
?>

<div id="profilPlace"></div>

<script type="text/javascript" src="scriptprofil.js"></script>




</body>