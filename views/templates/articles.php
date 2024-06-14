<div class="row">
    <?php foreach ($articles as $article) { ?>

        <div class="col-sm-2 col-md- col-md-4">
            <div class="col">
                <figure class="card shadow-sm rounded rounded-4">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg"
                         role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                         focusable="false">
                        <title><?= $article->getTitle ?></title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em"><?= $article->getTitle() ?></text>
                    </svg>

                    <figcaption class="card-body">
                        <p class="card-text">
                            <?= $article->getContent() ?></p>
                    </figcaption>
                </figure>
            </div>
            <!--<div class="col">
                <figure class="card shadow-sm rounded rounded-4">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                         role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>

                    <figcaption class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt minima minus quidem tempore.
                            Architecto at cum dolore doloribus ducimus eos explicabo iure nobis, nulla provident, quam
                            reiciendis suscipit voluptatem voluptatum.
                            .</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="card shadow-sm rounded rounded-4">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                         role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>

                    <figcaption class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt minima minus quidem tempore.
                            Architecto at cum dolore doloribus ducimus eos explicabo iure nobis, nulla provident, quam
                            reiciendis suscipit voluptatem voluptatum.
                            .</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="card shadow-sm rounded rounded-4">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                         role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>

                    <figcaption class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt minima minus quidem tempore.
                            Architecto at cum dolore doloribus ducimus eos explicabo iure nobis, nulla provident, quam
                            reiciendis suscipit voluptatem voluptatum.
                            .</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="card shadow-sm rounded rounded-4">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                         role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>

                    <figcaption class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt minima minus quidem tempore.
                            Architecto at cum dolore doloribus ducimus eos explicabo iure nobis, nulla provident, quam
                            reiciendis suscipit voluptatem voluptatum.
                            .</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="card shadow-sm rounded rounded-4">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                         role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>

                    <figcaption class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt minima minus quidem tempore.
                            Architecto at cum dolore doloribus ducimus eos explicabo iure nobis, nulla provident, quam
                            reiciendis suscipit voluptatem voluptatum.
                            .</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="card shadow-sm rounded rounded-4">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                         role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>

                    <figcaption class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt minima minus quidem tempore.
                            Architecto at cum dolore doloribus ducimus eos explicabo iure nobis, nulla provident, quam
                            reiciendis suscipit voluptatem voluptatum.
                            .</p>
                    </figcaption>
                </figure>
            </div>-->
        </div>
    <?php } ?>
</div>