<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php



//criando constantes GLOBAIS

define("GREETING", "<br/>Welcome to W3Schools.com!");
echo GREETING;


class Repositorio {

    function Repositorio (){
        $this->lista = array("IE shit","Firefox","Chrome");
        $this->mapaDePessoas = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        //asort($mapaDePessoas); --> ordenando de acordo com o valor
        //ksort($mapaDePessoas); --> ordenando de acordo com a chave


// foreach($age as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
// }
    }

    function getBrowsers(){

        echo "quantidade de browsers ". count($this->lista);

        sort($this->lista);
        //rsort($this->lista); --> reversa
        return $this->lista;
    }
    function getIdade($pessoa){

        return $this->mapaDePessoas[$pessoa];
    }

/*
    Example (MySQLi Object-Oriented)
$conn->close();

Example (MySQLi Procedural)
mysqli_close($conn);

Example (PDO)
$conn = null;
}
*/

//criando Arrays
echo "<br/>";

$repositorio = new Repositorio();
$browsers = $repositorio->getBrowsers();

echo "idade do Peter é ". $repositorio->getIdade('Peter');

?>



<?php

//concatenação
$nome = $_POST["nome"];
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "filter ". filter_var($nome, FILTER_SANITIZE_STRING);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "seu nome é $nome";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
//não é case sensitive, exceto variáveis
Echo "I love " . $nome . "!";
echo "<br/>";


//tamanho x quantidade de palavras
echo strlen($nome) ." - ". str_word_count($nome) ." - ". crypt($nome);

//echo strpos("Hello world!", "world"); // outputs 6
//echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
//explode()	Breaks a string into an array


//https://www.w3schools.com/php/php_ref_string.asp

?>
<br/>
<?php

$numero = 10;

echo "<br/>somando numero sstring === ";
echo "10"+ $numero + 30;
echo "<br/>concatenando numero sstring === ";
echo "10". $numero . 30;

//echo x print ==>
//print retorna valor
//echo por receber multiplos parametros
//echo é mais rápido

echo "<br/>";
echo var_dump($nome);
echo "<br/>";
echo var_dump($numero);

//the PHP var_dump() function returns the data type and value:





//comparações

echo "comparacoes do " .$GLOBALS['numero'];

$numeroAsString = "10";
echo "<br/>comparanddo == ". ($numero == $numeroAsString);
echo "comparanddo ===". ($numero === $numeroAsString);





// globals

/*

$GLOBALS -- used to access global variables from anywhere in the PHP script
$_SERVER -- holds information about headers, paths, and script locations.
$_REQUEST -- collect data after submitting an HTML form
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
$_FILES["fileToUpload"]["name"]
*/

echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


//outras funcoes

//htmlspecialchars -- This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
//mktime - criar data
// readfile
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
// session_start();
//session_unset(); // remove all session variables
//session_destroy(); // destroy the session

//filter_var == The variable you want to check The type of check to use ==> filter_var($str, FILTER_SANITIZE_STRING);










echo "Today is " . date("d/M/Y") . "<br>";
echo "The time is " . date("h:i:sa");

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);





//include x required

//include --> when a file is included with the include statement and PHP cannot find it, the script will continue to execute:


//tratamento de erros
//die() function -- o stop the script after the error.
$file=fopen("welcome.txt","r");
if(!file_exists("welcome.txt")) {
  //die("File not found");
} else {
  $file=fopen("welcome.txt","r");
}


//trigger_error("Value must be 1 or below");




//tratamento de excecoes -- igual Java

//throw new Exception("Value must be 1 or below");






?>




<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input placeholder="digite nome" type="text" name="nome" list="browsers" value="<?php echo $nome;?>">
    <button type="submit">Enviar</button>

    <datalist id="browsers">

        <?php
            foreach ($browsers as $browser){
        ?>
                <option value="<?php echo $browser ?>">
        <?php
            }
        ?>
    </datalist>
</form>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

</body>
</html>




