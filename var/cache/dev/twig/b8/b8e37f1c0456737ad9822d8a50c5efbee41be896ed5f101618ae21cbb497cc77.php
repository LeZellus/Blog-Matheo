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

/* form_article.php */
class __TwigTemplate_c2e5a77fe169ad3a6e7e424e6baea566c50240b4452747272eddcdc34618ce2c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_article.php"));

        // line 1
        echo "<?php
\$route = isset(\$article) && \$article->getId() ? 'editArticle&articleId=' . \$article->getId() : 'addArticle';
\$submit = \$route === 'addArticle' ? 'Ajouter' : 'Mettre à jour';
\$title = isset(\$article) && \$article->getTitle() ? htmlspecialchars(\$article->getTitle()) : '';
\$content = isset(\$article) && \$article->getContent() ? htmlspecialchars(\$article->getContent()) : '';
\$author = isset(\$article) && \$article->getAuthor() ? htmlspecialchars(\$article->getAuthor()) : '';
\$chapo = isset(\$article) && \$article->getChapo() ? htmlspecialchars(\$article->getChapo()) : '';
\$thumb = isset(\$article) && \$article->getThumb() ? htmlspecialchars(\$article->getThumb()) : 'Choisir une image';
?>

<form method=\"post\" action=\"/index.php?route=<?= \$route; ?>\" class=\"grid grid-gap-20\" id=\"form-add-article\" enctype=\"multipart/form-data\">
  <div class=\"form-control grid grid-gap-10\">
    <label for=\"title\" class=\"form-control-label\">Titre</label>
    <input type=\"text\" id=\"title\" name=\"title\" value=\"<?= \$title; ?>\">
    <?= isset(\$errors['title']) ? \$errors['title'] : ''; ?>
  </div>

  <div class=\"form-control grid grid-gap-10\">
    <label for=\"chapo\" class=\"form-control-label\">Description</label>
    <input type=\"text\" id=\"chapo\" name=\"chapo\" value=\"<?= \$chapo; ?>\">
    <?= isset(\$errors['chapo']) ? \$errors['chapo'] : ''; ?>
  </div>

  <div class=\"form-control grid grid-gap-10\">
    <label for=\"article-content\" class=\"form-control-label\">Contenu</label>
    <textarea id=\"article-content\" class=\"article-content-input\" name=\" content\"><?= \$content; ?></textarea>
    <?= isset(\$errors['content']) ? \$errors['content'] : ''; ?>
  </div>

  <?php if (\$submit == \"Ajouter\") { ?>
    <div class=\"form-control grid grid-gap-10\">
      <label for=\"thumb\" class=\"form-control-label\">Image d'entête</label>
      <input type=\"file\" id=\"thumb\" name=\"thumb\" value=\"<?= \$thumb; ?>\">
      <?= isset(\$errorsThumb['name']) ? \$errorsThumb['name'] : ''; ?>
      <?= isset(\$errorsThumb['size']) ? \$errorsThumb['size'] : ''; ?>
      <?= isset(\$errorsThumb['type']) ? \$errorsThumb['type'] : ''; ?>
    </div>
  <?php } ?>
</form>

<div class=\"grid grid-gap-20 button-box\">
  <input type=\"submit\" value=\"<?= \$submit; ?>\" id=\"submit\" name=\"submit\" form=\"form-add-article\" class=\"button-primary\">
  <a href=\"/index.php\" class=\"button-secondary\">Accueil</a>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "form_article.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
\$route = isset(\$article) && \$article->getId() ? 'editArticle&articleId=' . \$article->getId() : 'addArticle';
\$submit = \$route === 'addArticle' ? 'Ajouter' : 'Mettre à jour';
\$title = isset(\$article) && \$article->getTitle() ? htmlspecialchars(\$article->getTitle()) : '';
\$content = isset(\$article) && \$article->getContent() ? htmlspecialchars(\$article->getContent()) : '';
\$author = isset(\$article) && \$article->getAuthor() ? htmlspecialchars(\$article->getAuthor()) : '';
\$chapo = isset(\$article) && \$article->getChapo() ? htmlspecialchars(\$article->getChapo()) : '';
\$thumb = isset(\$article) && \$article->getThumb() ? htmlspecialchars(\$article->getThumb()) : 'Choisir une image';
?>

<form method=\"post\" action=\"/index.php?route=<?= \$route; ?>\" class=\"grid grid-gap-20\" id=\"form-add-article\" enctype=\"multipart/form-data\">
  <div class=\"form-control grid grid-gap-10\">
    <label for=\"title\" class=\"form-control-label\">Titre</label>
    <input type=\"text\" id=\"title\" name=\"title\" value=\"<?= \$title; ?>\">
    <?= isset(\$errors['title']) ? \$errors['title'] : ''; ?>
  </div>

  <div class=\"form-control grid grid-gap-10\">
    <label for=\"chapo\" class=\"form-control-label\">Description</label>
    <input type=\"text\" id=\"chapo\" name=\"chapo\" value=\"<?= \$chapo; ?>\">
    <?= isset(\$errors['chapo']) ? \$errors['chapo'] : ''; ?>
  </div>

  <div class=\"form-control grid grid-gap-10\">
    <label for=\"article-content\" class=\"form-control-label\">Contenu</label>
    <textarea id=\"article-content\" class=\"article-content-input\" name=\" content\"><?= \$content; ?></textarea>
    <?= isset(\$errors['content']) ? \$errors['content'] : ''; ?>
  </div>

  <?php if (\$submit == \"Ajouter\") { ?>
    <div class=\"form-control grid grid-gap-10\">
      <label for=\"thumb\" class=\"form-control-label\">Image d'entête</label>
      <input type=\"file\" id=\"thumb\" name=\"thumb\" value=\"<?= \$thumb; ?>\">
      <?= isset(\$errorsThumb['name']) ? \$errorsThumb['name'] : ''; ?>
      <?= isset(\$errorsThumb['size']) ? \$errorsThumb['size'] : ''; ?>
      <?= isset(\$errorsThumb['type']) ? \$errorsThumb['type'] : ''; ?>
    </div>
  <?php } ?>
</form>

<div class=\"grid grid-gap-20 button-box\">
  <input type=\"submit\" value=\"<?= \$submit; ?>\" id=\"submit\" name=\"submit\" form=\"form-add-article\" class=\"button-primary\">
  <a href=\"/index.php\" class=\"button-secondary\">Accueil</a>
</div>", "form_article.php", "/Applications/MAMP/htdocs/Blog-Matheo/templates/form_article.php");
    }
}
