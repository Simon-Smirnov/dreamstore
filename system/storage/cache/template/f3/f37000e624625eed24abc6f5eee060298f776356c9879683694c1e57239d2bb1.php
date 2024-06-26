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

/* dreamsstore/template/product/search.twig */
class __TwigTemplate_b06734b3cffeea5390912f84804400b0782f1ae331ef3c323a1723112865444c extends \Twig\Template
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
<div id=\"product-search\">
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
    <div class=\"container\">
        <div id=\"content\" class=\"search\">
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <div class=\"search-input\">
                <input class=\"input-text search-input__input\" type=\"text\" name=\"search\" value=\"";
        // line 14
        echo ($context["search"] ?? null);
        echo "\"
                       placeholder=\"";
        // line 15
        echo ($context["text_keyword"] ?? null);
        echo "\"
                       id=\"input-search\" class=\"form-control\"/>
                <svg class=\"search-input__svg\" xmlns=\"http://www.w3.org/2000/svg\">
                    <use xlink:href=\"/sprite.svg#icon_search\"></use>
                </svg>
                <svg class=\"search-input__close\" xmlns=\"http://www.w3.org/2000/svg\">
                    <use xlink:href=\"/sprite.svg#icon_cross\"></use>
                </svg>
                <p>результат(ов) по запросу ";
        // line 23
        echo ($context["search"] ?? null);
        echo "</p>
            </div>
            <input type=\"button\" value=\"";
        // line 25
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"/>
            ";
        // line 26
        if (($context["products"] ?? null)) {
            // line 27
            echo "                <div class=\"category_main-controls\">
                    <div class=\"category_main-controls_sort\">
                        <p>";
            // line 29
            echo ($context["text_sort"] ?? null);
            echo "</p>
                        <div id=\"sorts\" class=\"select select-1 open\">
                            <input type=\"hidden\" name=\"select\"
                                   value=\"https://motochek-shop.ru/aksessuary/?sort=p.sort_order&amp;order=ASC\">
                            <div class=\"select__box-btn\">
                                <button class=\"select__button\" type=\"button\">
                                    По умолчанию
                                </button>
                                <svg xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                </svg>
                            </div>
                            <ul class=\"select__list\">
                                <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.sort_order&amp;order=ASC\"
                                    selected=\"selected\">По умолчанию
                                </li>
                                <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.price&amp;order=ASC\">
                                    Сначала недорогие
                                </li>
                                <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.price&amp;order=DESC\">
                                    Сначала дорогие
                                </li>
                                <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.viewed&amp;order=DESC\">
                                    Популярные
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"category_main-controls_structure\">
                        <button type=\"button\" id=\"grid-view\"
                                data-toggle=\"tooltip\"
                                title=\"";
            // line 60
            echo ($context["button_grid"] ?? null);
            echo "\">
                            <svg class=\"\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_square\"></use>
                            </svg>
                        </button>
                        <button type=\"button\" id=\"list-view\"
                                data-toggle=\"tooltip\"
                                title=\"";
            // line 67
            echo ($context["button_list"] ?? null);
            echo "\">
                            <svg class=\"\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_list\"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 75
                echo "                    <div class=\"product-layout product-list col-xs-12\">
                        <div class=\"product-thumb\">
                            <div class=\"image\"><a href=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 77);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 77);
                echo "\"
                                                                                 alt=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                echo "\"
                                                                                 title=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 79);
                echo "\"
                                                                                 class=\"img-responsive\"/></a></div>
                            <div>
                                <div class=\"caption\">
                                    <h4><a href=\"";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 83);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                echo "</a></h4>
                                    <p>";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 84);
                echo "</p>
                                    ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "                                        <p class=\"price\">
                                            ";
                    // line 87
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 87)) {
                        // line 88
                        echo "                                                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 88);
                        echo "
                                            ";
                    } else {
                        // line 90
                        echo "                                                <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 90);
                        echo "</span> <span
                                                    class=\"price-old\">";
                        // line 91
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 91);
                        echo "</span>
                                            ";
                    }
                    // line 93
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "                                                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 94);
                        echo "</span>
                                            ";
                    }
                    // line 96
                    echo "                                        </p>
                                    ";
                }
                // line 98
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "                                        <div class=\"rating\">
                                            ";
                    // line 100
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 101
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 101) < $context["i"])) {
                            // line 102
                            echo "                                                    <span class=\"fa fa-stack\"><i
                                                                class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                ";
                        } else {
                            // line 105
                            echo "                                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                                                class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                ";
                        }
                        // line 108
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "                                        </div>
                                    ";
                }
                // line 111
                echo "                                </div>
                                <div class=\"button-group\">
                                    <button type=\"button\"
                                            onclick=\"cart.add('";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 114);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 114);
                echo "');\">
                                        <i class=\"fa fa-shopping-cart\"></i> <span
                                                class=\"hidden-xs hidden-sm hidden-md\">";
                // line 116
                echo ($context["button_cart"] ?? null);
                echo "</span>
                                    </button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 118
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                                            onclick=\"wishlist.add('";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 119);
                echo "');\"><i
                                                class=\"fa fa-heart\"></i></button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 121
                echo ($context["button_compare"] ?? null);
                echo "\"
                                            onclick=\"compare.add('";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                echo "');\"><i
                                                class=\"fa fa-exchange\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                ";
            if (($context["pagination"] ?? null)) {
                // line 130
                echo "                    <div class=\"category_more category-page__more\">
                        <button class=\"btn btn-second loadmore\" data-loadmore
                                data-items-identy-name=\"products_grid-item\">
                            Показать ещё
                        </button>
                    </div>

                    <div class=\"category_pagination\" data-pagination>
                        ";
                // line 138
                echo ($context["pagination"] ?? null);
                echo "
                    </div>
                ";
            }
            // line 141
            echo "            ";
        } else {
            // line 142
            echo "                <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            ";
        }
        // line 144
        echo "        </div>
    </div>
    ";
        // line 147
        echo "    ";
        // line 148
        echo "    ";
        // line 149
        echo "    ";
        // line 150
        echo "</div>
<script type=\"text/javascript\"><!--
    \$('#button-search').bind('click', function () {
        url = 'index.php?route=product/search';

        var search = \$('#content input[name=\\'search\\']').prop('value');

        if (search) {
            url += '&search=' + encodeURIComponent(search);
        }

        var category_id = \$('#content select[name=\\'category_id\\']').prop('value');

        if (category_id > 0) {
            url += '&category_id=' + encodeURIComponent(category_id);
        }

        var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

        if (sub_category) {
            url += '&sub_category=true';
        }

        var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

        if (filter_description) {
            url += '&description=true';
        }

        location = url;
    });

    \$('#content input[name=\\'search\\']').bind('keydown', function (e) {
        if (e.keyCode == 13) {
            \$('#button-search').trigger('click');
        }
    });

    \$('select[name=\\'category_id\\']').on('change', function () {
        if (this.value == '0') {
            \$('input[name=\\'sub_category\\']').prop('disabled', true);
        } else {
            \$('input[name=\\'sub_category\\']').prop('disabled', false);
        }
    });

    \$('select[name=\\'category_id\\']').trigger('change');
    --></script>
";
        // line 198
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 198,  341 => 150,  339 => 149,  337 => 148,  335 => 147,  331 => 144,  325 => 142,  322 => 141,  316 => 138,  306 => 130,  303 => 129,  290 => 122,  286 => 121,  281 => 119,  277 => 118,  272 => 116,  265 => 114,  260 => 111,  256 => 109,  250 => 108,  245 => 105,  240 => 102,  237 => 101,  233 => 100,  230 => 99,  227 => 98,  223 => 96,  215 => 94,  212 => 93,  207 => 91,  202 => 90,  196 => 88,  194 => 87,  191 => 86,  189 => 85,  185 => 84,  179 => 83,  172 => 79,  168 => 78,  162 => 77,  158 => 75,  154 => 74,  144 => 67,  134 => 60,  100 => 29,  96 => 27,  94 => 26,  90 => 25,  85 => 23,  74 => 15,  70 => 14,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/search.twig", "");
    }
}
