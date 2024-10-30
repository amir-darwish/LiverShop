## Prérequis : 
Avant de commencer, assurez-vous d'avoir les éléments suivants installés :

1. **Système d'Exploitation Ubuntu LINUX**
   - Ce projet est conçu pour fonctionner sous Ubuntu Linux. Assurez-vous que ce système est bien installé et à jour.

2. **GIT**
   - Requis pour le contrôle de version. Si Git n'est pas installé sur votre système, vous pouvez l'installer en utilisant la commande suivante :
     ```bash
     sudo apt-get install git
     ```

3. **XAMPP**
   - XAMPP est nécessaire pour configurer un environnement avec Apache, MySQL, PHP et Perl. Vous pouvez télécharger XAMPP depuis le [site officiel](https://www.apachefriends.org/index.html).


________
## Déploiement du projet

Pour déployer le projet, suivez les étapes suivantes :

1. **Téléchargez le script de déploiement :**
   - Téléchargez le fichier `script.sh`.

2. **Rendez le script exécutable :**
   - Ouvrez un terminal et utilisez la commande suivante pour accéder au dossier où se trouve le script de déploiement :
     ```bash
     cd [Chemin vers le fichier]
     ```
   - Rendre le script exécutable en utilisant la commande :
     ```bash
     chmod +x script.sh
     ```

3. **Lancez le script :**
   - Exécutez le script en utilisant la commande suivante :
     ```bash
     ./script.sh
     ```
## Utilisation

Instructions pour utiliser le projet après le déploiement.

1. **Ouvrez XAMPP et démarrez le serveur Apache :**
   - Lancez XAMPP avec la commande suivante pour ouvrir le panneau de contrôle :
     ```bash
     sudo /opt/lampp/manager-linux-x64.run
     ```
   - Dans le panneau de contrôle, démarrez les services **Apache** et **MySQL**.

2. **Accédez au projet dans un navigateur :**
   - Une fois Apache démarré، ouvrez un navigateur et accédez à l'URL suivante pour voir le projet en cours d'exécution : http://localhost/LivreShop

   ## À propos de LivreShop

LivreShop est une boutique en ligne dédiée à la vente de livres, offrant une interface moderne et conviviale. Voici un aperçu des principales fonctionnalités du site :

- **Promotion** : La page d'accueil affiche une offre spéciale avec des réductions allant jusqu'à 75%, incitant les utilisateurs à acheter des livres à des prix attractifs.

- **Barre de navigation** : Le menu de navigation inclut des sections telles que **Page Principales**, **Auteurs**, **Livres Papiers**, **Livres Numérique**, et **Nous Contacter**, permettant aux utilisateurs de naviguer facilement entre les différentes pages et catégories de livres.

- **Recherche** : Une barre de recherche située en haut de la page permet aux utilisateurs de rechercher des livres rapidement en utilisant des mots-clés.

- **Avantages du service** : Le site met en avant plusieurs avantages pour les utilisateurs :
  - **Livraison Gratuite** : Livraison gratuite pour les commandes supérieures à 50€.
  - **Paiement Sécurisé** : Un système de paiement sécurisé pour garantir la sécurité des transactions.
  - **Retour Facile** : Possibilité de retourner les livres facilement sous 10 jours.
  - **Support 24h/24 et 7j/7** : Un service client disponible 24 heures sur 24, 7 jours sur 7.

- **Offres spéciales** : Une section intitulée **Notre Offers** présente une sélection de livres en promotion, permettant aux utilisateurs de parcourir les livres mis en avant.

En résumé, LivreShop vise à offrir une expérience d'achat simple et sécurisée pour les amateurs de lecture, avec des promotions attractives et des services pratiques.
