<?php

require('../model/database.php');

$getAllMyQuestions = $bdd->prepare('SELECT id_offre, title,description,ville FROM offree ');
$getAllMyQuestions->execute();?>