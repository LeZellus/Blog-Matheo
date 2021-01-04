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

/* add_article.php */
class __TwigTemplate_4e33c29f6db2199956c879c048f532a0dcc940fdc8b93a1ca76fc0f181f566b4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_article.php"));

        // line 1
        echo "<?php \$this->title = \"Nouvel article\"; ?>

<main class=\"grid grid-center grid-gap-40 m-h\">
    <h1 class=\"mb-4\">Ajouter un article</h1>
    <section class=\"grid grid-gap-40 add-article bg-white\">
        <?php include 'form_article.php'; ?>
    </section>
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "add_article.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php \$this->title = \"Nouvel article\"; ?>

<main class=\"grid grid-center grid-gap-40 m-h\">
    <h1 class=\"mb-4\">Ajouter un article</h1>
    <section class=\"grid grid-gap-40 add-article bg-white\">
        <?php include 'form_article.php'; ?>
    </section>
</main>", "add_article.php", "/Applications/MAMP/htdocs/Blog-Matheo/templates/add_article.php");
    }
}
