
<?php

/*function getTitle ($genree="")
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


function find_Film_Title($function_films, $function_genere = "")
{

$film_title = "";

$index = 0;
    
foreach ($function_films as $key_1 => $Value_1) {
    
    if($key_1=="genre")
    {
        foreach ($Value_1 as $key_2 => $Value_2)
        {
            if($Value_2 == $function_genere)
            {
               $index = $key_2;
               
            }
            
        }
    }
  
}

$film_title = $function_films['film_titles'][$index];
return $film_title;

}


function find_Film_Star($function_films, $function_genere = "")
{

$film_star = "";

$index = 0;
    
foreach ($function_films as $key_1 => $Value_1) {
    
    if($key_1=="genre")
    {
        foreach ($Value_1 as $key_2 => $Value_2)
        {
            if($Value_2 == $function_genere)
            {
               $index = $key_2;
               
            }
            
        }
    }
  
}

$film_star = $function_films['stars'][$index];
return $film_star;

}


$films = array
		(
			"genre" => array("comedy", "tragedy", "action", "romantic"),
			"film_titles" => array("Big", "Titanic", "Star Wars", "French Kiss"),
			"stars" => array("Bill Murray", "Mark Hammell", "Leonardo Dicaptio", "Cate Blanechett"),
		);

$input_genere = "comedy";

/*foreach ($function_films as $key_1 => $Value_1) {
    
    if($key_1=="genre")
    {
        foreach ($Value_1 as $key_2 => $Value_2)
        {
            if($Value_2 == $function_genere)
            {
               $index = $key_2;
               
            }
            
        }
    }
  
}*/



$Film_Title = find_Film_Title($films, $input_genere);
$Film_Star = find_Film_Star($films, $input_genere);

echo "Film Title is : ".$Film_Title;
echo "<br/>";
echo "The Star Name is : ".$Film_Star;


//print_r($film); 



?>

