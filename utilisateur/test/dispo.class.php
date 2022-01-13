<?php
class Disponibilite {
    private $dispo;

    public const OUI = True;
    public const NON = False;

    public function getOui(){
        return $this->dispo;
    }

    public function setOui($newDispo){
        $this->lieux = $newDispo;
    }

    public function setDisponi(){
        if($this->dispo === True){
            return $this->dispo = self::OUI;
        }else{
            return $this->dispo = self::NON;
        }
    }
}
?>