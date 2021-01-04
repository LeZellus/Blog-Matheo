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

/* base.php */
class __TwigTemplate_fed4916d01152a1d04e1763d2ad918d48d546577c4697bbca15070f768ddd6dc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.php"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
\t<meta charset=\"UTF-8\" />
\t<title><?= \$title ?> • Xipel, de l'imagination à la conception d'un jeu.</title>
\t<meta name=\"description\" content=\"Voici un exemple de description, elle est encore un peu courte mais va surement changer dans les prochains jours. Elle permet d&#x27;écrire une description\" />
\t<link rel=\"stylesheet\" href=\"/css/style.css\">
\t<link rel=\"icon\" href=\"icons/favicon.ico\" />
</head>

<body class=\"m-h\">
\t<header>
\t\t<nav>
\t\t\t<a href=\"/index.php\">
\t\t\t\t<img src=\"uploads/LeZellus.gif\" alt=\"Logo de Mathéo en Pixel art\" class=\"logo logo-nav\">
\t\t\t</a>


\t\t\t<ul class=\"nav-link-items\" id=\"nav-link-items\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=blog\">
\t\t\t\t\t\tBlog
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<?php if (\$this->session->get('pseudo')) { ?>
\t\t\t\t\t<?php if (\$this->session->get('role') === 'admin') { ?>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=administration\">
\t\t\t\t\t\t\t\t<img src=\"/icons/cog.svg\" alt=\"Icon engrenage\" class=\"icon\">
\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t<?php } ?>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=profile\">
\t\t\t\t\t\t\t<img src=\"/icons/user.svg\" alt=\"Icon utilisateur\" class=\"icon\">
\t\t\t\t\t\t\tProfil
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=logout\">
\t\t\t\t\t\t\t<img src=\"/icons/logout.svg\" alt=\"Icon déconnexion\" class=\"icon\">
\t\t\t\t\t\t\tDéconnexion
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t<?php } else { ?>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=register\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=login\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t<?php } ?>
\t\t\t</ul>

\t\t\t<div class=\"nav-burger\" id=\"nav-burger\">
\t\t\t\t<div class=\"nav-burger-bar\"></div>
\t\t\t\t<div class=\"nav-burger-bar\"></div>
\t\t\t</div>
\t\t</nav>
\t</header>

\t<?= \$content ?>

\t<footer>
\t\t<ul class=\"grid social-links mt-4\">
\t\t\t<li>
\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://www.facebook.com/matheo.zeller/\">
\t\t\t\t\t<img class=\"icon\" src=\"/icons/facebook.png\" alt=\"Icone de facebook\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://twitter.com/LeZelller\">
\t\t\t\t\t<img class=\"icon\" src=\"/icons/twitter.png\" alt=\"Icone de twitter\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://www.linkedin.com/in/zellrdesign/\">
\t\t\t\t\t<img class=\"icon\" src=\"/icons/linkedin.png\" alt=\"Icone de Linkedin\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://github.com/LeZellus\">
\t\t\t\t\t<img class=\"icon\" src=\"/icons/github.png\" alt=\"Icone de github\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://www.instagram.com/lepixzel\">
\t\t\t\t\t<img class=\"icon\" src=\"/icons/instagram.png\" alt=\"Icone d'instagram\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<?php if (\$this->session->get('pseudo')) { ?>
\t\t\t\t<?php if (\$this->session->get('role') === 'admin') { ?>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://www.instagram.com/lepixzel\">
\t\t\t\t\t\t\t<img class=\"icon\" src=\"/icons/cog.svg\" alt=\"Icone engrenage\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t<?php } ?>
\t\t\t<?php } ?>
\t\t</ul>
\t\t<script src=\"https://cdn.tiny.cloud/1/rw78ruup0slekfnq1t5ss54hodg15wxelpobpasmfafy88c3/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
\t\t<script src=\"/js/app.js\"></script>
\t\t<!-- <script src=\"/js/popup.js\"></script> -->
\t</footer>
</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
\t<meta charset=\"UTF-8\" />
\t<title><?= \$title ?> • Xipel, de l'imagination à la conception d'un jeu.</title>
\t<meta name=\"description\" content=\"Voici un exemple de description, elle est encore un peu courte mais va surement changer dans les prochains jours. Elle permet d&#x27;écrire une description\" />
\t<link rel=\"stylesheet\" href=\"/css/style.css\">
\t<link rel=\"icon\" href=\"icons/favicon.ico\" />
</head>

<body class=\"m-h\">
\t<header>
\t\t<nav>
\t\t\t<a href=\"/index.php\">
\t\t\t\t<img src=\"uploads/LeZellus.gif\" alt=\"Logo de Mathéo en Pixel art\" class=\"logo logo-nav\">
\t\t\t</a>


\t\t\t<ul class=\"nav-link-items\" id=\"nav-link-items\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=blog\">
\t\t\t\t\t\tBlog
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<?php if (\$this->session->get('pseudo')) { ?>
\t\t\t\t\t<?php if (\$this->session->get('role') === 'admin') { ?>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=administration\">
\t\t\t\t\t\t\t\t<img src=\"/icons/cog.svg\" alt=\"Icon engrenage\" class=\"icon\">
\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t<?php } ?>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=profile\">
\t\t\t\t\t\t\t<img src=\"/icons/user.svg\" alt=\"Icon utilisateur\" class=\"icon\">
\t\t\t\t\t\t\tProfil
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=logout\">
\t\t\t\t\t\t\t<img src=\"/icons/logout.svg\" alt=\"Icon déconnexion\" class=\"icon\">
\t\t\t\t\t\t\tDéconnexion
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t<?php } else { ?>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=register\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-link-item\" href=\"/index.php?route=login\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t<?php } ?>
\t\t\t</ul>

\t\t\t<div class=\"nav-burger\" id=\"nav-burger\">
\t\t\t\t<div class=\"nav-burger-bar\"></div>
\t\t\t\t<div class=\"nav-burger-bar\"></div>
\t\t\t</div>
\t\t</nav>
\t</header>

\t<?= \$content ?>

\t<footer>
\t\t<ul class=\"grid social-links mt-4\">
\t\t\t<li>
\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://www.facebook.com/matheo.zeller/\">
\t\t\t\t\t<img class=\"icon\" src=\"/icons/facebook.png\" alt=\"Icone de facebook\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://twitter.com/LeZelller\">
\t\t\t\t\t<img class=\"icon\" src=\"/icons/twitter.png\" alt=\"Icone de twitter\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://www.linkedin.com/in/zellrdesign/\">
\t\t\t\t\t<img class=\"icon\" src=\"/icons/linkedin.png\" alt=\"Icone de Linkedin\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://github.com/LeZellus\">
\t\t\t\t\t<img class=\"icon\" src=\"/icons/github.png\" alt=\"Icone de github\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://www.instagram.com/lepixzel\">
\t\t\t\t\t<img class=\"icon\" src=\"/icons/instagram.png\" alt=\"Icone d'instagram\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<?php if (\$this->session->get('pseudo')) { ?>
\t\t\t\t<?php if (\$this->session->get('role') === 'admin') { ?>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"grid social-link total-flex\" href=\"https://www.instagram.com/lepixzel\">
\t\t\t\t\t\t\t<img class=\"icon\" src=\"/icons/cog.svg\" alt=\"Icone engrenage\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t<?php } ?>
\t\t\t<?php } ?>
\t\t</ul>
\t\t<script src=\"https://cdn.tiny.cloud/1/rw78ruup0slekfnq1t5ss54hodg15wxelpobpasmfafy88c3/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
\t\t<script src=\"/js/app.js\"></script>
\t\t<!-- <script src=\"/js/popup.js\"></script> -->
\t</footer>
</body>

</html>", "base.php", "/Applications/MAMP/htdocs/Blog-Matheo/templates/base.php");
    }
}
