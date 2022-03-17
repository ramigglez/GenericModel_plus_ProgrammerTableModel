<?php

class Programmer extends GenericModel {

    protected int $id;
    protected string $names;
    protected string $lastnames;
    protected string $email;
    protected string $website;
    protected string $datein;
    

    public function __construct ($properties = null) {
        parent::__construct("programmers",Programmer::class,$properties);
    }

    public function setId ($id) {
        $this->id = $id;
    }

    public function setNames ($names) {
        $this->names = $names;
    }

    public function setLastNames ($ln) {
        $this->lastnames = $ln;
    }

    public function setEmail ($email) {
        $this->email = $email;
    }

    public function setWebsite ($website) {
        $this->website = $website;
    }

    public function setDateIn ($datein) {
        $this->datein = $datein;
    }

    public function getId () {
        return $this->id;
    }

    public function getNames () {
        return $this->names;
    }

    public function getLastNames () {
        return $this->lastnames;
    }

    public function getEmail () {
        return $this->email;
    }

    public function getWebsite () {
        return $this->website;
    }

    public function getDateIn () {
        return $this->datein;
    }

}