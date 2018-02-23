<?php

namespace DG\KrosmasterBundle\Entity;

use DG\KrosmasterBundle\Entity\cKromaster;

//Classe qui gère le format du tournoi de chaque personnage (ex : Eternal, season)
class cFormat
{
  /*****************************************************************************
  ATTRIBUTS
  *****************************************************************************/
  /**
  * A quelle Kromaster est associé le format
  * @var cPion
  */
  protected $_cKromaster;

  /**
  * Le pion fait il parti du tournoi eternal
  * @var booleen
  */
  protected $_bLegaleEternal,

  /**
  * @var int
  */
  protected $_iEtoileEternal,

  /**
  * Le pion fait il parti du tournoi en saison
  * @var booleen
  */
  protected $_bLegaleSAison,
	 
	 private $_bLegaleEternal,
	 		
	 		 $_bLegaleSaison;
}