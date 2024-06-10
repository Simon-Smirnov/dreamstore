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
class __TwigTemplate_78310b9593645dcc50adc4efdada7fa0378463fb8be2e2613d0458d521854f0c extends \Twig\Template
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
                                    <a class=\"faq-block_nav-list_item-link\">";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "name", [], "any", false, false, false, 18);
            echo "</a>
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
                                                    <p>";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["child"], "answer", [], "any", false, false, false, 25);
                echo "</p>
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
                <div class=\"\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["faqs"] ?? null), 0, [], "any", false, false, false, 36), "children", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 37
            echo "                        <li class=\"faq-content_list-item\">
                            <h4>";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 38);
            echo "</h4>
                            <p>";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["child"], "answer", [], "any", false, false, false, 39);
            echo "</p>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    ";
        // line 43
        echo "                    ";
        // line 44
        echo "                    ";
        // line 45
        echo "                    ";
        // line 46
        echo "                    ";
        // line 47
        echo "                    ";
        // line 48
        echo "                    ";
        // line 49
        echo "                    ";
        // line 50
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
        // line 67
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
        return array (  176 => 67,  157 => 50,  155 => 49,  153 => 48,  151 => 47,  149 => 46,  147 => 45,  145 => 44,  143 => 43,  141 => 42,  132 => 39,  128 => 38,  125 => 37,  121 => 36,  115 => 32,  106 => 28,  97 => 25,  93 => 24,  90 => 23,  86 => 22,  81 => 20,  76 => 18,  73 => 17,  69 => 16,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/faq.twig", "");
    }
}
