<?php
/**
 * Template pour afficher le formulaire de connexion.
 */
?>

<div class="form-signin w-100 m-auto">
    <form action="index.php?action=connectUser" method="post" class="foldedCorner">

        <fieldset class="mb-3">
            <label for="username">Your username</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </fieldset>

        <fieldset class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </fieldset>

        <button class="btn btn-primary w-100 py-2 btn btn-success" type="submit">Se connecter</button>
        <p class="mt-5 mb-3 text-body-secondary">Pas de compte ? <a href="index.php?action=suscribeForm">Inscrivez vous</a></p>
    </form>
</div>