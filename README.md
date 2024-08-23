#Projet fil rouge
site communautaire pour les collectionneurs de VHS


## Documentation de déploiement

Ce document fournit des instructions détaillées pour déployer, configurer et
maintenir l'applicationweb Back to the vhs dans un environnement de
production.

Cette documentation couvre le déploiement de l'applicationweb, la configuration du
serveur, et les procédures d emaintenance de base. Elle ne couvre pas le
développement de nouvelles fonctionnalités ou les modifications majeures de
l'architecture.

Cette documentation est destinée aux administrateurs système, aux DevOps, et aux
développeurs impliqués dans le déploiement et la maintenance de l'application.

## Étapes principales

1. Vérification environnement 

    _ PHP 8.2.21
    _ javascript 

2. Code Source

    _ https://github.com/thomasgitprojet/BackToTheVHS


## Architecture

1. Diagramme

    Back to the vhs
    |_app
        |_css
        |_data
        |_img
        |_includes
        |_js
        |_node_modules
        |_php
        |_vendor
        |_.env
        |_.env.example
        |_.gitignore
        |_actions.php
        |_BTTF.ttf
        |_composer.json
        |_composer.lock
        |_index.php
        |_package-lock.json
        |_package.json
        |_vite.config.js
        |_custom-apache.conf
        |_custom-php.init
        |_docker-compose.yml
        |_dockerfile
        |_README.md
        |_xdebub.ini

2. Composants principaux

    _Framework utilisés :

    _Structure des dossiers :