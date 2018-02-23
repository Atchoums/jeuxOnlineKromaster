<?php

namespace DG\KrosmasterBundle\Entity;

use DG\KrosmasterBundle\Entity\cPion;

//classe qui gére les pouvoirs que les personnages peuvent avoir (ex Soutient draconique)
abstract class Pouvoir
{
  /*****************************************************************************
  ATTRIBUTS
  *****************************************************************************/
  /**
  * A quelle pion est associé le trait
  * @var cPion
  */
  protected $_cPion;

  /**
  * @var int
  */
  protected $_iId,

  /**
  * Nom du Pouvoir
  * @var string
  */
  protected $_sNom,

  /**
  * Description du pouvoir
  * @var string
  */
  protected $_sdescription;
			

	public function lancerPouvoir ()
	{
		//methode qui lance un pouvoir 
	}


}