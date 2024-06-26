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
class __TwigTemplate_95e74e6e97ee922266328c61587a3d82e6d2a54ef318636385ba23da4c34762f extends \Twig\Template
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
                    echo "                                    <ul>
                                        ";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 29
                        echo "                                            <li>- ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 29);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 29);
                        echo "</li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                                    </ul>
                                ";
                }
                // line 33
                echo "                            </div>
                            <div class=\"miniCart-product__control\">
                                <div class=\"miniCart-product__change\">
                                    <div class=\"miniCart-product__set\" data-change=\"minus\">
                                        <svg class=\"miniCart-product__minus\" data-change=\"minus\"
                                             xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg?v=1.0#icon_minus\"></use>
                                        </svg>
                                    </div>
                                    <div class=\"miniCart-product__input\" data-change=\"input\">
                                        ";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43);
                echo "
                                    </div>
                                    <div class=\"miniCart-product__set\" data-change=\"plus\">
                                        <svg class=\"miniCart-product__plus\" data-change=\"plus\"
                                             xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg?v=1.0#icon_plus\"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class=\"miniCart-product__total\">
                                    ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["product"], "with_out_special", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "                                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "with_out_special", [], "any", false, false, false, 54);
                    echo "
                                    ";
                }
                // line 56
                echo "                                    <div class=\"miniCart-product__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 56);
                echo "</div>
                                    <div class=\"miniCart-product__withOutDiscount\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 57);
                echo "</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"miniCart-product__remove\">
                            <button type=\"button\" onclick=\"cart.remove('";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 62);
                echo "');\"
                                    title=\"";
                // line 63
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"\">
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
            // line 71
            echo "            </div>
            <div>
                <table class=\"table table-bordered\">
                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 75
                echo "                        <tr>
                            <td class=\"text-right\">
                                <strong>";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 77);
                echo "</strong>
                            </td>
                            <td class=\"text-right\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 79);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                </table>
                <p class=\"text-right\">
                    <a href=\"";
            // line 84
            echo ($context["cart"] ?? null);
            echo "\">
                        <strong>
                            <i class=\"fa fa-shopping-cart\"></i>
                            ";
            // line 87
            echo ($context["text_cart"] ?? null);
            echo "</strong>
                    </a>&nbsp;&nbsp;&nbsp;<a href=\"";
            // line 88
            echo ($context["checkout"] ?? null);
            echo "\">
                        <strong>
                            <i class=\"fa fa-share\"></i>
                            ";
            // line 91
            echo ($context["text_checkout"] ?? null);
            echo "</strong>
                    </a>
                </p>
            </div>
        ";
        } else {
            // line 96
            echo "            <div>
                <p class=\"text-center\">";
            // line 97
            echo ($context["text_empty"] ?? null);
            echo "</p>
            </div>
        ";
        }
        // line 100
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
        return array (  249 => 100,  243 => 97,  240 => 96,  232 => 91,  226 => 88,  222 => 87,  216 => 84,  212 => 82,  203 => 79,  198 => 77,  194 => 75,  190 => 74,  185 => 71,  171 => 63,  167 => 62,  159 => 57,  154 => 56,  148 => 54,  146 => 53,  133 => 43,  121 => 33,  117 => 31,  106 => 29,  102 => 28,  99 => 27,  97 => 26,  91 => 25,  86 => 22,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  65 => 15,  63 => 14,  59 => 12,  55 => 11,  52 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/cart.twig", "");
    }
}
