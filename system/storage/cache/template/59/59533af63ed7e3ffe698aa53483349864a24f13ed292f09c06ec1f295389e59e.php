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
class __TwigTemplate_a96d59059db66fec105d42b4ac5db480d4704012f087f208f47ade669637b72e extends \Twig\Template
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
    <div id=\"content\">
        <h1 class=\"page-title\">";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <h3>";
        // line 12
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
        // line 76
        echo "            ";
        // line 77
        echo "            ";
        // line 78
        echo "            ";
        // line 79
        echo "            ";
        // line 80
        echo "            ";
        // line 81
        echo "            ";
        // line 82
        echo "            ";
        // line 83
        echo "            ";
        // line 84
        echo "            ";
        // line 85
        echo "            ";
        // line 86
        echo "            ";
        // line 87
        echo "            ";
        // line 88
        echo "            ";
        // line 89
        echo "            ";
        // line 90
        echo "            ";
        // line 91
        echo "            ";
        // line 92
        echo "            ";
        // line 93
        echo "            ";
        // line 94
        echo "            ";
        // line 95
        echo "            ";
        // line 96
        echo "            ";
        // line 97
        echo "            ";
        // line 98
        echo "            ";
        // line 99
        echo "            ";
        // line 100
        echo "            ";
        // line 101
        echo "            ";
        // line 102
        echo "            ";
        // line 103
        echo "            ";
        // line 104
        echo "            ";
        // line 105
        echo "            ";
        // line 106
        echo "            ";
        // line 107
        echo "            ";
        // line 108
        echo "            ";
        // line 109
        echo "            ";
        // line 110
        echo "            ";
        // line 111
        echo "            ";
        // line 112
        echo "            ";
        // line 113
        echo "            ";
        // line 114
        echo "        </div>
    </div>
</div>
";
        // line 117
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
        return array (  215 => 117,  210 => 114,  208 => 113,  206 => 112,  204 => 111,  202 => 110,  200 => 109,  198 => 108,  196 => 107,  194 => 106,  192 => 105,  190 => 104,  188 => 103,  186 => 102,  184 => 101,  182 => 100,  180 => 99,  178 => 98,  176 => 97,  174 => 96,  172 => 95,  170 => 94,  168 => 93,  166 => 92,  164 => 91,  162 => 90,  160 => 89,  158 => 88,  156 => 87,  154 => 86,  152 => 85,  150 => 84,  148 => 83,  146 => 82,  144 => 81,  142 => 80,  140 => 79,  138 => 78,  136 => 77,  134 => 76,  68 => 12,  64 => 11,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/contact.twig", "");
    }
}
