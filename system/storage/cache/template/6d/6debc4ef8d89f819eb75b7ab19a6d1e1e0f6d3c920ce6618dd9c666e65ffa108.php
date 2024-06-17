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
class __TwigTemplate_89657c5c6f0b148916da37b882d392e4bb146fe104f20914fef161fc6b906dd6 extends \Twig\Template
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
                        <a href=\"tel:";
        // line 29
        echo ($context["telephone_for_link"] ?? null);
        echo "\">";
        echo ($context["telephone"] ?? null);
        echo "</a>
                    </div>
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Присылайте резюме на почту:</h4>
                        <a href=\"mailto:";
        // line 33
        echo ($context["email_for_store"] ?? null);
        echo "\"></a>
                    </div>
                </div>
                <div class=\"vacancy-inner_form\">

                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 43
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
        return array (  116 => 43,  103 => 33,  94 => 29,  87 => 25,  80 => 21,  73 => 17,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/vacancy.twig", "");
    }
}
