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

/* dreamsstore/template/information/faq.twig */
class __TwigTemplate_1ffc9fe18c91655a2d11b3b9f6083b8ed057b7650b394f5bcdd36d62a4ce6b3b extends \Twig\Template
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
<div id=\"information-contact\">
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
    <div class=\"faq\">
        <div class=\"faq-block\">
            <div class=\"faq-block_nav\">
                <nav>
                    <ul>
                        <li></li>
                    </ul>
                </nav>
            </div>
            <div class=\"faq-block_list\">
                <h2></h2>
                <ul>
                   <li>

                   </li>
                </ul>
            </div>
        </div>
        <div class=\"faq-notanswer\">
            <div class=\"faq-notanswer_info\">
                <h2 class=\"faq-notanswer_info-title\">Не нашли ответа?</h2>
                <p class=\"faq-notanswer_info-text\">Задайте свой вопрос нам, мы свяжемся с Вами и ответим на все вопросы</p>
            </div>
            <div class=\"faq-notanswer_btn\">
                <a class=\"btn btn-primary\">Задать вопрос</a>
            </div>
        </div>
    </div>
</div>
";
        // line 39
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/faq.twig", "");
    }
}
