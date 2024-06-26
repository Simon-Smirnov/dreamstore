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
class __TwigTemplate_c2c076a123550136bd706008bc278823453dc66c627c90907ff12cb3ea8bc4e9 extends \Twig\Template
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
                    echo "                                <picture>
                                    <source srcset=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16), "webp", [], "any", false, false, false, 16);
                    echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    echo "\"
                                         title=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\"
                                         src=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19), "default", [], "any", false, false, false, 19);
                    echo "\" loading=\"lazy\">
                                </picture>
                            ";
                }
                // line 22
                echo "                        </div>
                        <div class=\"miniCart-product__block\">
                            <div class=\"miniCart-product__name\">
                                <a href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "</a>
                                ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 28
                        echo "                                        <br/>
                                        -
                                        <small>";
                        // line 30
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 30);
                        echo "
                                            ";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 31);
                        echo "</small>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                                ";
                }
                // line 34
                echo "                            </div>
                            <div class=\"miniCart-product__control\">
                                <div class=\"miniCart-product__input\">
                                    ";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37);
                echo "
                                </div>
                                <div class=\"miniCart-product__total\">
                                    ";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 40);
                echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"miniCart-product__remove\">
                            <button type=\"button\" onclick=\"cart.remove('";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 45);
                echo "');\"
                                    title=\"";
                // line 46
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
            // line 54
            echo "            </div>
            <div>
                <table class=\"table table-bordered\">
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 58
                echo "                        <tr>
                            <td class=\"text-right\">
                                <strong>";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 60);
                echo "</strong>
                            </td>
                            <td class=\"text-right\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 62);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                </table>
                <p class=\"text-right\">
                    <a href=\"";
            // line 67
            echo ($context["cart"] ?? null);
            echo "\">
                        <strong>
                            <i class=\"fa fa-shopping-cart\"></i>
                            ";
            // line 70
            echo ($context["text_cart"] ?? null);
            echo "</strong>
                    </a>&nbsp;&nbsp;&nbsp;<a href=\"";
            // line 71
            echo ($context["checkout"] ?? null);
            echo "\">
                        <strong>
                            <i class=\"fa fa-share\"></i>
                            ";
            // line 74
            echo ($context["text_checkout"] ?? null);
            echo "</strong>
                    </a>
                </p>
            </div>
        ";
        } else {
            // line 79
            echo "            <div>
                <p class=\"text-center\">";
            // line 80
            echo ($context["text_empty"] ?? null);
            echo "</p>
            </div>
        ";
        }
        // line 83
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
        return array (  224 => 83,  218 => 80,  215 => 79,  207 => 74,  201 => 71,  197 => 70,  191 => 67,  187 => 65,  178 => 62,  173 => 60,  169 => 58,  165 => 57,  160 => 54,  146 => 46,  142 => 45,  134 => 40,  128 => 37,  123 => 34,  120 => 33,  112 => 31,  108 => 30,  104 => 28,  99 => 27,  97 => 26,  91 => 25,  86 => 22,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  65 => 15,  63 => 14,  59 => 12,  55 => 11,  52 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/cart.twig", "");
    }
}
