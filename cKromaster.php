<?php

namespace DG\KrosmasterBundle\Entity;

use DG\KrosmasterBundle\Entity\cPion;

//Class qui gère tout les kromasters, hérite de personnage et pion
abstract class kromaster extends personnage 
{
  /*****************************************************************************
  ATTRIBUTS
  *****************************************************************************/
  /**
  * Niveau du kromaster
  * @var int
  */
  protected $_iNiveau,
  
  /**
  * Initiative du kromaster
  * @var int
  */
  protected $_iInitiative;

  /*****************************************************************************
  CONSTRUCTEUR
  *****************************************************************************/
  public function __construct()
  {

  } 

  /*****************************************************************************
  METHODES PUBLIQUE
  *****************************************************************************/
  public function ramasserKama()
  {
    //méthode qui utilise 1PA pour ramasser 1 kama
  }

  public function acheterGG()
  {
    //méthode qui achète un pions galons de la gloire contre 1PA
  }

  public function acheterRD()
  {
    //méthode qui permet d'acheter des récompenses démonique ganit/jade/or contre 1PA
  }

  public function coupDePoing(sort $sort)
  {
    //méthode qui donne un coup de point action réservé à un kromaster contre 5PA
  }

  /*****************************************************************************
  ACCESSEURS
  *****************************************************************************/
