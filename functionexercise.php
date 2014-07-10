
<?php

function find_Filmtitle_Star($film, $genere)
{

//$film_title = '';
//$film_star = '';
$film_details = '';

foreach($film as $key=>$value)
{	
	if ($genere == $film[$key])
	{
	//$film_title = $film[film_titles][$value];
	//$film_star = $film[stars][$value];
	$film_details = array("$film[film_titles][$value]", "$film[stars][$value]");
	
	}
}	
	
//return $film_title, $film_star;
return $film_details;


}

$input_genere = "comedy";
$film = array
		(
			"genre" => array("comedy", "tragedy", "action", "romantic"),
			"film_titles" => array("Big", "Star Wars", "Titanic", "French Kiss"),
			"stars" => array("Bill Murray", "Mark Hammell", "Leonardo Dicaptio", "Cate Blanechett"),
		);		
		
$result = find_Filmtitle_Star($film, $input_genere);
print_r($result); 


?>

