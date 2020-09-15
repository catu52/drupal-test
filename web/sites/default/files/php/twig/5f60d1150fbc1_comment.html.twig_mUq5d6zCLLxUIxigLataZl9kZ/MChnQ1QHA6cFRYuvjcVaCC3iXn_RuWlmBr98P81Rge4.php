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

/* core/modules/comment/templates/comment.html.twig */
class __TwigTemplate_fe010c85b6997431df2eba61ea71587acf66f5f89ee57beff9b136a745c2048c extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 87);
        $filters = array("escape" => 70);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "
<article";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "js-comment"], "method", false, false, true, 70), 70, $this->source), "html", null, true);
        echo ">
  ";
        // line 76
        echo "  <mark class=\"hidden\" data-comment-timestamp=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 76, $this->source), "html", null, true);
        echo "\"></mark>

  <footer>
    ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 79, $this->source), "html", null, true);
        echo "
    <p>";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted"] ?? null), 80, $this->source), "html", null, true);
        echo "</p>

    ";
        // line 87
        echo "    ";
        if (($context["parent"] ?? null)) {
            // line 88
            echo "      <p class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 88, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        // line 90
        echo "
    ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["permalink"] ?? null), 91, $this->source), "html", null, true);
        echo "
  </footer>

  <div";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 94, $this->source), "html", null, true);
        echo ">
    ";
        // line 95
        if (($context["title"] ?? null)) {
            // line 96
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 96, $this->source), "html", null, true);
            echo "
      <h3";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 97, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 97, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 98, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 100
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 100, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/comment/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 100,  120 => 98,  114 => 97,  109 => 96,  107 => 95,  103 => 94,  97 => 91,  94 => 90,  88 => 88,  85 => 87,  80 => 80,  76 => 79,  69 => 76,  65 => 70,  62 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/comment/templates/comment.html.twig", "/var/www/html/web/core/modules/comment/templates/comment.html.twig");
    }
}
