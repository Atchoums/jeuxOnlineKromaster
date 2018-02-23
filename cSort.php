<?php

namespace DG\KrosmasterBundle\Entity;

use DG\KrosmasterBundle\Entity\cPersonnage;

//Classe qui gère les sorts des personnages (exemple: sort Arnaque)
abstract class cSort
{
  /*****************************************************************************
  ATTRIBUTS
  *****************************************************************************/
  /**
  * A quelle pion est associé le sort
  * @var cPion
  */
  protected $_cPersonnage,

  /**
  * @var int
  */
  protected $_iId,

  /**
  * Nom du sort
  * string
  */
  protected $_sNom,

  /**
  * Point d'action que coute le sort
  * @var int
  */
  protected $_iCoutPointAction,

  /**
  * Point de mouvement que coute le sort
  * @var int
  */
  protected $_iCoutPointMouvement,

  /**
  * nombre de dégat ou de soin produit par le sort
  * @var int
  */
  protected $_iPuissance,

  /**
  * La nature du sort et soit dégat ou soin
  * @var int
  */
  protected $_iNature;			
			  
  /**
  * Element du sort (terre, eau, etc...)
  * @var string
  */
  protected $_sElement,			  
			  
  /**
  * porté du sort
  * @var array
  */
  protected $_aPorte,	

 /**
  * Zone d'effet du sort
  * @var array
  */
  protected $_aZoneEffet,	
			  
  /**
  * Effet additionel du sort
  * @var string
  */
  protected $_sEffetAdditionel;

  /*****************************************************************************
  CONSTRUCTEUR
  *****************************************************************************/
  public function __construct()
  {

  }

  /*****************************************************************************
  METHODE PUBLIQUE
  *****************************************************************************/

  public function verifieCoutSort(personnage $personnage)
  {
  	//fonction qui vérifie si le sort peut bien être lancé par rapport au pa, pv, pm qui reste au personnage
  }

  public function verifiePorte(pion $position $positionCible)
  {
  	//fonction qui verifie et gère la porté du sort sur la cible par rapport à la position d'un personnage
  }

  public function verifieLigneVue(pion $position $positionCible)
  {
  	//fonction qui vérifie et gère la ligne de vue pour lancer le sort sur la cible par rapport à la position d'un personnage
  }

  public function payerCoutSort(kromaster $kromaster)
  {
  	//fonction qui paye le cout du sort qui peut être en pm,pv,pa
  }

  public function appliqueZoneEffet(pion $position $positionCible)
  {
  	//fonction qui applique la zone d'effet du sort et touche toute les unité dans cette zone allié comme enemi
  }

  public function lanceEffetAdditionnels(sort $effetAdditionnels)
  {
  	//fonction qui applique les effets additionnels (ex: +2 pa sur la cible, invocation etc...)
  }

  public function jetCC()
  {
  	//fonction qui gère le lancer de dès coup critiques (attaque et soin uniquement)
  }

  public function jetArmure()
  {
  	//fonction qui gère le lance de dès pour l'armure (soin uniquement)
  }

  public function blessure()
 {
 	//fonction qui calcul les dégats totaux infligées à la cible
 }

 public function effetsAttente()
 {
 	//fonction qui gère les effetes en attentes (ex : vol de vie)
 }

  /*****************************************************************************
  ACCESSEURS
  *****************************************************************************/
}
