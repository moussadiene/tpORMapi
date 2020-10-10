<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

        /**
         * @ORM\Entity 
         * @ORM\Table(name="operation")
        **/

    class Operation{
        /**
         * @ORM\Id 
         * @ORM\Column(type="integer") 
         * @ORM\GeneratedValue 
         **/
        private $id;
       
        /**
         * @ORM\Column(type="string") 
         **/

        private $dateOuverture;
        /**
         * @ORM\Column(type="string") 
         **/
        private $montant;
      
         /**
         * Many compte have one typecompte. This is the owning side.
         * @ORM\ManyToOne(targetEntity="TypeOperation", inversedBy="operations")
         * @ORM\JoinColumn(name="typeOperation", referencedColumnName="id")
         */
        private $typeOperation;
      
    
         /**
         * Many compte have one entreprise. This is the owning side.
         * @ORM\ManyToOne(targetEntity="Compte", inversedBy="operations")
         * @ORM\JoinColumn(name="compte", referencedColumnName="numero")
         */
        private $compte;
        

        public function __construct(){ 


        }

        public function getID(){return $this->id;}
        public function getDateOuverture(){return $this->dateOuverture;}
        public function getCompte(){return $this->compte;}
        public function getMontant(){return $this->montant;}
        public function getTypeOperation(){return $this->typeOperation;}
       
       
        public function setID($id){ $this->id = $id;}
        public function setDateOuverture($dateOuverture){ $this->dateOuverture = $dateOuverture;}
        public function setCompte($compte){ $this->compte = $compte;}
        public function setMontant($montant){ $this->montant= $montant;}

        public function setTypeOperation($typeOperation){ $this->typeOperation = $typeOperation;}

    }

?>