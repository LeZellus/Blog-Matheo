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

/* form_comment.php */
class __TwigTemplate_031e69778a77d53b8d5f67377dc1f98ece701c09de2bba3ca4f5b8516bd0c072 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_comment.php"));

        // line 1
        echo "<?php

\$author = \$this->session->get('pseudo');

?>

<form method=\"post\" action=\"/index.php?route=addComment&articleId=<?= htmlspecialchars(\$article->getId()); ?>\" class=\"grid grid-gap-20\" id=\"form-add-comment\">

  <?php if (!\$this->session->get('pseudo')) { ?>

    <div class=\"form-control grid grid-gap-10\">
      <label for=\"pseudo\" class=\"form-control-label\">Pseudo</label>
      <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"\">
      <?= isset(\$errors['pseudo']) ? \$errors['pseudo'] : ''; ?>
    </div>

  <?php } else { ?>

    <div style=\"display: none;\">
      <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"<?= \$author ?>\">
      <?= isset(\$errors['pseudo']) ? \$errors['pseudo'] : ''; ?>
    </div>

  <?php } ?>

  <div class=\"form-control grid grid-gap-10\">
    <label for=\"content\" class=\"form-control-label\">Message :</label>
    <textarea id=\"content\" name=\"content\" class=\"comment\"><?= isset(\$post) ? htmlspecialchars(\$post->get('content')) : ''; ?></textarea>
    <?= isset(\$errors['content']) ? \$errors['content'] : ''; ?>
  </div>

  <div>
    <input type=\"submit\" value=\"Ajouter un commentaire\" id=\"submit\" name=\"submit\" form=\"form-add-comment\" class=\"button-primary\">
  </div>
</form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "form_comment.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$author = \$this->session->get('pseudo');

?>

<form method=\"post\" action=\"/index.php?route=addComment&articleId=<?= htmlspecialchars(\$article->getId()); ?>\" class=\"grid grid-gap-20\" id=\"form-add-comment\">

  <?php if (!\$this->session->get('pseudo')) { ?>

    <div class=\"form-control grid grid-gap-10\">
      <label for=\"pseudo\" class=\"form-control-label\">Pseudo</label>
      <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"\">
      <?= isset(\$errors['pseudo']) ? \$errors['pseudo'] : ''; ?>
    </div>

  <?php } else { ?>

    <div style=\"display: none;\">
      <input type=\"text\" id=\"pseudo\" name=\"pseudo\" value=\"<?= \$author ?>\">
      <?= isset(\$errors['pseudo']) ? \$errors['pseudo'] : ''; ?>
    </div>

  <?php } ?>

  <div class=\"form-control grid grid-gap-10\">
    <label for=\"content\" class=\"form-control-label\">Message :</label>
    <textarea id=\"content\" name=\"content\" class=\"comment\"><?= isset(\$post) ? htmlspecialchars(\$post->get('content')) : ''; ?></textarea>
    <?= isset(\$errors['content']) ? \$errors['content'] : ''; ?>
  </div>

  <div>
    <input type=\"submit\" value=\"Ajouter un commentaire\" id=\"submit\" name=\"submit\" form=\"form-add-comment\" class=\"button-primary\">
  </div>
</form>", "form_comment.php", "/Applications/MAMP/htdocs/Blog-Matheo/templates/form_comment.php");
    }
}
