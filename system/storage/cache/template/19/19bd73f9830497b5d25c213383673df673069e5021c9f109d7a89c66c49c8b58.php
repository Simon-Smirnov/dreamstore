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

/* dreamsstore/template/product/giftcard.twig */
class __TwigTemplate_45d5c372520d1a79d49e929b285cc6b3352b777d109dd17e1a26a044eddfde61 extends \Twig\Template
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
<div id=\"product-giftCards\">
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
    <div class=\"giftCards\">
        <div class=\"container\">
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
        <div class=\"container\">
            <div class=\"giftCards-steps\">
                <ul class=\"giftCards-steps__list\">
                    <li class=\"giftCards-steps__item\">
                        <span class=\"giftCards-steps__num\">01</span>
                        <p class=\"giftCards-steps__text\">Выберите сумму, которую хотите подарить</p>
                    </li>
                    <li class=\"giftCards-steps__item\">
                        <span class=\"giftCards-steps__num\">02</span>
                        <p class=\"giftCards-steps__text\">Добавьте подарочную карту в корзину</p>
                    </li>
                    <li class=\"giftCards-steps__item\">
                        <span class=\"giftCards-steps__num\">03</span>
                        <p class=\"giftCards-steps__text\">Оформите заказ и оплатите его картой</p>
                    </li>
                    <li class=\"giftCards-steps__item\">
                        <span class=\"giftCards-steps__num\">04</span>
                        <p class=\"giftCards-steps__text\">Готово! На вашу почту придет ссылка на подарочную карту с
                            уникальным кодом</p>
                    </li>
                    <li class=\"giftCards-steps__item\">
                        <span class=\"giftCards-steps__num\">05</span>
                        <p class=\"giftCards-steps__text\">Счастливый обладатель подарочной карты должен будет ввести этот
                            код при оформлении покупки</p>
                    </li>
                </ul>
            </div>
        </div>
        ";
        // line 42
        if (($context["cards"] ?? null)) {
            // line 43
            echo "            <div class=\"container\">
                <div class=\"giftCards-cards\">
                    <ul class=\"giftCards-cards__list\">
                        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 47
                echo "                            <li class=\"giftCards-cards__item\">
                                <picture>
                                    <source srcset=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 49), "webp", [], "any", false, false, false, 49);
                echo "\">
                                    <img class=\"category_underCategories-img\" src=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 50), "default", [], "any", false, false, false, 50);
                echo "\"
                                         loading=\"lazy\">
                                </picture>
                                <span>";
                // line 53
                echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 53);
                echo "</span>
                                <button class=\"btn btn-second\">В корзину</button>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    </ul>
                </div>
            </div>
        ";
        }
        // line 61
        echo "        ";
        // line 62
        echo "        ";
        // line 63
        echo "        ";
        // line 64
        echo "        ";
        // line 65
        echo "    </div>
    ";
        // line 66
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/product/giftcard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 66,  147 => 65,  145 => 64,  143 => 63,  141 => 62,  139 => 61,  133 => 57,  123 => 53,  117 => 50,  113 => 49,  109 => 47,  105 => 46,  100 => 43,  98 => 42,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/giftcard.twig", "");
    }
}
