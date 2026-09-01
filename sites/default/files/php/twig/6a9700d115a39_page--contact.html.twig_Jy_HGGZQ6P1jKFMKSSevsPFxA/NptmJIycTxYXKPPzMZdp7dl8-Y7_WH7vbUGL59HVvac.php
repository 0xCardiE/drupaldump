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

/* themes/casper/templates/page--contact.html.twig */
class __TwigTemplate_f6ce415df4f79925d15c9a3b9b1006d8c7294424db37e06d0793111319fbbb7a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 48];
        $filters = ["escape" => 49];
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
        // line 46
        echo "
";
        // line 48
        echo "<body class=\"nav-closed\">";
        if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
            // line 49
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu", [])), "html", null, true);
            echo "
";
        }
        // line 51
        echo "<span class=\"nav-cover\"></span>
<div class=\"site-wrapper\">
<header class=\"main-header post-head no-cover\" xmlns=\"http://www.w3.org/1999/html\">
    <nav class=\"main-nav  clearfix\">
        ";
        // line 55
        if (($context["website_logo"] ?? null)) {
            // line 56
            echo "        <a class=\"blog-logo\" href=\"/\"><img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_logo"] ?? null)), "html", null, true);
            echo "\" /></a>
        ";
        }
        // line 58
        echo "        <a class=\"menu-button icon-menu\" href=\"#\"><span class=\"word\">Menu</span></a>
    </nav>
</header>
";
        // line 61
        if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
            // line 62
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
";
        }
        // line 64
        echo "<div class=\"highlighted\">
";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
</div>
    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        <div class=\"layout-content contact\">
            ";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
            // line 71
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            ";
        }
        // line 73
        echo "        </div>
    </main>
    ";
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 76
            echo "        <footer role=\"contentinfo\">
            ";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
        </footer>
    ";
        }
        // line 80
        echo "</div>
</body>
";
    }

    public function getTemplateName()
    {
        return "themes/casper/templates/page--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 80,  122 => 77,  119 => 76,  117 => 75,  113 => 73,  107 => 71,  105 => 70,  97 => 65,  94 => 64,  88 => 62,  86 => 61,  81 => 58,  75 => 56,  73 => 55,  67 => 51,  61 => 49,  58 => 48,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/casper/templates/page--contact.html.twig", "/var/www/drupaldump/web/themes/casper/templates/page--contact.html.twig");
    }
}
