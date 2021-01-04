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

/* profile.php */
class __TwigTemplate_316e98b271aee1fa7fd4a3df85f20111ad6bfcea4b5a314ff4f41b8c909bd791 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.php"));

        // line 1
        echo "<?php \$this->title = 'Mon profil'; ?>

<main class=\"total-flex m-h\">
    <h1 class=\"mb-4\">Profil</h1>
    <section class=\"grid grid-gap-40 profil bg-white\">
        <img src=\"/uploads/LeZellus.gif\" alt=\"Logo Mathéo\" class=\"logo\">
        <div class=\"grid grid-gap-20\">
            <h2><?= \$this->session->get('pseudo'); ?></h2>
            <p>Prénom : <?= \$user->getFirstName(); ?></p>
            <p>Nom : <?= \$user->getLastName(); ?></p>
            <p>Email : <?= \$user->getEmail(); ?></p>
            <p>Compte crée depuis le : <?= \$user->getCreatedAt(); ?></p>
        </div>

        <div class=\"grid grid-gap-20 button-box\">
            <a class=\"button-primary\" href=\"/index.php?route=updatePassword\">Modifier son mot de passe</a>
            <a class=\"button-primary\" href=\"/index.php?route=deleteAccount\">Supprimer mon compte</a>
        </div>
    </section>
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profile.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php \$this->title = 'Mon profil'; ?>

<main class=\"total-flex m-h\">
    <h1 class=\"mb-4\">Profil</h1>
    <section class=\"grid grid-gap-40 profil bg-white\">
        <img src=\"/uploads/LeZellus.gif\" alt=\"Logo Mathéo\" class=\"logo\">
        <div class=\"grid grid-gap-20\">
            <h2><?= \$this->session->get('pseudo'); ?></h2>
            <p>Prénom : <?= \$user->getFirstName(); ?></p>
            <p>Nom : <?= \$user->getLastName(); ?></p>
            <p>Email : <?= \$user->getEmail(); ?></p>
            <p>Compte crée depuis le : <?= \$user->getCreatedAt(); ?></p>
        </div>

        <div class=\"grid grid-gap-20 button-box\">
            <a class=\"button-primary\" href=\"/index.php?route=updatePassword\">Modifier son mot de passe</a>
            <a class=\"button-primary\" href=\"/index.php?route=deleteAccount\">Supprimer mon compte</a>
        </div>
    </section>
</main>", "profile.php", "/Applications/MAMP/htdocs/Blog-Matheo/templates/profile.php");
    }
}
