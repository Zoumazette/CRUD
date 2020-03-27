# CRUD
Vous devez créer un répertoire CRUD à la racine de votre serveur. Dans ce répertoire, vous placerez: un fichier index.html
un répertoire Views  avec 4 fichiers à l'interieur.  create.html , read.html , update.html , delete.html.
un répertoire Controllers  avec 4 fichiers à l'interieur.  create_ctrl.php , read_ctrl.php , update_ctrl.php , delete_ctrl.php

Vous devez créer une base de données que vous nommerez crud avec interclassement utf8_general_ci

Dans cette base de donnée, vous allez créer une table user avec 3 attributs id, pseudo, mot_de_passe, description. id sera un entier et la clé primaire de la table et sera Auto Incrémenté. pseudo sera en VARCHAR de 255, tout comme mot de passe. description sera un LONGTEXT

index.html contient un header avec un titre de niveau 1 Mon CRUD et un menu composé de 4 liens hypertext create , read , update , delete qui mènent chacun au fichier html qui lui correspond dans le répertoire Views

Les 4 vues html de Views contiendront ce même header et l'utilisateur doit pouvoir naviguer d'une vue à l'autre. En outre chacun aura son propre formulaire qui cible son propre fichier php qui lui correspond, ceux là même que vous avez crées dans le répertoire Controllers

Chacune de ces vues permettent donc d'effectuer une opération sur la table user.  create.php doit permettre d'enregistrer les infos dans la base, read_ctrl.php doit permettre de sélectionner et afficher la description correspondant au pseudo que l'utilisateur a entré, update_ctrl.php doit permettre de mettre à jour une entrée de la base de donnée et delete_ctrl.php supprime une entrée de la base de données

Les Formulaires:   Ils se composent tous de trois champs: pseudo , mot de passe et description d'un bouton d'envoi excepté read.html ne sera composé que du champs pseudo qui servira pour rechercher une entrée dans la base. Par exemple pour le formulaire d'update, l'utilisateur rentre son pseudo et un autre mot de passe ou une autre description. Là où se trouve le pseudo, le mot de passe et/ou la description doivent être remplacés. Si le pseudo n'existe pas, il faut envoyer un message précisant que cet utilisateur n'existe pas. Autre exemple pour le select, l'utilisateur entre un pseudo et il reçoit le mot de passe et la description correspondants.
