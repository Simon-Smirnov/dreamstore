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

/* dreamsstore/template/information/vacancy.twig */
class __TwigTemplate_7f4199f5392e2006d39f07a029fef53987c2d999585edf796a0947de18f4ca67 extends \Twig\Template
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
<div id=\"information-vacancy\">
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
    <div class=\"vacancy\">
        <div class=\"container\">
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["title"] ?? null);
        echo "</h1>
            <div class=\"vacancy-inner\">
                <div class=\"vacancy-inner_info\">
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Oбязaнности:</h4>
                        ";
        // line 17
        echo ($context["responsibility"] ?? null);
        echo "
                    </div>
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Tребовaния:</h4>
                        ";
        // line 21
        echo ($context["requirements"] ?? null);
        echo "
                    </div>
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Уcловия:</h4>
                        ";
        // line 25
        echo ($context["conditions"] ?? null);
        echo "
                    </div>
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Звоните по телефону:</h4>
                        11111
                    </div>
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Присылайте резюме на почту:</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 40
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/vacancy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  87 => 25,  80 => 21,  73 => 17,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/vacancy.twig", "");
    }
}
