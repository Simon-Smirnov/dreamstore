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
class __TwigTemplate_b218f75ec79d8de9906700c738f1d2475e52ba77f0543961deff09402d087a4c extends \Twig\Template
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
            <input class=\"input-text search-input\" type=\"text\" name=\"search\" value=\"";
        // line 13
        echo ($context["search"] ?? null);
        echo "\"
                   placeholder=\"";
        // line 14
        echo ($context["text_keyword"] ?? null);
        echo "\"
                   id=\"input-search\" class=\"form-control\"/>
            ";
        // line 17
        echo "            ";
        if (($context["products"] ?? null)) {
            // line 18
            echo "                <div class=\"category_main-controls\">
                    <div class=\"category_main-controls_sort\">
                        <p>";
            // line 20
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
            // line 51
            echo ($context["button_grid"] ?? null);
            echo "\">
                            <svg class=\"\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_square\"></use>
                            </svg>
                        </button>
                        <button type=\"button\" id=\"list-view\"
                                data-toggle=\"tooltip\"
                                title=\"";
            // line 58
            echo ($context["button_list"] ?? null);
            echo "\">
                            <svg class=\"\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_list\"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 66
                echo "                    <div class=\"product-layout product-list col-xs-12\">
                        <div class=\"product-thumb\">
                            <div class=\"image\"><a href=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 68);
                echo "\"
                                                                                 alt=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
                echo "\"
                                                                                 title=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
                echo "\"
                                                                                 class=\"img-responsive\"/></a></div>
                            <div>
                                <div class=\"caption\">
                                    <h4><a href=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 74);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                echo "</a></h4>
                                    <p>";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 75);
                echo "</p>
                                    ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                                        <p class=\"price\">
                                            ";
                    // line 78
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 78)) {
                        // line 79
                        echo "                                                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79);
                        echo "
                                            ";
                    } else {
                        // line 81
                        echo "                                                <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81);
                        echo "</span> <span
                                                    class=\"price-old\">";
                        // line 82
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                        echo "</span>
                                            ";
                    }
                    // line 84
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 84)) {
                        // line 85
                        echo "                                                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 85);
                        echo "</span>
                                            ";
                    }
                    // line 87
                    echo "                                        </p>
                                    ";
                }
                // line 89
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "                                        <div class=\"rating\">
                                            ";
                    // line 91
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 92
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 92) < $context["i"])) {
                            // line 93
                            echo "                                                    <span class=\"fa fa-stack\"><i
                                                                class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                ";
                        } else {
                            // line 96
                            echo "                                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                                                class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                ";
                        }
                        // line 99
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                                        </div>
                                    ";
                }
                // line 102
                echo "                                </div>
                                <div class=\"button-group\">
                                    <button type=\"button\"
                                            onclick=\"cart.add('";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 105);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 105);
                echo "');\">
                                        <i class=\"fa fa-shopping-cart\"></i> <span
                                                class=\"hidden-xs hidden-sm hidden-md\">";
                // line 107
                echo ($context["button_cart"] ?? null);
                echo "</span>
                                    </button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 109
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                                            onclick=\"wishlist.add('";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 110);
                echo "');\"><i
                                                class=\"fa fa-heart\"></i></button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 112
                echo ($context["button_compare"] ?? null);
                echo "\"
                                            onclick=\"compare.add('";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 113);
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
            // line 120
            echo "                ";
            if (($context["pagination"] ?? null)) {
                // line 121
                echo "                    <div class=\"category_more category-page__more\">
                        <button class=\"btn btn-second loadmore\" data-loadmore
                                data-items-identy-name=\"products_grid-item\">
                            Показать ещё
                        </button>
                    </div>

                    <div class=\"category_pagination\" data-pagination>
                        ";
                // line 129
                echo ($context["pagination"] ?? null);
                echo "
                    </div>
                ";
            }
            // line 132
            echo "            ";
        } else {
            // line 133
            echo "                <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            ";
        }
        // line 135
        echo "        </div>
    </div>
    ";
        // line 138
        echo "    ";
        // line 139
        echo "    ";
        // line 140
        echo "    ";
        // line 141
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
        // line 189
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
        return array (  376 => 189,  326 => 141,  324 => 140,  322 => 139,  320 => 138,  316 => 135,  310 => 133,  307 => 132,  301 => 129,  291 => 121,  288 => 120,  275 => 113,  271 => 112,  266 => 110,  262 => 109,  257 => 107,  250 => 105,  245 => 102,  241 => 100,  235 => 99,  230 => 96,  225 => 93,  222 => 92,  218 => 91,  215 => 90,  212 => 89,  208 => 87,  200 => 85,  197 => 84,  192 => 82,  187 => 81,  181 => 79,  179 => 78,  176 => 77,  174 => 76,  170 => 75,  164 => 74,  157 => 70,  153 => 69,  147 => 68,  143 => 66,  139 => 65,  129 => 58,  119 => 51,  85 => 20,  81 => 18,  78 => 17,  73 => 14,  69 => 13,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/search.twig", "");
    }
}
