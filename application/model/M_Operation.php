<?php
	namespace application\model;

	use core\Model;

class M_Operation extends Model{

        public function __construct(){
			parent::__construct();
		}
		function add($operation){
			if($this->db != null)
			{
				$this->db->persist($operation);
				$this->db->flush();

				return $operation->getId();
			}
		}

		public function getList()
		{
			if($this->db != null)
			{
				return $this->db->getRepository('Operation')->findAll();
			}
		}

		public function getTypeCompteById($numero)
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT op FROM Operation op WHERE op.compte = " . $numero)->getResult();
			}
        }
        public function getOperationByCompte($compte)
		{
            if($this->db != null)
			{
				return $this->db->createQuery("SELECT op FROM Operation op WHERE op.compte = " . $compte)->getResult();

			//	return $this->db->getRepository('Operation')->findBy(array('compte' => $compte));
			}
        }
        public function getOperationByNumero($numero)
		{
            if($this->db != null)
			{
				return $this->db->getRepository('Operation')->findBy(array('compte' => $numero));
			}
        }
	}
