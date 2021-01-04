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

/* edit_article.php */
class __TwigTemplate_37aab5a711318bba94a91f3267d38fed2e400ebcd7a4c6ef3e624fd0cb52dbac extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_article.php"));

        // line 1
        echo "<?php \$this->title = \"Modifier l'article\"; ?>

<main class=\"grid grid-center grid-gap-40 m-h\">
  <h1 class=\"mb-4\">Modifier un article</h1>
  <section class=\"grid grid-gap-40 edit-article bg-white\">
    <?php include 'form_article.php'; ?>
  </section>
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "edit_article.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php \$this->title = \"Modifier l'article\"; ?>

<main class=\"grid grid-center grid-gap-40 m-h\">
  <h1 class=\"mb-4\">Modifier un article</h1>
  <section class=\"grid grid-gap-40 edit-article bg-white\">
    <?php include 'form_article.php'; ?>
  </section>
</main>", "edit_article.php", "/Applications/MAMP/htdocs/Blog-Matheo/templates/edit_article.php");
    }
}
