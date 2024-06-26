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

/* dreamsstore/template/information/atelier_model_content.twig */
class __TwigTemplate_a03bcbc2c2aaa736e48212e85918d394885c26606172daa8b89cbc4189d14835 extends \Twig\Template
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
        echo "<div class=\"modelModal\">
    <div class=\"modelModal-images\">
        <div class=\"sliderProductMain\">
            <div class=\"product-images swiper\">
                ";
        // line 5
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 6
            echo "                    <ul class=\"product-images__list swiper-wrapper\" data-lightbox-parent>
                        ";
            // line 7
            if (($context["thumb"] ?? null)) {
                // line 8
                echo "                            <li class=\"product-images__item\">
                                <a class=\"product-images__link\" href=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "popup", [], "any", false, false, false, 9);
                echo "\"
                                   title=\"";
                // line 10
                echo ($context["heading_title"] ?? null);
                echo "\">
                                    <picture>
                                        <source srcset=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "webp", [], "any", false, false, false, 12);
                echo "\">
                                        <img class=\"product-images__image\"
                                             src=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "default", [], "any", false, false, false, 14);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
                                             title=\"";
                // line 15
                echo ($context["heading_title"] ?? null);
                echo "\"
                                             loading=\"lazy\"/>
                                    </picture>
                                </a>
                            </li>
                        ";
            }
            // line 21
            echo "                        ";
            if (($context["images"] ?? null)) {
                // line 22
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 23
                    echo "                                <li class=\"product-images__item\">
                                    <a class=\"product-images__link\" href=\"";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 24);
                    echo "\"
                                       title=\"";
                    // line 25
                    echo ($context["heading_title"] ?? null);
                    echo "\">
                                        <picture>
                                            <source srcset=\"";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 27);
                    echo "\">
                                            <img class=\"product-images__image\"
                                                 src=\"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 29);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                 title=\"";
                    // line 30
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                 loading=\"lazy\"/>
                                        </picture>
                                    </a>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                        ";
            }
            // line 37
            echo "                    </ul>
                ";
        }
        // line 39
        echo "                <nav class=\"sliderProductMain-arrows\">
                    <ul class=\"sliderProductMain-list\">
                        <div>
                            <li class=\"slider__arrow--prev\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                </svg>
                            </li>
                        </div>
                        <div>
                            <li class=\"slider__arrow--next\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                </svg>
                            </li>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
        <div class=\"sliderProductThumbs\">
            <div class=\"product-images swiper\">
                ";
        // line 61
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 62
            echo "                    <ul class=\"product-images__list swiper-wrapper\" data-lightbox-parent>
                        ";
            // line 63
            if (($context["thumb"] ?? null)) {
                // line 64
                echo "                            <li class=\"product-images__item\">
                                <picture>
                                    <source srcset=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "webp", [], "any", false, false, false, 66);
                echo "\">
                                    <img class=\"product-images__image\"
                                         src=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "default", [], "any", false, false, false, 68);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
                                         title=\"";
                // line 69
                echo ($context["heading_title"] ?? null);
                echo "\"
                                         loading=\"lazy\"/>
                                </picture>
                            </li>
                        ";
            }
            // line 74
            echo "                        ";
            if (($context["images"] ?? null)) {
                // line 75
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 76
                    echo "                                <li class=\"product-images__item\">
                                    <picture>
                                        <source srcset=\"";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 78);
                    echo "\">
                                        <img class=\"product-images__image\"
                                             src=\"";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 80);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                             title=\"";
                    // line 81
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                             loading=\"lazy\"/>
                                    </picture>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                        ";
            }
            // line 87
            echo "                    </ul>
                ";
        }
        // line 89
        echo "            </div>
        </div>
    </div>
    <div class=\"modelModal-info\">
        <h4 class=\"modelModal-info__title\">";
        // line 93
        echo ($context["name"] ?? null);
        echo "</h4>
        <div class=\"modelModal-info__description\">";
        // line 94
        echo ($context["description"] ?? null);
        echo "</div>
        <button class=\"btn btn-primary\">Заявка на расчёт</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/atelier_model_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 94,  233 => 93,  227 => 89,  223 => 87,  220 => 86,  209 => 81,  203 => 80,  198 => 78,  194 => 76,  189 => 75,  186 => 74,  178 => 69,  172 => 68,  167 => 66,  163 => 64,  161 => 63,  158 => 62,  156 => 61,  132 => 39,  128 => 37,  125 => 36,  113 => 30,  107 => 29,  102 => 27,  97 => 25,  93 => 24,  90 => 23,  85 => 22,  82 => 21,  73 => 15,  67 => 14,  62 => 12,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/atelier_model_content.twig", "");
    }
}
