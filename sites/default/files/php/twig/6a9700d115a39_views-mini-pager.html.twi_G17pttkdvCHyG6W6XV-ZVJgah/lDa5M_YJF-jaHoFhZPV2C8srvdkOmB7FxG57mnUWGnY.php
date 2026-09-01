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

/* themes/casper/templates/Views/views-mini-pager.html.twig */
class __TwigTemplate_aaca7a61fb752f9512d3473395c3c382fefcb6a576fedea672ac5a73371f8a3e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 14, "trans" => 18];
        $filters = ["escape" => 19, "default" => 22, "t" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'default', 't'],
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
        // line 14
        if (($this->getAttribute(($context["items"] ?? null), "previous", []) || $this->getAttribute(($context["items"] ?? null), "next", []))) {
            // line 15
            echo "<nav class=\"pagination\" role=\"navigation\">
            ";
            // line 16
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 17
                echo "                ";
                if ($this->getAttribute(($context["items"] ?? null), "current", [])) {
                    // line 18
                    echo "                    ";
                    echo t("<span class=\"page-number\">Page @items.current</span>", array("@items.current" => $this->getAttribute(                    // line 19
($context["items"] ?? null), "current", []), ));
                    // line 21
                    echo "                ";
                }
                // line 22
                echo "                    <a class=\"newer-posts\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\"><span aria-hidden=\"true\">←</span>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [])), t("‹‹"))) : (t("‹‹"))), "html", null, true);
                echo "</a>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 25
                echo "                ";
                if ($this->getAttribute(($context["items"] ?? null), "current", [])) {
                    // line 26
                    echo "                    ";
                    if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                        // line 27
                        echo "                    ";
                    } else {
                        // line 28
                        echo "                        ";
                        echo t("<span class=\"page-number\">Page @items.current</span>", array("@items.current" => $this->getAttribute(                        // line 29
($context["items"] ?? null), "current", []), ));
                        // line 31
                        echo "                    ";
                    }
                    // line 32
                    echo "                ";
                }
                // line 33
                echo "                <a class=\"older-posts\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [])), t("››"))) : (t("››"))), "html", null, true);
                echo "<span aria-hidden=\"true\">→</span></a>
            ";
            }
            // line 35
            echo "    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/casper/templates/Views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  102 => 33,  99 => 32,  96 => 31,  94 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  80 => 24,  72 => 22,  69 => 21,  67 => 19,  65 => 18,  62 => 17,  60 => 16,  57 => 15,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/casper/templates/Views/views-mini-pager.html.twig", "/var/www/drupaldump/web/themes/casper/templates/Views/views-mini-pager.html.twig");
    }
}
