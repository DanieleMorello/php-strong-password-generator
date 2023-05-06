<?php

require __DIR__ . '/./functions.php';

$carachter_psw = [
  [
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h',
    'i',
    'j',
    'k',
    'l',
    'm',
    'n',
    'o',
    'p',
    'q',
    'r',
    's',
    't',
    'u',
    'v',
    'w',
    'x',
    'y',
    'z',
  ],
  [
    'A',
    'B',
    'C',
    'D',
    'E',
    'F',
    'G',
    'H',
    'I',
    'J',
    'K',
    'L',
    'M',
    'N',
    'O',
    'P',
    'Q',
    'R',
    'S',
    'T',
    'U',
    'V',
    'W',
    'X',
    'Y',
    'Z',
  ],
  [
    0,
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
  ],
  [
    '!',
    '?',
    '&',
    '%',
    '$',
    '<',
    '>',
    '^',
    '+',
    '-',
    '*',
    '/',
    '(',
    ')',
    '[',
    ']',
    '{',
    '}',
    '@',
    '#',
    '_',
    '=',
  ],
];

?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <!-- Bootstrap 5.2.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Font-awesome 6.2.0 -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'>
  <!-- Mio Css -->
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

  <header class=" text-center">
    <h1 class="text-secondary mt-5">Strong Password Generator</h1>
    <h2 class="text-white">Genera una password sicura</h2>
  </header>

  <main>

    <div class="container">
      <div class="row">
        <div class="col my-5">
          <div class="card">
            <form action="./index.php" method="GET">

              <div class="form-group d-flex">
                <label class="form-label me-2 ms-5 my-4" for="n_characters_psw">
                  Inserisci il numero di caratteri della tua password:
                </label>
                <div class="ml-auto my-4">
                  <input class="form-control ms-5" type="number" placeholder="Inserisci il numero di caratteri" name="n_characters_psw" id="n_characters_psw">
                </div>
              </div>

              <button type="submit" class="btn btn-primary ms-5 my-4">Genera</button>
              <button type="button" name="reset" class="btn btn-secondary" onclick="resetForm()">Resetta</button>

            </form>
          </div>
          <?php
          // Verifica se è stato impostato un parametro n_characters_psw nella richiesta GET
          if (isset($_GET['n_characters_psw'])) {
            // Filtra il parametro per garantire che contenga solo caratteri numerici
            $n_characters_psw = filter_var($_GET['n_characters_psw']);
            // Controlla se il parametro è vuoto e visualizza un messaggio di errore
            if (empty($n_characters_psw)) {
              echo '<div class="alert alert-danger mt-3" role="alert">Nessun parametro valido inserito</div>';
            }
            // Controlla se il parametro non è un numero e visualizza un messaggio di errore
            elseif (!is_numeric($n_characters_psw)) {
              echo '<div class="alert alert-danger mt-3" role="alert">Il valore inserito non è un numero.</div>';
            }
            // Controlla se il parametro non è compreso tra 8 e 16 e visualizza un messaggio di errore
            elseif ($n_characters_psw < 8 || $n_characters_psw > 16) {
              echo '<div class="alert alert-danger mt-3" role="alert">Il valore inserito deve essere compreso tra 8 e 16.</div>';
            }
            // Se il parametro è valido, genera la password e visualizza la password generata
            else {
              // Genera la password utilizzando la funzione generate_psw
              $psw = generate_psw($carachter_psw, $n_characters_psw);
              // Visualizza la password generata in una sezione di avviso
              echo '<div id="password-container" class="alert alert-primary mt-3" role="alert"><h2>' . $psw . '</h2></div>';
            }
          }
          ?>

        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </main>
  <!--  Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
  <!-- Mio Js -->
  <script src="./assets/js/script.js"></script>

</body>

</html>