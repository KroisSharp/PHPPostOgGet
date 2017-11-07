<?php

include 'student.php';
include 'data.php';

global $sudentarry;



    $n1 = $_POST['name'];
    $n2 = $_POST['adresse'];
    $n3 = $_POST['tlf'];



    $classtudent = new student();

    $classtudent->name=$n1;
    $classtudent->adresse=$n2;
    $classtudent->tlf=$n3;



    Tilføj($classtudent);



HentAlle($sudentarry);










?>