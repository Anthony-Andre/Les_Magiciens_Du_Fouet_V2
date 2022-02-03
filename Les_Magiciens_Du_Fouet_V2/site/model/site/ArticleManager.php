<?php
namespace model\site;
use PDO;

class ArticleManager{

/* Connexion à la BDD : */

private function Connexion() {
  $cnx = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', ''.CNX_LOGIN.'', ''.CNX_PASS.'');
  return $cnx;
}

/* Affichage de toutes les recettes : */ 

public function ReadAllArticle(){
  $cnx = $this->Connexion(); 
  $rs_readAllArticle = $cnx->prepare('SELECT * FROM recette');
  $rs_readAllArticle->execute(); 

  while($data = $rs_readAllArticle->fetch(PDO::FETCH_ASSOC)){
    $article = new Article(); 
    $article->SetRecetteID($data['recetteID']);
    $article->SetNomRecette($data['nomRecette']); 
    $article->SetDifficulte($data['difficulte']); 
    $article->setCout($data['cout']); 
    $article->setDescription($data['description']);
    $articles[] = $article;
  }
  return $articles;
}

public function ListeDesChefs(){
  $cnx = $this->Connexion(); 
  $rs_listeDesChefs = $cnx->prepare('SELECT * FROM chef');
  $rs_listeDesChefs->execute(); 

  while($data = $rs_listeDesChefs->fetch(PDO::FETCH_ASSOC)){
    $chef = new Chef(); 
    $chef->SetChefID($data['chefID']);
    $chef->SetNomDuChef($data['nomDuChef']);
    $chef->SetPrenomDuChef($data['prenomDuChef']); 
    $chefs[] = $chef; 
  }
  return $chefs;
}


}