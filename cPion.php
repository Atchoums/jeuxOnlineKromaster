<?php

namespace DG\KrosmasterBundle\Entity;

use DG\KrosmasterBundle\Entity\cPosition;

//Classe qui gère tout ce qui compose le plateau (ex: kromaster, mob, arbre, piège)
abstract class cPion
{
  /*****************************************************************************
  ATTRIBUTS
  *****************************************************************************/
  /**
  * @var int
  */
  protected $_iId,

  /**
  * Nom du Pion
  * string
  */
  protected $_sNom,

  /**
  * Point de vie du pion
  * @var int
  */
  protected $_iPointVie,

  /**
  * Position du pion sur le plateau
  *@var cPosition
  */
  protected $_aPosition;

  /*****************************************************************************
  CONSTRUCTEUR
  *****************************************************************************/
  public function __construct()
  {

  }

  /*****************************************************************************
  METHODE PUBLIQUE
  *****************************************************************************/
  public function bonusMalus(BonusMalus $bonusMalus)
  {
    //méthode qui gère tous les bonus et malus sur l'unité
  }

  public function mouvement($direction, $anombreCase)
  {
    //methode qui gérer le déplacement du personnage (PM)
  }

  public function lancerSort(Sort $cSort)
  {
    //methode qui permet d'attaquer en lancant un sort pour toutes unités (PA)
  }

  public function recevoirBlessure(int $oNombreBlessure)
  {
    //methode qui gérer les dégats reçu par l'unité (PV) par le sort lancé
  }

  public function resistanceDegat(Degat $oDegat)
  {
    //méthode qui permet de lancer les dés de défense selon la résistance de l'unité au type de dégat
  }

  public function activePouvoir(Pouvoir $cPouvoir)
  {
    //methode qui permet d'activé le pouvoir de l'untié
  }

  /*****************************************************************************
  ACCESSEURS
  *****************************************************************************/
}