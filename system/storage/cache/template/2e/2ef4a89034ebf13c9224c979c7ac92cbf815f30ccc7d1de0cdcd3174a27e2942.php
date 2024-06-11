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
class __TwigTemplate_6123f68f6ae8c665ebb62b52db7b143d264990e9420ef3cab58099ee2734b081 extends \Twig\Template
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
                        <li class=\"reviews_inner-tabs_item grow right\"><a class=\"reviews_inner-tabs_item-link active\"
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
                        <li class=\"reviews_inner-content_item open\" data-content=\"site\">
                            <div class=\"reviews_site\">
                                <ul class=\"reviews_site-list\">
                                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 31
            echo "                                        <li class=\"reviews_site-list_item\">
                                            <div class=\"reviews_site-list_item-title\">
                                                <div class=\"reviews_site-list_item-title_initial\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 33);
            echo "</div>
                                                <div class=\"reviews_site-list_item-title_block\">
                                                    <h4 class=\"reviews_site-list_item-title_block-name\">";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 35);
            echo "</h4>
                                                    <ul class=\"reviews_site-list_item-title_block-grade\">
                                                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                // line 38
                echo "                                                            <li>
                                                                <svg class=\"icon-svg-star ";
                // line 39
                echo $context["grade"];
                echo "\"
                                                                     xmlns=\"http://www.w3.org/2000/svg\">
                                                                    <use xlink:href=\"/sprite.svg#icon_star\"></use>
                                                                </svg>
                                                            </li>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                                    </ul>
                                                </div>
                                                <div class=\"reviews_site-list_item-title_date\">
                                                    ";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 48);
            echo "
                                                </div>
                                            </div>
                                            <div class=\"reviews_site-list_item-text\">";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 51);
            echo "</div>
                                            <div class=\"reviews_site-list_item-images\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 52);
            echo "</div>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                </ul>
                                <div class=\"reviews_site-block\">
                                    <div class=\"reviews_site-block_grade\">
                                        <div class=\"reviews_site-block_grade-average\">
                                            <h4>";
        // line 59
        echo ($context["annual_grade"] ?? null);
        echo "</h4>
                                            <p>На основании<br>";
        // line 60
        echo ($context["count_reviews"] ?? null);
        echo " отзывов</p>
                                        </div>
                                        <ul class=\"reviews_site-block_grade-lines\">
                                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 64
            echo "                                                <li class=\"reviews_site-block_grade-lines_item\">
                                                    <div class=\"reviews_site-block_grade-lines_number\"></div>
                                                    <div class=\"reviews_site-block_grade-lines_line ";
            // line 66
            echo ($context["count"] ?? null);
            echo "\"></div>
                                                    <div class=\"reviews_site-block_grade-lines_percent\">";
            // line 67
            echo ($context["percent"] ?? null);
            echo "
                                                        %
                                                    </div>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        // line 89
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
        return array (  205 => 89,  186 => 72,  175 => 67,  171 => 66,  167 => 64,  163 => 63,  157 => 60,  153 => 59,  147 => 55,  138 => 52,  134 => 51,  128 => 48,  123 => 45,  111 => 39,  108 => 38,  104 => 37,  99 => 35,  94 => 33,  90 => 31,  86 => 30,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/reviews.twig", "");
    }
}
