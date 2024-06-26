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
class __TwigTemplate_19251647499bf407fc982c088e9c4ac0d2acaec5610263a603cc9d2d1ac0948b extends \Twig\Template
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
        <div id=\"content\">
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <label class=\"control-label\" for=\"input-search\">";
        // line 13
        echo ($context["entry_search"] ?? null);
        echo "</label>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <input type=\"text\" name=\"search\" value=\"";
        // line 16
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\"
                           id=\"input-search\" class=\"form-control\"/>
                </div>
                <div class=\"col-sm-3\">
                    <select name=\"category_id\" class=\"form-control\">
                        <option value=\"0\">";
        // line 21
        echo ($context["text_category"] ?? null);
        echo "</option>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 23
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 23) == ($context["category_id"] ?? null))) {
                // line 24
                echo "                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 24);
                echo "\"
                                        selected=\"selected\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 25);
                echo "</option>
                            ";
            } else {
                // line 27
                echo "                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 27);
                echo "</option>
                            ";
            }
            // line 29
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 30
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 30) == ($context["category_id"] ?? null))) {
                    // line 31
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 31);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 31);
                    echo "</option>
                                ";
                } else {
                    // line 33
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 33);
                    echo "\">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 34);
                    echo "</option>
                                ";
                }
                // line 36
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 37
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 37) == ($context["category_id"] ?? null))) {
                        // line 38
                        echo "                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 38);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 38);
                        echo "</option>
                                    ";
                    } else {
                        // line 40
                        echo "                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 40);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 40);
                        echo "</option>
                                    ";
                    }
                    // line 42
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </select>
                </div>
                <div class=\"col-sm-3\">
                    <label class=\"checkbox-inline\">
                        ";
        // line 49
        if (($context["sub_category"] ?? null)) {
            // line 50
            echo "                            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\"/>
                        ";
        } else {
            // line 52
            echo "                            <input type=\"checkbox\" name=\"sub_category\" value=\"1\"/>
                        ";
        }
        // line 54
        echo "                        ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
                </div>
            </div>
            <p>
                <label class=\"checkbox-inline\">
                    ";
        // line 59
        if (($context["description"] ?? null)) {
            // line 60
            echo "                        <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\"/>
                    ";
        } else {
            // line 62
            echo "                        <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\"/>
                    ";
        }
        // line 64
        echo "                    ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
            </p>
            <input type=\"button\" value=\"";
        // line 66
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"/>
            <h2>";
        // line 67
        echo ($context["text_search"] ?? null);
        echo "</h2>
            ";
        // line 68
        if (($context["products"] ?? null)) {
            // line 69
            echo "                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-6 hidden-xs\">
                        <div class=\"btn-group btn-group-sm\">
                            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
                                    title=\"";
            // line 73
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
                            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
                                    title=\"";
            // line 75
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"form-group\">
                            <a href=\"";
            // line 80
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <div class=\"form-group input-group input-group-sm\">
                            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 85
            echo ($context["text_sort"] ?? null);
            echo "</label>
                            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                                ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 88
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 88) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 89
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 89);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 89);
                    echo "</option>
                                    ";
                } else {
                    // line 91
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 91);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 91);
                    echo "</option>
                                    ";
                }
                // line 93
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-xs-6\">
                        <div class=\"form-group input-group input-group-sm\">
                            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 99
            echo ($context["text_limit"] ?? null);
            echo "</label>
                            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 102
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 102) == ($context["limit"] ?? null))) {
                    // line 103
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 103);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 103);
                    echo "</option>
                                    ";
                } else {
                    // line 105
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 105);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 105);
                    echo "</option>
                                    ";
                }
                // line 107
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 114
                echo "                        <div class=\"product-layout product-list col-xs-12\">
                            <div class=\"product-thumb\">
                                <div class=\"image\"><a href=\"";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 116);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 116);
                echo "\"
                                                                                     alt=\"";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 117);
                echo "\"
                                                                                     title=\"";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 118);
                echo "\"
                                                                                     class=\"img-responsive\"/></a></div>
                                <div>
                                    <div class=\"caption\">
                                        <h4><a href=\"";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 122);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 122);
                echo "</a></h4>
                                        <p>";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 123);
                echo "</p>
                                        ";
                // line 124
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 124)) {
                    // line 125
                    echo "                                            <p class=\"price\">
                                                ";
                    // line 126
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 126)) {
                        // line 127
                        echo "                                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 127);
                        echo "
                                                ";
                    } else {
                        // line 129
                        echo "                                                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 129);
                        echo "</span> <span
                                                        class=\"price-old\">";
                        // line 130
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 130);
                        echo "</span>
                                                ";
                    }
                    // line 132
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 132)) {
                        // line 133
                        echo "                                                    <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 133);
                        echo "</span>
                                                ";
                    }
                    // line 135
                    echo "                                            </p>
                                        ";
                }
                // line 137
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "                                            <div class=\"rating\">
                                                ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 140
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 140) < $context["i"])) {
                            // line 141
                            echo "                                                        <span class=\"fa fa-stack\"><i
                                                                    class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                    ";
                        } else {
                            // line 144
                            echo "                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                                                    class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                    ";
                        }
                        // line 147
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "                                            </div>
                                        ";
                }
                // line 150
                echo "                                    </div>
                                    <div class=\"button-group\">
                                        <button type=\"button\"
                                                onclick=\"cart.add('";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 153);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 153);
                echo "');\">
                                            <i class=\"fa fa-shopping-cart\"></i> <span
                                                    class=\"hidden-xs hidden-sm hidden-md\">";
                // line 155
                echo ($context["button_cart"] ?? null);
                echo "</span>
                                        </button>
                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 157
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                                                onclick=\"wishlist.add('";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 158);
                echo "');\"><i
                                                    class=\"fa fa-heart\"></i></button>
                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 160
                echo ($context["button_compare"] ?? null);
                echo "\"
                                                onclick=\"compare.add('";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 161);
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
            // line 168
            echo "                </div>
                <div class=\"row\">
                    <div class=\"col-sm-8 text-left\">";
            // line 170
            echo ($context["pagination"] ?? null);
            echo "</div>
                    <div class=\"col-sm-4 text-right\">";
            // line 171
            echo ($context["results"] ?? null);
            echo "</div>
                </div>
            ";
        } else {
            // line 174
            echo "                <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            ";
        }
        // line 176
        echo "        </div>
    </div>
    ";
        // line 179
        echo "    ";
        // line 180
        echo "    ";
        // line 181
        echo "    ";
        // line 182
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
        // line 230
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
        return array (  573 => 230,  523 => 182,  521 => 181,  519 => 180,  517 => 179,  513 => 176,  507 => 174,  501 => 171,  497 => 170,  493 => 168,  480 => 161,  476 => 160,  471 => 158,  467 => 157,  462 => 155,  455 => 153,  450 => 150,  446 => 148,  440 => 147,  435 => 144,  430 => 141,  427 => 140,  423 => 139,  420 => 138,  417 => 137,  413 => 135,  405 => 133,  402 => 132,  397 => 130,  392 => 129,  386 => 127,  384 => 126,  381 => 125,  379 => 124,  375 => 123,  369 => 122,  362 => 118,  358 => 117,  352 => 116,  348 => 114,  344 => 113,  337 => 108,  331 => 107,  323 => 105,  315 => 103,  312 => 102,  308 => 101,  303 => 99,  296 => 94,  290 => 93,  282 => 91,  274 => 89,  271 => 88,  267 => 87,  262 => 85,  252 => 80,  244 => 75,  239 => 73,  233 => 69,  231 => 68,  227 => 67,  223 => 66,  217 => 64,  213 => 62,  209 => 60,  207 => 59,  198 => 54,  194 => 52,  190 => 50,  188 => 49,  182 => 45,  176 => 44,  170 => 43,  164 => 42,  156 => 40,  148 => 38,  145 => 37,  140 => 36,  135 => 34,  130 => 33,  122 => 31,  119 => 30,  114 => 29,  106 => 27,  101 => 25,  96 => 24,  93 => 23,  89 => 22,  85 => 21,  75 => 16,  69 => 13,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/search.twig", "");
    }
}
