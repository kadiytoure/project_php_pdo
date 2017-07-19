<?php

function myLoader($className) {
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
    $db = new PDO('mysql:host=localhost;dbname=first_db', 'toure', 'kadiy');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $param->bindParam(1,$db, PDO::PARAM_INT);
//On utilise la méthode query de notre db PDO qui
//attend en argument une requête SQL classique.
//Ici, on sélectionne tous les small_doggo.
    $query = $db->query('SELECT * FROM small_doggo');
    $id = 1;
    $query = $db->query('SELECT * FROM small_doggo WHERE id='.$id.'');
//var_dump($query->fetchAll());
//on lui dit aussi d'executer la requête;
// on utilise fectch pour positionner le curseur sur la ligne de resultat suivant;
//on le fait à l'interieur d'un while afin de récupérer tous  les résultats de notre requête.
//$query->fetchALL() //renvoie tous les résultats en tableau
// foreach ($query as $value) {} //fonctionne aussi
    $chiens = [];
    while ($ligne = $query->fetch()) {
        //afficher les chiens sous forme de ul>li
        //echo $ligne['name'];
        //créer des instances de chien à partir de lignes;
        //$chiens = array(($chiens)->id);
        $chien = new SmallDoggo($ligne['name'],
                $ligne['race'],
                new DateTime($ligne['birthdate']),
                $ligne['is_good'],
                $ligne['id']);
        $chiens[] = $chien;
    }
// recuperer un SmallDoggo spécifique selon son id, l'id en question est celui indiqué dans la variable ci-dessous;

    echo '<pre>';
    var_dump($chiens);
    echo '</pre>';
} catch (PDOException $exception) {
    echo $exception->getMessage();
}  
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
