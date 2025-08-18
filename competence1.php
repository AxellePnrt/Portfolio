<?php include("header.php"); ?>

<section class="competence-page">
    <h2>Compétence 4 : Gérer des données de l’information</h2>
    <p>
        Cette compétence consiste à collecter, organiser, analyser et exploiter des ensembles de données 
        volumineux et complexes, tout en garantissant leur qualité et leur accessibilité.
    </p>

    <!-- AC1 -->
    <div class="apprentissage-critique">
        <h3>AC1 - Capturer et stocker des ensembles volumineux et complexes de données hétérogènes</h3>
        <p class="description">
            Dans le cadre de la SAE, j’ai réalisé du scraping de sites internet spécialisés dans le bâtiment afin de constituer une base de données riche et variée.
Les données provenaient de plusieurs sources en ligne.
Ces données ont ensuite été intégrées dans trois bases différentes selon leur nature :

<li>Neo4j (base graphe) : gestion des relations entre entités.</li>
<li>MongoDB (base documentaire) : stockage de documents semi-structurés (PDF, fiches pratiques, manuels).</li>
<li>Qdrant (base vectorielle) : indexation sémantique grâce à un LLM pour permettre des recherches par sens et non par mots-clés.</li>
        </p>
        <div class="preuves">
            <h4>Mes preuves :</h4>
            <ul>
                <li><img src="assets/images/scrapping.png" alt="Capture de stockage" class="preuve-img"></li>
                <li><img src="assets/images/neo4j.png" alt="Capture de stockage" class="preuve-img"></li>
                <li><img src="assets/images/mongodb.png" alt="Capture de stockage" class="preuve-img"></li>
                <li><img src="assets/images/qdrant.png" alt="Capture de stockage" class="preuve-img"></li>
            </ul>
        </div>
    </div>

    <!-- AC2 -->
    <div class="apprentissage-critique">
        <h3>AC2 - Préparer et extraire les données pour l'exploitation</h3>
        <p class="description">
           Pendant mon alternance chez CA-GIP, j’ai travaillé sur un projet visant à filtrer et préparer des données sur les dotations des collaborateurs de l'entreprise (mobiles et postes de travail). J’ai utilisé SQL et Dataiku pour sélectionner, nettoyer et structurer les données. 
Ces données ont ensuite été utilisées à la fois pour des Dashboard PowerBI mais aussi pour alimenter une application sur les dotations.
Cette expérience m’a permis de mieux comprendre l’importance de la qualité des données et les impacts d’une mauvaise préparation. J’ai aussi amélioré ma rigueur et ma méthode de travail.
        </p>
        <div class="preuves">
            <h4>Mes preuves :</h4>
            <ul>
                <li><a href="#">Notebook Python de préparation de données</a></li>
                <li><img src="assets/images/preparation.jpg" alt="Préparation de données" class="preuve-img"></li>
            </ul>
        </div>
    </div>

    <!-- AC3 -->
    <div class="apprentissage-critique">
        <h3>AC3 - Appliquer des méthodes d'exploration et d'exploitation des données</h3>
        <p class="description">
           Dans le cadre du projet BuildAI, j’ai appliqué des méthodes d’exploration de données en utilisant une base vectorielle pour analyser les formations du secteur du bâtiment. Chaque question posée par un utilisateur à notre LLM est transformée en vecteur et comparée aux vecteurs stockés, permettant d’identifier rapidement les formations les plus pertinentes. 
           Ce processus permet d'extraire les informations utiles et guider la génération de réponses par le modèle de langage.
        </p>
        <div class="preuves">
            <h4>Mes preuves :</h4>
            <ul>
                <li><a href="#">Rapport d’analyse avec visualisations</a></li>
                <li><img src="assets/images/analysis.jpg" alt="Graphiques d'analyse" class="preuve-img"></li>
            </ul>
        </div>
    </div>

    <!-- AC4 -->
    <div class="apprentissage-critique">
        <h3>AC4 - Mettre en production et optimiser le système de gestion</h3>
        <p class="description">
          Dans le cadre de mon alternance,  pour chaque projet, j’ai assuré la mise en production en créant des scénarios automatisés permettant aux projets de s’actualiser selon la fréquence souhaitée (quotidienne, hebdomadaire ou mensuelle). 
           Afin de garantir une maintenance efficace et un partage clair des connaissances, j’ai systématiquement rédigé un wiki pour chaque projet, servant de documentation détaillée pour que tout utilisateur puisse comprendre le fonctionnement et les spécificités du projet. 
           Par ailleurs, j’ai travaillé à l’optimisation des requêtes SQL pour réduire le temps d’exécution et améliorer la performance globale des systèmes de gestion.
        </p>
        <div class="preuves">
            <h4>Mes preuves :</h4>
            <ul>
                <li><a href="#">Documentation de mise en production</a></li>
                <li><img src="assets/images/deploiement.jpg" alt="Mise en production" class="preuve-img"></li>
            </ul>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>