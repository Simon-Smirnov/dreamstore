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

/* dreamsstore/template/information/contact.twig */
class __TwigTemplate_db6b58f663b39db5c0c664d900d2282a4e1ee9a5349cf7eaafb465b333305526 extends \Twig\Template
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
<div id=\"information-contact\">
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
    <div class=\"container\">
        <div id=\"content\">
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <div class=\"contact-inner\">
                <div class=\"contact-inner_info\">
                    <div class=\"contact-inner_info-item\">
                        <h4 class=\"contact-inner_small-title\">Телефон:</h4>
                        <a class=\"contact-inner_small-content\" href=\"tel:";
        // line 17
        echo ($context["telephone_for_link"] ?? null);
        echo "\">";
        echo ($context["telephone"] ?? null);
        echo "</a>
                    </div>
                    <div class=\"contact-inner_info-item\">
                        <h4 class=\"contact-inner_small-title\">График работы:</h4>
                        <p class=\"contact-inner_small-content\">";
        // line 21
        echo ($context["open"] ?? null);
        echo "</p>
                    </div>
                    <div class=\"contact-inner_info-item\">
                        <h4 class=\"contact-inner_small-title\">E-mail:</h4>
                        <a class=\"contact-inner_small-content\"
                           href=\"tomail:";
        // line 26
        echo ($context["email_for_store"] ?? null);
        echo "\">";
        echo ($context["email_for_store"] ?? null);
        echo "</a>
                    </div>
                    <div class=\"contact-inner_info-item\">
                        <h4 class=\"contact-inner_small-title\">Адрес:</h4>
                        <p class=\"contact-inner_small-content\">";
        // line 30
        echo ($context["address"] ?? null);
        echo "</p>
                    </div>
                    <div class=\"contact-inner_info-item\">
                        <h4 class=\"contact-inner_small-title\">Мессенджеры:</h4>
                        <ul class=\"contact-inner_small-messengers\">
                            <li class=\"contact-inner_small-messengers_link\">
                                <a>
                                    <svg class=\"icon-svg-footer\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <use xlink:href=\"/sprite.svg#icon_vk\"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class=\"contact-inner_small-messengers_link\">
                                <svg class=\"icon-svg-footer\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_telegram\"></use>
                                </svg>
                            </li>
                            <li class=\"contact-inner_small-messengers_link\">
                                <svg class=\"icon-svg-footer\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_whatsapp\"></use>
                                </svg>
                            </li>
                            <li class=\"contact-inner_small-messengers_link\">
                                <svg class=\"icon-svg-footer\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_viber\"></use>
                                </svg>
                            </li>
                            <li class=\"contact-inner_small-messengers_link\">
                                <svg class=\"icon-svg-footer\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_instagram\"></use>
                                </svg>
                            </li>
                        </ul>
                    </div>
                    <section class=\"first-know\">
                        <div class=\"container\">
                            <div class=\"first-know-inner\">
                                <div class=\"first-know-inner_block\">
                                    <h2 class=\"first-know-inner_block-title\">Узнавайте первыми о скидках!</h2>
                                </div>
                                <form class=\"first-know-inner_form\">
                                    <input class=\"input-text\" name=\"email\" type=\"email\" placeholder=\"Ваш E-mail\"
                                           value=\"\">
                                    <div class=\"first-know-inner_btn\">
                                        <button class=\"btn btn-primary\">Подписаться</button>
                                    </div>
                                    <label class=\"agree\">
                                        <input class=\"input-checkbox\" name=\"agree\" type=\"checkbox\">
                                        <span>Даю согласие на <a>обработку<br> персональных данных</a></span>
                                    </label>
                                </form>
                            </div>
                        </div>
                </div>
                <div class=\"contact-inner_map\">

                </div>
                ";
        // line 88
        echo "                ";
        // line 89
        echo "                ";
        // line 90
        echo "                ";
        // line 91
        echo "                ";
        // line 92
        echo "                ";
        // line 93
        echo "                ";
        // line 94
        echo "                ";
        // line 95
        echo "                ";
        // line 96
        echo "                ";
        // line 97
        echo "                ";
        // line 98
        echo "                ";
        // line 99
        echo "                ";
        // line 100
        echo "                ";
        // line 101
        echo "                ";
        // line 102
        echo "                ";
        // line 103
        echo "                ";
        // line 104
        echo "                ";
        // line 105
        echo "                ";
        // line 106
        echo "                ";
        // line 107
        echo "                ";
        // line 108
        echo "                ";
        // line 109
        echo "                ";
        // line 110
        echo "                ";
        // line 111
        echo "                ";
        // line 112
        echo "                ";
        // line 113
        echo "                ";
        // line 114
        echo "                ";
        // line 115
        echo "                ";
        // line 116
        echo "                ";
        // line 117
        echo "                ";
        // line 118
        echo "                ";
        // line 119
        echo "                ";
        // line 120
        echo "                ";
        // line 121
        echo "                ";
        // line 122
        echo "                ";
        // line 123
        echo "                ";
        // line 124
        echo "                ";
        // line 125
        echo "                ";
        // line 126
        echo "            </div>
            <section class=\"fabric-samples\">
                <div class=\"container\">
                    <div class=\"fabric-samples-inner\">
                        <div class=\"fabric-samples-inner_block\">
                            <h2 class=\"fabric-samples-inner_block-title\">Образцы ткани бесплатно</h2>
                            <p class=\"fabric-samples-inner_block-text\">Чтобы быть уверенным в том, что цветовая гамма
                                постельного белья будет идеально подходить под ваш интерьер, мы рады предложить вам
                                оформить
                                заказ на образцы используемых тканей со всей выборкой расцветок бесплатно в любую точку
                                России</p>
                        </div>
                        <div class=\"fabric-samples-inner_btn\">
                            <a class=\"btn btn-primary\">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
";
        // line 147
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 147,  235 => 126,  233 => 125,  231 => 124,  229 => 123,  227 => 122,  225 => 121,  223 => 120,  221 => 119,  219 => 118,  217 => 117,  215 => 116,  213 => 115,  211 => 114,  209 => 113,  207 => 112,  205 => 111,  203 => 110,  201 => 109,  199 => 108,  197 => 107,  195 => 106,  193 => 105,  191 => 104,  189 => 103,  187 => 102,  185 => 101,  183 => 100,  181 => 99,  179 => 98,  177 => 97,  175 => 96,  173 => 95,  171 => 94,  169 => 93,  167 => 92,  165 => 91,  163 => 90,  161 => 89,  159 => 88,  99 => 30,  90 => 26,  82 => 21,  73 => 17,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/contact.twig", "");
    }
}
