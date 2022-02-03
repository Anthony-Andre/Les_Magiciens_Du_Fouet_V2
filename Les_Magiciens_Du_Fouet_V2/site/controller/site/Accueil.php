<?php
namespace controller\site;
use classe; 
use model\site as ms; 

class Accueil{

  public function AfficherAccueil(){
    $manager = new ms\ArticleManager();
		$articles = $manager->ReadAllArticle(); 
    $chefs = $manager->ListeDesChefs(); 
		
		$view = new classe\View('site', 'accueil', 'Accueil', 'Je suis la desc de l\'accueil', 'clé 1, clé 2');
		$view->AfficherVue(array('articles'=>$articles));
    $view->AfficherVue(array('chefs'=>$chefs));
  }



}