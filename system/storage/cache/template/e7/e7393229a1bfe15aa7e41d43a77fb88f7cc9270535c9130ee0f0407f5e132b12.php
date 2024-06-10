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
class __TwigTemplate_c4cb548035f9596f941f79eac3fe604183ca9a51ae9b1b1f2744f1313be0dc8d extends \Twig\Template
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
                                        <h2 class=\"faq-content_title\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["faq"], "name", [], "any", false, false, false, 21);
            echo "</h2>
                                        <ul class=\"faq-content_list\">
                                            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["faq"], "children", [], "any", false, false, false, 23));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 24
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                                                    укпрукрукр
                                                ";
                }
                // line 27
                echo "                                                <li class=\"faq-content_list-item\">
                                                    <h4 class=\"faq-content_list-item_title\">
                                                        <span>";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 29);
                echo "</span>
                                                        <span class=\"faq-content_list-item_title-svg\">
                                                            <svg class=\"faq-svg\"
                                                                 xmlns=\"http://www.w3.org/2000/svg\">
                                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                                            </svg>
                                                        </span>
                                                    </h4>
                                                    <p class=\"faq-content_list-item_answer\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["child"], "answer", [], "any", false, false, false, 37);
                echo "</p>
                                                </li>
                                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                        </ul>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </ul>
                    </nav>
                </div>
                <div class=\"faq-block_list\">
                    <div class=\"faq-content open\">
                        <h2 class=\"faq-content_title\">";
        // line 49
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["faqs"] ?? null), 0, [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49);
        echo "</h2>
                        <ul class=\"faq-content_list\">
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["faqs"] ?? null), 0, [], "any", false, false, false, 51), "children", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo "                                <li class=\"faq-content_list-item\">
                                    <h4 class=\"faq-content_list-item_title\">
                                        <span>";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 54);
            echo "</span>
                                        <span class=\"faq-content_list-item_title-svg\">
                                            <svg class=\"faq-svg\"
                                                 xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </span>
                                    </h4>
                                    <p class=\"faq-content_list-item_answer\">";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["child"], "answer", [], "any", false, false, false, 62);
            echo "</p>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        // line 84
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
        return array (  216 => 84,  195 => 65,  186 => 62,  175 => 54,  171 => 52,  167 => 51,  162 => 49,  155 => 44,  146 => 40,  129 => 37,  118 => 29,  114 => 27,  110 => 25,  107 => 24,  90 => 23,  85 => 21,  80 => 19,  77 => 18,  73 => 17,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/faq.twig", "");
    }
}
