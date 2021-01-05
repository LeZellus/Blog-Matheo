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

/* base.html.twig */
class __TwigTemplate_c17d1e7c531bdf24340acdc6a9e9c41a390a00695c390db07f31b6ae7ada9cec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>
        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <meta charset=\"UTF-8\"/>
    <title><?= \$title ?> • Xipel, de l'imagination à la conception d'un jeu.</title>
    <meta name=\"description\"
          content=\"Voici un exemple de description, elle est encore un peu courte mais va surement changer dans les prochains jours. Elle permet d&#x27;écrire une description\"/>
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <link rel=\"icon\" href=\"icons/favicon.ico\"/>
</head>
<body>
<header>
    <nav>
        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <img src=\"uploads/LeZellus.gif\" alt=\"Logo de Mathéo en Pixel art\" class=\"logo logo-nav\">
        </a>

        <ul class=\"nav-link-items\" id=\"nav-link-items\">
            <li>
                <a class=\"nav-link-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">
                    Blog
                </a>
            </li>
            <li>
                <a class=\"nav-link-item\" href=\"/index.php?route=administration\">
                    <img src=\"/icons/cog.svg\" alt=\"Icon engrenage\" class=\"icon\">
                    Admin
                </a>
            </li>

            <li>
                <a class=\"nav-link-item\" href=\"/index.php?route=profile\">
                    <img src=\"/icons/user.svg\" alt=\"Icon utilisateur\" class=\"icon\">
                    Profil
                </a>
            </li>

            <li>
                <a class=\"nav-link-item\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Inscription</a>
            </li>

            ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) {
            // line 56
            echo "                <li>
                    <a class=\"nav-link-item\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
                        <img src=\"/icons/logout.svg\" alt=\"Icon déconnexion\" class=\"icon\">
                        Déconnexion
                    </a>
                </li>
            ";
        } else {
            // line 63
            echo "                <li>
                    <a class=\"nav-link-item\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                </li>
            ";
        }
        // line 67
        echo "        </ul>

        <div class=\"nav-burger\" id=\"nav-burger\">
            <div class=\"nav-burger-bar\"></div>
            <div class=\"nav-burger-bar\"></div>
        </div>
    </nav>
</header>

";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "
<footer>
    <ul class=\"grid social-links mt-4\">
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://www.facebook.com/matheo.zeller/\">
                <img class=\"icon\" src=\"/icons/facebook.png\" alt=\"Icone de facebook\">
            </a>
        </li>
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://twitter.com/LeZelller\">
                <img class=\"icon\" src=\"/icons/twitter.png\" alt=\"Icone de twitter\">
            </a>
        </li>
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://www.linkedin.com/in/zellrdesign/\">
                <img class=\"icon\" src=\"/icons/linkedin.png\" alt=\"Icone de Linkedin\">
            </a>
        </li>
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://github.com/LeZellus\">
                <img class=\"icon\" src=\"/icons/github.png\" alt=\"Icone de github\">
            </a>
        </li>
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://www.instagram.com/lepixzel\">
                <img class=\"icon\" src=\"/icons/instagram.png\" alt=\"Icone d'instagram\">
            </a>
        </li>
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://www.instagram.com/lepixzel\">
                <img class=\"icon\" src=\"/icons/cog.svg\" alt=\"Icone engrenage\">
            </a>
        </li>
    </ul>
</footer>

";
        // line 113
        $this->displayBlock('scripts', $context, $blocks);
        // line 119
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "            Welcome!
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700;800&display=swap\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 114
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    <script src=\"https://cdn.tiny.cloud/1/rw78ruup0slekfnq1t5ss54hodg15wxelpobpasmfafy88c3/tinymce/5/tinymce.min.js\"
            referrerpolicy=\"origin\"></script>
    <script src=\"/js/app.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 114,  264 => 113,  246 => 76,  231 => 13,  221 => 12,  210 => 9,  200 => 8,  188 => 119,  186 => 113,  148 => 77,  146 => 76,  135 => 67,  129 => 64,  126 => 63,  117 => 57,  114 => 56,  112 => 55,  106 => 52,  84 => 33,  75 => 27,  63 => 17,  61 => 12,  58 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>
        {% block title %}
            Welcome!
        {% endblock %}
    </title>
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700;800&display=swap\" rel=\"stylesheet\">
    {% endblock %}
    <meta charset=\"UTF-8\"/>
    <title><?= \$title ?> • Xipel, de l'imagination à la conception d'un jeu.</title>
    <meta name=\"description\"
          content=\"Voici un exemple de description, elle est encore un peu courte mais va surement changer dans les prochains jours. Elle permet d&#x27;écrire une description\"/>
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <link rel=\"icon\" href=\"icons/favicon.ico\"/>
</head>
<body>
<header>
    <nav>
        <a href=\"{{ path('home') }}\">
            <img src=\"uploads/LeZellus.gif\" alt=\"Logo de Mathéo en Pixel art\" class=\"logo logo-nav\">
        </a>

        <ul class=\"nav-link-items\" id=\"nav-link-items\">
            <li>
                <a class=\"nav-link-item\" href=\"{{ path('blog') }}\">
                    Blog
                </a>
            </li>
            <li>
                <a class=\"nav-link-item\" href=\"/index.php?route=administration\">
                    <img src=\"/icons/cog.svg\" alt=\"Icon engrenage\" class=\"icon\">
                    Admin
                </a>
            </li>

            <li>
                <a class=\"nav-link-item\" href=\"/index.php?route=profile\">
                    <img src=\"/icons/user.svg\" alt=\"Icon utilisateur\" class=\"icon\">
                    Profil
                </a>
            </li>

            <li>
                <a class=\"nav-link-item\" href=\"{{ path('register') }}\">Inscription</a>
            </li>

            {% if app.user %}
                <li>
                    <a class=\"nav-link-item\" href=\"{{ path('logout') }}\">
                        <img src=\"/icons/logout.svg\" alt=\"Icon déconnexion\" class=\"icon\">
                        Déconnexion
                    </a>
                </li>
            {% else %}
                <li>
                    <a class=\"nav-link-item\" href=\"{{ path('app_login') }}\">Connexion</a>
                </li>
            {% endif %}
        </ul>

        <div class=\"nav-burger\" id=\"nav-burger\">
            <div class=\"nav-burger-bar\"></div>
            <div class=\"nav-burger-bar\"></div>
        </div>
    </nav>
</header>

{% block content %}{% endblock %}

<footer>
    <ul class=\"grid social-links mt-4\">
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://www.facebook.com/matheo.zeller/\">
                <img class=\"icon\" src=\"/icons/facebook.png\" alt=\"Icone de facebook\">
            </a>
        </li>
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://twitter.com/LeZelller\">
                <img class=\"icon\" src=\"/icons/twitter.png\" alt=\"Icone de twitter\">
            </a>
        </li>
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://www.linkedin.com/in/zellrdesign/\">
                <img class=\"icon\" src=\"/icons/linkedin.png\" alt=\"Icone de Linkedin\">
            </a>
        </li>
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://github.com/LeZellus\">
                <img class=\"icon\" src=\"/icons/github.png\" alt=\"Icone de github\">
            </a>
        </li>
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://www.instagram.com/lepixzel\">
                <img class=\"icon\" src=\"/icons/instagram.png\" alt=\"Icone d'instagram\">
            </a>
        </li>
        <li>
            <a class=\"grid social-link total-flex\" href=\"https://www.instagram.com/lepixzel\">
                <img class=\"icon\" src=\"/icons/cog.svg\" alt=\"Icone engrenage\">
            </a>
        </li>
    </ul>
</footer>

{% block scripts %}
    {{ encore_entry_script_tags('app') }}
    <script src=\"https://cdn.tiny.cloud/1/rw78ruup0slekfnq1t5ss54hodg15wxelpobpasmfafy88c3/tinymce/5/tinymce.min.js\"
            referrerpolicy=\"origin\"></script>
    <script src=\"/js/app.js\"></script>
{% endblock %}
</body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Blog-Matheo/templates/base.html.twig");
    }
}
