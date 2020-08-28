<?php
  // Visualizzare gli errori
  ini_set('display_errors','On');
  error_reporting(E_ALL);

  // Collegamento con la classe user
  require_once(__DIR__ . '/array_stanze.php');
  require_once(__DIR__ . '/Stanza.php');

  // Stampa di tutte le stanze
  foreach ($array_stanze as $stanza) {
    $stanza = new Stanza($stanza['id'],$stanza['room_number'],$stanza['floor'],$stanza['beds'],$stanza['created_at'],$stanza['updated_at'],);
    
    // Controllo se alcuni dati sono numerici
    $stanza->isNumber($stanza->id,$stanza->room_number,$stanza->floor,$stanza->beds);

    $stanza_data = $stanza->getDataStanza();
  ?>
    <div>
      <ul>
        <li>Id: <?php echo $stanza_data['id']; ?></li>
        <li>Room_number: <?php echo $stanza_data['room_number']; ?></li>
        <li>Floor: <?php echo $stanza_data['floor']; ?></li>
        <li>Beds: <?php echo $stanza_data['beds']; ?></li>
        <li>Created_at: <?php echo $stanza_data['created_at']; ?></li>
        <li>Updated_at: <?php echo $stanza_data['updated_at']; ?></li>
      </ul>
    </div>
  <?php
  }

?>
