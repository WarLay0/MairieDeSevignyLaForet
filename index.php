<?php
    require 'cut/head.php';
    require 'cut/nav.php';
    echo '<script>pageName("index");</script>';
?>
        <div id="HomeHeader">
            <h1>Mairie de</h1>
            <img src="assets/img/header/Sign.png" alt="Panneau de la mairie de Sévigny-la-Forêt">
        </div>
        <div id="HomeComingEvent">
            <h2>A venir :</h2>
            <article id="ComingEvent">
                <h3>La commune organise une randonnée</h3>
                <p>Dans le cadre de Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                <a href="#">Accéder à l’agenda</a>
            </article>
        </div>
        <div id="HomeComingSeparator">
            <img src="assets/img/header/Separator.png" alt="Séparateur de section">
        </div>
        <div id="idPage" style="display: none">index</div>
    </header>
    <main>
        <section id="HomeVisitCard" class="Home">
            <img src="assets/img/HomeVisitCard/BlasonSLF.svg" alt="Blason de la mairie">
            <div id="VisitCard">
            <h2>Mairie de Sévigny-la-Forêt</h2>
                <div id="VisitCardFlex">
                    <div id="VisitCardLeft">
                        <div class="VisitCardInfo">
                            <h3>Adresse :</h3>
                            <p>8 Rue Grande Rue,</p>
                            <p>08230 Sévigny-la-Forêt</p>
                        </div>
                        <div class="VisitCardInfo">
                            <h3>Téléphone :</h3>
                            <p>03.24.54.12.68</p>
                        </div>
                        <div class="VisitCardInfo">
                            <h3>Email :</h3>
                            <p>mairie.sevigny-la-foret@wanadoo.fr</p>
                        </div>
                    </div>
                    <div id="visitCardRight" class="VisitCardInfo">
                        <h3>Horaires d’ouverture :</h3>
                        <div class="VisitCardInfo">
                            <h3>Mardi :</h3>
                            <p>de 17h00 à 18h30</p>
                        </div>
                        <div class="VisitCardInfo">
                            <h3>Mardi :</h3>
                            <p>de 10h00 à 12h00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Carte de visite de la mairie de Sévigny-la-Forêt, informations et coordonnées -->

        <section id="HomeGallery" class="Home">
            <h2>Sévigny en photos</h2>
            <ul>
                <li><img src="assets/img/HomeGallery/SLF_photo_1.jpg" alt="#"></li>
                <li><img src="assets/img/HomeGallery/SLF_photo_2.jpg" alt="#"></li>
                <li><img src="assets/img/HomeGallery/SLF_photo_3.jpg" alt="#"></li>
                <li><img src="assets/img/HomeGallery/SLF_photo_4.jpg" alt="#"></li>
                <li><img src="assets/img/HomeGallery/SLF_photo_5.jpg" alt="#"></li>
                <li><img src="assets/img/HomeGallery/SLF_photo_6.jpg" alt="#"></li>
            </ul>
            <a href="pages/galerie.php" class="ButtonClassic">Voir plus</a>
        </section>
        <!-- Avant page de la galerie de photos de la commune de Sévigny-la-Forêt, chaques liens menant à la page -->

        <section id="HomeHistory" class="Home">
            <h2>Un petit bout d'histoire</h2>
            <article class="HomeHistoryCard">
                <img src="assets/img/HomeVisitCard/BlasonSLF.svg" alt="">
                <div class="HistoryCardContent">
                    <h3>L’histoire d’un blason défendu par les habitants du village</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    </p>
                </div>
            </article>
            <article class="HomeHistoryCard">
                <img src="assets/img/HomeVisitCard/BlasonSLF.svg" alt="">
                <div class="HistoryCardContent">
                    <h3>L’histoire d’un blason défendu par les habitants du village</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    </p>
                </div>
            </article>
            <article class="HomeHistoryCard">
                <img src="assets/img/HomeVisitCard/BlasonSLF.svg" alt="">
                <div class="HistoryCardContent">
                    <h3>L’histoire d’un blason défendu par les habitants du village</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    </p>
                </div>
            </article>
            <article class="HomeHistoryCard">
                <img src="assets/img/HomeVisitCard/BlasonSLF.svg" alt="">
                <div class="HistoryCardContent">
                    <h3>L’histoire d’un blason défendu par les habitants du village</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    </p>
                </div>
            </article>
            <a href="#" class="ButtonClassic">Voir plus</a>
        </section>
        <!-- Avant page de l'histoire de la commune de Sévigny-la-Forêt, chaques liens menant à la page -->

        <section id="HomeContactForm" class="Home">
            <h2>Nous contacter</h2>
            <?php
                require 'cut/form.php';
            ?>
        </section>
    </main>
<?php
    require 'cut/footer.php';
?>