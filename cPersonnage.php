<?php

namespace DG\KrosmasterBundle\Entity;

use DG\KrosmasterBundle\Entity\cPion;

//Classe qui gère tout ce qui est de type personnage (kromaster, invocation). Hérite de pion
abstract class cPersonnage extends cPion
{
  /*****************************************************************************
  ATTRIBUTS
  *****************************************************************************/
  /**
  * Point d'action du personnage
  * @var int
  */
  protected $_iPointAction,

  /**
  * Point de mouvement du personnage
  * @var int
  */
  protected $_iPointMouvement;

  /*****************************************************************************
  ACCESSEURS
  *****************************************************************************/
}