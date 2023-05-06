<?php

/**
 * Genera una password casuale utilizzando un insieme di caratteri possibili.
 *
 * @param array $character_psw Un array di array, in cui ogni sottovettore contiene un insieme di caratteri possibili da
utilizzare nella password.
 * @param int $n_characters_psw La lunghezza desiderata della password generata.
 *
 * @return string La password generata.
 */
function generate_psw($character_psw, $n_characters_psw)
{
  // Inizializza una stringa vuota che conterrà la password generata
  $psw_generated = '';

  // Ripeti il numero di volte specificato dalla lunghezza desiderata della password
  foreach (range(1, $n_characters_psw) as $i) {
    // Seleziona un sottovettore casuale dell'array $character_psw
    $sub_arr = $character_psw[rand(0, count($character_psw) - 1)];
    // Seleziona un carattere casuale dal sottovettore selezionato
    $character = $sub_arr[rand(0, count($sub_arr) - 1)];
    // Concatena il carattere alla stringa $psw_generated
    $psw_generated .= $character;
  }

  // Restituisci la password generata come stringa
  return $psw_generated;
}
