<?php

include_once('class/Contribution.class.php');

if (!isset($_POST['issueTitle']) || !isset($_POST['issueContent']))
{
    $message = 'Veillez à bien renseigner le titre et le contenu de votre contribution.'
               . '<br/><br/><a href="index.php?page=contribution">Revenir au formulaire</a>';
}
else
{
    Contribution::addContribution($_POST['issueTitle'], $_POST['issueContent'], $_SESSION['user']);

    $message = 'Contribution envoyée.<br/>Merci pour votre participation !'
                . '<br/><br/><a href="index.php">Revenir à l\'accueil</a>';
}

include('views/contributionReceive_V.php');