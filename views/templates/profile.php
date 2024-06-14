<div class="row">
    <div class="col-lg-6 text-center">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
             role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>
                Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
        <h2 class="fw-normal"><?= $user->getUsername() ?></h2>
        <p>date created</p>
        <p><a class="btn btn-secondary" href="#">View details</a></p>
    </div>
    <div class="col-lg-6">
        <form action="index.php?action=suscribeUser" method="post" class="foldedCorner">

            <fieldset class="mb-3">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" value="<?= $user->getEmail() ?>">
            </fieldset>
            <fieldset class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" value="<?= $user->getPassword() ?>"
            </fieldset>
            <fieldset class="mb-3">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" value="<?= $user->getUsername() ?>">
            </fieldset>

            <button class="btn btn-primary w-100 py-2 btn btn-success" type="submit">S'inscrire</button>
            <p class="mt-5 mb-3 text-body-secondary">Déja un compte ? <a href="index.php?action=connectionForm">Connectez-vous</a>
            </p>
        </form>
    </div>
</div>
