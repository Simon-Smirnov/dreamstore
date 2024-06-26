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
class __TwigTemplate_a434db9c3221c4521373b83bfc486b054c05860ff10f457b0edd7eaa079bcaeb extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"miniCart\" data-dropdown-cart>
    <a href=\"/cart\" class=\"dropdownCartBtn\">
        <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
            <use xlink:href=\"/sprite.svg#icon_basket\"></use>
        </svg>
        <span id=\"cart-total\">";
        // line 6
        echo ($context["text_items"] ?? null);
        echo "</span>
    </a>
    <div class=\"miniCart-dropDawn\">
        <div class=\"miniCart-dropDawn__inner dropdownCartContent\">
            ";
        // line 10
        if (($context["products"] ?? null)) {
            // line 11
            echo "                <div class=\"miniCart-products\">
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 13
                echo "                        <div class=\"miniCart-product\">
                            <div class=\"miniCart-product__img\">
                                ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                                    <picture>
                                        <source srcset=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17), "webp", [], "any", false, false, false, 17);
                    echo "\">
                                        <img class=\"catalog-inner_link-img\" alt=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\"
                                             title=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                    echo "\"
                                             src=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20), "default", [], "any", false, false, false, 20);
                    echo "\" loading=\"lazy\">
                                    </picture>
                                ";
                }
                // line 23
                echo "                            </div>
                            <div class=\"miniCart-product__block\">
                                <div class=\"miniCart-product__name\">
                                    <a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "</a>
                                    ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                                        <ul>
                                            ";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 29));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 30
                        echo "                                                <li>- ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 30);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 30);
                        echo "</li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "                                        </ul>
                                    ";
                }
                // line 34
                echo "                                </div>
                                <div class=\"miniCart-product__control\">
                                    <div class=\"miniCart-product__change\">
                                        <div class=\"miniCart-product__set\" data-change-minus=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 37);
                echo "\"
                                             data-change-quantity=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38);
                echo "\">
                                            <svg class=\"miniCart-product__minus\"
                                                 xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg?v=1.0#icon_minus\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"miniCart-product__input\" data-change=\"input\">
                                            ";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 45);
                echo "
                                        </div>
                                        <div class=\"miniCart-product__set\" data-change-plus=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 47);
                echo "\"
                                             data-change-quantity=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 48);
                echo "\">
                                            <svg class=\"miniCart-product__plus\"
                                                 xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg?v=1.0#icon_plus\"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class=\"miniCart-product__total\">
                                        ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["product"], "total_without_special", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                                            <div class=\"miniCart-product__withDiscount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 57);
                    echo "</div>
                                            <div class=\"miniCart-product__withOutDiscount\">";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total_without_special", [], "any", false, false, false, 58);
                    echo "</div>
                                        ";
                } else {
                    // line 60
                    echo "                                            <div class=\"miniCart-product__withDiscount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 60);
                    echo "</div>
                                        ";
                }
                // line 62
                echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"miniCart-product__remove\">
                                <button data-product-remove=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 66);
                echo "\" type=\"button\"
                                        title=\"";
                // line 67
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
            // line 75
            echo "                </div>
                <div class=\"miniCart-footer\">
                    <div class=\"miniCart-footer__total\">
                        <h4>Итого:</h4>
                        <p>";
            // line 79
            echo ($context["total_products"] ?? null);
            echo "</p>
                    </div>
                    <a class=\"btn btn-primary miniCart-footer__btn\" href=\"";
            // line 81
            echo ($context["cart"] ?? null);
            echo "\">Перейти в корзину</a>
                </div>
            ";
        } else {
            // line 84
            echo "                <div class=\"miniCart-empty\">
                    ";
            // line 85
            echo ($context["text_empty"] ?? null);
            echo "
                </div>
            ";
        }
        // line 88
        echo "        </div>
    </div>
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
        return array (  229 => 88,  223 => 85,  220 => 84,  214 => 81,  209 => 79,  203 => 75,  189 => 67,  185 => 66,  179 => 62,  173 => 60,  168 => 58,  163 => 57,  161 => 56,  150 => 48,  146 => 47,  141 => 45,  131 => 38,  127 => 37,  122 => 34,  118 => 32,  107 => 30,  103 => 29,  100 => 28,  98 => 27,  92 => 26,  87 => 23,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  66 => 16,  64 => 15,  60 => 13,  56 => 12,  53 => 11,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/cart.twig", "");
    }
}
