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
class __TwigTemplate_c9606ec5377ee1c0e5c72750a59c6368fc734763300a2054725291dbd9df961f extends \Twig\Template
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
<div id=\"checkout-cart\">
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
            echo "        <div class=\"alert notify\">";
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
            echo "        <div class=\"alert success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
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
            echo "        <div class=\"alert error alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 25
        echo "    <div class=\"container\">
        <div id=\"content\" class=\"cart\">
            <h1 class=\"page-title\">";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <td class=\"text-center\">";
        // line 33
        echo ($context["column_image"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 34
        echo ($context["column_name"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 35
        echo ($context["column_model"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 36
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 37
        echo ($context["column_price"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 38
        echo ($context["column_total"] ?? null);
        echo "</td>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "                            <tr>
                                <td class=\"text-center\">";
            // line 45
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 45)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 45);
                echo "\"><img
                                                src=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 46);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
                echo "\"
                                                title=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
                                <td class=\"text-left\"><a
                                            href=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 49);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 49)) {
                // line 50
                echo "                                        <span class=\"text-danger\">***</span> ";
            }
            // line 51
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 51)) {
                // line 52
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 52));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                                            <small>";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 53);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 53);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                                    ";
            }
            // line 55
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 55)) {
                echo " <br/>
                                        <small>";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 56);
                echo "</small> ";
            }
            // line 57
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 57)) {
                echo " <br/>
                                        <span class=\"label label-info\">";
                // line 58
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
                                        <small>";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 59);
                echo "</small> ";
            }
            echo "</td>
                                <td class=\"text-left\">";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 60);
            echo "</td>
                                <td class=\"text-left\">
                                    <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                        <input type=\"text\" name=\"quantity[";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 63);
            echo "]\"
                                               value=\"";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 64);
            echo "\" size=\"1\" class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 66
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i
                              class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 68
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"
                          onclick=\"cart.remove('";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 69);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                                </td>
                                <td class=\"text-right\">";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72);
            echo "</td>
                                <td class=\"text-right\">";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 73);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 77
            echo "                            <tr>
                                <td></td>
                                <td class=\"text-left\">";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 79);
            echo "</td>
                                <td class=\"text-left\"></td>
                                <td class=\"text-left\">
                                    <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                        <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 86
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"
                          onclick=\"voucher.remove('";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 87);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                                </td>
                                <td class=\"text-right\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 90);
            echo "</td>
                                <td class=\"text-right\">";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 91);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                        </tbody>

                    </table>
                </div>
            </form>
            ";
        // line 99
        if (($context["modules"] ?? null)) {
            // line 100
            echo "                <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
                <p>";
            // line 101
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
                <div class=\"panel-group\" id=\"accordion\"> ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 103
                echo "                        ";
                echo $context["module"];
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo " </div>
            ";
        }
        // line 105
        echo " <br/>
            <div class=\"row\">
                <div class=\"col-sm-4 col-sm-offset-8\">
                    <table class=\"table table-bordered\">
                        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 110
            echo "                            <tr>
                                <td class=\"text-right\"><strong>";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 111);
            echo ":</strong></td>
                                <td class=\"text-right\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 112);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                    </table>
                </div>
            </div>
            <div class=\"buttons clearfix\">
                <div class=\"pull-left\"><a href=\"";
        // line 119
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
                <div class=\"pull-right\"><a href=\"";
        // line 120
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
            </div>
        </div>
    </div>
    ";
        // line 125
        echo "    ";
        // line 126
        echo "    ";
        // line 127
        echo "    ";
        // line 128
        echo "</div>
";
        // line 129
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
        return array (  396 => 129,  393 => 128,  391 => 127,  389 => 126,  387 => 125,  378 => 120,  372 => 119,  366 => 115,  357 => 112,  353 => 111,  350 => 110,  346 => 109,  340 => 105,  336 => 104,  327 => 103,  323 => 102,  319 => 101,  314 => 100,  312 => 99,  305 => 94,  296 => 91,  292 => 90,  286 => 87,  282 => 86,  272 => 79,  268 => 77,  263 => 76,  254 => 73,  250 => 72,  244 => 69,  240 => 68,  235 => 66,  230 => 64,  226 => 63,  220 => 60,  214 => 59,  210 => 58,  205 => 57,  201 => 56,  196 => 55,  193 => 54,  184 => 53,  177 => 52,  174 => 51,  171 => 50,  165 => 49,  158 => 47,  152 => 46,  146 => 45,  143 => 44,  139 => 43,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  103 => 28,  99 => 27,  95 => 25,  87 => 21,  84 => 20,  76 => 16,  73 => 15,  65 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/checkout/cart.twig", "");
    }
}
