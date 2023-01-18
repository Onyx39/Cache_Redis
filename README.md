# Cache_Redis
Projet d'INFO834 - Création d'une application <i>EtuServices</i>

## But du projet
Implémenter, pour une application, un cache Redis qui garde le nombre de connexion des utilisateurs. Le but étant qu'ils ne puissent pas se conncter plus de 10 fois en 10 minutes pour ne pas surcharger l'application. Pour cela, on utilise une base de données SQL, des pages PHP et un script python pour gérer la base Redis.

## Avancée du projet
### La base de donnée
J'ai commencé par mettre en place la base de donnée SQL. J'ai pour cela créé un script pour créer et remplir la table <i>utilisateur</i> et j'ai fait une fonction PHP dans un fichier à part pour gérer la connexion avec cette base de donnée. Ces deux fichiers sont disponibles dans le dossier <i>src/bd</i>.

### Les pages web
Je me suis ensuite attaqué aux trois pages web demandées, qui sont dans en PHP et disponible dans le dossier <i>src/pages_web</i>. Ces pages sont les plus simples possibles car ce n'était pas là le coeur du TP. Sur chaque page, un lien est disponible pour pouvoir se diriger vers une autre page.

### Le gestion du cache avec Redis
J'ai fini par la gestion du cache Redis, qui se fait dans le dossier <i>src/python/script.py</i>. Le fichier <i>test_script.py</i> m'a servi à réaliser des tests pour vérifier que le code fonctionne. Ainsi, le code de <i>script.py</i> est normalemant fonctionnel, je l'ai testé avec ma base Redis et tout réagit correctement. Je n'ai volontairerement pas fait de code compliqué pour la gestion de la base Redis, ce qui fait que mon code ne répond pas exactement aux demandes du sujet. En effet, au bout de 10 mins, la donnée du cache d'un utilisateur va s'effacer et une nouvelle sera recréé à sa prochaine connexion, donc il pourrait techniquement se connecter plus de 10 fois en 10 mins. C'est une détail que j'ai laissé de côté pour essayer de me concentrer sur le bon fonctionnement du script python et de la communication PHP-python.

## Difficulté
Malgré ces avancées, le code n'est pas totalement fonctionnel. En effet, je n'ai pas réussi à faire communiquer la partie PHP avec la partie python. Vous trouverez des essais dans le fichier <i>pages_web/login.php</i>. Mise à part cela l'application est fonctionnelle.

## Lancer l'application
Pour lancer l'application il faut :
<ul>
<li>Lancer un serveur Redis (attention dans <i>script.py</i> il faut retirer/adapter mon mot de passe provisoire)</li>
<li>Se connecter à une base de données SQL (je me suis connecté à la base fournie par mon université)</li>
<li>Sur cette base SQL exécuter les commandes présentes dans <i>bd/bd.sql</i></li>
<li>Modifier le fichier <i>bd/connexionBD.php</i></li>
<li>Et enfin, lancer la page <i>accueil.php</i> dans votre navigateur</li>
</ul>

## Conclusion
Je dois admettre que ce sujet de TP me faisais un peu peur au moment de le commencer, car il me paraissait ambitieux. Mais finalement ce mini projet s'est bien passé et était stimulant et motivant. J'ai bien aimé le mener au bout malgré la déception de ne pas pouvoir faire communiquer PHP et python. Par ailleurs, cela faisait des rappels basiques en SQL et PHP qui font toujours du bien, en plus de l'apprentissage de Redis.
