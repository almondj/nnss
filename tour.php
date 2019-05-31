<?php

// Watching this page for updates: https://www.nnss.gov/pages/PublicAffairsOutreach/NNSStours.html
// We really wanna go on the tour

$hash = hash('md5', file_get_contents('https://www.nnss.gov/pages/PublicAffairsOutreach/NNSStours.html'));

echo $hash;

if($hash != '3fbb3e98d95247d1c9ec052e8d1ea092') { // This conditional is set to the last known hash value of the page
	mail('youremail@gmail.com',"💣🔥 Nevada Nuclear Test Site [It's Go Time!]", "This is not a drill! 💣💣 https://www.nnss.gov/pages/PublicAffairsOutreach/NNSStours.html");
}

?>