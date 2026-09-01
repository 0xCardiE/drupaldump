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

/* themes/casper/templates/page--front.html.twig */
class __TwigTemplate_c1ff0f4426d7e9590113d56f6cc88e0c9f571a889b6460309337992470d7a3e4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["escape" => 4, "t" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
        // line 1
        echo "<body class=\"home-template nav-closed\">
<span class=\"nav-cover\"></span>
";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
            // line 4
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu", [])), "html", null, true);
            echo "
";
        }
        // line 6
        echo "<div class=\"site-wrapper front\">
<header class=\"main-header\" style=\"background-image: url(";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page_background_image"] ?? null)), "html", null, true);
        echo ")\">
    <nav class=\"main-nav overlay clearfix\">
        ";
        // line 9
        if (($context["website_logo"] ?? null)) {
            // line 10
            echo "            <a class=\"blog-logo\" href=\"/\"><img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page_title"] ?? null)), "html", null, true);
            echo "\"></a>
        ";
        }
        // line 12
        echo "        <a class=\"menu-button icon-menu\" href=\"#\"><span class=\"word\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Menu"));
        echo "</span></a>
    </nav>
    <div class=\"vertical\">
        <div class=\"main-header-content inner\">
            ";
        // line 16
        if (($context["front_page_title"] ?? null)) {
            // line 17
            echo "                <h1 class=\"page-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page_title"] ?? null)), "html", null, true);
            echo "</h1>
            ";
        }
        // line 19
        echo "
            ";
        // line 20
        if (($context["front_page_sub_heading"] ?? null)) {
            // line 21
            echo "            <h2 class=\"page-description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page_sub_heading"] ?? null)), "html", null, true);
            echo "</h2>
            ";
        }
        // line 23
        echo "        </div>
    </div>
    <a class=\"scroll-down icon-arrow-left\" href=\"#front-content\" data-offset=\"-45\"><span class=\"hidden\">Scroll Down</span></a>
</header>
<div class=\"highlighted\">
";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
</div>
    ";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
    ";
        }
        // line 33
        echo "    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 35
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 36
            echo "        <div class=\"layout-content\" id=\"front-content\">
            ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 40
        echo "    </main>
    ";
        // line 41
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 42
            echo "        <footer role=\"contentinfo\">
            ";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
        </footer>
    ";
        }
        // line 46
        echo "
</body>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/casper/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 46,  155 => 43,  152 => 42,  150 => 41,  147 => 40,  141 => 37,  138 => 36,  135 => 35,  132 => 33,  126 => 31,  124 => 30,  119 => 28,  112 => 23,  106 => 21,  104 => 20,  101 => 19,  95 => 17,  93 => 16,  85 => 12,  77 => 10,  75 => 9,  70 => 7,  67 => 6,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/casper/templates/page--front.html.twig", "/var/www/drupaldump/web/themes/casper/templates/page--front.html.twig");
    }
}
