<?php
namespace model\site; 

class Article{

  private $recetteID; 
  private $nomRecette;
  private $difficulte;
  private $cout; 
  private $description; 

  public function setRecetteID($recetteID){
    if($recetteID > 0){
      return $this->recetteID = $recetteID; 
    }
  }
  public function getRecetteID(){
    return $this->recetteID; 
  }

  public function setNomRecette($nomRecette){
    if(is_string($nomRecette)){
      $this->nomRecette = $nomRecette;
    }
  }
  public function getNomRecette(){
    return $this->nomRecette;
  }

  public function setDifficulte($difficulte){
    if($difficulte > 0){
      $this->difficulte = $difficulte;
    }
  }
  public function getDifficulte(){
    return $this->difficulte; 
  }

  public function setCout($cout){
    if($cout > 0){
      $this->cout = $cout; 
    }
  }
  public function getCout(){
    return $this->cout; 
  }

  public function setDescription($description){
    if(is_string($description)){
      $this->description = $description;
    }
  }
  public function getDescription(){
    return $this->description; 
  }

}
