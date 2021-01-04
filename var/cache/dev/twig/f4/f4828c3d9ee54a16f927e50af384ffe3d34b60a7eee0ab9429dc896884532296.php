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
class __TwigTemplate_46d590745bb2a5974af258f753cf884b32293b8631468d182d2130f571b674f2 extends Template
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
        echo "    <div class=\"container center\">
        <h1 class=\"mb-4\">Connexion</h1>

        <form method=\"post\" id=\"form-login\" class=\"grid grid-gap-20\">

            ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "                <div class=\"col s12 m6 l6 offset-m3 offset-l3\">
                    <span class=\"error\">";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageKey", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageData", [], "any", false, false, false, 15), "security"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 18
        echo "
            ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "                <div class=\"col s12 m6 l6 offset-m3 offset-l3\">
                    Tu es actuellement connecté en tant que ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnecte-toi</a>
                </div>
            ";
        }
        // line 24
        echo "            <div class=\"input-field col s12 m6 l6 offset-m3 offset-l3\">
                <input type=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"\" required autofocus placeholder=\"Adresse email\">
            </div>
            <div class=\"input-field col s12 m6 l6 offset-m3 offset-l3\">
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required placeholder=\"Mot de passe\">
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

            ";
        // line 43
        echo "
            <div class=\"input-field col s12\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Me connecter\">
            </div>
        </form>
    </div>
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
        return array (  124 => 43,  119 => 31,  110 => 25,  107 => 24,  99 => 21,  96 => 20,  94 => 19,  91 => 18,  85 => 15,  82 => 14,  80 => 13,  73 => 8,  66 => 7,  53 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/security/login.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block content %}
    <div class=\"container center\">
        <h1 class=\"mb-4\">Connexion</h1>

        <form method=\"post\" id=\"form-login\" class=\"grid grid-gap-20\">

            {% if error %}
                <div class=\"col s12 m6 l6 offset-m3 offset-l3\">
                    <span class=\"error\">{{ error.messageKey|trans(error.messageData, 'security') }}</span>
                </div>
            {% endif %}

            {% if app.user %}
                <div class=\"col s12 m6 l6 offset-m3 offset-l3\">
                    Tu es actuellement connecté en tant que {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Déconnecte-toi</a>
                </div>
            {% endif %}
            <div class=\"input-field col s12 m6 l6 offset-m3 offset-l3\">
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"\" required autofocus placeholder=\"Adresse email\">
            </div>
            <div class=\"input-field col s12 m6 l6 offset-m3 offset-l3\">
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required placeholder=\"Mot de passe\">
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            {#
            Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
            See https://symfony.com/doc/current/security/remember_me.html

            <div class=\"checkbox mb-3\">
                <label>
                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                </label>
            </div>
            #}

            <div class=\"input-field col s12\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Me connecter\">
            </div>
        </form>
    </div>
{% endblock %}", "security/login.html.twig", "/Applications/MAMP/htdocs/Blog-Matheo/templates/security/login.html.twig");
    }
}
