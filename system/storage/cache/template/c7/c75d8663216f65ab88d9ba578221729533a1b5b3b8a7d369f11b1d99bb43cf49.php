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
class __TwigTemplate_3240df9c514a081e1989d351f16ecb2606573d2e74ade6521b635f223b2df344 extends \Twig\Template
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
                echo "\" class=\"menu-item_link\" data-toggle=\"dropdown\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
                echo "</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t";
                // line 8
                echo "\t\t\t\t\t\t";
                // line 9
                echo "\t\t\t\t\t\t\t<div class=\"dropdown-subcategories\">
\t\t\t\t\t\t\t\t";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-menu-title\">Категории</h3>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu-list\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-item\" href=\"/\">Все комплекты</li>
\t\t\t\t\t\t\t\t\t\t";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 15
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 16);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 16);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-tissue\">
\t\t\t\t\t\t\t\t<h3>Ткань</h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-design\">
\t\t\t\t\t\t\t\t<h3>Дизайн</h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 31
                echo "\t\t\t\t\t";
                // line 32
                echo "\t\t\t\t</div>
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
        return array (  111 => 35,  103 => 32,  101 => 31,  90 => 21,  86 => 19,  75 => 16,  72 => 15,  68 => 14,  63 => 11,  61 => 10,  58 => 9,  56 => 8,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/menu_main.twig", "");
    }
}
