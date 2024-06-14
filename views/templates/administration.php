<?php
/**
 * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun.
 * Et un formulaire pour ajouter un article.
 */
?>


<table class="adminArticle">
    <tr class="articleHeaderLine">
        <th class="t-cell ">photo</th>
        <th class="t-cell ">title</th>
        <th class="t-cell ">author</th>
        <th class="t-cell">description</th>
        <th class="t-cell">available</th>
        <th class="t-cell" colspan="3">actions</th>
    </tr>
    <?php foreach ($articles as $article) { ?>
        <!--        <tr class="">-->
        <tr class="articleLine">
            <td class="title"><?= $article->getTitle() ?></td>
            <td class="content"><?= $article->getContent(200) ?></td>
            <td class="other"
                id="<?= 'page_views_' . $article->getSlug() ?>"><?= $article->getViews(); ?></td>
            <td class="other"><?= $article->getComments() ?></td>
            <td class="other"><?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></td>

            <td class="action"><span class="pill rounded-pill border-danger"></span><a class="submit"
                                  href="index.php?action=showUpdateArticleForm&id=<?= $article->getId() ?>">edit</a>
            </td>
            <td class="action"><a class="submit"
                                  href="index.php?action=deleteArticle&id=<?= $article->getId() ?>" <?= Utils::askConfirmation("Êtes-vous sûr de vouloir supprimer cet article ?") ?> >delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

<a class="submit" href="index.php?action=showUpdateArticleForm">Ajouter un article</a>