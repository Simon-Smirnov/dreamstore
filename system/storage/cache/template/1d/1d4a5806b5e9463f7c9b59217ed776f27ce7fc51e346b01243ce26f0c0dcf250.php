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
class __TwigTemplate_9da09847155fdea455900f69f2aa6321ad621959ec0a2e6c980fdf037a5e372e extends \Twig\Template
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
            </div>
            ";
        // line 25
        echo "            ";
        if (($context["products"] ?? null)) {
            // line 26
            echo "                <div class=\"category_main-controls\">
                    <div class=\"category_main-controls_sort\">
                        <p>";
            // line 28
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
            // line 59
            echo ($context["button_grid"] ?? null);
            echo "\">
                            <svg class=\"\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_square\"></use>
                            </svg>
                        </button>
                        <button type=\"button\" id=\"list-view\"
                                data-toggle=\"tooltip\"
                                title=\"";
            // line 66
            echo ($context["button_list"] ?? null);
            echo "\">
                            <svg class=\"\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_list\"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 74
                echo "                    <div class=\"product-layout product-list col-xs-12\">
                        <div class=\"product-thumb\">
                            <div class=\"image\"><a href=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 76);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 76);
                echo "\"
                                                                                 alt=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 77);
                echo "\"
                                                                                 title=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                echo "\"
                                                                                 class=\"img-responsive\"/></a></div>
                            <div>
                                <div class=\"caption\">
                                    <h4><a href=\"";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 82);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
                echo "</a></h4>
                                    <p>";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 83);
                echo "</p>
                                    ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "                                        <p class=\"price\">
                                            ";
                    // line 86
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 86)) {
                        // line 87
                        echo "                                                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87);
                        echo "
                                            ";
                    } else {
                        // line 89
                        echo "                                                <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 89);
                        echo "</span> <span
                                                    class=\"price-old\">";
                        // line 90
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
                        echo "</span>
                                            ";
                    }
                    // line 92
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 92)) {
                        // line 93
                        echo "                                                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 93);
                        echo "</span>
                                            ";
                    }
                    // line 95
                    echo "                                        </p>
                                    ";
                }
                // line 97
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "                                        <div class=\"rating\">
                                            ";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 100
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 100) < $context["i"])) {
                            // line 101
                            echo "                                                    <span class=\"fa fa-stack\"><i
                                                                class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                ";
                        } else {
                            // line 104
                            echo "                                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                                                class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                ";
                        }
                        // line 107
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "                                        </div>
                                    ";
                }
                // line 110
                echo "                                </div>
                                <div class=\"button-group\">
                                    <button type=\"button\"
                                            onclick=\"cart.add('";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 113);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 113);
                echo "');\">
                                        <i class=\"fa fa-shopping-cart\"></i> <span
                                                class=\"hidden-xs hidden-sm hidden-md\">";
                // line 115
                echo ($context["button_cart"] ?? null);
                echo "</span>
                                    </button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 117
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                                            onclick=\"wishlist.add('";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 118);
                echo "');\"><i
                                                class=\"fa fa-heart\"></i></button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 120
                echo ($context["button_compare"] ?? null);
                echo "\"
                                            onclick=\"compare.add('";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
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
            // line 128
            echo "                ";
            if (($context["pagination"] ?? null)) {
                // line 129
                echo "                    <div class=\"category_more category-page__more\">
                        <button class=\"btn btn-second loadmore\" data-loadmore
                                data-items-identy-name=\"products_grid-item\">
                            Показать ещё
                        </button>
                    </div>

                    <div class=\"category_pagination\" data-pagination>
                        ";
                // line 137
                echo ($context["pagination"] ?? null);
                echo "
                    </div>
                ";
            }
            // line 140
            echo "            ";
        } else {
            // line 141
            echo "                <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            ";
        }
        // line 143
        echo "        </div>
    </div>
    ";
        // line 146
        echo "    ";
        // line 147
        echo "    ";
        // line 148
        echo "    ";
        // line 149
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
        // line 197
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
        return array (  384 => 197,  334 => 149,  332 => 148,  330 => 147,  328 => 146,  324 => 143,  318 => 141,  315 => 140,  309 => 137,  299 => 129,  296 => 128,  283 => 121,  279 => 120,  274 => 118,  270 => 117,  265 => 115,  258 => 113,  253 => 110,  249 => 108,  243 => 107,  238 => 104,  233 => 101,  230 => 100,  226 => 99,  223 => 98,  220 => 97,  216 => 95,  208 => 93,  205 => 92,  200 => 90,  195 => 89,  189 => 87,  187 => 86,  184 => 85,  182 => 84,  178 => 83,  172 => 82,  165 => 78,  161 => 77,  155 => 76,  151 => 74,  147 => 73,  137 => 66,  127 => 59,  93 => 28,  89 => 26,  86 => 25,  74 => 15,  70 => 14,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/search.twig", "");
    }
}
