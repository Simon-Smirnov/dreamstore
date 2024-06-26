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
class __TwigTemplate_1710c28f6187c5595b79f93fbd66a1d3352ca2ee619d93951199d24834f42e51 extends \Twig\Template
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
                if (twig_get_attribute($this->env, $this->source, $context["product"], "total_without_special", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "                                        <div class=\"miniCart-product__withDiscount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 54);
                    echo "</div>
                                        <div class=\"miniCart-product__withOutDiscount\">";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total_without_special", [], "any", false, false, false, 55);
                    echo "</div>
                                    ";
                } else {
                    // line 57
                    echo "                                        <div class=\"miniCart-product__withDiscount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 57);
                    echo "</div>
                                    ";
                }
                // line 59
                echo "                                </div>
                            </div>
                        </div>
                        <div class=\"miniCart-product__remove\">
                            <button type=\"button\" onclick=\"cart.remove('";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 63);
                echo "');\"
                                    title=\"";
                // line 64
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
            // line 72
            echo "            </div>
            <div class=\"miniCart-footer\">
                <div class=\"miniCart-footer__total\">
                    <h4>Итого:</h4>
                    <p>";
            // line 76
            echo ($context["total_products"] ?? null);
            echo "</p>
                </div>
                <a class=\"btn btn-primary miniCart-footer__btn\" href=\"";
            // line 78
            echo ($context["cart"] ?? null);
            echo "\">Перейти в корзину</a>
            </div>
        ";
        } else {
            // line 81
            echo "            <div class=\"miniCart-empty\">
                ";
            // line 82
            echo ($context["text_empty"] ?? null);
            echo "
            </div>
        ";
        }
        // line 85
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
        return array (  214 => 85,  208 => 82,  205 => 81,  199 => 78,  194 => 76,  188 => 72,  174 => 64,  170 => 63,  164 => 59,  158 => 57,  153 => 55,  148 => 54,  146 => 53,  133 => 43,  121 => 33,  117 => 31,  106 => 29,  102 => 28,  99 => 27,  97 => 26,  91 => 25,  86 => 22,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  65 => 15,  63 => 14,  59 => 12,  55 => 11,  52 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/cart.twig", "");
    }
}
