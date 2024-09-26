<?php
// Inclure la connexion à la base de données
include 'functions/query/connect.php'; // Assurez-vous que le chemin est correct
require_once 'config.php'; // Charger la configuration
sql_connect(); // Appeler la fonction de connexion

// Tableau d'articles à insérer
$articles = [
    [
        'mot' => 'Disney+',
        'def' => 'Plateforme de streaming vidéo créée par Disney',
        'paragraphe1' => 'Disney+ est un service de streaming.',
        'paragraphe2' => 'Il propose une variété de films et de séries.',
        'paragraphe3' => 'Vous pouvez y trouver des contenus de Disney, Pixar, Marvel, Star Wars, et National Geographic.',
        'paragraphe4' => 'Le service est accessible sur plusieurs appareils.',
        'paragraphe5' => 'Les abonnés peuvent choisir parmi plusieurs plans.',
        'paragraphe6' => 'Les nouvelles séries et films sont régulièrement ajoutés.',
        'picture' => 'images/imagesArticles/imgDisney+.png'
    ],
    [
        'mot' => 'Netflix',
        'def' => 'L’un des pionniers du streaming',
        'paragraphe1' => 'Netflix est l’un des pionniers du streaming.',
        'paragraphe2' => 'Il propose une large bibliothèque de films et séries.',
        'paragraphe3' => 'Les utilisateurs peuvent binge-watch des saisons entières.',
        'paragraphe4' => 'Netflix produit également ses propres contenus originaux.',
        'paragraphe5' => 'Les plans d’abonnement varient en fonction de la qualité.',
        'paragraphe6' => 'Des options hors ligne sont disponibles pour les abonnés.',
        'picture' => 'images/imagesArticles/imgNetflix.png'
    ],
    // Ajoutez d'autres articles ici si nécessaire
];

// Insertion des articles dans la base de données
foreach ($articles as $article) {
    // Appel de la fonction sql_insert pour insérer l'article
    $lastId = sql_insert('Article', 'mot, def, paragraphe1, paragraphe2, paragraphe3, paragraphe4, paragraphe5, paragraphe6, picture', 
        "'" . $article['mot'] . "', '" . $article['def'] . "', '" . $article['paragraphe1'] . "', '" . $article['paragraphe2'] . "', '" . $article['paragraphe3'] . "', '" . $article['paragraphe4'] . "', '" . $article['paragraphe5'] . "', '" . $article['paragraphe6'] . "', '" . $article['picture'] . "'");

    // Optionnel : Vérifiez si l'insertion a réussi
    if ($lastId) {
        echo "L'article '{$article['mot']}' a été inséré avec succès avec l'ID: $lastId<br>";
    } else {
        echo "Erreur lors de l'insertion de l'article '{$article['mot']}'.<br>";
    }
}

echo "Tous les articles ont été insérés avec succès.";
?>
