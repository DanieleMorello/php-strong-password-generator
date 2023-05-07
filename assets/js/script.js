/**
 * Questa funzione resetta un form impostando il valore di un campo di input con ID "n_characters_psw" a una stringa vuota
 * e nascondendo un elemento con ID "password-container"
 */
function resetForm() {
  // Trova l'elemento di input con ID "n_characters_psw" e imposta il suo valore a una stringa vuota
  document.getElementById("n_characters_psw").value = "";

  // Trova l'elemento HTML con ID "password-container" e imposta la sua proprietà "display" a "none"
  // Ciò nasconde l'elemento dalla vista sulla pagina web
  document.getElementById("password-container").style.display = "none";
}
