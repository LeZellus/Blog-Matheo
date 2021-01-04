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

/* security/login.html.twig */
class __TwigTemplate_f1733c039e58077327a595eea3ac4c9e780a1998779b93ea37e112d588bd8c91 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <main class=\"total-flex m-h\">
        <h1 class=\"mb-4\">Connexion</h1>
        <section class=\"grid grid-gap-40 login bg-white\">

            <a href=\"/index.php?route=register\" class=\"button-secondary\">Pas de compte ? Inscrivez-vous</a>

            <form method=\"post\" id=\"form-login\" action=\"/index.php?route=login\" class=\"grid grid-gap-20\">
                <div class=\"form-control grid grid-gap-10\">
                    <label for=\"pseudo\" class=\"form-control-label\">Pseudo</label>
                    <input type=\"text\" id=\"pseudo\" name=\"pseudo\" placeholder=\"Jackcélère\">
                </div>
                <div class=\"form-control grid grid-gap-10\">
                    <label for=\"password\" class=\"form-control-label\">Mot de passe</label>
                    <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"********\">
                </div>
            </form>

            <?php if(\$this->session->show('error_login')){ ?>
            <p class=\"error-text\">
                <?php echo \$this->session->show('error_login'); ?>
            </p>
            <?php } ?>

            <section class=\"grid grid-gap-20 button-box\">
                <input type=\"submit\" value=\"Connexion\" class=\"button-primary\" id=\"submit\" name=\"submit\"
                       form=\"form-login\">
                <a href=\"/index.php\" class=\"button-secondary\">Accueil</a>
            </section>

        </section>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 8,  66 => 7,  53 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/registration/register.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block content %}
    <main class=\"total-flex m-h\">
        <h1 class=\"mb-4\">Connexion</h1>
        <section class=\"grid grid-gap-40 login bg-white\">

            <a href=\"/index.php?route=register\" class=\"button-secondary\">Pas de compte ? Inscrivez-vous</a>

            <form method=\"post\" id=\"form-login\" action=\"/index.php?route=login\" class=\"grid grid-gap-20\">
                <div class=\"form-control grid grid-gap-10\">
                    <label for=\"pseudo\" class=\"form-control-label\">Pseudo</label>
                    <input type=\"text\" id=\"pseudo\" name=\"pseudo\" placeholder=\"Jackcélère\">
                </div>
                <div class=\"form-control grid grid-gap-10\">
                    <label for=\"password\" class=\"form-control-label\">Mot de passe</label>
                    <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"********\">
                </div>
            </form>

            <?php if(\$this->session->show('error_login')){ ?>
            <p class=\"error-text\">
                <?php echo \$this->session->show('error_login'); ?>
            </p>
            <?php } ?>

            <section class=\"grid grid-gap-20 button-box\">
                <input type=\"submit\" value=\"Connexion\" class=\"button-primary\" id=\"submit\" name=\"submit\"
                       form=\"form-login\">
                <a href=\"/index.php\" class=\"button-secondary\">Accueil</a>
            </section>

        </section>
    </main>
{% endblock %}", "security/login.html.twig", "/Applications/MAMP/htdocs/Blog-Matheo/templates/security/login.html.twig");
    }
}
