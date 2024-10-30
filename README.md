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