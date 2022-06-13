<?php
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\ORM\Mapping\Entity;
    use Doctrine\ORM\Mapping\Table;
    use Doctrine\ORM\Mapping\Id;
    use Doctrine\ORM\Mapping\Column;
    use Doctrine\ORM\Mapping\GeneratedValue;

   /** 
     * @ORM\Entity @ORM\Table(name="lieu")
    **/
    class Lieu{

        /** @Id @Column(type="integer") @GeneratedValue**/
        private $id;
        /** @Column(type="string") **/
        private $nom;
        /** @Column(type="decimal") **/
        private $longitude;
        /** @Column(type="decimal") **/
        private $latitude;
        /**
        * One lieu has many formations. This is the inverse side.
        * @ORM\OneToMany(targetEntity="Formation", mappedBy="lieu")
        */
        private $formations;
        /**
        * Many Lieu have one user. This is the owning side.
        * @ORM\ManyToOne(targetEntity="User", inversedBy="Lieu")
        * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
        */
        private $user;


        public function __construct(){
            $this->formations = new ArrayCollection();
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

        public function getLongitude(){
            return $this->longitude;
        }

        public function setLongitude($longitude){
            $this->longitude = $longitude;
        }

        public function getLatitude(){
            return $this->latitude;
        }

        public function setLatitude($latitude){
            $this->latitude = $latitude;
        }

        public function getFormations(){
            return $this->formations;
        }

        public function setFormations($formations){
            $this->formations = $formations;
        }

        public function getUser(){
            return $this->user;
        }

        public function setUser($user){
            $this->user = $user;
        }

    }
?>