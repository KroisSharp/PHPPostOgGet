<?php


global $sudentarry;
$sudentarry = array();

function Tilføj($newStudent)
{
    print_r("køre metode tilføj" . "<br>");
    global $sudentarry;
    array_push($sudentarry, $newStudent);
}


function HentAlle($studentarry)
{
    $arrlength = count($studentarry);

    for($x = 0; $x < $arrlength; $x++) {
        print_r($studentarry);
        print_r("<br>");
    }


}













?>