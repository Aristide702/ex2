<html>

<head>
    <?php require "gabarit/inc_head.php"; ?>
</head>

<body>
    <?php require "gabarit/config.php"; ?>
    <nav>
        <?php require "gabarit/inc_nav.php"; ?>
    </nav>
    <main>
        <?php debug($_SESSION, "session"); ?>
        <h1>PAGE De bienvenue</h1>
        <h3>Bienvenu sur le site de notre agence !</h3>
        <p>Notre agence existe depuis 2013 et elle a été fondée par Aristide et Julien, deux amis de longue date qui se sont rencontrés au collège.</p>

        <p>Vous trouverez dans le menu les pages correspondantes à vos envies :)</p>
    </main>
    <footer>
        <?php require "gabarit/inc_footer.php" ?>
    </footer>
</body>

</html>