
<?php
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.


function getTitle ($genree="")
{
    $keyValue = 0;
    
$films = array(
   "genres" => array("comedy", "tragedy", "romance", "action"),
    "film_titles" => array("Big", "Star War", "French Key", "Titanic",),
    "stars" => array("Bill Murry", "Mark Hammels", "Cate Blanchett", "Leonard Deaprio"),
    
);

foreach ($films as $fkey => $firstValue) {
    
    if($fkey=="genres")
    {
        foreach ($firstValue as $key => $secondValue)
        {
            if($secondValue==$genree)
            {
               $keyValue=$key;
               
            }
            
        }
    }
  
}
$filmTitle = $films['film_titles'][$keyValue];
 return $filmTitle;

}


function getStar ($genree="")
{
    $keyValue = 0;
    
$films = array(
   "genres" => array("comedy", "tragedy", "romance", "action"),
    "film_titles" => array("Big", "Star War", "French Key", "Titanic",),
    "stars" => array("Bill Murry", "Mark Hammels", "Cate Blanchett", "Leonard Deaprio"),
    
    
);

foreach ($films as $fkey => $firstValue) {
    
    if($fkey=="genres")
    {
        foreach ($firstValue as $key => $secondValue)
        {
            if($secondValue==$genree)
            {
               $keyValue=$key;
               
            }
            
        }
    }
  
}
  $starWithSpace = strtolower ( $films['stars'][$keyValue]);
  $star = str_replace(' ',"-",$starWithSpace);
 return $star;

}


function printTitleAndStar()
{
  echo "Film Title is : ".getTitle ("action");
  echo "<br/>";
  echo "The Star Name is : ".getStar ("action");
}

printTitleAndStar();


*/
/*function find_Filmtitle_Star($film, $genere)
{

$film_title = '';
$film_star = '';
//$film_details = '';


foreach($film as $key => $value)
{	
	if ($value  == $genere ){
	//echo $key."<br />";
	//echo $genere."<br />";
	//echo $value;
	//echo 'in'."<br />";
	//}
	
	//echo $key.'--'.$value."<br />";
	//if ($genere == $key)
	//if ($film[genere] == $genere)
	//{
	$film_title = $film[film_titles][$value];
	$film_star = $film[stars][$value];
	$film_details = array("$film[film_titles][$value]", "$film[stars][$value]");
	
	}
	

echo $film_title.$film_star;	
//return $film_title, $film_star;
//return $film_details;

}
}

$input_genere = "comedy";
$film = array
		(
			"genre" => array("comedy", "tragedy", "action", "romantic"),
			"film_titles" => array("Big", "Star Wars", "Titanic", "French Kiss"),
			"stars" => array("Bill Murray", "Mark Hammell", "Leonardo Dicaptio", "Cate Blanechett"),
		);		
		
$result = find_Filmtitle_Star($film, $input_genere);
//print_r($film); 
*/

/*
function find_film_genres($films) {
foreach($films as $name => $value) {
foreach($films[$name] as $key => $value2) {
//echo $films['genres'][0];
echo "<b>Genres: </b>".$films['genres'][$key];
echo "<br />";

echo "<b>Film-Title: </b>".$films['film-titles'][$key];
echo "<br />";

echo "<b>Actor/Actress: </b>".str_replace(" ", "-",$films['stars'][$key]);
echo "<br />";
echo "<br /><br />";
}
break;
}
}

$films =	array("genres" => array("comedy","tragedy","action","romance"),
"film-titles" => array("big","star wars", "titanic", "french kiss"),
"stars" => array("bill murray", "mark hamett", "leonardo dicaprio", "cate blanchet"),
);



find_film_genres($films);

?>
*/



?>

