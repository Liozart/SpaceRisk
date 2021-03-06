<?php

class Player {

    const DEFAULT_TROOPS = 20;

    private $id;
    private $user = [];
    private $connected;
    private $state;
    private $troop;
    private $pseudo;
    private $color;
    private $lose;
    private $objectives = [];
    private $time;

    public function __construct($pseudo, $color) {
        $this->id = -1;
        $this->connected = FALSE;
        $this->lose = FALSE;
        $this->state = 5;
        $this->troop = self::DEFAULT_TROOPS;
        $this->pseudo = $pseudo;
        $this->color = $color;
        $this->time = -1;
    }

    public function login($id, $user) {
        $this->id = $id;
        array_push($this->user, $user);
        $this->connected = TRUE;
    }

    public function logout() {
        $this->connected = FALSE;
    }

    public function deployment($troop) {
        if ($this->state == 0) {
            if ($troop == $this->troop) {
                $this->troop = 0;
                return TRUE;
            } else if ($troop < $this->troop) {
                $this->troop -= $troop;
                return TRUE;
            }
        }
        return FALSE;
    }

    public function checkObjectives() {
        foreach ($this->objectives as $objective) {
            if (!$objective->check()) {
                return FALSE;
            }
        }
        return TRUE;
    }

    public function checkUser($user) {
        foreach ($this->user as $u){
            if($u->id == $user->id){
                return TRUE;
            }
        }
        return FALSE;
    }

    public function checkId($id) {
        return $this->id == $id || $this->id == -1;
    }

    public function addObjective($objective) {
        array_push($this->objectives, $objective);
    }

    public function isConnected() {
        return $this->connected;
    }

    public function isLose() {
        return $this->lose;
    }

    public function lose() {
        $this->lose = TRUE;
    }

    public function getState() {
        return $this->state;
    }

    public function getId() {
        return $this->id;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function getColor() {
        return $this->color;
    }

    public function getTime() {
        return $this->time;
    }

    public function getObjectives() {
        $array = [];
        foreach ($this->objectives as $objective) {
            array_push($array, (string) $objective);
        }
        return $array;
    }

    public function getTroop() {
        return $this->troop;
    }

    public function setTroop($troop) {
        $this->troop = $troop;
    }
    
    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }

    public function assignTroop($nbTerritory, $nbSysSolaire) {
        //TODO: Prendre en compte le bonus du nombre de système solaire
        //      Prevoir de prendre en compte quel système solaire on aurait
        $this->troop = intval(self::DEFAULT_TROOPS + (0.5 * $nbTerritory) + (0.25 * self::DEFAULT_TROOPS) * $nbSysSolaire);
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function __toString() {
        $connected = ($this->connected) ? 'TRUE' : 'FALSE';
        return "Connected: " . $connected . ";";
    }

}
