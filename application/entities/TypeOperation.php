<?php
    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;


    /**
     * @ORM\Entity @ORM\Table(name="typeoperation")
    **/
    class TypeOperation{
        /** 
         * @ORM\Id
         * @ORM\Column(type="integer") 
         * @ORM\GeneratedValue
         **/
        private $id;

        /**
         * @ORM\Column(type="string")
         **/
        private $libelle;

         /**
         * One typeoperation has many operations. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Operation", mappedBy="typeoperation")
         */
        private $operations;

        public function __construct(){
            $this->operations = new ArrayCollection();
            
        }

        public function getID(){return $this->id;}
        public function getComptes(){return $this->operations;}
        public function getLibelle(){return $this->libelle;}

        public function setID($id){ $this->id = $id;}
        public function setComptes($operations){ $this->compte = $operations;}
        public function setLibelle($libelle){ $this->libelle = $libelle;}

    }

?>