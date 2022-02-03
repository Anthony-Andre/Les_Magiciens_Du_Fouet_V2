<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?= $titre; ?></title>
<link rel="stylesheet" href="<?= MEDIA; ?>/css/style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?= $description; ?>" />
<meta name="keywords" content="<?= $motcle; ?>" />
</head>

<body>

<div id="site">
	<header>
        <a href="#"><img src=" <?= MEDIA; ?>/img/Logo_Les_Magiciens_Du_Fouet.jpg" alt="logo robot patissier"></a>
        <h1>Les Magiciens Du Fouet</h1>
    </header>
    <nav>
    	<ul>
            <li><a href="#">Nos recettes :</a></li>
            <?php
	        foreach($articles as $article) {
	        ?>
            <li><a href="#"><?= $article->getNomRecette()?></a></li> 
            <?php
            }
            ?>
            <li><a href="#">Nos chefs fouetteurs :</a></li>
            <?php
	        foreach($chefs as $chef) {
	        ?>
            <li><a href="#"><?=$chef->getPrenomDuChef();?> <?=$chef->getNomDuChef();?></a></li> 
            <?php
            }
            ?>
        </ul>
    </nav>
    <?= $contenu; ?>
    <footer>
        <p><a href="#">Nous contacter</a></p>
        <p>MDF 2022 - Développement Anthony ANDRÉ</p>
    </footer>
</div> 

<script src="<?= MEDIA; ?>/jquery/jquery-3.4.1.min.js"></script>
<script src="<?= MEDIA; ?>/jquery/controle-formulaire.js"></script>
<script src="<?= MEDIA; ?>/js/difficulte.js"></script>
</body>
</html>   