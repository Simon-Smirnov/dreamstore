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
class __TwigTemplate_c535c77dca5a4cae0ed3f75a3c89904b4393bff6fbe976fc90c6476a631dd810 extends \Twig\Template
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
            <h3>";
        // line 13
        echo ($context["text_location"] ?? null);
        echo "</h3>
            <div class=\"contact-inner\">
                <div class=\"contact-inner_info\">
                    <div class=\"contact-inner_info-item\">
                        <h4 class=\"contact-inner_small-title\">Телефон:</h4>
                        <a class=\"contact-inner_small-content\" href=\"tel:+79956686050\">+7 995 668 60 50</a>
                    </div>
                    <div class=\"contact-inner_info-item\">
                        <h4 class=\"contact-inner_small-title\">График работы:</h4>
                        <p class=\"contact-inner_small-content\">Пн-пт: 09:00 – 20:00</p>
                        <a class=\"contact-inner_small-content\">Сб-Вс: 10:00 – 18:00</a>
                    </div>
                    <div class=\"contact-inner_info-item\">
                        <h4 class=\"contact-inner_small-title\">E-mail:</h4>
                        <a class=\"contact-inner_small-content\" href=\"tomail:dreamsstore@mail.ru\">dreamsstore@mail.ru</a>
                    </div>
                    <div class=\"contact-inner_info-item\">
                        <h4 class=\"contact-inner_small-title\">Адрес:</h4>
                        <p class=\"contact-inner_small-content\">г. Москва, Автозаводская
                            улица, дом 23, с. 931 к2</p>
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
                    <div class=\"contact-inner_info-item\">
                        <h4 class=\"contact-inner_small-title\">Наши реквизиты</h4>
                        <p class=\"contact-inner_small-content\">
                            <a class=\"btn btn-primary\">Написать нам</a>
                        </p>
                    </div>
                </div>
                <div class=\"contact-inner_map\">

                </div>
                ";
        // line 77
        echo "                ";
        // line 78
        echo "                ";
        // line 79
        echo "                ";
        // line 80
        echo "                ";
        // line 81
        echo "                ";
        // line 82
        echo "                ";
        // line 83
        echo "                ";
        // line 84
        echo "                ";
        // line 85
        echo "                ";
        // line 86
        echo "                ";
        // line 87
        echo "                ";
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
        // line 136
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
        return array (  234 => 136,  211 => 115,  209 => 114,  207 => 113,  205 => 112,  203 => 111,  201 => 110,  199 => 109,  197 => 108,  195 => 107,  193 => 106,  191 => 105,  189 => 104,  187 => 103,  185 => 102,  183 => 101,  181 => 100,  179 => 99,  177 => 98,  175 => 97,  173 => 96,  171 => 95,  169 => 94,  167 => 93,  165 => 92,  163 => 91,  161 => 90,  159 => 89,  157 => 88,  155 => 87,  153 => 86,  151 => 85,  149 => 84,  147 => 83,  145 => 82,  143 => 81,  141 => 80,  139 => 79,  137 => 78,  135 => 77,  69 => 13,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/contact.twig", "");
    }
}
