<?php 
// Is not used in the website
$count = fopen("counter.txt", "r"); 
if(!$count){
    echo "could not open the file" ; 
}

else { 
    
    $counter = (int ) fread($count,20); 
    fclose ($count); 
    $counter++; 
    echo" <strong> there has been ". $counter . " clicks</strong> " ; 
    $count = fopen("counter.txt", "w" ); 
    fwrite($count,$counter) ; 
    fclose ($count) ; 
    
} 
?>
