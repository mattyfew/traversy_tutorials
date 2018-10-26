<?php

$people[] = 'Steve';
$people[] = 'John';
$people[] = 'Kathy';
$people[] = 'Susan';
$people[] = 'Gerard';
$people[] = 'Christian';
$people[] = 'Allison';
$people[] = 'Michele';
$people[] = 'Carolyn';
$people[] = 'Gregory';
$people[] = 'Loretta';
$people[] = 'Laura';
$people[] = 'Julie';
$people[] = 'Therese';
$people[] = 'Nolan';
$people[] = 'Brad';
$people[] = 'Mike';

$q = $_REQUEST['q'];

$suggestion = '';

if ($q !== '') {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person) {
        if (stristr($q, substr($person, 0, $len))) {
            if ($suggestion === '') {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? 'No Suggestion' : $suggestion;
?>
