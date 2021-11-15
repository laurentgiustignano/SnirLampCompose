<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LW-Snir LAMP Stack</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/custom.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="jumbotron ">
        <h2 class="display-4">
            LW-Snir LAMP Stack
        </h2>
        <h3 class="lead">
            Vous êtes sur un modèle d'environnement de développement local du <span class="text-danger">Snir Langevin-Wallon</span>
        </h3>
    </div>
</div>

<div class="container">
    <div class="jumbotron ">
        <div class="row">
            <div class="card border-info col p-0 m-2">
                <h4 class="card-header bg-primary card-title text-white">Environnement Système</h4>

                <div class="card-body">
                    <ul class="card-text">
                        <li><?= apache_get_version(); ?></li>
                        <li>PHP <?= phpversion(); ?></li>
                        <li>
                            <?php

                            $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

                            /* check connection */
                            if(mysqli_connect_errno()) {
                                printf("MySQL connexion failed: %s", mysqli_connect_error());
                            }
                            else {
                                /* print server version */
                                printf("MySQL Server %s", mysqli_get_server_info($link));
                            }
                            /* close connection */
                            mysqli_close($link);

                            ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card border-info col p-0 m-2">
                <h4 class="card-header bg-primary card-title text-white">Quelques tests</h4>
                <div class="card-body">
                    <ul class="card-text">
                        <li><a href="/phpinfo.php" class="card-link">phpinfo()</a></li>
                        <li><a href="http://localhost:<? print $_ENV['PMA_PORT']; ?>">phpMyAdmin</a></li>
                        <li><a href="/test_db.php">Test DB Connection avec mysqli</a></li>
                        <li><a href="/test_db_pdo.php">Test DB Connection avec PDO</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-black-50">
            Pour commencer votre projet, vous pouvez sauvegarder et mettre ce fichier (index.php) de coté. <span
                    class="text-danger">Enjoy !</span>
        </div>

    </div>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/custom.js"></script>
</body>
</html>
