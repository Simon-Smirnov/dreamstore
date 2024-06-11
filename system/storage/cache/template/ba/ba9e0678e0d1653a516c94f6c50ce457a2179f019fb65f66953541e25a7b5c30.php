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

/* dreamsstore/template/information/reviews.twig */
class __TwigTemplate_f1fafd89767fdbbb9f6f08d0c379be34d95122f03912b84cf1d5aa523ed8ca43 extends \Twig\Template
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
<div id=\"information-faq\">
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
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["title"] ?? null);
        echo "</h1>
            <div class=\"faq-block\">
                <div class=\"faq-block_nav\">
                    <nav>
                        <ul class=\"faq-block_nav-list\">
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 18
            echo "                                <li class=\"faq-block_nav-list_item ";
            if ((twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 18) == "0")) {
                echo "active";
            }
            echo "\">
                                    <a class=\"faq-block_nav-list_item-link\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "name", [], "any", false, false, false, 19);
            echo "</a>
                                    <div class=\"faq-content\">
                                        <h2 class=\"faq-content_title\"
                                        >";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "name", [], "any", false, false, false, 22);
            echo "</h2>
                                        <ul class=\"faq-content_list\">
                                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["faq"], "children", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 25
                echo "                                                <li class=\"faq-content_list-item\">
                                                    <h4 class=\"faq-content_list-item_title\">
                                                        <span>";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 27);
                echo "</span>
                                                        <span class=\"faq-content_list-item_title-svg\">
                                                            <svg class=\"faq-svg\"
                                                                 xmlns=\"http://www.w3.org/2000/svg\">
                                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                                            </svg>
                                                        </span>
                                                    </h4>
                                                    <p class=\"faq-content_list-item_answer\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["child"], "answer", [], "any", false, false, false, 35);
                echo "</p>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                        </ul>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </ul>
                    </nav>
                </div>
                <div class=\"faq-block_list\">
                    <div class=\"faq-content open\">
                        <h2 class=\"faq-content_title\">";
        // line 47
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["faqs"] ?? null), 0, [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47);
        echo "</h2>
                        <ul class=\"faq-content_list\">
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["faqs"] ?? null), 0, [], "any", false, false, false, 49), "children", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 50
            echo "                                <li class=\"faq-content_list-item\">
                                    <h4 class=\"faq-content_list-item_title\">
                                        <span>";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 52);
            echo "</span>
                                        <span class=\"faq-content_list-item_title-svg\">
                                            <svg class=\"faq-svg\"
                                                 xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </span>
                                    </h4>
                                    <p class=\"faq-content_list-item_answer\">";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["child"], "answer", [], "any", false, false, false, 60);
            echo "</p>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </ul>
                    </div>
                </div>
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
        // line 82
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 82,  172 => 63,  163 => 60,  152 => 52,  148 => 50,  144 => 49,  139 => 47,  132 => 42,  123 => 38,  114 => 35,  103 => 27,  99 => 25,  95 => 24,  90 => 22,  84 => 19,  77 => 18,  73 => 17,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/reviews.twig", "");
    }
}
