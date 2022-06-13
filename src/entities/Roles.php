<?php
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\ORM\Mapping\Entity;
    use Doctrine\ORM\Mapping\Table;
    use Doctrine\ORM\Mapping\Id;
    use Doctrine\ORM\Mapping\Column;
    use Doctrine\ORM\Mapping\GeneratedValue;
    /** 
     * @ORM\Entity @ORM\Table(name="roles")
    **/
    class Roles{

        /** @Id @Column(type="integer") @GeneratedValue**/
        private $id;
        /** @Column(type="string") **/
        private $nom;
        /**
        * Many Roles have Many Users.
        * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
        */
        private $user;


        public function __construct(){
            $this->lieu = new ArrayCollection();
            $this->roles = new ArrayCollection();
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function getUser(){
            return $this->user;
        }

        public function setUser($user){
            $this->user = $user;
        }
    }    
?>