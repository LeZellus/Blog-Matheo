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

/* blog.php */
class __TwigTemplate_bcc3eeaa5aa43602219821d761c7e62f0bc395a6c25ddb13ac8727ee6db415d7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.php"));

        // line 1
        echo "<?php \$this->title = \"Tout les articles\" ?>

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
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "blog.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php \$this->title = \"Tout les articles\" ?>

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
</main>", "blog.php", "/Applications/MAMP/htdocs/Blog-Matheo/templates/blog.php");
    }
}
