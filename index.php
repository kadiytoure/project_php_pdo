<?php
function myLoader($className){
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}
//include './SmallDoggo.php;'
spl_autoload_register('myLoader');

use entities\SmallDoggo;

var_dump(new SmallDoggo('test', 'test', new DateTime(), false));
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//mysql://localhost:3306/first_db
//phpinfo();
try {
//On crée une instance en pdo en lui fournissant le domaine où
//se trouve notre bdd mysql, on lui indique le nom de la 
//bdd à laquelle on se connecte avec dbname
//puis on lui donne le username et le password en deuxième et 
// troisième argument
$db = new PDO('mysql:host=localhost;dbname=first_db', 
        'toure', 
        'kadiy');
//On utilise la méthode query de notre db PDO qui
//attend en argument une requête SQL classique.
//Ici, on sélectionne tous les small_doggo.
$query = $db->query('SELECT * FROM small_doggo');
//var_dump($query->fetchAll());
//on lui dit aussi d'executer la requête;

// on utilise fectch pour positionner le curseur sur la ligne de resultat suivant;
//on le fait à l'interieur d'un while afin de récupérer tous  les résultats de notre requête.
//$query->fetchALL() //renvoie tous les résultats en tableau
// foreach ($query as $value) {} //fonctionne aussi
$chiens = [];
while($ligne = $query->fetch()) {
 //afficher les chiens sous forme de ul>li
    //echo $ligne['name'];
//créer des instances de chien à partir de lignes;
    //$chiens = array(($chiens)->id);
    echo '<ul>';
    echo '<li>' . $ligne['id'] . '</li>';
    echo '<li>' . $ligne['name'] . '</li>';
    echo '<li>' . $ligne['race'] . '</li>';
    echo '<li>' . $ligne['birthdate'] . '</li>';
    echo '<li>' . $ligne['is_good'] . '</li>';
    echo '</ul>';
}
var_dump ($chiens);
}catch(PDOException $exception) {
    echo $exception->getMessage();
  }  
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
