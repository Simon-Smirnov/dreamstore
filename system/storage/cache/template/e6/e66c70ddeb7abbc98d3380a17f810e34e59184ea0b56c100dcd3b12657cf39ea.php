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
class __TwigTemplate_77ddda2218c1ab151a53bd0c788b209b8cc88685c95c26aae7f9746a3b4ec718 extends \Twig\Template
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
                    <ul class=\"reviews_inner-tabs_list\">
                        <li class=\"reviews_inner-tabs_item grow right active\"><a class=\"reviews_inner-tabs_item-link\"
                                                                                 data-content=\"site\">С
                                сайта</a></li>
                        <li class=\"reviews_inner-tabs_item middle\" data-content=\"yandex\"><a
                                    class=\"reviews_inner-tabs_item-link\" data-content=\"yandex\">С яндекса</a></li>
                        <li class=\"reviews_inner-tabs_item grow left\" data-content=\"social\"><a
                                    class=\"reviews_inner-tabs_item-link\" data-content=\"social\">Из соцсетей</a></li>
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
        // line 32
        echo ($context["initial"] ?? null);
        echo "</div>
                                            <div class=\"reviews_site-list_item-title_block\">
                                                <h4 class=\"reviews_site-list_item-title_block-name\">";
        // line 34
        echo ($context["name"] ?? null);
        echo "</h4>
                                                <ul class=\"reviews_site-list_item-title_block-grade\">
                                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            // line 37
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
        // line 44
        echo "                                                </ul>
                                                <div class=\"reviews_site-list_item-title_block-date\">
                                                    ";
        // line 46
        echo ($context["date"] ?? null);
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"reviews_site-list_item-text\">";
        // line 50
        echo ($context["text"] ?? null);
        echo "</div>
                                        <div class=\"reviews_site-list_item-images\">";
        // line 51
        echo ($context["images"] ?? null);
        echo "</div>
                                    </li>
                                </ul>
                                <div class=\"reviews_site-block\">
                                    <div class=\"reviews_site-block_grade\">
                                        <div class=\"reviews_site-block_grade-average\">
                                            <h4>";
        // line 57
        echo ($context["average"] ?? null);
        echo "</h4>
                                            <p>На основании ";
        // line 58
        echo ($context["count_reviews"] ?? null);
        echo " отзывов</p>
                                        </div>
                                        <ul class=\"reviews_site-block_grade-lines\">
                                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 62
            echo "                                                <li>
                                                    <div class=\"reviews_site-block_grade-lines_number\">";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["review"], "number", [], "any", false, false, false, 63);
            echo "</div>
                                                    <div class=\"reviews_site-block_grade-lines_line ";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["review"], "percent", [], "any", false, false, false, 64);
            echo "\"></div>
                                                    <div class=\"reviews_site-block_grade-lines_line\">";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["review"], "percent", [], "any", false, false, false, 65);
            echo "
                                                        %
                                                    </div>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        // line 87
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
        return array (  193 => 87,  174 => 70,  163 => 65,  159 => 64,  155 => 63,  152 => 62,  148 => 61,  142 => 58,  138 => 57,  129 => 51,  125 => 50,  118 => 46,  114 => 44,  102 => 37,  98 => 36,  93 => 34,  88 => 32,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/reviews.twig", "");
    }
}
