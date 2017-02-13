
<?php 
$server = "localhost";
$login = "root";
$password = ""; 
$dbName = "wflanfreorwfan"; // nom de la base de donnée

try {
	$connexion = new PDO('mysql:host='.$server.';dbname='.$dbName, $login, $password);
	$connexion->exec("SET NAMES 'UTF8'");
}
catch(Exception $e){
	echo 'Erreur : '.$e->getMessage().'<br />';
	echo 'N° : '.$e->getCode().'<br />';
	die();
}


$sql = "SELECT * FROM events";
$req = $connexion->prepare($sql);		
$req->execute();

$events = $req->fetchAll();

$array = array(
	'success' => 1,
	'result'  => ''
);

foreach($events as $event) {
	$event["start"] = strtotime($event["start"]) . '000';
	$event["end"]   = strtotime($event["end"]) . '000';

	$array['result'][] = array(
		'id'    => $event["idevent"],
		'title' => $event["title"],
		'url'   => 'event/' . $event["idevent"],
		'class' => $event["class"],
		'start' => $event["start"],
		'end'   => $event["end"]
	);
}
      

// Debug mode
// echo '<pre>';
// print_r($array);
$eventJson = json_encode($array, JSON_PRETTY_PRINT);   
echo $eventJson;
// echo '</pre>';