<!-- Page 'contact' du site Smartbike -->
<h1 class="smartbike-welcome">N'hesitez pas à nous contacter !</h1>
<br>
<!-- Création d'un formulaire pour prendre contact avec Smartbike -->
<div class="smartbike-contact">
    <form action="" method="post" class="smartbike-form">
        <label for="lastname" hidden>Nom</label>
        <input type="text" id="lastname" name="lastname" placeholder="Nom" minlength="2" maxlength="50" required>
        <br>
        <label for="firstname" hidden>Prénom</label>
        <input type="text" id="firstname" name="firstname" placeholder="Prénom" minlength="2" maxlength="50" required>
        <br>
        <label for="e-mail" hidden>Email</label>
        <input type="email" id="e-mail" name="e-mail" placeholder="Email" minlength="10" maxlength="70" required>
        <br>
        <textarea name="message" id="message" cols="21" rows="7" maxlength="162" required></textarea>
        <br>
        <button type="submit">Envoyer</button>
    </form>
</div>