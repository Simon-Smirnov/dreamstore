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

/* dreamsstore/template/common/cart.twig */
class __TwigTemplate_cc0fb20cde48162279bb93fee12781b28073b2cdd1ab0cb2ad76bdaf0d53bf8e extends \Twig\Template
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
        echo "<div id=\"cart\">
    <a>
        <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
            <use xlink:href=\"/sprite.svg#icon_basket\"></use>
        </svg>
        <span id=\"cart-total\">";
        // line 6
        echo ($context["text_items"] ?? null);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu pull-right\">
        ";
        // line 9
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 10
            echo "            <li>
                <table class=\"table table-striped\">
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 13
                echo "                        <tr>
                            <td class=\"text-center\">
                                ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                    echo "\"
                                                                      title=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    echo "\" class=\"img-thumbnail\"/></a>
                                ";
                }
                // line 19
                echo "                            </td>
                            <td class=\"text-left\">
                                <a href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                echo "</a>
                                ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 24
                        echo "                                        <br/>
                                        -
                                        <small>";
                        // line 26
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 26);
                        echo "
                                            ";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 27);
                        echo "</small>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                                ";
                }
                // line 30
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                                    <br/>
                                    -
                                    <small>";
                    // line 33
                    echo ($context["text_recurring"] ?? null);
                    echo "
                                        ";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 34);
                    echo "</small>
                                ";
                }
                // line 36
                echo "                            </td>
                            <td class=\"text-right\">x
                                ";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38);
                echo "</td>
                            <td class=\"text-right\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 39);
                echo "</td>
                            <td class=\"text-center\">
                                <button type=\"button\" onclick=\"cart.remove('";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 41);
                echo "');\"
                                        title=\"";
                // line 42
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\">
                                    <i class=\"fa fa-times\"></i>
                                </button>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 49
                echo "                        <tr>
                            <td class=\"text-center\"></td>
                            <td class=\"text-left\">";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 51);
                echo "</td>
                            <td class=\"text-right\">x&nbsp;1</td>
                            <td class=\"text-right\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 53);
                echo "</td>
                            <td class=\"text-center text-danger\">
                                <button type=\"button\" onclick=\"voucher.remove('";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 55);
                echo "');\"
                                        title=\"";
                // line 56
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\">
                                    <i class=\"fa fa-times\"></i>
                                </button>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                </table>
            </li>
            <li>
                <div>
                    <table class=\"table table-bordered\">
                        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 68
                echo "                            <tr>
                                <td class=\"text-right\">
                                    <strong>";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 70);
                echo "</strong>
                                </td>
                                <td class=\"text-right\">";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 72);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    </table>
                    <p class=\"text-right\">
                        <a href=\"";
            // line 77
            echo ($context["cart"] ?? null);
            echo "\">
                            <strong>
                                <i class=\"fa fa-shopping-cart\"></i>
                                ";
            // line 80
            echo ($context["text_cart"] ?? null);
            echo "</strong>
                        </a>&nbsp;&nbsp;&nbsp;<a href=\"";
            // line 81
            echo ($context["checkout"] ?? null);
            echo "\">
                            <strong>
                                <i class=\"fa fa-share\"></i>
                                ";
            // line 84
            echo ($context["text_checkout"] ?? null);
            echo "</strong>
                        </a>
                    </p>
                </div>
            </li>
        ";
        } else {
            // line 90
            echo "            <li>
                <p class=\"text-center\">";
            // line 91
            echo ($context["text_empty"] ?? null);
            echo "</p>
            </li>
        ";
        }
        // line 94
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 94,  257 => 91,  254 => 90,  245 => 84,  239 => 81,  235 => 80,  229 => 77,  225 => 75,  216 => 72,  211 => 70,  207 => 68,  203 => 67,  196 => 62,  184 => 56,  180 => 55,  175 => 53,  170 => 51,  166 => 49,  161 => 48,  149 => 42,  145 => 41,  140 => 39,  136 => 38,  132 => 36,  127 => 34,  123 => 33,  119 => 31,  116 => 30,  113 => 29,  105 => 27,  101 => 26,  97 => 24,  92 => 23,  90 => 22,  84 => 21,  80 => 19,  75 => 17,  66 => 16,  64 => 15,  60 => 13,  56 => 12,  52 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/cart.twig", "");
    }
}
