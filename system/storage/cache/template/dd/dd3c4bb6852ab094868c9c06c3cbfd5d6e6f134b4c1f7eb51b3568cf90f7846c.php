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

/* dreamsstore/template/product/category.twig */
class __TwigTemplate_edc0b288451000c9d59deea4f0da9c51246ba18ec243b9ac506493b231093fd3 extends \Twig\Template
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
<div id=\"product-category\">
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
    <div class=\"category\">
        <div class=\"container\">
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
        <div class=\"container\">
            <div class=\"category_getFree\">
                <p class=\"category_getFree-text\">Получите бесплатные образцы ткани, чтобы убедиться в цвете и качестве
                    материала.
                    <a class=\"category_getFree-link\">Оставить заявку</a></p>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"category_underCategories\">
                ";
        // line 23
        if (($context["categories"] ?? null)) {
            // line 24
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "                        <li class=\"category_underCategories-item\">
                            <a class=\"category_underCategories-link\" href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 26);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 28), "webp", [], "any", false, false, false, 28);
                echo "\">
                                    <img class=\"category_underCategories-img\" src=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 29), "default", [], "any", false, false, false, 29);
                echo "\"
                                         loading=\"lazy\">
                                </picture>
                                <span>";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
                echo "</span>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                ";
        }
        // line 37
        echo "            </div>
        </div>
        <div class=\"container\">
            <div id=\"content\" class=\"category_block\">
                <div class=\"category_other\">
                    <div class=\"category_other-choice\">
                        Как выбрать ткань?
                    </div>
                    ";
        // line 45
        if (($context["categories"] ?? null)) {
            // line 46
            echo "                        <div class=\"category_other-underCategories\">
                            <a class=\"category_other-underCategories_toMainCategory\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                </svg>
                                <span>";
            // line 51
            echo ($context["heading_title"] ?? null);
            echo "</span>
                            </a>
                            <ul class=\"category_other-underCategories_list\">
                                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 55
                echo "                                    <li class=\"category_other-underCategories_item\">
                                        <a class=\"category_other-underCategories_link\"
                                           href=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 57);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 57);
                echo "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 63
        echo "                    <div class=\"category_other-filter\">
                        filter
                        <button class=\"btn btn-second\">Сбросить все</button>
                    </div>
                </div>
                <div class=\"category_main\">
                    ";
        // line 69
        if (($context["products"] ?? null)) {
            // line 70
            echo "                        <div class=\"category_main-controls\">
                            <div class=\"category_main-controls_sort\">
                                ";
            // line 73
            echo "                                ";
            // line 74
            echo "                                ";
            // line 75
            echo "                                ";
            // line 76
            echo "                                ";
            // line 77
            echo "                                ";
            // line 78
            echo "                                ";
            // line 79
            echo "                                ";
            // line 80
            echo "                                ";
            // line 81
            echo "                                ";
            // line 82
            echo "                                ";
            // line 83
            echo "                                <p>";
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
            // line 115
            echo ($context["button_grid"] ?? null);
            echo "\">
                                    <svg class=\"\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <use xlink:href=\"/sprite.svg#icon_square\"></use>
                                    </svg>
                                </button>
                                <button type=\"button\" id=\"list-view\"
                                        data-toggle=\"tooltip\"
                                        title=\"";
            // line 122
            echo ($context["button_list"] ?? null);
            echo "\">
                                    <svg class=\"\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <use xlink:href=\"/sprite.svg#icon_list\"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class=\"category_main-products\">
                            <div class=\"products_grid\">
                                ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 132
                echo "                                    <a class=\"products_grid-item\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 132);
                echo "\">
                                        <div class=\"products_grid-thumb\">
                                            <div class=\"products_grid-block\">
                                                <picture>
                                                    <source srcset=\"";
                // line 136
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 136), "webp", [], "any", false, false, false, 136);
                echo "\">
                                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 137);
                echo "\"
                                                         title=\"";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 138);
                echo "\"
                                                         src=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 139), "default", [], "any", false, false, false, 139);
                echo "\" loading=\"lazy\">
                                                </picture>
                                                <p class=\"products_grid-price\">
                                                    ";
                // line 142
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "                                                        <span
                                                                class=\"price-new\">";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 144);
                    echo "</span>
                                                    ";
                } else {
                    // line 146
                    echo "                                                        <span
                                                                class=\"price-new\">";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 147);
                    echo "</span>
                                                        <span
                                                                class=\"price-old\">";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 149);
                    echo "</span>
                                                        <span class=\"price-percent\">";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 150);
                    echo "</span>
                                                    ";
                }
                // line 152
                echo "                                                </p>
                                            </div>
                                            <h4 class=\"products_grid-title\">";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 154);
                echo "</h4>
                                            <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                                    title=\"";
                // line 156
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                                                    onclick=\"wishlist.add('";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
                echo "');\">
                                                <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                                </svg>
                                            </button>
                                            ";
                // line 163
                echo "                                            ";
                // line 164
                echo "
                                            ";
                // line 166
                echo "                                            ";
                // line 167
                echo "                                            ";
                // line 168
                echo "                                            ";
                // line 169
                echo "                                            ";
                // line 170
                echo "                                            ";
                // line 171
                echo "                                            ";
                // line 172
                echo "                                            ";
                // line 173
                echo "                                            ";
                // line 174
                echo "                                            ";
                // line 175
                echo "                                            ";
                // line 176
                echo "                                            ";
                // line 177
                echo "                                            ";
                // line 178
                echo "                                            ";
                // line 179
                echo "                                            ";
                // line 180
                echo "                                            ";
                // line 181
                echo "                                            ";
                // line 182
                echo "                                            ";
                // line 183
                echo "                                            ";
                // line 184
                echo "                                            ";
                // line 185
                echo "                                            ";
                // line 186
                echo "                                            ";
                // line 187
                echo "                                            ";
                // line 188
                echo "                                            ";
                // line 189
                echo "                                            ";
                // line 190
                echo "                                            ";
                // line 191
                echo "                                            ";
                // line 192
                echo "                                            ";
                // line 193
                echo "                                            ";
                // line 194
                echo "                                        </div>
                                    </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                            </div>
                        </div>
                    ";
        }
        // line 200
        echo "                    ";
        if (($context["pagination"] ?? null)) {
            // line 201
            echo "                        <div class=\"category-page__more\">
                            <button class=\"btn btn-3 loadmore\" data-loadmore data-items-identy-name=\"product-card\">
                                Показать ещё
                            </button>
                        </div>

                        <div class=\"category_pagination\" data-pagination>
                            ";
            // line 208
            echo ($context["pagination"] ?? null);
            echo "
                        </div>
                    ";
        }
        // line 211
        echo "                </div>
                ";
        // line 212
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 213
            echo "                    <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    <div class=\"buttons\">
                        <div class=\"pull-right\">
                            <a href=\"";
            // line 216
            echo ($context["continue"] ?? null);
            echo "\"
                               class=\"btn btn-primary\">";
            // line 217
            echo ($context["button_continue"] ?? null);
            echo "</a>
                        </div>
                    </div>
                ";
        }
        // line 221
        echo "            </div>
        </div>
        ";
        // line 224
        echo "        ";
        // line 225
        echo "        ";
        // line 226
        echo "        ";
        // line 227
        echo "    </div>
    ";
        // line 228
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 228,  461 => 227,  459 => 226,  457 => 225,  455 => 224,  451 => 221,  444 => 217,  440 => 216,  433 => 213,  431 => 212,  428 => 211,  422 => 208,  413 => 201,  410 => 200,  405 => 197,  397 => 194,  395 => 193,  393 => 192,  391 => 191,  389 => 190,  387 => 189,  385 => 188,  383 => 187,  381 => 186,  379 => 185,  377 => 184,  375 => 183,  373 => 182,  371 => 181,  369 => 180,  367 => 179,  365 => 178,  363 => 177,  361 => 176,  359 => 175,  357 => 174,  355 => 173,  353 => 172,  351 => 171,  349 => 170,  347 => 169,  345 => 168,  343 => 167,  341 => 166,  338 => 164,  336 => 163,  328 => 157,  324 => 156,  319 => 154,  315 => 152,  310 => 150,  306 => 149,  301 => 147,  298 => 146,  293 => 144,  290 => 143,  288 => 142,  282 => 139,  278 => 138,  274 => 137,  270 => 136,  262 => 132,  258 => 131,  246 => 122,  236 => 115,  200 => 83,  198 => 82,  196 => 81,  194 => 80,  192 => 79,  190 => 78,  188 => 77,  186 => 76,  184 => 75,  182 => 74,  180 => 73,  176 => 70,  174 => 69,  166 => 63,  161 => 60,  150 => 57,  146 => 55,  142 => 54,  136 => 51,  129 => 46,  127 => 45,  117 => 37,  114 => 36,  104 => 32,  98 => 29,  94 => 28,  89 => 26,  86 => 25,  81 => 24,  79 => 23,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/category.twig", "");
    }
}
