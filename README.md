# P5-BlogMVC
Projet 5 de mon parcours Développeur d'application PHP/Symfony chez OpenClassrooms. Création d'un Blog via une architecture MVC Orienté objet.

## Codacy Badge
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/a357ec565060451eb1169ef020fffc79)](https://app.codacy.com/gh/LeZellus/Blog-Matheo?utm_source=github.com&utm_medium=referral&utm_content=LeZellus/Blog-Matheo&utm_campaign=Badge_Grade_Settings)

## Pré-requis
PHP >= **7.4**

Composer -> [Lien d'installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

Yarn >= **1.22.10**

Sass = **4.14.1**

MySql

## Identifiants de connexion

Identifiant Admin : **admin@exemple.fr**
Mot de passe : **Admin123**

Identifiant visiteur : **visiteur@exemple.fr**
Mot de passe : **visiteur**

[Application Démonstration](http://xipelgames.tech)

## Informations

Le modèle MVC & Framework de ce projet est fortement inspiré du cours de Fabien Potencier, de WhatZeWeb ainsi que de Lior Chamla.

La manipulation des données stockés (Hydratation : Entité/Manager) a été effectué avec Doctrine proposé par Symfony

Le thème CSS à été fait à la main avec la technologie **SCSS** proposée par Webpack ainsi que **SASS**. 

## Installation

### Création du projet
Clonez le repository hébergé sur Github via [cette adresse](https://github.com/LeZellus/Blog-Matheo).

### Création de l'environnement
Créez un fichier .env.local à la racine de votre projet, puis copiez coller à l'intérieur le contenu du fichier .env déjà présent.
Une fois ceci fait, remplacez les valeurs du MAILER_DNS par votre smtp pour l'envoi des mails. Plus d'informations à [cette adresse](https://symfony.com/doc/current/mailer.html#transport-setup).

Remplacez également les valeurs pour effectuer la connection à votre base de données. Plus d'informations à [cette adresse](https://symfony.com/doc/current/doctrine.html#configuring-the-database) :
```text
# DATABASE_URL="mysql://root:root@127.0.0.1:3306/xipel?serverVersion=5.7"
```

Mettez-vous également en environnement de développement afin d'installer toutes les dépendances requises au projet :
```text
APP_ENV=dev
```

### Installer les dépendances
Après avoir installer **composer**, ouvrez votre terminal et executez la commande suivante à la racine du projet :
```shell
composer install
```
Puis :
```shell
yarn install
```

### Création de la base de données et hydration
Créez votre base de données via cette commande :
```shell
php bin/console doctrine:database:create
```

Puis, mettez le shéma de la base avec :
```shell
php bin/console doctrine:schema:update --force
```

Enfin, pour générer des données fictives, vous pouvez également hydrater votre base avec la commande :
```shell
php bin/console doctrine:fixtures:load
```

### Démarrer le serveur
Pour démarrer sur un port automatiquement (nécessite d'avoir le [Local Web Serveur](https://symfony.com/doc/current/setup/symfony_server.html)) :
```shell
symfony serve
```
ou sur un port spécifique :
```shell
symfony serve --port=3000
```
ou avec un serveur apache
```shell
php -S localhost:8000 -t public/
```

## Documentation développeur

Afin de pouvoir procéder au débug, un package PHP a été ajouté pour gérer celà. 
Si vous souhaitez voir les erreurs de développement, remplacez votre variable d'environnement par **dev** pour le développement.
Dans le cas inverse, remplacez **dev** par **prod** annulera tout affichage des erreurs.

### Compilation des fichiers
Le projet travaille avec webpack, pour compiler vos fichiers, vous devez donc obligatoirement être en environnement de développement.

Pour compiler en direct :
```shell
yarn encore dev --watch
```

Pour compiler les fichiers pour la production :
```shell
yarn encore production
```