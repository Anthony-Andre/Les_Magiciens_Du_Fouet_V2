<article>
	<h1>Liste des recettes</h1>
    <?php
	foreach($articles as $article) {
	?>

    <h2><?= $article->getNomRecette(); ?>:</h2>

    <h4><?= $article->getDescription(); ?></h4>
    
    <p id="difficulte<?=$article->getRecetteID();?>"> Difficulté :     

        <script>
for(var i=0; i < <?=$article->getDifficulte();?>; i++){
    var logoDifficulte = document.createElement('img'); 
    logoDifficulte.src = " <?= MEDIA; ?>/img/fouet.png";
    logoDifficulte.className = "symbolesEchelle";
    var monParagraphe = document.getElementById("difficulte<?=$article->getRecetteID();?>");
    monParagraphe.appendChild(logoDifficulte);
}
        </script>
    </p>

    <p id="cout<?=$article->getRecetteID();?>"> Coût :     

<script>
for(var i=0; i < <?=$article->getCout();?>; i++){
var logoCout = document.createElement('img'); 
logoCout.src = " <?= MEDIA; ?>/img/euro.png";
logoCout.className = "symbolesEchelle";
var monParagraphe = document.getElementById("cout<?=$article->getRecetteID();?>");
monParagraphe.appendChild(logoCout);
}
</script>
</p>



    <?php
	}
	?>

</article>
q