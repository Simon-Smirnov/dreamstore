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
class __TwigTemplate_8945eced615baf37ae35765a853d59ae84f167ca7d1a928aabd7a5a729c08ae1 extends \Twig\Template
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
            ";
        // line 14
        echo "            <input class=\"input-text\" type=\"text\" name=\"search\" value=\"";
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\"
                   id=\"input-search\" class=\"form-control\"/>


            <div class=\"row\">
                <div class=\"col-sm-4\">

                </div>
                <div class=\"col-sm-3\">
                    <select name=\"category_id\" class=\"form-control\">
                        <option value=\"0\">";
        // line 24
        echo ($context["text_category"] ?? null);
        echo "</option>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 26
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 26) == ($context["category_id"] ?? null))) {
                // line 27
                echo "                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 27);
                echo "\"
                                        selected=\"selected\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 28);
                echo "</option>
                            ";
            } else {
                // line 30
                echo "                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 30);
                echo "</option>
                            ";
            }
            // line 32
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 33
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 33) == ($context["category_id"] ?? null))) {
                    // line 34
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 34);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 34);
                    echo "</option>
                                ";
                } else {
                    // line 36
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 36);
                    echo "\">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 37);
                    echo "</option>
                                ";
                }
                // line 39
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 40
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 40) == ($context["category_id"] ?? null))) {
                        // line 41
                        echo "                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 41);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 41);
                        echo "</option>
                                    ";
                    } else {
                        // line 43
                        echo "                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 43);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 43);
                        echo "</option>
                                    ";
                    }
                    // line 45
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </select>
                </div>
                <div class=\"col-sm-3\">
                    <label class=\"checkbox-inline\">
                        ";
        // line 52
        if (($context["sub_category"] ?? null)) {
            // line 53
            echo "                            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\"/>
                        ";
        } else {
            // line 55
            echo "                            <input type=\"checkbox\" name=\"sub_category\" value=\"1\"/>
                        ";
        }
        // line 57
        echo "                        ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
                </div>
            </div>
            <p>
                <label class=\"checkbox-inline\">
                    ";
        // line 62
        if (($context["description"] ?? null)) {
            // line 63
            echo "                        <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\"/>
                    ";
        } else {
            // line 65
            echo "                        <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\"/>
                    ";
        }
        // line 67
        echo "                    ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
            </p>
            <input type=\"button\" value=\"";
        // line 69
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"/>
            <h2>";
        // line 70
        echo ($context["text_search"] ?? null);
        echo "</h2>
            ";
        // line 71
        if (($context["products"] ?? null)) {
            // line 72
            echo "                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-6 hidden-xs\">
                        <div class=\"btn-group btn-group-sm\">
                            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
                                    title=\"";
            // line 76
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
                            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
                                    title=\"";
            // line 78
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"form-group\">
                            <a href=\"";
            // line 83
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <div class=\"form-group input-group input-group-sm\">
                            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 88
            echo ($context["text_sort"] ?? null);
            echo "</label>
                            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 91
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 91) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 92
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 92);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 92);
                    echo "</option>
                                    ";
                } else {
                    // line 94
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 94);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 94);
                    echo "</option>
                                    ";
                }
                // line 96
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-xs-6\">
                        <div class=\"form-group input-group input-group-sm\">
                            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 102
            echo ($context["text_limit"] ?? null);
            echo "</label>
                            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 105
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 105) == ($context["limit"] ?? null))) {
                    // line 106
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 106);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 106);
                    echo "</option>
                                    ";
                } else {
                    // line 108
                    echo "                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 108);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 108);
                    echo "</option>
                                    ";
                }
                // line 110
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 117
                echo "                        <div class=\"product-layout product-list col-xs-12\">
                            <div class=\"product-thumb\">
                                <div class=\"image\"><a href=\"";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 119);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 119);
                echo "\"
                                                                                     alt=\"";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 120);
                echo "\"
                                                                                     title=\"";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 121);
                echo "\"
                                                                                     class=\"img-responsive\"/></a></div>
                                <div>
                                    <div class=\"caption\">
                                        <h4><a href=\"";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 125);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 125);
                echo "</a></h4>
                                        <p>";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 126);
                echo "</p>
                                        ";
                // line 127
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 127)) {
                    // line 128
                    echo "                                            <p class=\"price\">
                                                ";
                    // line 129
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 129)) {
                        // line 130
                        echo "                                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 130);
                        echo "
                                                ";
                    } else {
                        // line 132
                        echo "                                                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 132);
                        echo "</span> <span
                                                        class=\"price-old\">";
                        // line 133
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 133);
                        echo "</span>
                                                ";
                    }
                    // line 135
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 135)) {
                        // line 136
                        echo "                                                    <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 136);
                        echo "</span>
                                                ";
                    }
                    // line 138
                    echo "                                            </p>
                                        ";
                }
                // line 140
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 140)) {
                    // line 141
                    echo "                                            <div class=\"rating\">
                                                ";
                    // line 142
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 143
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 143) < $context["i"])) {
                            // line 144
                            echo "                                                        <span class=\"fa fa-stack\"><i
                                                                    class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                    ";
                        } else {
                            // line 147
                            echo "                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                                                    class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                    ";
                        }
                        // line 150
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                                            </div>
                                        ";
                }
                // line 153
                echo "                                    </div>
                                    <div class=\"button-group\">
                                        <button type=\"button\"
                                                onclick=\"cart.add('";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 156);
                echo "');\">
                                            <i class=\"fa fa-shopping-cart\"></i> <span
                                                    class=\"hidden-xs hidden-sm hidden-md\">";
                // line 158
                echo ($context["button_cart"] ?? null);
                echo "</span>
                                        </button>
                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 160
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                                                onclick=\"wishlist.add('";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 161);
                echo "');\"><i
                                                    class=\"fa fa-heart\"></i></button>
                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 163
                echo ($context["button_compare"] ?? null);
                echo "\"
                                                onclick=\"compare.add('";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 164);
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
            // line 171
            echo "                </div>
                <div class=\"row\">
                    <div class=\"col-sm-8 text-left\">";
            // line 173
            echo ($context["pagination"] ?? null);
            echo "</div>
                    <div class=\"col-sm-4 text-right\">";
            // line 174
            echo ($context["results"] ?? null);
            echo "</div>
                </div>
            ";
        } else {
            // line 177
            echo "                <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            ";
        }
        // line 179
        echo "        </div>
    </div>
    ";
        // line 182
        echo "    ";
        // line 183
        echo "    ";
        // line 184
        echo "    ";
        // line 185
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
        // line 233
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
        return array (  573 => 233,  523 => 185,  521 => 184,  519 => 183,  517 => 182,  513 => 179,  507 => 177,  501 => 174,  497 => 173,  493 => 171,  480 => 164,  476 => 163,  471 => 161,  467 => 160,  462 => 158,  455 => 156,  450 => 153,  446 => 151,  440 => 150,  435 => 147,  430 => 144,  427 => 143,  423 => 142,  420 => 141,  417 => 140,  413 => 138,  405 => 136,  402 => 135,  397 => 133,  392 => 132,  386 => 130,  384 => 129,  381 => 128,  379 => 127,  375 => 126,  369 => 125,  362 => 121,  358 => 120,  352 => 119,  348 => 117,  344 => 116,  337 => 111,  331 => 110,  323 => 108,  315 => 106,  312 => 105,  308 => 104,  303 => 102,  296 => 97,  290 => 96,  282 => 94,  274 => 92,  271 => 91,  267 => 90,  262 => 88,  252 => 83,  244 => 78,  239 => 76,  233 => 72,  231 => 71,  227 => 70,  223 => 69,  217 => 67,  213 => 65,  209 => 63,  207 => 62,  198 => 57,  194 => 55,  190 => 53,  188 => 52,  182 => 48,  176 => 47,  170 => 46,  164 => 45,  156 => 43,  148 => 41,  145 => 40,  140 => 39,  135 => 37,  130 => 36,  122 => 34,  119 => 33,  114 => 32,  106 => 30,  101 => 28,  96 => 27,  93 => 26,  89 => 25,  85 => 24,  69 => 14,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/search.twig", "");
    }
}
