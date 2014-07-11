
<?php

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

function change_Star_Name($star_name = "")
{

$changed_name = "";    
$Replace_Space = strtolower ($star_name);
$changed_name = str_replace(' ',"-",$Replace_Space);
return $changed_name;

}


$films = array
		(
			"genre" => array("comedy", "tragedy", "action", "romantic"),
			"film_titles" => array("Big", "Titanic", "Star Wars", "French Kiss"),
			"stars" => array("Bill Murray", "Mark Hammell", "Leonardo Dicaptio", "Cate Blanechett"),
		);

$input_genere = "romantic";

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
$Changed_Star_Name = change_Star_Name($Film_Star);

echo "Film Title is : ".$Film_Title;
echo "<br/>";
echo "The Star Name is : ".$Film_Star;
echo "<br/>";
echo "The Changed Star Name is : ".$Changed_Star_Name;

?>

