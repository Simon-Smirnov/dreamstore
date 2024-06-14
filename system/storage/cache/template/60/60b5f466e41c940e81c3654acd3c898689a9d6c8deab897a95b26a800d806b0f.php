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

/* dreamsstore/template/information/information.twig */
class __TwigTemplate_2033581024ecd49fc41f1431acbeb6e14e725c722e56b3148a5cbe2bfe58f1a3 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"information-information\" class=\"information_id_";
        // line 2
        echo ($context["information_id"] ?? null);
        echo "\">
    <div class=\"container\">
        <ul class=\"breadcrumb\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ul>
    </div>
    <div id=\"content\">
        <div class=\"container\"><h1 class=\"page-title\">";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1></div>
        ";
        // line 12
        echo ($context["description"] ?? null);
        echo "
        ";
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "    </div>
</div>
";
        // line 19
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  81 => 17,  79 => 16,  77 => 15,  75 => 14,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/information.twig", "");
    }
}
