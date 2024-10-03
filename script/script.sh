#!/bin/bash


if [ "$EUID" -ne 0 ]; then
  echo "Redémarrage du script avec des privilèges root..."
  exec sudo -E "$0" "$@"
fi

PROJECT_DIR="/opt/lampp/htdocs/LivreShop"

GIT_REPO="ssh://git@git.uha4point0.fr:22222/UHA40/fil-rouge-2024/4.0.1/mohamedamirdarwish_livreshop.git"

SITE_URL="http://localhost/LivreShop"


if [ ! -d "$PROJECT_DIR" ]; then
  echo "Le dossier $PROJECT_DIR n'existe pas. Création en cours..."
  mkdir -p "$PROJECT_DIR"
fi

cd $PROJECT_DIR

if [ -d ".git" ]; then
    echo "Mise à jour du projet existant..."
    export GIT_SSH_COMMAND="ssh -i ~/.ssh/id_rsa -p 22222"
    git pull origin main
else
    echo "Téléchargement du projet depuis le dépôt..."
    export GIT_SSH_COMMAND="ssh -i ~/.ssh/id_rsa -p 22222"

    git clone $GIT_REPO .
fi


if [ $? -eq 0 ]; then
    echo "Le site a été déployé avec succès!"
    echo "Vous pouvez accéder au site à l'adresse suivante : $SITE_URL"
else
    echo "Une erreur est survenue lors du déploiement."
    exit 1
fi


# php /opt/lampp/htdocs/Livre-Shop/script.php














