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
class __TwigTemplate_1b3a6d0517ea92875a037e5e24269ef383b304e91fa02824a1212c82479aae72 extends \Twig\Template
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
            echo "                                <li class=\"faq-block_nav-list_item\">
                                    <a class=\"faq-block_nav-list_item-link\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "name", [], "any", false, false, false, 19);
            echo "</a>
                                    <div class=\"faq-content\">
                                        <h2 class=\"faq-content_title ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 21) == "0")) {
                echo "active";
            }
            echo "\"
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
        return "dreamsstore/template/information/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 82,  173 => 63,  164 => 60,  153 => 52,  149 => 50,  145 => 49,  140 => 47,  133 => 42,  124 => 38,  115 => 35,  104 => 27,  100 => 25,  96 => 24,  91 => 22,  85 => 21,  80 => 19,  77 => 18,  73 => 17,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/faq.twig", "");
    }
}
