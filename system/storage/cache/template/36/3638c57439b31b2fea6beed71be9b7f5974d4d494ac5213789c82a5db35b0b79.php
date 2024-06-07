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

/* dreamsstore/template/common/footer.twig */
class __TwigTemplate_675372442a880047a7bd3fdb2099bbd5ed69fe36111a5888ad8e96422a9ae0ce extends \Twig\Template
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
        echo "<footer>
\t<div class=\"container\">
\t\t";
        // line 4
        echo "\t\t";
        // line 5
        echo "\t\t";
        // line 6
        echo "\t\t";
        // line 7
        echo "\t\t";
        // line 8
        echo "\t\t";
        // line 9
        echo "\t\t";
        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t";
        // line 12
        echo "\t\t";
        // line 13
        echo "\t\t";
        // line 14
        echo "\t\t";
        // line 15
        echo "\t\t";
        // line 16
        echo "\t\t";
        // line 17
        echo "\t\t";
        // line 18
        echo "\t\t";
        // line 19
        echo "\t\t";
        // line 20
        echo "\t\t";
        // line 21
        echo "\t\t";
        // line 22
        echo "\t\t";
        // line 23
        echo "\t\t";
        // line 24
        echo "\t\t";
        // line 25
        echo "\t\t";
        // line 26
        echo "\t\t";
        // line 27
        echo "\t\t";
        // line 28
        echo "\t\t";
        // line 29
        echo "\t\t";
        // line 30
        echo "\t\t";
        // line 31
        echo "\t\t";
        // line 32
        echo "\t\t";
        // line 33
        echo "\t\t";
        // line 34
        echo "\t\t";
        // line 35
        echo "\t\t";
        // line 36
        echo "\t\t";
        // line 37
        echo "\t\t";
        // line 38
        echo "\t\t";
        // line 39
        echo "\t\t";
        // line 40
        echo "\t\t";
        // line 41
        echo "\t\t";
        // line 42
        echo "\t\t";
        // line 43
        echo "\t\t";
        // line 44
        echo "\t\t";
        // line 45
        echo "\t\t";
        // line 46
        echo "\t\t";
        // line 47
        echo "\t\t";
        // line 48
        echo "\t\t";
        // line 49
        echo "\t\t";
        // line 50
        echo "\t\t";
        // line 51
        echo "\t\t";
        // line 52
        echo "\t\t";
        // line 53
        echo "\t\t";
        // line 54
        echo "\t\t";
        // line 55
        echo "\t\t";
        // line 56
        echo "\t\t";
        // line 57
        echo "\t\t";
        // line 58
        echo "\t\t";
        // line 59
        echo "\t\t";
        // line 60
        echo "\t\t";
        // line 61
        echo "\t\t";
        // line 62
        echo "\t\t";
        // line 63
        echo "\t\t";
        // line 64
        echo "\t\t<div class=\"footer\">
\t\t\t<div class=\"footer-grid\">
\t\t\t\t<div class=\"footer-grid_item footer-grid_item-info\">
\t\t\t\t\t<img class=\"footer-grid_logo\" src=\"";
        // line 67
        echo $this->env->getAssets();
        echo "/assets/images/logo_2.webp\">
\t\t\t\t\t<ul class=\"footer-grid_item-list\">
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\">© ";
        // line 69
        echo ($context["year"] ?? null);
        echo " Dreams Store</li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Карта сайта</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Политика конфиденциальности</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item vyiatka\">Разработка сайта: <a><img class=\"img-vyiatka\" src=\"";
        // line 72
        echo $this->env->getAssets();
        echo "/assets/images/vyiatka_it.webp\"></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-grid_item\">
\t\t\t\t\t<h4 class=\"footer-grid_item-title\">Покупателям</h4>
\t\t\t\t\t<ul class=\"footer-grid_item-list\">
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Оплата и доставка</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Гарантия и возврат</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Как выбрать ткань</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Частые вопросы</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Советы по уходу</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Отзывы</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Блог</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-grid_item\">
\t\t\t\t\t<h4 class=\"footer-grid_item-title\">Каталог</h4>
\t\t\t\t\t<ul class=\"footer-grid_item-list\">
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Постельное белье</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Подушки</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Одеяла</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Шторы</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Покрывала</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Полотенца</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Одежда для дома</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-grid_item\">
\t\t\t\t\t<h4 class=\"footer-grid_item-title\">Сервисы</h4>
\t\t\t\t\t<ul class=\"footer-grid_item-list\">
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Ателье</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Индивидуальная вышивка</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Выезд дизайнера на дом</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Подарочный сертификат</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Заказать образцы ткани</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a>Программа лояльности</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-grid_item\">
\t\t\t\t\t<h4 class=\"footer-grid_item-title\">Компания</h4>
\t\t\t\t\t<ul class=\"footer-grid_item-list\">
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\">О нас</li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\">Вакансии</li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\">Сотрудничество</li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a href=\"tel:+79956686050\">+7 995 668 60 50</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item\"><a href=\"mailto:dreamsstore@mail.ru\">dreamsstore@mail.ru</a></li>
\t\t\t\t\t\t<li class=\"footer-grid_item-list_item footer-grid_item-list_item-social\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t<svg class=\"icon-svg-footer\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/sprite.svg#icon_vk\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<svg class=\"icon-svg-footer\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/sprite.svg#icon_telegram\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<svg class=\"icon-svg-footer\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/sprite.svg#icon_whatsapp\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<svg class=\"icon-svg-footer\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/sprite.svg#icon_viber\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<svg class=\"icon-svg-footer\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/sprite.svg#icon_instagram\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-grid_item\">
\t\t\t\t\t<h4 class=\"footer-grid_item-title\">Не упустите акции!</h4>
\t\t\t\t\t<form class=\"footer-grid_item-form\">
\t\t\t\t\t\t<input class=\"input-text\" name=\"email\" type=\"email\" placeholder=\"Ваш E-mail\" value=\"\">
\t\t\t\t\t\t<button class=\"btn btn-primary\">Подписаться</button>
\t\t\t\t\t\t<label class=\"agree\">
\t\t\t\t\t\t\t<input class=\"input-checkbox\" name=\"agree\" type=\"checkbox\">
\t\t\t\t\t\t\t<span>Даю согласие на <a>обработку<br> персональных данных</a></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<div class=\"scroll-to-top\">
\t";
        // line 168
        echo "\t\t<svg class=\"scroll-to-top_svg\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<use xlink:href=\"/sprite.svg#icon_arrow_top\"></use>
\t\t</svg>
\t";
        // line 172
        echo "</div>
<script src=\"/catalog/view/javascript/swiper-master/swiper-bundle.min.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/javascript/script.js\" type=\"module\"></script>

<script src=\"";
        // line 176
        echo $this->env->getAssets();
        echo "/assets/app.min.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 176,  280 => 172,  275 => 168,  177 => 72,  171 => 69,  166 => 67,  161 => 64,  159 => 63,  157 => 62,  155 => 61,  153 => 60,  151 => 59,  149 => 58,  147 => 57,  145 => 56,  143 => 55,  141 => 54,  139 => 53,  137 => 52,  135 => 51,  133 => 50,  131 => 49,  129 => 48,  127 => 47,  125 => 46,  123 => 45,  121 => 44,  119 => 43,  117 => 42,  115 => 41,  113 => 40,  111 => 39,  109 => 38,  107 => 37,  105 => 36,  103 => 35,  101 => 34,  99 => 33,  97 => 32,  95 => 31,  93 => 30,  91 => 29,  89 => 28,  87 => 27,  85 => 26,  83 => 25,  81 => 24,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,  55 => 11,  53 => 10,  51 => 9,  49 => 8,  47 => 7,  45 => 6,  43 => 5,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/footer.twig", "");
    }
}
