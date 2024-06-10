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
class __TwigTemplate_236371aaf96513ff85b8d9631f64c55ee56052d79c2928aa5cb46297b2190529 extends \Twig\Template
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
        <div class=\"container\">
            <div class=\"faq-block\">
                <div class=\"faq-block_nav\">
                    <nav>
                        <ul class=\"faq-block_nav-list\">
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 17
            echo "                                <li class=\"faq-block_nav-list_item\">
                                    ";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "name", [], "any", false, false, false, 18);
            echo "
                                    <div class=\"faq-content\">
                                        <h2 class=\"faq-content_title\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "name", [], "any", false, false, false, 20);
            echo "</h2>
                                        <ul class=\"faq-content_list\">
                                            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["faq"], "children", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 23
                echo "                                                <li class=\"faq-content_list-item\">
                                                    <h4>";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 24);
                echo "</h4>
                                                    <h4>";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["child"], "answer", [], "any", false, false, false, 25);
                echo "</h4>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                                        </ul>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </ul>
                    </nav>
                </div>
                <div class=\"faq-block_list\">
                    ";
        // line 37
        echo "                    ";
        // line 38
        echo "                    ";
        // line 39
        echo "                    ";
        // line 40
        echo "                    ";
        // line 41
        echo "                    ";
        // line 42
        echo "                    ";
        // line 43
        echo "                    ";
        // line 44
        echo "                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"faq-notanswer\">
                <div class=\"faq-notanswer_info\">
                    <h2 class=\"faq-notanswer_info-title\">Не нашли ответа?</h2>
                    <p class=\"faq-notanswer_info-text\">Задайте свой вопрос нам, мы свяжемся с Вами и ответим на все
                        вопросы</p>
                </div>
                <div class=\"faq-notanswer_btn\">
                    <a class=\"btn btn-primary\">Задать вопрос</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 61
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
        return array (  154 => 61,  135 => 44,  133 => 43,  131 => 42,  129 => 41,  127 => 40,  125 => 39,  123 => 38,  121 => 37,  115 => 32,  106 => 28,  97 => 25,  93 => 24,  90 => 23,  86 => 22,  81 => 20,  76 => 18,  73 => 17,  69 => 16,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/faq.twig", "");
    }
}
