<header>
        <nav>
            <ul>
                <li><a href=index.php>Home</a></li>
                <?php if (isset($_SESSION['login'])&& !empty($_SESSION['login'])){?>
                <li><a href=livre-or.php>Le livre d'or</a></li>
                <li><a href=profil.php>Profil</a></li>
                <li><a href=logout.php>Déconnexion</span></a></li>
                <?php } ?>
                

            </ul>
        </nav>
</header>
        