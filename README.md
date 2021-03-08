#P5-BlogMVC
##Codacy Badge

Projet 5 de mon parcours Développeur d'application PHP/Symfony chez OpenClassrooms. Création d'un Blog via une architecture MVC Orienté objet.

## Pré-requis :
PHP >= **7.4**

Composer -> [Lien d'installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

Yarn >= **1.22.10**

Sass = **4.14.1**

MySql

# Informations :

Le modèle MVC & Framework de ce projet est fortement inspiré du cours de Fabien Potencier, de WhatZeWeb ainsi que de Lior Chamla.

La manipulation des données stockés (Hydratation : Entité/Manager) a été effectué avec Doctrine proposé par Symfony

Le thème CSS à été fait à la main avec la technologie **SCSS** proposée par Webpack ainsi que **SASS**. 

## Installation:

### Création de l'environnement :
Créez un fichier .env.local à la racine de votre projet, puis copiez coller à l'intérieur le contenu du fichier .env déjà présent.
Une fois ceci fait, remplacez les valeurs du MAILER_DNS par votre smtp pour l'envoi des mails. Plus d'informations à [cette adresse](https://symfony.com/doc/current/mailer.html#transport-setup).

Remplacez également les valeurs pour effectuer la connection à votre base de données. Plus d'informations à [cette adresse](https://symfony.com/doc/current/doctrine.html#configuring-the-database) :
```
# DATABASE_URL="mysql://root:root@127.0.0.1:3306/xipel?serverVersion=5.7"
```

Mettez-vous également en environnement de développement afin d'installer toutes les dépendances requises au projet :
```
APP_ENV=dev
```

### Création du projet:
Clonez le repository hébergé sur Github via [cette adresse](https://github.com/LeZellus/Blog-Matheo).

### Installer les dépendances :
Après avoir installer **composer**, ouvrez votre terminal et executez la commande suivante à la racine du projet :
```
composer install
```
Puis :
```
yarn install
```

###Création de la base de données et hydration : 
Créez votre base de données via cette commande :
```
php bin/console doctrine:database:create
```

Puis, mettez le shéma de la base avec :
```
php bin/console doctrine:schema:update --force
```

Enfin, pour générer des données fictives, vous pouvez également hydrater votre base avec la commande :
```
php bin/console doctrine:fixtures:load
```

## Documentation développeur :

Afin de pouvoir procéder au débug, un package PHP a été ajouté pour gérer celà. 
Si vous souhaitez voir les erreurs de développement, remplacez votre variable d'environnement par **dev** pour le développement.
Dans le cas inverse, remplacez **dev** par **prod** annulera tout affichage des erreurs.

### Compilation des fichiers :
Le projet travaille avec webpack, pour compiler vos fichiers, vous devez donc obligatoirement être en environnement de développement.

Pour compiler en direct :
```
yarn encore dev --watch
```

Pour compiler les fichiers pour la production :
```
yarn encore production
```