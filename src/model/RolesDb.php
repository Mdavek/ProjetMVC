<?php
    namespace src\model;
    use libs\system\model;

    class RolesDb extends Model{

        public function findAll(){
            return $this->entityManager
                        ->createQuery("SELECT r FROM Roles r")
                        ->getResult();
            //array("ROLE_COMTA","ROLE_FINANCE");
        }
    }
?>