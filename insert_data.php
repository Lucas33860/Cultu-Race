<?php
// Inclure la connexion à la base de données
include 'functions/query/connect.php'; // Assurez-vous que le chemin est correct
require_once 'config.php'; // Charger la configuration
sql_connect(); // Appeler la fonction de connexion

// Tableau d'articles à insérer
$articles = [
    [
        'mot' => "Karma",
        'def' => "Dogme central de l'hindouisme, du bouddhisme, selon lequel la destinée d'un être vivant et conscient est déterminée par la totalité de ses actions passées, de ses vies antérieures.",
        'paragraphe1' => "Quand on pense au Karma dans notre mode de vie occidental, nous pensons à un système de points que nous gagnons en faisant des bonnes actions dans notre vie. Dans les jeux vidéo, on peut retrouver des “points de Karma” que nous pouvons augmenter en réalisant de bonnes actions dans le jeu.",
        'paragraphe2' => "En Occident, le Karma est souvent perçu comme une forme de justice cosmique instantanée, on peut retrouver sur les réseaux sociaux des vidéos avec le thème “Instant Karma” où on peut voir des gens réaliser une mauvaise action recevoir une correction rapide, ce qui provoque le rire.",
        'paragraphe3' => "En réalité, le Karma commence dans les anciennes traditions spirituelles de l’Inde, notamment l'hindouisme, le bouddhisme, et le jaïnisme. Le mot 'Karma' vient du sanskrit et signifie 'action'. Contrairement à la vision occidentale qui le résume à une notion de récompense ou de punition, le Karma, dans sa forme originelle, est un principe universel qui régit la relation entre les actions, les intentions, et leurs conséquences. Il ne s'agit pas simplement de 'récolter ce que l'on sème', mais plutôt d'un concept beaucoup plus vaste qui englobe la cause et l'effet surtout dans le concept de réincarnation.",
        'paragraphe4' => "En résumé, la vision occidentale et la vision orientale sont fortement différentes. Le Karma signifie que chaque action a des conséquences, mais dans sa forme la plus profonde, il est un principe spirituel lié à la réincarnation et à la quête de la libération.",
        'paragraphe5' => "",
        'paragraphe6' => "",
        'picture' => "images/imagesArticles/imgKarma.jpg"
    ],
    [
        'mot' => "Inde",
        'def' => "Pays d'Asie du Sud. Sa capitale est New Delhi. Il est le pays le plus peuplé au monde ainsi que le septième pays le plus étendu au monde.",
        'paragraphe1' => "L'Inde (en anglais : India), historiquement et constitutionnellement aussi appelé le Bharat (en hindi : भारत / Bhārat) et en forme longue la république de l'Inde (en hindi : भारत गणराज्य / Bhārat Gaṇarājya ; en anglais : Republic of India), est un pays d'Asie du Sud occupant la majeure partie du sous-continent indien. Sa capitale est New Delhi. Il est le pays le plus peuplé au monde ainsi que le septième pays le plus étendu au monde.",
        'paragraphe2' => "L'Inde est un foyer de civilisations parmi les plus anciennes du monde, la civilisation de la vallée de l'Indus s'y est développée dès 3000 av. J.-C. Le sous-continent indien a abrité de vastes empires et est présent sur les routes commerciales dès l'Antiquité. L'Inde est la terre de naissance de quatre religions majeures — l'hindouisme, le jaïnisme, le bouddhisme et le sikhisme — alors que le zoroastrisme, le christianisme et l'islam s'y sont implantés durant le Ier millénaire. L'hindouisme y est la religion majoritaire avec environ 80 % de fidèles. L'Inde est le troisième pays ayant la communauté de musulman la plus importante.",
        'paragraphe3' => "Le pays a été progressivement annexé par la Compagnie anglaise des Indes avant de passer sous le contrôle du Royaume-Uni au XIXe siècle. L'Inde devient indépendante en 1947 après une lutte marquée par la résistance non-violente de Mohandas Karamchand Gandhi et plusieurs autres. Le pays est depuis 1950 une république parlementaire fédérale considérée comme la démocratie la plus peuplée au monde.",
        'paragraphe4' => "En Inde, une grande variété de véhicules est utilisée pour répondre aux besoins de transport dans des contextes urbains et ruraux. Les automobiles, notamment les berlines et les utilitaires, sont omniprésentes dans les grandes villes, mais les motos et scooters dominent en termes de popularité en raison de leur accessibilité et de leur capacité à se faufiler dans le trafic dense. Les autorickshaws, communément appelés tuk-tuks, sont également très répandus, servant de taxis bon marché et pratiques pour les trajets courts. Ces véhicules à trois roues sont particulièrement adaptés aux rues étroites et sinueuses, où les voitures ne peuvent pas toujours accéder. Dans les zones rurales, les charrettes tirées par des animaux, telles que les chars à bœufs, restent courantes pour le transport de marchandises. Parallèlement, les trains, les bus et les véhicules tout-terrain jouent un rôle essentiel dans les longs trajets interurbains. Enfin, le vélo reste un moyen de transport privilégié dans certaines régions, aussi bien pour les déplacements personnels que pour le transport de marchandises.",
        'paragraphe5' => "",
        'paragraphe6' => "",
        'picture' => "images/imagesArticles/imgInde.svg"
    ],
    [
        'mot' => "tuk-tuks",
        'def' => "Type de voiture utilisée dans de nombreux pays du monde, notamment en Thaïlande, en alternative au taxi classique.",
        'paragraphe1' => "Déclinaison moderne des pousse-pousse et cyclo-pousse (aujourd'hui vélo-taxi), mais disposant d'un moteur thermique, le tuk-tuk, touk-touk ou touctouque (en thaï « ตุ๊กตุ๊ก » ou « ตุ๊กๆ » - en khmer « ទុកទុក » - prononcé touctouque) est un type de voiture utilisée dans de nombreux pays du monde, notamment sous ce nom en Thaïlande, en alternative au taxi classique, plus cher et moins commun.",
        'paragraphe2' => "De nos jours, le tuk-tuk est le plus souvent une voiture indienne, thaïlandaise ou cambodgienne constituée d'un ensemble monocorps. Le châssis intègre un avant de scooter sur une roue, avec guidon et pare-brise, prolongé à l'arrière (pour la partie passager) d'une carriole sur deux roues, aménagée en banquette avec petite plage arrière et petite vitre arrière. Le tout est recouvert d'une capote intégrale ou d'une carrosserie légère, avec ou sans portes, protégeant ainsi conducteur et passagers des chocs et des intempéries.",
        'paragraphe3' => "Bien qu'il s'agisse d'un véhicule léger, et donc fragile en cas d'accident, les essieux et roues des tuk-tuk sont extrêmement résistants aux nombreux nids-de-poule qui jalonnent les pistes sablonneuses ou boueuses, ou des routes parfois en très mauvais état en raison, notamment, de l'effet du soleil sur le bitume ou le goudron. De nombreuses secousses sont possibles durant un trajet mais font également tout le charme de ces petits véhicules singuliers. Selon les modèles, en plus du conducteur le tuk-tuk peut charger deux à trois adultes. Si le concept et l'apparence sont souvent similaires à travers le monde, les modèles peuvent toutefois légèrement différer (taille de l'habitacle, esthétique, marchepied optionnel, capote avec fenêtre déroulable en plastique ou armature métallique...).",
        'paragraphe4' => "D'anciennes variantes cohabitent toujours avec le tuk-tuk actuel, notamment au Cambodge où le tuk-tuk traditionnel local ou moto-remork se compose d'une motocyclette légère à cadre en 'V' indépendante, similaire aux Honda Super Cub et Honda Innova, à l'arrière de laquelle s'attache un type de carriole à deux roues qui offre deux banquettes se faisant face, pour deux à trois personnes chacune. Ces tuk-tuks traditionnels disparaissent aux profit des autorickshaws indiens devenus plus populaires au Cambodge. De la même façon, des tuk-tuk au Laos et aux Philippines sont constitués d'un système rappelant le side-car, c'est-à-dire une motocyclette à laquelle une charrette aménagée en banquette à deux places est fixée latéralement.",
        'paragraphe5' => "Ces tricycles, taxis bon marché, sillonnent la plupart des villes des pays et zones touristiques du Sud. Version motorisée du rickshaw indien, le tuk-tuk existe sous ce nom (rickshaw) dans plusieurs pays d'Asie du Sud-Est. Au Cambodge, il peut-être appelé ainsi (ទុកទុក), et plus rarement reumok (រ៉ឺម៉ក), qui vient du mot français « remorque », ou encore kangbei (កង់បី) qui signifie « trois roues » ; le nom « tuk-tuk », bien qu'utilisé par la majorité des touristes et expatriés, est déconseillé par le ministère cambodgien du Tourisme qui lui préfère ainsi le mot reumok). Au Laos, on le nomme sam-lo (trois roues). Au ViêtNam, on emploie au choix rickshaw ou tuk-tuk. On en trouve également en Inde, au Sri Lanka, au Kenya, au Guatemala, au Pérou, en Egypte, à Madagascar, au Soudan, en Éthiopie et même dans des pays occidentaux de manière moins courante comme le Royaume-Uni ou la France, où ils sont moins utilisés comme taxis que comme transport individuel pour circuits touristiques en ville(se déplaçant d'un monument à un autre).",
        'paragraphe6' => "",
        'picture' => "images/imagesArticles/imgTuktuk.jpg"
    ],
    [
        'mot' => "Maât",
        'def' => "Le concept de Maât, c'est l'idée selon laquelle l’univers doit maintenir un équilibre entre le chaos et l’ordre.",
        'paragraphe1' => "Le concept de maât est le fondement de la civilisation égyptienne. C’est l’idée selon laquelle l’univers doit maintenir un équilibre entre le chaos (Isfet) et l’ordre (Maât). Maât, divinité égyptienne, représenterait un point de jonction entre la sphère divine et humaine.  Maât est une entité symbolisant la norme universelle : l'équilibre établi par le Créateur, la justice qui permet d'agir selon le droit, l'ordre qui fait conformer les actes de chacun aux lois, la vérité, la droiture et la confiance.",
        'paragraphe2' => "Le « Conte de l’Oasien », datant de la IXème dynastie, résume très bien le concept de maât : dans les neuf suppliques qu'adresse à son juge un paysan qui a été volé, ressortent les trois attitudes fondamentales d'un comportement conforme à la maât : « il n'y a pas d'hier pour le paresseux, pas d'ami pour celui qui est sourd à la maât, pas de jour de fête pour l'avide ».",
        'paragraphe3' => "- Pour l'Égyptien, toute action doit entraîner une réaction dans un engrenage reliant les actions passées (l'hier) aux actions présentes. </br>
- La plus grande sagesse selon l'Egypte ancienne, c'est de savoir écouter dans le silence, de méditer la parole reçue et d'agir en conséquence. Le sourd qui n'écoute pas l'autre, c'est l'insensible, l'indifférent. Les scribes, lorsqu’ils entraient dans la maison de vie, ils devaient être silencieux. Pendant les 11 ans qu’ils passaient là-bas, ils n’ont pas prononcé un mot, c’est l’obligation d’être silencieux selon le maât. </br>
- Maât c'est l'honnêteté, la charité, l'absence de jalousie, le travail justement rétribué, la vie intégrée dans le groupe. Selon les sages, l’avidité était une maladie incurable, mauvaise pour l’individu mais aussi pour la société entière.",
        'paragraphe4' => "Comme la maât intégrait l'Homme dans la société humaine, elle l'intègre dans la société divine. Maât devient ainsi une condition sine qua non, non seulement pour réussir sa vie terrestre, pour laisser une trace dans la mémoire collective et donc être quelqu'un pour qui on continue à agir sur terre, mais également pour passer l'examen de la balance du jugement devant Osiris. En effet, Maât a pour symbole la plume d’autruche car c’est la seule plume d’oiseau qui soit de largeur égale de part et d’autre de son axe central, ce qui suggère l’équité, l’harmonie. Elle est utilisée lors du rite de passage de la part immortelle de l’Homme dans l’au-delà : on dépose le cœur sur un plateau de la balance, puis une plume d’autruche sur l’autre. S’il y a équilibre, le défunt est apte à être introduit dans le monde des dieux.",
        'paragraphe5' => "",
        'paragraphe6' => "",
        'picture' => "images/imagesArticles/imgMaat.svg"
    ],
    [
        'mot' => "paradoxe du grand-père",
        'def' => "Réflexion sur les voyages dans le temps qui questionne la faisabilité même de modifier le passé sans créer de contradictions logiques.",
        'paragraphe1' => "Le paradoxe du grand-père est une idée captivante qui émerge de la réflexion sur les voyages dans le temps. Il illustre un scénario où une personne voyage dans le passé et tue son grand-père avant que celui-ci ne rencontre sa grand-mère. Si cela arrivait, le voyageur ne pourrait jamais naître, et par conséquent, il ne pourrait pas retourner dans le passé pour accomplir cet acte. Ce paradoxe met en avant une contradiction inhérente aux voyages temporels : si une action dans le passé empêche l’existence de celui qui l’a réalisée, comment cette action peut-elle avoir lieu ? Il questionne ainsi la faisabilité même de modifier le passé sans créer de contradictions logiques.",
        'paragraphe2' => "Un exemple célèbre du paradoxe temporel est souvent tiré de la science-fiction, notamment de l’écrivain Robert A. Heinlein et sa nouvelle All You Zombies. Dans cette histoire, un personnage fait plusieurs allers-retours dans le temps et finit par découvrir qu’il est à la fois son propre père, sa propre mère et son propre enfant ! Cette boucle temporelle, bien que poussée à l’extrême, illustre à quel point les voyages dans le temps peuvent aboutir à des situations absurdes ou paradoxales, défiant toute logique.",
        'paragraphe3' => "Une solution qui pourrait donner une explication est la notion de multivers, qui propose qu’à chaque fois qu’une décision ou un événement significatif se produit, l’univers se divise en plusieurs réalités parallèles. Dans le cadre du paradoxe du grand-père, cette théorie suggère qu’au lieu de créer une contradiction, le fait de retourner dans le passé et de tuer son grand-père entraînerait la création d’un nouvel univers distinct, dans lequel le voyageur n’existerait jamais.",
        'paragraphe4' => "Cependant, dans l’univers d’origine, rien n’aurait changé, et le voyageur continuerait d’exister, évitant ainsi toute contradiction logique. Ce concept de multivers permet de contourner les paradoxes en introduisant l’idée que chaque action dans le passé n’affecte pas directement la ligne temporelle d’origine mais crée plutôt une nouvelle branche de réalité. Ainsi, les voyages dans le temps ne modifieraient pas notre présent, mais ouvriraient la porte à des réalités alternatives infinies. Cette idée est souvent explorée dans la science-fiction moderne, mais elle est également prise au sérieux par certains physiciens théoriciens, notamment dans le cadre de la mécanique quantique.",
        'paragraphe5' => "Ces récits, au-delà du simple divertissement, suscitent des réflexions profondes sur la causalité, le libre arbitre et l’existence. Ils nous plongent dans un vertige existentiel où l’identité, le temps et l’histoire se mêlent, laissant les questions ouvertes : peut-on vraiment changer le passé sans bouleverser le présent ? Et si oui, à quel prix ?",
        'paragraphe6' => "",
        'picture' => "images/imagesArticles/imgParadoxeGrandPere.png"
    ],
    [
        'mot' => "Pays",
        'def' => "Territoire d’une nation, délimité par des frontières.",
        'paragraphe1' => "Un pays est un territoire constituant une entité géographique et humaine qui peut être souveraine, autonome en association avec une autre entité souveraine, ou bien indépendante de fait mais non reconnue de droit (par le droit international et l’ONU). Par exemple, des pays comme l’Inde, le Japon et l’Egypte illustrent cette diversité. L’Inde, riche de ses langues et de ses traditions, possède une culture pluriethnique qui fait sa singularité. Le Japon, avec son mélange de modernité et de traditions séculaires, témoigne également d’une identité nationale forte. De même, l’Egypte, souvent considérée comme le berceau de la civilisation, incarne un patrimoine historique fascinant.",
        'paragraphe2' => "Un pays est caractérisé par une ou plusieurs langues officielles ainsi que par plusieurs autres langues secondaires (dialectes), parlées et écrites, utilisées par les habitants du pays. Dans le cas de l’Inde, on y parle plus de 120 langues, dont l’hindi et l’anglais sont officielles, tandis qu’au Japon, le japonais est la langue prédominante. L’Egypte, quant à elle, utilise l’arabe comme langue officielle, ancrée dans une histoire riche et complexe. Il peut avoir une législation laïque ou bien religieuse, et, dans le second cas, avoir une religion d’État ou plusieurs. L’Inde, par exemple, a un système laïque qui respecte la diversité religieuse, alors que le Japon, tout en étant principalement shintoïste et bouddhiste, possède une constitution laïque. En Egypte, l’islam joue un rôle central dans la culture et les lois, tout en coexistant avec des minorités chrétiennes.",
        'paragraphe3' => "Une capitale nationale regroupe les institutions de l’État, comme le lieu de pouvoir du gouvernement central (parlement, palais présidentiel…), mais il existe parfois plusieurs capitales (comme dans le cas de la Bolivie ou des Pays-Bas) entre lesquelles les institutions se partagent. New Delhi est la capitale de l’Inde, Tokyo celle du Japon, et Le Caire représente l’Egypte. Un pays est organisé en plusieurs régions, avec une ville principale où siègent les pouvoirs locaux (par exemple, le chef-lieu où siège la préfecture régionale en France). L’Inde est divisée en États et territoires de l’Union, le Japon en préfectures, et l’Egypte en gouvernorats, chacun ayant ses propres structures administratives.",
        'paragraphe4' => "Il peut avoir une structure unitaire (subdivisions toutes égales et homologues comme les départements français) ou bien fédérale (subdivisions de tailles et de statuts variables, comme dans le cas des cantons suisses). L’Inde est un pays fédéral, tandis que le Japon et l’Egypte adoptent des structures plus unitaires.",
        'paragraphe5' => "Indépendamment de sa constitution, de sa législation et de sa structure territoriale, un pays peut avoir un fonctionnement politique pluraliste avec plusieurs partis et des élections à candidats multiples, ou bien autocratique avec un seul parti et des élections dont les résultats sont conformes aux directives du chef de l’État. L’Inde, avec son système démocratique, se distingue de l’Egypte qui, bien qu’ayant connu des périodes de pluralisme, a souvent été marquée par des régimes autoritaires. Le Japon, en tant que démocratie parlementaire, trouve un équilibre entre tradition et modernité dans son système politique.",
        'paragraphe6' => "",
        'picture' => "images/imagesArticles/imgPays.png"
    ],
    [
        'mot' => "Toyotisme",
        'def' => "C’est une forme d’organisation du travail dont l’ingénieur japonais Taiichi Ōno est considéré comme l’inventeur. Mise en avant par Toyota en 1962, elle n’est pas appliquée immédiatement.",
        'paragraphe1' => "Après leur défaite face aux Américains au cours de la Seconde Guerre mondiale, le Japon doit relancer son économie. Toyota médiatise une vision stratégique pour faire redémarrer l’économie japonaise : rattraper les Américains au plan de la production, sinon risquer de disparaître. À l’origine de ce système de gestion de la production, le fondateur de Toyota, Sakichi Toyoda, son fils, Kiichiro Toyoda, et l’ingénieur Taiichi Ōno. Ces derniers se sont inspirés pour l’essentiel des travaux de William Edwards Deming, ainsi que des écrits de Henry Ford sur le fordisme, qui prônait une production de masse efficace.",
        'paragraphe2' => "Taiichi Ōno met au point un système de gestion de l’entreprise simple mais efficace, consistant à : <br>
                            • Réduire les gaspillages ; <br>
                            • Maintenir une qualité optimale des produits tout au long de la chaîne de production ; <br>
                            • Éviter l’offre excédentaire. Si certains modèles de voitures se vendent moins, il faut en réduire la taille des séries, ce qui implique une baisse des stocks. Les voitures et les pièces sont fabriquées pratiquement à la demande. C’est la production à flux tendu (ou production « juste à temps », ou « méthode kanban ») ; <br>
                            • Prendre en considération l’avis des opérateurs : ceux-ci participent au diagnostic des problèmes et à leur résolution ; <br>
                            • Améliorer le système de façon continue, en une dynamique interne qui intègre tous les acteurs concernés, de l’opérateur à l’ingénieur.",
        'paragraphe3' => "Un tel système d’organisation permet un décloisonnement des fonctions et des responsabilités ; il allie l’efficacité de production à une certaine reconnaissance psychologique des travailleurs. On leur demande leur avis sur l’entreprise, et ils se sentent donc plus impliqués.",
        'paragraphe4' => "Le toyotisme serait le modèle idéal de l’organisation de l’entreprise du point de vue de la productivité. Mais sa mise en place au Japon a pris plusieurs dizaines d’années, et n’a probablement été possible que parce que le modèle social japonais pouvait l’accepter (« Au Japon, les syndicats de l’industrie automobile sont intégrés à l’entreprise à laquelle ils appartiennent, représentant uniquement les travailleurs réguliers, défendant surtout les intérêts de cette entreprise. »).",
        'paragraphe5' => "Certaines multinationales ont cependant décidé d’appliquer quelques concepts toyotistes tels que le juste-à-temps, l’autonomisation des machines, le kaizen, le kanban ou le cercle de qualité. Cette nouvelle forme d’organisation, basée sur les compétences et la qualification des ressources humaines, marque la fin du taylorisme et du fordisme à l’état pur.",
        'paragraphe6' => "",
        'picture' => "images/imagesArticles/imgToyotisme.png"
    ],
    [
        "mot" => "Khonsou",
        "def" => "Voyageur lunaire, Guérisseur et Gardien nocturne, un dieu de la fertilité, et un dieu de la vengeance juste.",
        "paragraphe1" => "Khonsou ou Chons signifie ‘voyageur’ ou ‘celui qui traverse’, en référence à la lune qui traverse le ciel chaque nuit. En égyptien ancien, Khonsou se traduit par ‘Wanderer’ = ‘errant’, ce qui symbolise le mouvement à travers les cieux.",
        "paragraphe2" => "Il incarne les pouvoirs lunaires et le passage du temps. Sa mission est d'accompagner et protéger ceux qui voyage dans la nuit, tout en agissant comme guérisseur. 
    <br> 
    Gardien des humains contre les dangers invisibles, il veille également sur la fertilité des champs et apporte une ‘vengeance juste’, en protégeant les pharaons et en punissant leurs ennemis.",
        "paragraphe3" => "Khonsou, divinité égyptienne, est souvent représenté comme un enfant pour symboliser sa jeunesse et sa pureté, avec une tresse sur le côté de sa tête, un motif typique des enfants royaux dans l'art égyptien. Symbolisant son innocence et son héritage divin, indiquant sa croissance spirituelle ou physique.
    
    <br> Il peut également apparaître sous la forme d'un homme avec une tête de faucon, représentant son rôle céleste et ses qualités de vigilance et d'agilité.",

        "paragraphe4" => "Mythologies Lunaires & Civilisations ",
        "paragraphe5" => "Mésopotamie : Sîn est la divinité de la lune, symbolisant le temps et les rythmes agricoles.
    <br> 
    Grèce : La lune est représentée par trois déesses : Séléné (lune pleine), Artémis (lune croissante) et Hécate (lune noire), équivalentes aux romaines Luna, Diane et Trivia.
    <br> 
    Inde : Chandra est le dieu de la lune, régulateur des cycles temporels et symbole de beauté et de fertilité.
    <br> Polynésie : Fati est la divinité lunaire, associée aux marées et à la navigation.
    <br> Nordique : Máni est la personnification de la lune, souvent en opposition à Sól, le dieu du soleil.
    <br> Berbères : La lune est vénérée sous le nom d'Ayyur, symbole de lumière et de fertilité.
    <br> La lune est généralement perçue comme une force qui influence la nature et les rythmes humains.
    <br> Mais elle apparaît au cinéma dans la science-fiction comme le film ‘Le voyage dans la Lune’.",
        "paragraphe6" => "",
        "picture" => "images/imagesArticles/imgN.png"
    ],
    [
        "mot" => "Egypte",
        "def" => "Pays arabe transcontinental se trouvant en Afrique du Nord-Est. La surface du pays est largement recouverte par le Sahara et la population est fortement concentrée sur les rives du Nil.",
        "paragraphe1" => "L'Egypte est un pays fascinant avec une histoire complexe et une influence culturelle immense qui s'étend sur plusieurs millénaires. Sa situation géographique unique, chevauchant l'Afrique du Nord-Est et l'Asie de l'Ouest avec la péninsule du Sinaï, en fait un carrefour de civilisations. Le Nil, cette artère vitale, a permis l'essor d'une des civilisations les plus anciennes et les plus brillantes de l'humanité, celle de l'Egypte antique, connue pour ses avancées en écriture, agriculture, architecture monumentale et organisation sociale.",
        "paragraphe2" => "Les vestiges archéologiques comme les pyramides de Gizeh, le Sphinx, et la vallée des Rois témoignent de cette grandeur passée et continuent d'attirer des millions de visiteurs chaque année. L'Egypte est également marquée par une histoire riche d'invasions et de dominations, depuis les Perses et les Grecs jusqu'aux Romains et Byzantins, avant de passer sous contrôle arabe au VIIe siècle.",
        "paragraphe3" => "La période moderne de l'Egypte, à partir de la domination ottomane au XVIe siècle, a été marquée par une quête d'indépendance et de modernisation, particulièrement sous Méhémet Ali au XIXe siècle. La construction du canal de Suez, un atout stratégique mondial, et la lutte contre les ingérences étrangères, notamment britanniques, ont façonné le pays.",
        "paragraphe4" => "Au XXe siècle, l'Egypte a été un acteur clé du nationalisme arabe sous la présidence de Gamal Abdel Nasser, qui a conduit à des réformes sociales et économiques significatives. Le pays a également connu des périodes d'instabilité, de guerre, et de changement de régime, notamment avec la révolution de 2011 qui a mené à la destitution d'Hosni Moubarak, et l'instabilité politique qui a suivi.",
        "paragraphe5" => "Aujourd'hui, l'Egypte est gouvernée par un régime autoritaire sous Abdel Fattah al-Sissi, avec des défis persistants tels que l'autoritarisme, les tensions sociales, et les pressions économiques. Malgré cela, le pays reste un centre culturel et historique majeur, avec une influence considérable dans le monde arabe et au-delà.",
        "paragraphe6" => "En termes de religion, l'Egypte est majoritairement musulmane sunnite avec une minorité chrétienne copte significative. Les relations entre les communautés religieuses peuvent parfois être tendues, mais elles font partie de l'identité complexe et multiculturelle de l'Egypte contemporaine. Les divinités égyptiennes occupaient une place centrale dans la vie quotidienne et spirituelle de l'Egypte antique, chaque dieu ou déesse ayant un rôle spécifique dans le maintien de l'ordre cosmique et terrestre. Parmi ces divinités, Khonsou et Maât se distinguent par leurs fonctions essentielles.",
        "picture" => "images/imagesArticles/imgEgypte.png"
    ],
    [
        "mot" => "Sakazuki",
        "def" => "Le Sakazuki est la cérémonie d'intronisation de tous les aspirants qui entre chez les Yakuza",
        "paragraphe1" => "Pour prétendre à cette cérémonie le potentiel aspirant doit faire ses preuves au chef du clan pendant 6 mois pour lui montrer sa loyauté et son envie de faire partie des leurs. ",
        "paragraphe2" => "Pendant la cérémonie au Japon tous les participants sont vêtus d'un kimono et ne doivent pas parler. Le chef et le futur yakuza s'agenouillent côte à côte en face de tous les membres du clan. Ils versent tous deux du saké dans des coupes et boivent chacun une gorgée  pour symboliser le lien du sang. ",
        "paragraphe3" => "Le nouveau membre doit alors garder sa coupe en signe d'appartenance au groupe. ",
        "paragraphe4" => "Le chef rappelle alors le code d'honneur en 9 points qui doit être respecté absolument par chaque membre du groupe.",
        "paragraphe5" => "Tu n'offenseras pas les bons citoyens. <br>
Tu ne prendras pas la femme du voisin <br>
Tu ne voleras pas l'organisation <br>
Tu ne te drogueras pas <br>
Tu devras obéissance à ton supérieur <br>
Tu accepteras de mourir pour le père ou de faire de la prison pour lui <br>
Tu ne devras parler du groupe à quiconque <br>
En prison tu ne diras rien <br>
Il n'est pas permis de tuer un Katagari ( Une personne ne faisant pas partie des clans de yakuzas).
",
        "paragraphe6" => "Après la cérémonie extrêmement codifiée, l'apprenti yakuza ne doit pas décevoir. En jurant fidélité au clan, il lui est nécessaire de trouver un travail et reverser les bénéfices à l'organisation. Au moindre écart, le yakuza pratique le yubitsume, ou l'ablation du petit doigt. Moins pratiqué qu'auparavant, l'amputation des doigts reste un moyen de prouver l'assujettissement au chef, et l'encaissement à la souffrance.
",
        "picture" => "images/imagesArticles/imgSakazuki.jpg"
    ],
    [
        "mot" => "Japon",
        "def" => "Le Japon est un pays insulaire de l'Asie de l'Est. ",
        "paragraphe1" => "Le Japon est un pays insulaire d'Asie de l'Est, situé dans l'océan Pacifique. Il est composé de quatre grandes îles principales : Honshu, Hokkaido, Kyushu et Shikoku, ainsi que d'une multitude de petites îles. Le pays est connu pour sa riche histoire, sa culture millénaire et son impressionnante modernité.",
        "paragraphe2" => "Malgré ses nombreux atouts, le Japon fait face à des défis. Le vieillissement rapide de la population et la baisse de la natalité constituent un problème démographique majeur.",
        "paragraphe3" => "Le Toyotisme au Japon est un modèle de production industrielle développé par l'entreprise automobile Toyota dans les années 1950. Il se distingue du modèle tayloriste, qui se concentre sur la production de masse, en mettant l'accent sur la flexibilité, la réduction des gaspillages et l'amélioration continue. Le principe central du Toyotisme est le 'juste-à-temps' (ou 'just-in-time'), où les stocks sont minimisés et les matériaux sont fournis uniquement lorsque cela est nécessaire.",
        "paragraphe4" => "Le Japon est également connu pour sa cuisine raffinée, notamment les sushis, sashimis, tempuras et ramen, qui ont conquis le monde entier. Le régime alimentaire japonais, souvent considéré comme l'un des plus sains au monde, repose sur des ingrédients frais et de saison.",
        "paragraphe5" => "Les Yakuza, ou la mafia japonaise, représentent un élément incontournable de la culture criminelle du pays. Organisés en clans, ils sont souvent associés au crime organisé, allant du trafic de drogue au blanchiment d'argent, en passant par le jeu illégal et la prostitution.",
        "paragraphe6" => "Le Japon est également un pays de traditions artistiques riches et variées. La calligraphie japonaise, ou 'shodō', ainsi que l'art de la cérémonie du thé, le théâtre Noh et Kabuki, et la poésie haïku, sont des exemples de cette diversité culturelle.",
        "picture" => "images/imagesArticles/imgJapon.jpg"
    ],

    [
        "mot" => "Yakuza",
        "def" => "Les Yakuza sont des membres de la mafia japonaise.",
        "paragraphe1" => "Les Yakuza sont des membres de la mafia japonaise, également connue sous le nom de 'boryokudan'. Ils sont organisés en clans, appelés 'kumi', qui sont dirigés par un chef, ou 'oyabun'. Les Yakuza sont souvent associés à des activités criminelles telles que le trafic de drogue, le jeu illégal, le blanchiment d'argent et la prostitution.",
        "paragraphe2" => "Les Yakuza sont connus pour leur code d'honneur strict, appelé 'ninkyo', qui met l'accent sur la loyauté, la fraternité et le respect. Ils sont également reconnus pour leurs tatouages complexes, qui représentent souvent des motifs traditionnels japonais et des symboles de leur clan.",
        "paragraphe3" => "Les Yakuza ont une longue histoire au Japon, remontant à plusieurs siècles. Ils ont joué un rôle important dans la société japonaise, en particulier après la Seconde Guerre mondiale, où ils ont fourni des services sociaux et de protection dans les quartiers défavorisés.",
        "paragraphe4" => "Cependant, les Yakuza sont également impliqués dans des activités criminelles graves, ce qui a conduit le gouvernement japonais à prendre des mesures pour les combattre. En 1992, le gouvernement a adopté la loi sur le contrôle des organisations criminelles, qui vise à réduire l'influence des Yakuza et à les empêcher de mener des activités illégales.",
        "paragraphe5" => "Les Yakuza ont des cérémonies importantes comme le Sakazuki qui est un rituel symbolique central dans la culture des Yakuza, marquant l'établissement de liens formels au sein de l'organisation. Inspirée des traditions japonaises, cette cérémonie consiste en un échange de coupes de saké entre deux personnes, symbolisant un pacte de loyauté et de fraternité.",
        "paragraphe6" => "Les Yakuza sont également connus pour leur discipline et leur dévouement envers leur clan. Ils sont prêts à sacrifier leur vie pour leur chef et à suivre ses ordres sans poser de questions. Malgré leur réputation de violence et de criminalité, les Yakuza sont également respectés pour leur sens de l'honneur et leur engagement envers leurs traditions.",
        "picture" => "images/imagesArticles/imgYakuza.jpg"

    ],
    [
        "mot" => "voiture",
        "def" => "Une automobile est un véhicule motorisé destiné au transport terrestre de personnes et de leurs bagages.",
        'paragraphe1' => "Une automobile (simplification historique de l'expression « voiture légère automobile ») est un véhicule à roues, motorisé, destiné au transport terrestre de quelques personnes et de leurs bagages. L'abréviation populaire « voiture » est assez courante, bien que ce terme désigne de nombreux types de véhicules qui ne sont pas tous motorisés.",
        'paragraphe2' => "La construction automobile est un secteur économique important pour les pays possédant des constructeurs ou des sites d'assemblage. Son industrie a été l'un des secteurs les plus importants et les plus influents depuis le début du XXe siècle. Le fordisme, introduit par Henry Ford, a révolutionné ce secteur en introduisant des méthodes de production en série qui ont permis de rendre les automobiles accessibles au grand public.",
        'paragraphe3' => "L'automobile est un moyen de transport privé parmi les plus utilisés au monde et le plus utilisé en France. Sa capacité est généralement de deux à cinq personnes, mais peut varier de une à neuf places.",
        'paragraphe4' => "Pour parler d'un véhicule de tourisme, les termes « automobiles » et « voiture » peuvent être utilisés, toutefois, selon la réglementation du secteur, des définitions parfois différentes ont été utilisées, notamment dans la convention de Vienne sur la circulation routière. Dans les accords internationaux, la catégorie de véhicule qui se rapproche le plus de la voiture est la catégorie M1.",
        'paragraphe5' => "Le terme « véhicule automobile » est plus large que le terme « voiture automobile », il couvre l'ensemble des véhicules motorisés d'au moins quatre roues. Ainsi, dès 1956, Chapelain note que « De par leur destination, les véhicules automobiles sont classés en : voitures de tourisme ; véhicules utilitaires ; véhicules spéciaux. »",
        'paragraphe6' => "En raison de sa large diffusion et de son usage dans les milieux les plus variés, la voiture automobile est aujourd'hui appelée par de nombreux noms familiers, comme « auto », « bagnole », ou « char » en Amérique du Nord francophone, et argotiques, comme « tacot », « caisse », « tire », « guimbarde », « chignole », « charrette » en Europe, ainsi que « minoune » au Canada. L'usage limite l'emploi du terme automobile aux véhicules possédant quatre roues, ou plus rarement trois ou six roues, de dimensions inférieures à celle des autobus et des camions, mais englobe parfois les camionnettes. Bien qu'étant des « véhicules automobiles », les motocyclettes ne sont pas habituellement classées dans cette catégorie.",
        'picture' => "images/imagesArticles/imgVoiture.png"
    ],
    [
        "mot" => "Fordisme",
         "def" => "Le fordisme est un modèle de production industrielle développé par l'entreprise automobile Ford dans les années 1910.",
         "paragraphe1" => "C'est d'Amérique que vient le pas décisif. Une révolution dans la conception et dans l'exécution : La Révolution Fordiste. En 1908, Henry Ford a une intuition qui bouleverse l'industrie automobile. Il imagine une voiture simple à produire, robuste et accessible à l'Amérique profonde : la fabuleuse Ford T. L'objectif est clair : rendre l'automobile accessible à toutes les bourses. Pour y parvenir, Ford doit changer radicalement le mode de production et la manière dont les ouvriers travaillent.",
         "paragraphe2" => "Alors qu'il réorganise son usine, il découvre les idées de l'ingénieur Frederick Taylor, le taylorisme qui prône une gestion scientifique du travail pour améliorer l'efficacité. Tout commence à aller plus vite, mais l'usine ne produit encore que 200 voitures par jour. Par ailleurs, la transformation la plus révolutionnaire reste à venir, ce n'est plus l'ouvrier qui se déplace mais les pièces de la voiture qui sont amenées à lui. Les ouvriers se tiennent désormais à un point fixe et répètent inlassablement le même geste. De ce fait, la chaîne de montage est née.",
         "paragraphe3" => "Une succession d'opérations simples effectuées à une vitesse constante. Les pièces détachées sont alors transportées par un réseau de convoyeurs jusqu'à leur destination exacte dans la chaîne. Il n'est donc plus nécessaire de porter les pièces à la main, les transporteurs motorisés s'accaparent de cette tâche, ce qui va permettre de gagner un temps précieux pour les ouvriers. De surcroît, une gigantesque machine fait son apparition. Le système impose son rythme : les cadences sont strictes, tout comme les rémunérations. Il est désormais impossible de ralentir ou de s'arrêter.",
         "paragraphe4" => "Ford ne se soucie guère des conséquences humaines, car les remplaçants ne manquent pas. Attirés par des salaires sensiblement plus élevés que dans d'autres branches, de nombreux travailleurs affluent à Detroit. Le temps de fabrication par voiture diminue à seulement 1h30. Grâce à ces gains obtenus de productivité, Ford affiche des bénéfices records et peut se permettre d'augmenter les salaires. Lorsque Ford annonce qu'il double la rémunération, atteignant le niveau inouï de 5 dollars par jour, l'usine est assiégée par des candidats.",
         "paragraphe5" => "Enfin, suite à son succès, Ford décide de construire une nouvelle usine : celle de ses rêves. Elle sera la plus grande du monde, employant 80 000 personnes. L'usine de la Rivière Rouge reçoit des milliers de tonnes de charbon, de fer et de sable d'un côté, tandis que de l'autre côté, 2 500 Ford T en sortent chaque jour. Le secret du succès de Ford repose sur l'afflux ininterrompu de main-d'œuvre, attirée à Detroit par la promesse de bons salaires. Les termes du contrat sont clairs : si les ouvriers travaillent vite et qu'ils suivent des ordres, alors ils seront bien payés.",
         "paragraphe6" => "Ford met en avant les avantages matériels offerts à ses ouvriers, les encourageant même à épargner pour acheter leur propre Ford T. Bien que révolutionnaire, le fordisme sera plus tard critiqué pour son manque de flexibilité, menant à l'émergence du toyotisme, un modèle plus agile et centré sur l'amélioration continue, mieux adapté aux marchés en évolution.",
         "picture" => "images/imagesArticles/imgFordisme.jpg"],

    // Ajoutez d'autres articles ici si nécessaire
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
    [
        "mot" => "divinité égyptienne",
        "def" => "L'Égypte ancienne est célèbre pour son panthéon riche et varié de divinités, chacune ayant des rôles spécifiques dans la cosmologie égyptienne. Ces divinités étaient souvent associées à des éléments naturels, des concepts abstraits ou des fonctions sociétales.",
        "paragraphe1" => "Par exemple, Osiris, le dieu de la résurrection et de la vie après la mort, était essentiel dans les croyances liées à l'au-delà. Son rôle était de juger les âmes des défunts et de garantir leur passage vers une existence éternelle. Amon-Ra, quant à lui, était le dieu du soleil, représentant la lumière, la création et le pouvoir royal, fusionnant les attributs d'Amon, le dieu thébain, et de Ra, le dieu solaire.",
        "paragraphe2" => "Au cœur de la pensée égyptienne se trouvait le concept de Maât, qui symbolisait l'ordre, la vérité et la justice. Maât était à la fois une déesse et un principe cosmique, représentant l'harmonie universelle. Chaque divinité avait un rôle dans le maintien de cette Maât, garantissant l'équilibre de l'univers. Les pharaons, en tant que représentants des dieux sur terre, avaient la responsabilité de préserver la Maât à travers leurs actions et leurs décisions. Ainsi, la stabilité du royaume et l'harmonie de l'univers dépendaient de leur capacité à vivre en accord avec ce principe.",
        "paragraphe3" => "Khonsou, le dieu de la lune, est un autre exemple pertinent. Il était souvent représenté comme un jeune homme portant une couronne de lune et était associé aux cycles du temps et à la mesure du temps. En tant que fils d'Amon-Ra et de Mout, il incarnait les notions de renouveau et de croissance, en contraste avec l'immuabilité de Maât. Khonsou était invoqué pour apporter la guérison et pour réguler le rythme des saisons, renforçant ainsi l'importance du temps dans la cosmologie égyptienne.",
        "paragraphe4" => "D'autres divinités, telles qu'Anubis, le dieu des morts, et Bastet, la déesse de la protection, de la maternité et de la joie, enrichissent encore ce panthéon. Anubis, souvent représenté avec une tête de chacal, était chargé de la préservation des corps et de l'accompagnement des âmes dans l'au-delà. Bastet, quant à elle, était représentée comme une femme avec une tête de lionne ou de chat, symbolisant à la fois la douceur et la férocité, soulignant le rôle des femmes dans la société égyptienne.",
        "paragraphe5" => "Les dieux Geb, le dieu de la terre, et Horus, le dieu du ciel, sont également des figures centrales de la mythologie égyptienne. Geb et Nut (la déesse du ciel) étaient souvent représentés comme un couple complémentaire, représentant la terre et le ciel, leur union étant essentielle à la création de l'humanité. Horus, souvent représenté avec une tête de faucon, symbolisait le pouvoir royal et la protection, étant lié à la souveraineté des pharaons. Ces deux divinités montrent comment les Égyptiens percevaient le monde à travers une interaction entre les forces terrestres et célestes.",
        "paragraphe6" => "Enfin, la déesse Sekhmet, la lionne de la guerre, et le dieu Set, associé à la violence et à la tempête, complètent cette galerie de divinités. Sekhmet était vénérée pour sa capacité à apporter la guerre et la guérison, tandis que Set représentait le chaos et la lutte. Leur dualité illustre la complexité de la pensée égyptienne, où même les aspects sombres de l'existence avaient leur place dans l'équilibre de la vie. Ensemble, ces divinités et le principe de Maât formaient un système de croyances interconnecté, influençant profondément la culture et la société égyptiennes.",
        "picture" => "images/imagesArticles/img"
    ],
    [
        "mot" => "divinités égyptiennes",
        "def" => "L'Égypte ancienne est célèbre pour son panthéon riche et varié de divinités, chacune ayant des rôles spécifiques dans la cosmologie égyptienne. Ces divinités étaient souvent associées à des éléments naturels, des concepts abstraits ou des fonctions sociétales.",
        "paragraphe1" => "Par exemple, Osiris, le dieu de la résurrection et de la vie après la mort, était essentiel dans les croyances liées à l'au-delà. Son rôle était de juger les âmes des défunts et de garantir leur passage vers une existence éternelle. Amon-Ra, quant à lui, était le dieu du soleil, représentant la lumière, la création et le pouvoir royal, fusionnant les attributs d'Amon, le dieu thébain, et de Ra, le dieu solaire.",
        "paragraphe2" => "Au cœur de la pensée égyptienne se trouvait le concept de Maât, qui symbolisait l'ordre, la vérité et la justice. Maât était à la fois une déesse et un principe cosmique, représentant l'harmonie universelle. Chaque divinité avait un rôle dans le maintien de cette Maât, garantissant l'équilibre de l'univers. Les pharaons, en tant que représentants des dieux sur terre, avaient la responsabilité de préserver la Maât à travers leurs actions et leurs décisions. Ainsi, la stabilité du royaume et l'harmonie de l'univers dépendaient de leur capacité à vivre en accord avec ce principe.",
        "paragraphe3" => "Khonsou, le dieu de la lune, est un autre exemple pertinent. Il était souvent représenté comme un jeune homme portant une couronne de lune et était associé aux cycles du temps et à la mesure du temps. En tant que fils d'Amon-Ra et de Mout, il incarnait les notions de renouveau et de croissance, en contraste avec l'immuabilité de Maât. Khonsou était invoqué pour apporter la guérison et pour réguler le rythme des saisons, renforçant ainsi l'importance du temps dans la cosmologie égyptienne.",
        "paragraphe4" => "D'autres divinités, telles qu'Anubis, le dieu des morts, et Bastet, la déesse de la protection, de la maternité et de la joie, enrichissent encore ce panthéon. Anubis, souvent représenté avec une tête de chacal, était chargé de la préservation des corps et de l'accompagnement des âmes dans l'au-delà. Bastet, quant à elle, était représentée comme une femme avec une tête de lionne ou de chat, symbolisant à la fois la douceur et la férocité, soulignant le rôle des femmes dans la société égyptienne.",
        "paragraphe5" => "Les dieux Geb, le dieu de la terre, et Horus, le dieu du ciel, sont également des figures centrales de la mythologie égyptienne. Geb et Nut (la déesse du ciel) étaient souvent représentés comme un couple complémentaire, représentant la terre et le ciel, leur union étant essentielle à la création de l'humanité. Horus, souvent représenté avec une tête de faucon, symbolisait le pouvoir royal et la protection, étant lié à la souveraineté des pharaons. Ces deux divinités montrent comment les Égyptiens percevaient le monde à travers une interaction entre les forces terrestres et célestes.",
        "paragraphe6" => "Enfin, la déesse Sekhmet, la lionne de la guerre, et le dieu Set, associé à la violence et à la tempête, complètent cette galerie de divinités. Sekhmet était vénérée pour sa capacité à apporter la guerre et la guérison, tandis que Set représentait le chaos et la lutte. Leur dualité illustre la complexité de la pensée égyptienne, où même les aspects sombres de l'existence avaient leur place dans l'équilibre de la vie. Ensemble, ces divinités et le principe de Maât formaient un système de croyances interconnecté, influençant profondément la culture et la société égyptiennes.",
        "picture" => "images/imagesArticles/img"
    ],
    [
        "mot" => "voyage",
        "def" => "Le voyage est un déplacement d'une ou plusieurs personnes vers un lieu déterminé, souvent pour des raisons personnelles, professionnelles ou culturelles.",
        "paragraphe1" => "Un voyage est un déplacement d'une ou plusieurs personnes, effectué sur un trajet déterminé, dans un but personnel (comme le tourisme ou les activités socio-culturelles), professionnel (affaires, commerce) ou pour d'autres raisons (guerre, réfugiés politiques ou climatiques). Il peut s'agir d'un aller simple ou d'un aller-retour. Avec l'évolution des moyens de transport, le voyage a pris une place prépondérante dans nos vies, devenant une activité essentielle pour l'épanouissement personnel et le développement économique.",
        "paragraphe2" => "Au cours du XXe siècle, alors que le nombre de zones inaccessibles diminuait, les voyages se sont considérablement développés et démocratisés. Les moyens de transport, tels que le chemin de fer, l'automobile et l'avion, sont devenus de plus en plus rapides et confortables. Cependant, cette évolution a également entraîné des conséquences négatives, notamment en termes de consommation d'énergie, de pollution et de dégradation des écosystèmes. Ainsi, l'impact environnemental du voyage est devenu une préoccupation croissante dans le cadre du développement durable.",
        "paragraphe3" => "Historiquement, le voyage est consubstantiel à l'homo sapiens, qui a progressivement colonisé le globe. Les déplacements, motivés par des raisons pratiques telles que le commerce ou l'exploration, ont façonné notre histoire. Des exemples notables incluent les conquêtes d'Alexandre le Grand et l'expansion des empires égyptien, chinois et romain. Les voyages ont également été des motifs de pèlerinage depuis l'Antiquité, soulignant leur importance dans le développement des sociétés humaines.",
        "paragraphe4" => "Le voyage touristique, qui vise le plaisir et la découverte, a des racines anciennes, souvent attribuées à l'Europe du XVIIe siècle. Ce phénomène, connu sous le nom de « Grand Tour », était pratiqué par la noblesse et reflétait un intérêt croissant pour l'exploration de nouveaux horizons. Cependant, avec la rapidité croissante des transports, le monde semble se rétrécir, laissant moins de place à la surprise du voyageur. Ce sentiment de déjà-vu est exacerbé par la cartographie moderne et la disponibilité d'informations sur les destinations.",
        "paragraphe5" => "Les implications énergétiques et environnementales des voyages sont préoccupantes. L'augmentation des déplacements rapides et motorisés pose des défis en termes de consommation des ressources et d'émissions de gaz à effet de serre. Cela a conduit à l'émergence du concept de « tourisme responsable », qui vise à réduire l'impact environnemental des voyages tout en favorisant une prise de conscience écologique parmi les voyageurs.",
        "paragraphe6" => "Enfin, les voyages peuvent parfois être entravés par des considérations juridiques. Dans certains pays, des restrictions sur la circulation des citoyens ou l'entrée des étrangers sont mises en place pour prévenir les migrations massives. Cela nécessite souvent des documents spécifiques comme des passeports, tandis que les « sans papiers » risquent d'être renvoyés chez eux. Dans ce contexte, on peut aussi évoquer le paradoxe du grand-père, une réflexion fascinante sur les voyages dans le temps, qui interroge la possibilité de modifier le passé sans créer de contradictions logiques. Selon cette idée, agir dans le passé pourrait entraîner des réalités alternatives, suggérant que les voyages dans le temps pourraient ouvrir des perspectives infinies sans affecter notre présent.",
        "picture" => "images/imagesArticles/img"
    ],
    
    
];



// Insertion des articles dans la base de données
foreach ($articles as $article) {
    // Vérifier si l'article existe déjà dans la base de données
    $existingArticle = sql_select('Article', '*', "mot = '" . $article['mot'] . "'");

    // Si l'article n'existe pas, l'insérer
    if (!$existingArticle) {
        $lastId = sql_insert(
            'Article',
            'mot, def, paragraphe1, paragraphe2, paragraphe3, paragraphe4, paragraphe5, paragraphe6, picture',
            "'" . sql_escape($article['mot']) . "', '" . sql_escape($article['def']) . "', '" . sql_escape($article['paragraphe1']) . "', '" . sql_escape($article['paragraphe2']) . "', '" . sql_escape($article['paragraphe3']) . "', '" . sql_escape($article['paragraphe4']) . "', '" . sql_escape($article['paragraphe5']) . "', '" . sql_escape($article['paragraphe6']) . "', '" . sql_escape($article['picture']) . "'"
        );

        // Optionnel : Vérifiez si l'insertion a réussi
        if ($lastId) {
            echo "L'article '{$article['mot']}' a été inséré avec succès avec l'ID: $lastId<br>";
        } else {
            echo "Erreur lors de l'insertion de l'article '{$article['mot']}'.<br>";
        }
    } else {
        echo "L'article '{$article['mot']}' existe déjà dans la base de données.<br>";
    }
}

echo "Tous les articles ont été insérés avec succès.";
