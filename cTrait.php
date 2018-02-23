<?php

namespace DG\KrosmasterBundle\Entity;

use DG\KrosmasterBundle\Entity\cPion;

//classe qui va gére les traits des personnages (ex : trait Dragon, trait confrérie du Tofu)
abstract class cTrait
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
  * Nom du Trait
  * string
  */
  protected $_sNom;

  /*****************************************************************************
  METHODE PUBLIQUE
  *****************************************************************************/
			 
  public function hydrate (array $odonnees)
	{
		foreach ($donnees as $key => $value) 
		{
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method)) 
			{
				$this->$method($value);
			}
		}
	}

  /*****************************************************************************
  ACCESSEURS
  *****************************************************************************/
  
}