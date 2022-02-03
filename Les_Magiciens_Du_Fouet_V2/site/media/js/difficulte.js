"use strict"; 

for(var i=0; i < <?=$article->getDifficulte();?>; i++){
    var logoDifficulte = document.createElement('img'); 
    logoDifficulte.src = " <?= MEDIA; ?>/img/fouet.png";
    var monParagraphe = document.getElementById("difficulte");
    monParagraphe.appendChild(logoDifficulte);
}
