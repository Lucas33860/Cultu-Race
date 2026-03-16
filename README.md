# Cultu-Race

Cultu-Race est un petit jeu web (PHP/MySQL) : tu pars d’un **mot de départ** et tu dois atteindre un **mot cible** en naviguant de page en page via des **mots cliquables** dans des articles.

## Concept du jeu

1. Tu entres ton pseudo sur la page d’accueil.
2. Le jeu te donne :
   - un **mot de départ** (aléatoire)
   - un **objectif** (la définition du **mot cible**)
3. Tu arrives sur un article (`article.php?mot=...`).
4. Dans le texte, certains mots sont **cliquables** : ils te redirigent vers d’autres articles.
5. Quand tu penses avoir atteint le mot cible, tu cliques sur **Valider** :
   - si tu es sur le bon mot → page de fin (victoire)
   - sinon → page d’échec

## Stack / technologies

- PHP
- MySQL (table `Article`)
- HTML / CSS
- (Composer est présent : dossier `vendor/`)

## Structure du projet (fichiers principaux)

- `index.php` : page d’accueil (pseudo + mot de départ + objectif)
- `article.php` : affichage d’un article et navigation par mots cliquables
- `insert_data.php` : script qui insère des articles dans la base si non présents
- `config.php` : charge l’environnement (.env), les defines et les fonctions
- `functions/query/*` : helpers PDO (connect/select/insert/update/delete)
- `end.php` / `endl.php` : pages de fin selon réussite/échec
- `style.css` : styles
- `images/` : logo + images des articles

## Base de données

Le jeu s’appuie sur une table `Article` contenant au minimum :

- `mot` (string)
- `def` (string)
- `paragraphe1` ... `paragraphe6` (text)
- `picture` (string, chemin d’image)

Le fichier `insert_data.php` contient des exemples d’articles et les insère si besoin.

## Installation (local)

Pré-requis :
- PHP (ex : 8.x)
- MySQL
- Un serveur local (XAMPP/WAMP/MAMP ou serveur PHP intégré)

Étapes (générales) :
1. Cloner le repo
2. Configurer la base MySQL + la table `Article`
3. Créer un fichier `.env` (selon ce qui est attendu par `config.php` / `config/defines.php`)
4. Lancer le serveur et ouvrir `index.php`

> Note : le projet attend des constantes/variables SQL (host/user/password/db). Elles sont généralement définies via `.env` + `config/defines.php`.

## Idées d’amélioration

- Compter le nombre de clics (score)
- Mémoriser le chemin parcouru
- Ajouter plusieurs niveaux / plusieurs mots cibles
- Ajouter une vraie page “Règles du jeu”
- Sécuriser/standardiser la connexion BDD et les requêtes

---

Bon jeu !
