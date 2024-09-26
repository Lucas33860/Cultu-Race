<?php
require_once 'config.php'; // Charger la configuration
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

// Fonction pour récupérer les informations de l'article depuis la base de données
function getArticleByMot($mot)
{
    global $db;
    $result = sql_select('Article', '*', "mot = '" . trim($mot) . "'");
    return $result;
}

// Fonction pour rendre certains mots dans les paragraphes cliquables
function rendreMotsCliquables($texte, $motsClicables)
{
    foreach ($motsClicables as $mot) {
        // Échappe le mot pour éviter les problèmes d'injection HTML
        $motEscaped = htmlspecialchars($mot);
        // Crée le lien avec un paramètre GET
        $url = 'article.php?mot=' . urlencode($motEscaped);
        $texte = preg_replace('/\b' . preg_quote($motEscaped, '/') . '\b/', '<a href="' . $url . '">' . $motEscaped . '</a>', $texte);
    }
    return $texte;
}



// Liste de mots cliquables (à adapter en fonction de ta base de données ou des mots choisis)
$motsClicables = ['Disney+', 'Cinema', 'Italie'];

// Récupérer le mot depuis l'URL (paramètre GET)
$mot = isset($_GET['mot']) ? $_GET['mot'] : '';

// Si un mot est fourni, récupérer l'article correspondant

if ($mot) {
    echo "Mot: $mot<br>";
    $article = getArticleByMot($mot);
    if ($article) {
        // Rendre certains mots cliquables dans les paragraphes
        $article[0]['paragraphe1'] = rendreMotsCliquables($article[0]['paragraphe1'], $motsClicables);
        $article[0]['paragraphe2'] = rendreMotsCliquables($article[0]['paragraphe2'], $motsClicables);
        $article[0]['paragraphe3'] = rendreMotsCliquables($article[0]['paragraphe3'], $motsClicables);
        $article[0]['paragraphe4'] = rendreMotsCliquables($article[0]['paragraphe4'], $motsClicables);
        $article[0]['paragraphe5'] = rendreMotsCliquables($article[0]['paragraphe5'], $motsClicables);
        $article[0]['paragraphe6'] = rendreMotsCliquables($article[0]['paragraphe6'], $motsClicables);
        // Si un mot est fourni, récupérer l'article correspondant
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article: <?php echo htmlspecialchars($mot); ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Inclure jQuery pour AJAX -->
</head>

<body>
<header>
      <nav class="d-flex flex-justify-content-between">
        <div>
          <img class="logo-header mleft-20" src="images/logo.png" alt="logo Cultu'Race" />
        </div>
        <div class="d-flex flex-align-items-center target">
          MOT CIBLÉ : TUC-TUC
        </div>
        <div class=" d-flex flex-align-items-center mright-20">
          <button class="btn-header">Validé</button>
        </div>
      </nav>
    </header>
    <main class="container" style="margin-top: 100px">
        <?php if ($article): ?>
            <h1 id="article-title"><?php echo htmlspecialchars($article[0]['mot']); ?></h1>
        <!-- Section où le contenu de l'article sera affiché -->
        <article class="content">
                <p id="paragraph1"><?php echo !empty($article[0]['paragraphe1']) ? $article[0]['paragraphe1'] : 'Paragraphe 1 vide'; ?></p>
                <br/>
                <p id="paragraph2"><?php echo !empty($article[0]['paragraphe2']) ? $article[0]['paragraphe2'] : 'Paragraphe 2 vide'; ?></p>
                <br/>
                <p id="paragraph3"><?php echo !empty($article[0]['paragraphe3']) ? $article[0]['paragraphe3'] : 'Paragraphe 3 vide'; ?></p>
                <br/>
                <p id="paragraph4"><?php echo !empty($article[0]['paragraphe4']) ? $article[0]['paragraphe4'] : 'Paragraphe 4 vide'; ?></p>
                <br/>
                <p id="paragraph5"><?php echo !empty($article[0]['paragraphe5']) ? $article[0]['paragraphe5'] : 'Paragraphe 5 vide'; ?></p>
                <br/>
                <p id="paragraph6"><?php echo !empty($article[0]['paragraphe6']) ? $article[0]['paragraphe6'] : 'Paragraphe 6 vide'; ?></p>
                <?php if ($article['picture']): ?>
                    <img id="article-image" src="<?php echo htmlspecialchars($article['picture']); ?>" alt="Image de l'article">
                else
                    <p>Aucune image disponible</p>
                <?php endif; ?>

            <?php else: ?>
                <p>Aucun article trouvé pour le mot '<?php echo htmlspecialchars($mot); ?>'.</p>
            <?php endif; ?>
        </article>

        <script>
            $(document).ready(function() {
                // Quand on clique sur un mot cliquable dans le texte
                $(document).on('click', '.clickable-word', function() {
                    var word = $(this).data('word'); // Récupérer le mot cliqué
                    window.location.href = 'article.php?mot=' + word; // Rediriger vers l'article du mot cliqué
                });
            });
        </script>
</body>

</html>