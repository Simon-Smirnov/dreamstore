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
class __TwigTemplate_326b8880d3c6032aa7db56b27faccc16e0e15ae31f55b6d94560ac27ab2f33dd extends \Twig\Template
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
<div id=\"information-reviews\">
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
    <div class=\"reviews\">
        <div class=\"container\">
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["title"] ?? null);
        echo "</h1>
            <div class=\"reviews_inner\">
                <div class=\"reviews_inner-tabs\">
                    <ul>
                        <li class=\"reviews_inner-tabs_item active\" data-content=\"site\">С сайта</li>
                        <li class=\"reviews_inner-tabs_item middle\" data-content=\"yandex\">С яндекса</li>
                        <li class=\"reviews_inner-tabs_item\" data-content=\"social\">Из соцсетей</li>
                    </ul>
                </div>
                <div class=\"reviews_inner-content\">
                    <ul>
                        <li class=\"reviews_inner-content_item\" data-content=\"site\">
                            <div class=\"reviews_site\">
                                <ul class=\"reviews_site-list\">
                                    <li class=\"reviews_site-list_item\">
                                        <div class=\"reviews_site-list_item-title\">
                                            <div class=\"reviews_site-list_item-title_initial\">";
        // line 28
        echo ($context["initial"] ?? null);
        echo "</div>
                                            <div class=\"reviews_site-list_item-title_block\">
                                                <h4 class=\"reviews_site-list_item-title_block-name\">";
        // line 30
        echo ($context["name"] ?? null);
        echo "</h4>
                                                <ul class=\"reviews_site-list_item-title_block-grade\">
                                                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            // line 33
            echo "                                                        <li>
                                                            <svg class=\"icon-svg-star\"
                                                                 xmlns=\"http://www.w3.org/2000/svg\">
                                                                <use xlink:href=\"/sprite.svg#icon_vk\"></use>
                                                            </svg>
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                                </ul>
                                                <div class=\"reviews_site-list_item-title_block-date\">
                                                    ";
        // line 42
        echo ($context["date"] ?? null);
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"reviews_site-list_item-text\">";
        // line 46
        echo ($context["text"] ?? null);
        echo "</div>
                                        <div class=\"reviews_site-list_item-images\">";
        // line 47
        echo ($context["images"] ?? null);
        echo "</div>
                                    </li>
                                </ul>
                                <div class=\"reviews_site-block\">
                                    <div class=\"reviews_site-block_grade\">
                                        <div class=\"reviews_site-block_grade-average\">
                                            <h4>";
        // line 53
        echo ($context["average"] ?? null);
        echo "</h4>
                                            <p>На основании ";
        // line 54
        echo ($context["count_reviews"] ?? null);
        echo " отзывов</p>
                                        </div>
                                        <ul class=\"reviews_site-block_grade-lines\">
                                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 58
            echo "                                                <li>
                                                    <div class=\"reviews_site-block_grade-lines_number\">";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["review"], "number", [], "any", false, false, false, 59);
            echo "</div>
                                                    <div class=\"reviews_site-block_grade-lines_line ";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["review"], "percent", [], "any", false, false, false, 60);
            echo "\"></div>
                                                    <div class=\"reviews_site-block_grade-lines_line\">";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["review"], "percent", [], "any", false, false, false, 61);
            echo "
                                                        %
                                                    </div>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-block_btn\">
                                        <a class=\"btn btn-primary\" href=\"/\">Оставить отзыв</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"reviews_inner-content_item\" data-content=\"yandex\"></li>
                        <li class=\"reviews_inner-content_item\" data-content=\"social\"></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
";
        // line 83
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
        return array (  189 => 83,  170 => 66,  159 => 61,  155 => 60,  151 => 59,  148 => 58,  144 => 57,  138 => 54,  134 => 53,  125 => 47,  121 => 46,  114 => 42,  110 => 40,  98 => 33,  94 => 32,  89 => 30,  84 => 28,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/reviews.twig", "");
    }
}
