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

/* dreamsstore/template/checkout/cart.twig */
class __TwigTemplate_a0e9c18040cc6358dc78e5777e387d90bb5104e53d0ecc1626f5f73e87688e51 extends \Twig\Template
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
<div id=\"checkout-cart\" class=\"container\">
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
    ";
        // line 10
        if (($context["attention"] ?? null)) {
            // line 11
            echo "        <div class=\"alert warning\">";
            echo ($context["attention"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 15
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 16
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 20
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 25
        echo "    <div class=\"row\">
        <div id=\"content\" class=\"";
        // line 26
        echo ($context["class"] ?? null);
        echo "\">
            <h1>";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "
                ";
        // line 28
        if (($context["weight"] ?? null)) {
            // line 29
            echo "                    &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
                ";
        }
        // line 30
        echo " </h1>
            <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <td class=\"text-center\">";
        // line 36
        echo ($context["column_image"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 37
        echo ($context["column_name"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 38
        echo ($context["column_model"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 39
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 40
        echo ($context["column_price"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 41
        echo ($context["column_total"] ?? null);
        echo "</td>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 47
            echo "                            <tr>
                                <td class=\"text-center\">";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 48)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
                echo "\"><img
                                                src=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                echo "\"
                                                title=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
                                <td class=\"text-left\"><a
                                            href=\"";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 52)) {
                // line 53
                echo "                                        <span class=\"text-danger\">***</span> ";
            }
            // line 54
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 54)) {
                // line 55
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                                            <small>";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 56);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 56);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                                    ";
            }
            // line 58
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 58)) {
                echo " <br/>
                                        <small>";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 59);
                echo "</small> ";
            }
            // line 60
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 60)) {
                echo " <br/>
                                        <span class=\"label label-info\">";
                // line 61
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
                                        <small>";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 62);
                echo "</small> ";
            }
            echo "</td>
                                <td class=\"text-left\">";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 63);
            echo "</td>
                                <td class=\"text-left\">
                                    <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                        <input type=\"text\" name=\"quantity[";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 66);
            echo "]\"
                                               value=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 67);
            echo "\" size=\"1\" class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 69
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i
                              class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 71
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"
                          onclick=\"cart.remove('";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 72);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                                </td>
                                <td class=\"text-right\">";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 75);
            echo "</td>
                                <td class=\"text-right\">";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 76);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 80
            echo "                            <tr>
                                <td></td>
                                <td class=\"text-left\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 82);
            echo "</td>
                                <td class=\"text-left\"></td>
                                <td class=\"text-left\">
                                    <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                        <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 89
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"
                          onclick=\"voucher.remove('";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 90);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                                </td>
                                <td class=\"text-right\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 93);
            echo "</td>
                                <td class=\"text-right\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 94);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                        </tbody>

                    </table>
                </div>
            </form>
            ";
        // line 102
        if (($context["modules"] ?? null)) {
            // line 103
            echo "                <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
                <p>";
            // line 104
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
                <div class=\"panel-group\" id=\"accordion\"> ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 106
                echo "                        ";
                echo $context["module"];
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo " </div>
            ";
        }
        // line 108
        echo " <br/>
            <div class=\"row\">
                <div class=\"col-sm-4 col-sm-offset-8\">
                    <table class=\"table table-bordered\">
                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 113
            echo "                            <tr>
                                <td class=\"text-right\"><strong>";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 114);
            echo ":</strong></td>
                                <td class=\"text-right\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 115);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                    </table>
                </div>
            </div>
            <div class=\"buttons clearfix\">
                <div class=\"pull-left\"><a href=\"";
        // line 122
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
                <div class=\"pull-right\"><a href=\"";
        // line 123
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
            </div>
        </div>
    </div>
    ";
        // line 128
        echo "    ";
        // line 129
        echo "    ";
        // line 130
        echo "    ";
        // line 131
        echo "</div>
";
        // line 132
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 132,  407 => 131,  405 => 130,  403 => 129,  401 => 128,  392 => 123,  386 => 122,  380 => 118,  371 => 115,  367 => 114,  364 => 113,  360 => 112,  354 => 108,  350 => 107,  341 => 106,  337 => 105,  333 => 104,  328 => 103,  326 => 102,  319 => 97,  310 => 94,  306 => 93,  300 => 90,  296 => 89,  286 => 82,  282 => 80,  277 => 79,  268 => 76,  264 => 75,  258 => 72,  254 => 71,  249 => 69,  244 => 67,  240 => 66,  234 => 63,  228 => 62,  224 => 61,  219 => 60,  215 => 59,  210 => 58,  207 => 57,  198 => 56,  191 => 55,  188 => 54,  185 => 53,  179 => 52,  172 => 50,  166 => 49,  160 => 48,  157 => 47,  153 => 46,  145 => 41,  141 => 40,  137 => 39,  133 => 38,  129 => 37,  125 => 36,  117 => 31,  114 => 30,  108 => 29,  106 => 28,  102 => 27,  98 => 26,  95 => 25,  87 => 21,  84 => 20,  76 => 16,  73 => 15,  65 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/checkout/cart.twig", "");
    }
}
