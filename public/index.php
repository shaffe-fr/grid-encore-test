<?php

define('APP_ROOT', dirname($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR);
define('PUBLIC_ROOT', APP_ROOT . 'public' . DIRECTORY_SEPARATOR);
// Not using SERVER_NAME in dev because it's not set when using php internal web server with docker
define('SITE_URL', 'http' . (!empty($_SERVER['HTTPS']) ? 's' : '') . '://'. $_SERVER['HTTP_HOST'] . rtrim(str_replace(DIRECTORY_SEPARATOR, '/', dirname(str_replace($_SERVER['DOCUMENT_ROOT'], '', $_SERVER['SCRIPT_FILENAME']))), '/') . '/');

require APP_ROOT . 'functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Grid Layout Test</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700,400">
    <link rel="stylesheet" href="<?php echo webpack('build/css/app.css') ?>">
</head>
<body class="main-layout">
<header>
    <img class="logo" src="<?php echo SITE_URL.'img/logo.png';?>"
         srcset="<?php echo SITE_URL.'img/logo-small.png';?> 124w,
                <?php echo SITE_URL.'img/logo.png';?> 300w,
                <?php echo SITE_URL.'img/logo-big.png';?> 600w,
                <?php echo SITE_URL.'img/logo-full.png';?> 1124w"
         sizes="(max-width:720px) 28px, (min-width:720px) 200px"
         width="300" height="303"
         alt="Logo">
</header>
<nav class="main-nav">
    <ul>
        <li><a href="#">My shows</a></li>
        <li><a href="#">Watch list</a></li>
        <li><a href="#">Soon</a></li>
        <li><a href="#">Trending</a></li>
    </ul>
</nav>
<section class="content">
    <section class="cover-grid">
        <?php for ($i = 0; $i < 20; $i++): ?>
        <?php foreach (get_series() as $show): ?>
            <div class="cover">
                <a href="#" class="poster">
                    <span class="cover-image" style="background-image: url('<?php echo $show['poster'] ?>');"></span>
                </a>
                <div class="info">
                    <div>
                        <a class="title" href="#"><?php echo $show['title'] ?></a>
                    </div>
                    <span class="episode-number"><?php echo $show['episode'] ?></span></div>
                </div>
        <?php endforeach; ?>
        <?php endfor; ?>
    </section>
</section>
<footer>Copyleft - 2018</footer>

<script src="<?php echo webpack('build/js/app.js') ?>"></script>
</body>
</html>