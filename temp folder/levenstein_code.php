<?php

include "config.php";

// input misspelled word
$input = 'mos';

$q=mysql_query("select * from istilah");  //tabel ensiklopedia
//////////////////////////////////////////////////////////
$words=array();
$i=0;
while($row=mysql_fetch_array($q)){
	$words[$i] = $row['istilah'];
	$i++;
}

// no shortest distance found, yet
$shortest = -1;

// loop through words to find the closest
foreach ($words as $word) {

    // calculate the distance between the input word,
    // and the current word
    $lev = levenshtein($input, $word);

    // check for an exact match
    if ($lev == 0) {

        // closest word is this one (exact match)
        $closest = $word;
        $shortest = 0;

        // break out of the loop; we've found an exact match
        break;
    }

    // if this distance is less than the next found shortest
    // distance, OR if a next shortest word has not yet been found
    if ($lev <= $shortest || $shortest < 0) {
        // set the closest match, and shortest distance
        $closest  = $word;
        $shortest = $lev;
    }
}
////////////////////////////////////////
echo "Kata kunci yang dimasukkan : ".$input."<br>";
if ($shortest == 0) {
    echo "Kata kunci ditemukan : ".$closest."<br>";
} else {
    echo "Apa maksud kamu : ".$closest."<br>";
}


?>