<div class="row">
    <div class="col-lg-6 text-center">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
             role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>[UserName]</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
        <h2 class="fw-normal">[UserName]</h2>
        <p>describe</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div>
    <div class="col-lg-6">
        <form action="index.php?action=updateUserLogin" method="post" class="foldedCorner">

            <fieldset class="mb-3">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email@exemple.fr"
                       readonly>
            </fieldset>

            <fieldset class="mb-3">
                <label for="username">Pseudo</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="username">
            </fieldset>

            <fieldset class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </fieldset>

            <button class="btn btn-primary w-100 py-2 btn btn-success" type="submit">modifier</button>
        </form>
    </div>
</div>
<div class="12">

</div>

