<header>
    <nav>
        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : ?>
            <a href="profil.php">Profil</a>
            <a href="mes-events.php">Mes fêtes</a>
            <a href="event-list.php">Lister fêtes</a>
            <a href="creation-event.php">Créer fête</a>
            <a href="logout.php">Déconnexion</a>
        <?php else : ?>
            <a href="index.php">Accueil</a>
            <a href="inscription.php">Inscription</a>
        <?php endif; ?>
    </nav>
</header>