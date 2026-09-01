<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/casper/templates/page.html.twig */
class __TwigTemplate_a27db61a9c3c5eb0fdc784fc885641eb7595afe06a05696a0909ff0cc67c213f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 47];
        $filters = ["escape" => 48];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 47
        echo "<body class=\"nav-closed\">";
        if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
            // line 48
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu", [])), "html", null, true);
            echo "
";
        }
        // line 50
        echo "<span class=\"nav-cover\"></span>
<div class=\"site-wrapper\">
<header class=\"main-header post-head no-cover\" xmlns=\"http://www.w3.org/1999/html\">
    <nav class=\"main-nav  clearfix\">
        ";
        // line 54
        if (($context["website_logo"] ?? null)) {
            // line 55
            echo "        <a class=\"blog-logo\" href=\"/\"><img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_logo"] ?? null)), "html", null, true);
            echo "\" /></a>
        ";
        }
        // line 57
        echo "        <a class=\"menu-button icon-menu\" href=\"#\"><span class=\"word\">Menu</span></a>
    </nav>
</header>
";
        // line 60
        if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
            // line 61
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
";
        }
        // line 63
        echo "<div class=\"highlighted\">
";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
</div>
    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        <div class=\"layout-content\">
            ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
            // line 70
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            ";
        }
        // line 72
        echo "        </div>
    </main>
    ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 75
            echo "        <footer role=\"contentinfo\">
            ";
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
        </footer>
    ";
        }
        // line 79
        echo "</div>
</body>
";
    }

    public function getTemplateName()
    {
        return "themes/casper/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 79,  119 => 76,  116 => 75,  114 => 74,  110 => 72,  104 => 70,  102 => 69,  94 => 64,  91 => 63,  85 => 61,  83 => 60,  78 => 57,  72 => 55,  70 => 54,  64 => 50,  58 => 48,  55 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/casper/templates/page.html.twig", "/var/www/drupaldump/web/themes/casper/templates/page.html.twig");
    }
}
