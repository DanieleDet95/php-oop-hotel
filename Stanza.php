<?php

  class Stanza{
    public $id;
    public $room_number;
    public $floor;
    public $beds;
    public $created_at;
    public $updated_at;

    public function __construct($id, $room_number, $floor, $beds, $created_at, $updated_at){
      $this->id = $id;
      $this->room_number = $room_number;
      $this->floor = $floor;
      $this->beds = $beds;
      $this->created_at = $created_at;
      $this->updated_at = $updated_at;
    }

    public function getDataStanza(){
      return [
        'id' => $this->id,
        'room_number' => $this->room_number,
        'floor' => $this->floor,
        'beds' => $this->beds,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
      ];
    }

    public function isNumber($id,$room_number, $floor, $beds) {
      if (!is_numeric($id)||!is_numeric($room_number)||!is_numeric($floor)||!is_numeric($beds)) {
        throw new Exception('Errore: uno o piú valori nella lista non sono numerici'); ;
      }
    }
  }



?>
