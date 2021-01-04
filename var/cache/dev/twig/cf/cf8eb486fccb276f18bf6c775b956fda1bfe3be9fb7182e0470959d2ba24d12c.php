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

/* administration.php */
class __TwigTemplate_8c2054f23b83045f1c8e6312ee713ca664ba49a26e6f081f4227e035a1727bfc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration.php"));

        // line 1
        echo "<?php \$this->title = 'Administration'; ?>

<?= \$this->session->show('create_article'); ?>
<?= \$this->session->show('edit_article'); ?>
<?= \$this->session->show('delete_article'); ?>
<?= \$this->session->show('delete_user'); ?>
<?= \$this->session->show('flag_comment'); ?>
<?= \$this->session->show('remove_comment'); ?>

<h1>Page d'administration</h1>

<section class=\"grid grid-gap-40 jc-center mt-4\">
    <a class=\"button-primary\" href=\"/index.php?route=addArticle\">Nouvel article</a>
</section>

<section class=\"grid grid-gap-40 table-box\">
    <h2 class=\"mt-4\">Articles</h2>
    <table class=\"table bg-white\">
        <thead>
            <tr class=\"tr\">
                <td class=\"td\">Titre</td>
                <td class=\"td\">Description</td>
                <td class=\"td\">Auteur</td>
                <td class=\"td\">Creation</td>
                <td class=\"td\">Modification</td>
                <td class=\"td\">Actions</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach (\$articles as \$article) { ?>
                <tr class=\"tr\">
                    <td class=\"td td-title\"><a href=\"/index.php?route=article&articleId=<?= htmlspecialchars(\$article->getId()); ?>\"><?= htmlspecialchars(\$article->getTitle()); ?></a></td>
                    <td class=\"td td-desc\"><?= htmlspecialchars(\$article->getChapo()); ?></td>
                    <td class=\"td td-author\"><?= htmlspecialchars(\$article->getAuthor()); ?></td>
                    <td class=\"td td-created\"><?= htmlspecialchars(\$article->getCreatedAt()); ?></td>
                    <td class=\"td td-updated\"><?= htmlspecialchars(\$article->getUpdatedAt()); ?></td>
                    <td class=\"td td-actions\">
                        <a href=\"/index.php?route=editArticle&articleId=<?= \$article->getId(); ?>\">
                            <img src=\"/icons/pencil.png\" class=\"icon-edit\" alt=\"Icone edition\">
                        </a>
                        <a href=\"/index.php?route=removeArticle&articleId=<?= \$article->getId(); ?>\">
                            <img src=\"/icons/cancel.png\" class=\"icon-remove\" alt=\"Icone supprimer\">
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

<?php if (\$comments) { ?>
    <section class=\"grid grid-gap-40 table-box\">
        <h2 class=\"mt-4\">Commentaire(s) en attente</h2>
        <table class=\"table bg-white\">
            <thead>
                <tr class=\"tr tr-menu\">
                    <td class=\"td\">Pseudo</td>
                    <td class=\"td\">Message</td>
                    <td class=\"td\">Date</td>
                    <td class=\"td\">Actions</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach (\$comments as \$comment) { ?>
                    <tr class=\"tr\">
                        <td class=\"td td-title\"><?= htmlspecialchars(\$comment->getPseudo()); ?></td>
                        <td class=\"td\"><?= substr(htmlspecialchars(\$comment->getContent()), 0, 150); ?></td>
                        <td class=\"td td-created\"><?= htmlspecialchars(\$comment->getCreatedAt()); ?></td>
                        <td class=\"td td-actions\">
                            <a href=\"/index.php?route=flagComment&commentId=<?= \$comment->getId(); ?>\">
                                <img src=\"/icons/check.png\" class=\"icon-check\" alt=\"Icone valider\">
                            </a>
                            <a href=\"/index.php?route=removeComment&commentId=<?= \$comment->getId(); ?>\">
                                <img src=\"/icons/cancel.png\" class=\"icon-remove\" alt=\"Icone supprimer\">
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
<?php } ?>

<section class=\"grid grid-gap-40 table-box\">
    <h2 class=\"mt-4\">Utilisateurs</h2>
    <table class=\"table bg-white\">
        <thead>
            <tr class=\"tr tr-menu\">
                <td class=\"td\">Pseudo</td>
                <td class=\"td\">Date</td>
                <td class=\"td\">Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach (\$users as \$user) { ?>
                <tr class=\"tr\">
                    <td class=\"td td-title\"><?= htmlspecialchars(\$user->getPseudo()); ?></td>
                    <td class=\"td\">
                        <?php if (\$user->getRole() != '1') { ?>
                            User
                        <?php } else { ?>
                            Admin
                        <?php } ?>
                    </td>
                    <td class=\"td td-actions\">
                        <?php if (\$user->getRole() != '1') { ?>
                            <a href=\"/index.php?route=deleteUser&userId=<?= \$user->getId(); ?>\">
                                <img src=\"/icons/cancel.png\" class=\"icon-remove\" alt=\"Icone supprimer\">
                            </a>
                        <?php } else { ?>
                            <img src=\"/icons/forbidden.png\" class=\"icon-forbidden\" alt=\"Icone impossible\">
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "administration.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php \$this->title = 'Administration'; ?>

<?= \$this->session->show('create_article'); ?>
<?= \$this->session->show('edit_article'); ?>
<?= \$this->session->show('delete_article'); ?>
<?= \$this->session->show('delete_user'); ?>
<?= \$this->session->show('flag_comment'); ?>
<?= \$this->session->show('remove_comment'); ?>

<h1>Page d'administration</h1>

<section class=\"grid grid-gap-40 jc-center mt-4\">
    <a class=\"button-primary\" href=\"/index.php?route=addArticle\">Nouvel article</a>
</section>

<section class=\"grid grid-gap-40 table-box\">
    <h2 class=\"mt-4\">Articles</h2>
    <table class=\"table bg-white\">
        <thead>
            <tr class=\"tr\">
                <td class=\"td\">Titre</td>
                <td class=\"td\">Description</td>
                <td class=\"td\">Auteur</td>
                <td class=\"td\">Creation</td>
                <td class=\"td\">Modification</td>
                <td class=\"td\">Actions</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach (\$articles as \$article) { ?>
                <tr class=\"tr\">
                    <td class=\"td td-title\"><a href=\"/index.php?route=article&articleId=<?= htmlspecialchars(\$article->getId()); ?>\"><?= htmlspecialchars(\$article->getTitle()); ?></a></td>
                    <td class=\"td td-desc\"><?= htmlspecialchars(\$article->getChapo()); ?></td>
                    <td class=\"td td-author\"><?= htmlspecialchars(\$article->getAuthor()); ?></td>
                    <td class=\"td td-created\"><?= htmlspecialchars(\$article->getCreatedAt()); ?></td>
                    <td class=\"td td-updated\"><?= htmlspecialchars(\$article->getUpdatedAt()); ?></td>
                    <td class=\"td td-actions\">
                        <a href=\"/index.php?route=editArticle&articleId=<?= \$article->getId(); ?>\">
                            <img src=\"/icons/pencil.png\" class=\"icon-edit\" alt=\"Icone edition\">
                        </a>
                        <a href=\"/index.php?route=removeArticle&articleId=<?= \$article->getId(); ?>\">
                            <img src=\"/icons/cancel.png\" class=\"icon-remove\" alt=\"Icone supprimer\">
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

<?php if (\$comments) { ?>
    <section class=\"grid grid-gap-40 table-box\">
        <h2 class=\"mt-4\">Commentaire(s) en attente</h2>
        <table class=\"table bg-white\">
            <thead>
                <tr class=\"tr tr-menu\">
                    <td class=\"td\">Pseudo</td>
                    <td class=\"td\">Message</td>
                    <td class=\"td\">Date</td>
                    <td class=\"td\">Actions</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach (\$comments as \$comment) { ?>
                    <tr class=\"tr\">
                        <td class=\"td td-title\"><?= htmlspecialchars(\$comment->getPseudo()); ?></td>
                        <td class=\"td\"><?= substr(htmlspecialchars(\$comment->getContent()), 0, 150); ?></td>
                        <td class=\"td td-created\"><?= htmlspecialchars(\$comment->getCreatedAt()); ?></td>
                        <td class=\"td td-actions\">
                            <a href=\"/index.php?route=flagComment&commentId=<?= \$comment->getId(); ?>\">
                                <img src=\"/icons/check.png\" class=\"icon-check\" alt=\"Icone valider\">
                            </a>
                            <a href=\"/index.php?route=removeComment&commentId=<?= \$comment->getId(); ?>\">
                                <img src=\"/icons/cancel.png\" class=\"icon-remove\" alt=\"Icone supprimer\">
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
<?php } ?>

<section class=\"grid grid-gap-40 table-box\">
    <h2 class=\"mt-4\">Utilisateurs</h2>
    <table class=\"table bg-white\">
        <thead>
            <tr class=\"tr tr-menu\">
                <td class=\"td\">Pseudo</td>
                <td class=\"td\">Date</td>
                <td class=\"td\">Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach (\$users as \$user) { ?>
                <tr class=\"tr\">
                    <td class=\"td td-title\"><?= htmlspecialchars(\$user->getPseudo()); ?></td>
                    <td class=\"td\">
                        <?php if (\$user->getRole() != '1') { ?>
                            User
                        <?php } else { ?>
                            Admin
                        <?php } ?>
                    </td>
                    <td class=\"td td-actions\">
                        <?php if (\$user->getRole() != '1') { ?>
                            <a href=\"/index.php?route=deleteUser&userId=<?= \$user->getId(); ?>\">
                                <img src=\"/icons/cancel.png\" class=\"icon-remove\" alt=\"Icone supprimer\">
                            </a>
                        <?php } else { ?>
                            <img src=\"/icons/forbidden.png\" class=\"icon-forbidden\" alt=\"Icone impossible\">
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>", "administration.php", "/Applications/MAMP/htdocs/Blog-Matheo/templates/administration.php");
    }
}
