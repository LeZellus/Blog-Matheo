<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* single.php */
class __TwigTemplate_59a5d119ff0fa81a6057a2d9f3cc051bb7c7723cd886958979dc00bfd5fe803c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single.php"));

        // line 1
        echo "<?php \$this->title = 'Article'; ?>

<?= \$this->session->show('edit_article'); ?>
<?= \$this->session->show('add_comment'); ?>

<main class=\"grid grid-center grid-gap-40 m-h\">
    <h1><?= htmlspecialchars(\$article->getTitle()); ?></h1>
    <section class=\"grid grid-gap-40 article bg-white\">
        <div class=\"article-thumb\" style=\"background-image: url('<?= \$article->getThumb(); ?>')\"></div>

        <div class=\"article-content\"><?= \$article->getContent(); ?></div>
        <span class=\"article-created\">
            Créé le : <?= htmlspecialchars(\$article->getCreatedAt()); ?> par
            <span class=\"article-author\"><?= htmlspecialchars(\$article->getAuthor()); ?></span>
        </span>
        <span class=\"article-updated\">Modifié le : <?= htmlspecialchars(\$article->getUpdatedAt()); ?></span>
        <?php if (\$this->session->get('role') === 'admin') { ?>
            <section class=\"grid grid-gap-20 button-box\">
                <a href=\"/index.php?route=editArticle&articleId=<?= \$article->getId(); ?>\" class=\"button-secondary\">Modifier</a>
                <a href=\"/index.php?route=removeArticle&articleId=<?= \$article->getId(); ?>\" class=\"button-secondary\">Supprimer</a>
            </section>
        <?php } ?>
    </section>

    <section class=\"grid grid-gap-40 comments bg-white\">
        <h2>Ajouter un commentaire</h2>
        <?php include 'form_comment.php'; ?>

        <h2>Commentaires</h2>
        <?php foreach (\$comments as \$comment) { ?>
            <?php if (htmlspecialchars(\$comment->getFlag()) === \"1\") { ?>
                <section class=\"comment grid\">
                    <img class=\"comment-thumb\" src=\"/icons/user.svg\" alt=\"Icone utilisateur\">
                    <section class=\"grid grid-gap-10 comment-content\">
                        <h3><?= htmlspecialchars(\$comment->getPseudo()); ?></h3>
                        <?= htmlspecialchars(\$comment->getContent()); ?>
                        <p>Posté le <?= htmlspecialchars(\$comment->getCreatedAt()); ?></p>
                    </section>
                </section>
            <?php } ?>
        <?php } ?>
    </section>
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "single.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php \$this->title = 'Article'; ?>

<?= \$this->session->show('edit_article'); ?>
<?= \$this->session->show('add_comment'); ?>

<main class=\"grid grid-center grid-gap-40 m-h\">
    <h1><?= htmlspecialchars(\$article->getTitle()); ?></h1>
    <section class=\"grid grid-gap-40 article bg-white\">
        <div class=\"article-thumb\" style=\"background-image: url('<?= \$article->getThumb(); ?>')\"></div>

        <div class=\"article-content\"><?= \$article->getContent(); ?></div>
        <span class=\"article-created\">
            Créé le : <?= htmlspecialchars(\$article->getCreatedAt()); ?> par
            <span class=\"article-author\"><?= htmlspecialchars(\$article->getAuthor()); ?></span>
        </span>
        <span class=\"article-updated\">Modifié le : <?= htmlspecialchars(\$article->getUpdatedAt()); ?></span>
        <?php if (\$this->session->get('role') === 'admin') { ?>
            <section class=\"grid grid-gap-20 button-box\">
                <a href=\"/index.php?route=editArticle&articleId=<?= \$article->getId(); ?>\" class=\"button-secondary\">Modifier</a>
                <a href=\"/index.php?route=removeArticle&articleId=<?= \$article->getId(); ?>\" class=\"button-secondary\">Supprimer</a>
            </section>
        <?php } ?>
    </section>

    <section class=\"grid grid-gap-40 comments bg-white\">
        <h2>Ajouter un commentaire</h2>
        <?php include 'form_comment.php'; ?>

        <h2>Commentaires</h2>
        <?php foreach (\$comments as \$comment) { ?>
            <?php if (htmlspecialchars(\$comment->getFlag()) === \"1\") { ?>
                <section class=\"comment grid\">
                    <img class=\"comment-thumb\" src=\"/icons/user.svg\" alt=\"Icone utilisateur\">
                    <section class=\"grid grid-gap-10 comment-content\">
                        <h3><?= htmlspecialchars(\$comment->getPseudo()); ?></h3>
                        <?= htmlspecialchars(\$comment->getContent()); ?>
                        <p>Posté le <?= htmlspecialchars(\$comment->getCreatedAt()); ?></p>
                    </section>
                </section>
            <?php } ?>
        <?php } ?>
    </section>
</main>", "single.php", "/Applications/MAMP/htdocs/Blog-Matheo/templates/single.php");
    }
}
