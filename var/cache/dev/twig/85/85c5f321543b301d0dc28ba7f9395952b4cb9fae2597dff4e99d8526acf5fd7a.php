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

/* blog/index.html.twig */
class __TwigTemplate_3924921ed9266f88a485fced881124b87b5f40d17f34ef677a39505b9cc96597 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
<main class=\"grid grid-gap-40 m-h\">
    <h1>Tout les articles</h1>
    <h2>Retrouvez les derniers actualités de mon jeu</h2>

    <section class=\"grid grid-gap-40 articles\">
        <?php foreach (\$articles as \$article) { ?>
        <article>
            <a href=\"/index.php?route=article&articleId=<?= htmlspecialchars(\$article->getId()); ?>\" class=\"grid card card-article bg-white\">
                <div class=\"card-thumb\" style=\"background-image: url('<?= \$article->getThumb(); ?>')\">

                </div>
                <section class=\"card-content grid grid-gap-20\">
                    <h3 class=\"card-title\"><?= htmlspecialchars(\$article->getTitle()); ?></h3>
                    <p class=\"card-desc\"><?= htmlspecialchars(\$article->getChapo()); ?></p>
                    <p>Écrit par :
                        <span class=\"card-author\"><?= htmlspecialchars(\$article->getAuthor()); ?></span>
                    </p>
                </section>
                <p class=\"card-date\">Modifié le : <?= htmlspecialchars(\$article->getUpdatedAt()); ?></p>
            </a>
        </article>
        <?php } ?>
    </section>
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  67 => 7,  53 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/blog/index.html.twig #}

{% extends \"base.html.twig\" %}

{% block title %}Accueil | {{ parent() }}{% endblock %}

{% block content %}

<main class=\"grid grid-gap-40 m-h\">
    <h1>Tout les articles</h1>
    <h2>Retrouvez les derniers actualités de mon jeu</h2>

    <section class=\"grid grid-gap-40 articles\">
        <?php foreach (\$articles as \$article) { ?>
        <article>
            <a href=\"/index.php?route=article&articleId=<?= htmlspecialchars(\$article->getId()); ?>\" class=\"grid card card-article bg-white\">
                <div class=\"card-thumb\" style=\"background-image: url('<?= \$article->getThumb(); ?>')\">

                </div>
                <section class=\"card-content grid grid-gap-20\">
                    <h3 class=\"card-title\"><?= htmlspecialchars(\$article->getTitle()); ?></h3>
                    <p class=\"card-desc\"><?= htmlspecialchars(\$article->getChapo()); ?></p>
                    <p>Écrit par :
                        <span class=\"card-author\"><?= htmlspecialchars(\$article->getAuthor()); ?></span>
                    </p>
                </section>
                <p class=\"card-date\">Modifié le : <?= htmlspecialchars(\$article->getUpdatedAt()); ?></p>
            </a>
        </article>
        <?php } ?>
    </section>
</main>

{% endblock %}", "blog/index.html.twig", "/Applications/MAMP/htdocs/Blog-Matheo/templates/blog/index.html.twig");
    }
}
