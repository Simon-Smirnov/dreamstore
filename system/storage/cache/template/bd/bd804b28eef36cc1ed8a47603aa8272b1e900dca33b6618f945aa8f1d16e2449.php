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
class __TwigTemplate_df4d47edbc9c110f9c480a3180dbd9ef07e805ed98def833d05223c73c93e972 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"miniCart\">
    <a href=\"/cart\">
        <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
            <use xlink:href=\"/sprite.svg#icon_basket\"></use>
        </svg>
        <span id=\"cart-total\">";
        // line 6
        echo ($context["text_items"] ?? null);
        echo "</span>
    </a>
    <div class=\"miniCart-dropDawn\">
        ";
        // line 9
        if (($context["products"] ?? null)) {
            // line 10
            echo "            <div class=\"miniCart-products\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "                    <div class=\"miniCart-product\">
                        <div class=\"miniCart-product__img\">
                            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                    echo "\"
                                     title=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                    echo "\" class=\"img-thumbnail\"/>
                            ";
                }
                // line 18
                echo "                        </div>
                        <div class=\"miniCart-product__block\">
                            <div class=\"miniCart-product__name\">
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
                echo "                            </div>
                            <div class=\"miniCart-product__control\">
                                <div class=\"miniCart-product__input\">
                                    ";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 33);
                echo "
                                </div>
                                <div class=\"miniCart-product__total\">
                                    ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 36);
                echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"miniCart-product__remove\">
                            <button type=\"button\" onclick=\"cart.remove('";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 41);
                echo "');\"
                                    title=\"";
                // line 42
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\">
                                <svg class=\"miniCart-product__svg\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_trash\"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </div>
            <li>
                <div>
                    <table class=\"table table-bordered\">
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 55
                echo "                            <tr>
                                <td class=\"text-right\">
                                    <strong>";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 57);
                echo "</strong>
                                </td>
                                <td class=\"text-right\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 59);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    </table>
                    <p class=\"text-right\">
                        <a href=\"";
            // line 64
            echo ($context["cart"] ?? null);
            echo "\">
                            <strong>
                                <i class=\"fa fa-shopping-cart\"></i>
                                ";
            // line 67
            echo ($context["text_cart"] ?? null);
            echo "</strong>
                        </a>&nbsp;&nbsp;&nbsp;<a href=\"";
            // line 68
            echo ($context["checkout"] ?? null);
            echo "\">
                            <strong>
                                <i class=\"fa fa-share\"></i>
                                ";
            // line 71
            echo ($context["text_checkout"] ?? null);
            echo "</strong>
                        </a>
                    </p>
                </div>
            </li>
        ";
        } else {
            // line 77
            echo "            <li>
                <p class=\"text-center\">";
            // line 78
            echo ($context["text_empty"] ?? null);
            echo "</p>
            </li>
        ";
        }
        // line 81
        echo "    </div>
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
        return array (  217 => 81,  211 => 78,  208 => 77,  199 => 71,  193 => 68,  189 => 67,  183 => 64,  179 => 62,  170 => 59,  165 => 57,  161 => 55,  157 => 54,  151 => 50,  137 => 42,  133 => 41,  125 => 36,  119 => 33,  114 => 30,  111 => 29,  103 => 27,  99 => 26,  95 => 24,  90 => 23,  88 => 22,  82 => 21,  77 => 18,  72 => 16,  65 => 15,  63 => 14,  59 => 12,  55 => 11,  52 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/cart.twig", "");
    }
}
