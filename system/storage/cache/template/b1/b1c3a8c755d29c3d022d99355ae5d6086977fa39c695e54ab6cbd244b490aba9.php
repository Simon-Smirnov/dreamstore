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
class __TwigTemplate_3c30b007c945ebce7e351dadc56b81ba93e6d2adc17b24fb4b211f5077ca6cc6 extends \Twig\Template
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
        // line 76
        echo "                ";
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
        // line 135
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
        return array (  235 => 135,  212 => 114,  210 => 113,  208 => 112,  206 => 111,  204 => 110,  202 => 109,  200 => 108,  198 => 107,  196 => 106,  194 => 105,  192 => 104,  190 => 103,  188 => 102,  186 => 101,  184 => 100,  182 => 99,  180 => 98,  178 => 97,  176 => 96,  174 => 95,  172 => 94,  170 => 93,  168 => 92,  166 => 91,  164 => 90,  162 => 89,  160 => 88,  158 => 87,  156 => 86,  154 => 85,  152 => 84,  150 => 83,  148 => 82,  146 => 81,  144 => 80,  142 => 79,  140 => 78,  138 => 77,  136 => 76,  73 => 17,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/contact.twig", "");
    }
}