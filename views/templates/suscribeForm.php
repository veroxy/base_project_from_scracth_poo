<?php
/**
 * Template pour afficher le formulaire de connexion.
 */
?>

<div class="form-signin w-100 m-auto">
    <form action="index.php?action=suscribeUser" method="post" class="foldedCorner">
        <fieldset class="mb-3">
            <label for="username">Pseudo</label>
            <input type="text" class="form-control"name="username" id="username">
        </fieldset>

        <fieldset class="mb-3">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email">
        </fieldset>

        <fieldset class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control"name="password" id="password">
        </fieldset>

        <button class="btn btn-primary w-100 py-2 btn btn-success" type="submit">S'inscrire</button>
        <p class="mt-5 mb-3 text-body-secondary">Déja un compte ? <a href="index.php?action=connectionForm">Connectez-vous</a></p>
    </form>
</div>