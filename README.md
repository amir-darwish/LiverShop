## Prérequis : 
Avant de commencer, assurez-vous d'avoir les éléments suivants installés :

1. **Système d'Exploitation Ubuntu LINUX**
   - Le script est conçu pour fonctionner sous Ubuntu Linux. Assurez-vous que ce système est bien installé et à jour.

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

## Fonctionnalités de LivreShop

1. **Navbar & Catégories** : La barre de navigation (Navbar) contient des sections permettant de classer les livres par catégories, offrant ainsi aux utilisateurs une manière rapide de parcourir les livres en fonction de leur genre ou de leur type.

2. **Page d'accueil** : Affiche une sélection de 5 livres en avant, permettant aux utilisateurs de découvrir facilement des titres populaires ou recommandés dès leur arrivée sur le site.

3. **Navigation par Auteurs** : Les utilisateurs peuvent également explorer les livres en fonction des auteurs. En sélectionnant un auteur, le site affiche tous les livres disponibles de cet auteur, offrant une navigation personnalisée et centrée sur les écrivains.

4. **Page de détails du livre** : Lorsqu'un utilisateur clique sur un livre, il est redirigé vers une page dédiée qui affiche toutes les informations pertinentes sur le livre, y compris :
   - **Nom du livre**
   - **Date de sortie**
   - **Synopsis**
   - **Prix**
   - **Nombre de pages**

5. **Recherche avancée** : En cliquant sur l'icône de recherche, l'utilisateur est redirigé vers une page Google affichant les résultats de recherche pour le livre sélectionné, permettant d’obtenir des informations supplémentaires et des avis externes.



## Système de gestion pour l'administrateur

Un accès spécifique est réservé à l'administrateur pour gérer les livres numériques sur le site. Une fois connecté, l'administrateur peut ajouter, modifier et supprimer des livres. Voici les informations de connexion pour accéder au panneau d'administration :

- **Utilisateur** : `admin`
- **Mot de passe** : `passadmin`

### Fonctionnalités du panneau d'administration :
- **Ajouter un livre** : Permet d'ajouter de nouveaux livres numériques à la collection.
- **Modifier un livre** : L'administrateur peut mettre à jour les informations d'un livre existant.
- **Supprimer un livre** : Possibilité de retirer un livre numérique de la collection si nécessaire.

Ces fonctionnalités permettent à l'administrateur de maintenir la bibliothèque numérique à jour et de gérer facilement le contenu disponible pour les utilisateurs.

Photos : 
![Screenshot from 2025-03-05 23-52-56](https://github.com/user-attachments/assets/9812a43f-6b51-4d1d-85e4-e34d78b455db)
![Screenshot from 2025-03-05 23-53-05](https://github.com/user-attachments/assets/7fe04b87-5e0a-49ec-80a5-c6ed63ef0345)
![Screenshot from 2025-03-05 23-53-29](https://github.com/user-attachments/assets/bed705de-585f-4629-9bf6-70e096adda82)
![Screenshot from 2025-03-06 00-00-35](https://github.com/user-attachments/assets/67849bbc-1bdb-478a-bbd9-9250ba7e5901)
![Screenshot from 2025-03-06 00-00-46](https://github.com/user-attachments/assets/6051059b-fe95-420f-97bd-e6ac884c91b1)
![image](https://github.com/user-attachments/assets/5d7b3615-73f5-4ba7-91ec-9b9af91236f2)


