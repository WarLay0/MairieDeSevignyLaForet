<?php
function verifyError($name){
    if(isset($_SESSION['errors'])){
        if(in_array($name, $_SESSION['errors'])){
            return '<p class="error">Veuillez remplir le champ "'.$name.'" correctement</p>';
        }
    }else{
        return '<p class="error" style="display: none;"></p>';

    }
}
echo '
<form action="../php/form_traitement.php" method="post">
                <div id="ContactFlex">
                    <div id="ContactName" class="HomeContact">
                        <label for="name" id="name">Prénom :</label>
                        <input type="text" name="name" id="name" placeholder="Ex : John" required>'.
                        verifyError('prenom')
                        .'
                    </div>
                    <div id="ContactFName" class="HomeContact">
                        <label for="fname">Nom :</label>
                        <input type="text" name="fname" id="fname" placeholder="Ex : Doe" required>'.
                        verifyError('nom')
                        .'
                    </div>
                </div>
                <div id="ContactMail" class="HomeContact">
                    <label for="mail">E-mail :</label>
                    <input type="email" name="mail" id="mail" placeholder="Ex : john.doe@gmail.com" required>'.
                    verifyError('mail')
                    .'
                </div>
                <div id="ContactMessage" class="HomeContact">
                    <label for="message">Message :</label>
                    <textarea name="message" id="message" placeholder="Votre message" required></textarea>'.
                    verifyError('message')
                    .'
                </div>
                <div id="ContactSubmit" >
                    <input type="submit" value="Envoyer" class="ButtonClassic">
                </div>
            </form>
';