<?php



/*

echo '<pre>';
print_r($_SERVER);
echo '<pre>';

*/


if($_SERVER['REQUEST_METHOD'] == "GET"){
  $name =  htmlspecialchars($_GET['name']);
  $email = htmlspecialchars($_GET['email']);
  $message = htmlspecialchars($_GET['message']);


  echo <<< DATA
    <h2>Dane pobrane z formularza:</h2>
    <p><strong>Imię: </strong>$name</p>
    <p><strong>E-mail: </strong>$email</p>
    <p><strong>Wiadomość: </strong>$message</p>
  DATA;
  


}
else{
  echo 'Formularz nie został wysłany poprawnie!';
  echo '<br><a href="form.html">Wróć do formularza</a>';
}













/*

echo '<pre>';
  var_dump($_GET);
  echo '<hr>';
  print_r($_GET);
echo '<pre>';

*/



