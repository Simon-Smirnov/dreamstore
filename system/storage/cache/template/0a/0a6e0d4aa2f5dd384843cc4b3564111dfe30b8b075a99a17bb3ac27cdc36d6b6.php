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

/* dreamsstore/template/common/menu_main.twig */
class __TwigTemplate_740f0395c9b64e25b07fb177729ce46c2762d72932e678fe6b5c65d67b4af4ca extends \Twig\Template
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
        // line 1
        if (($context["categories"] ?? null)) {
            // line 2
            echo "\t<nav class=\"menu-nav\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 4
                echo "\t\t\t<li class=\"menu-item dropdown\">
\t\t\t\t<a href=\"";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 5);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
                echo "</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"dropdown-subcategories\">
\t\t\t\t\t\t\t\t";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "\t\t\t\t\t\t\t\t\t<h3>Категории</h3>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t";
                    // line 13
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 14
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 15);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 15);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-tissue\">
\t\t\t\t\t\t\t\t<h3>Ткань</h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-design\">
\t\t\t\t\t\t\t\t<h3>Дизайн</h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/common/menu_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  87 => 20,  83 => 18,  72 => 15,  69 => 14,  65 => 13,  61 => 11,  59 => 10,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/menu_main.twig", "");
    }
}
