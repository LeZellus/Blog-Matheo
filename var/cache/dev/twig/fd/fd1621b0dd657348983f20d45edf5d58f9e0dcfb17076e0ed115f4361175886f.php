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

/* update_password.php */
class __TwigTemplate_e703fcddf89eef41bc083238359f0902baf6ad4020b4432a694ec1860eb27803 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "update_password.php"));

        // line 1
        echo "<?php \$this->title = \"Modification mot de passe\"; ?>

<main class=\"total-flex m-h\">
    <h1 class=\"mb-4\">Modifier le mot de passe</h1>
    <section class=\"grid grid-gap-40 login bg-white\">

        <form method=\"post\" id=\"form-login\" action=\"/index.php?route=updatePassword\" class=\"grid grid-gap-20\">
            <div class=\"form-control grid grid-gap-10\">
                <label for=\"password\" class=\"form-control-label\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Jackcélère\">
                <?= isset(\$errors['password']) ? \$errors['password'] : ''; ?>
            </div>
        </form>

        <section class=\"grid grid-gap-20 button-box\">
            <input type=\"submit\" value=\"ettre à jour\" class=\"button-primary\" id=\"submit\" name=\"submit\" form=\"form-login\">
            <a href=\"/index.php\" class=\"button-secondary\">Accueil</a>
        </section>

    </section>
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "update_password.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php \$this->title = \"Modification mot de passe\"; ?>

<main class=\"total-flex m-h\">
    <h1 class=\"mb-4\">Modifier le mot de passe</h1>
    <section class=\"grid grid-gap-40 login bg-white\">

        <form method=\"post\" id=\"form-login\" action=\"/index.php?route=updatePassword\" class=\"grid grid-gap-20\">
            <div class=\"form-control grid grid-gap-10\">
                <label for=\"password\" class=\"form-control-label\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Jackcélère\">
                <?= isset(\$errors['password']) ? \$errors['password'] : ''; ?>
            </div>
        </form>

        <section class=\"grid grid-gap-20 button-box\">
            <input type=\"submit\" value=\"ettre à jour\" class=\"button-primary\" id=\"submit\" name=\"submit\" form=\"form-login\">
            <a href=\"/index.php\" class=\"button-secondary\">Accueil</a>
        </section>

    </section>
</main>", "update_password.php", "/Applications/MAMP/htdocs/Blog-Matheo/templates/update_password.php");
    }
}
