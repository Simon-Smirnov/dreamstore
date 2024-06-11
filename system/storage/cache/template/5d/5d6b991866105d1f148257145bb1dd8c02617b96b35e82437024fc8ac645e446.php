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

/* dreamsstore/template/common/header.twig */
class __TwigTemplate_6f38935a8fbf6d9c3fdc9771fcd22a2f7cc461d3005441dd134630dca8ece334 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html
        dir=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"> <!--<![endif]-->
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
    <base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\"/>
    ";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "        <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
    ";
        }
        // line 17
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "        <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
    ";
        }
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        // line 23
        echo "    ";
        // line 25
        echo "
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link
            href=\"https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap\"
            rel=\"stylesheet\">

    ";
        // line 33
        echo "    ";
        // line 34
        echo "    <link href=\"catalog/view/theme/dreamsstore/stylesheet/style.css\" rel=\"stylesheet\">
    ";
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 43
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 43);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 43);
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 46
            echo "        ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo $this->env->getAssets();
        echo "/assets/app.min.css\">
</head>
<body class=\"";
        // line 51
        echo ($context["class"] ?? null);
        echo "\">
<header>
    <div class=\"header-top\">
        <div class=\"container\">
            <div class=\"header-top_inner\">
                <div class=\"header-top_info\">
                    <a class=\"header-top_info-email\" href=\"mailto:dreamsstore@mail.ru\">dreamsstore@mail.ru</a>
                    <div class=\"header-top_info-mode\">
                        <p>Пн-пт: 09:00 - 20:00</p>
                        <p>Сб-Вс: 10:00 - 18:00</p>
                    </div>
                </div>
                <div class=\"header-top_about\">
                    <div class=\"header-top_messengers\">
                        <a>
                            <svg class=\"icon-svg\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_vk\"></use>
                            </svg>
                        </a>
                        <a>
                            <svg class=\"icon-svg\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_telegram\"></use>
                            </svg>
                        </a>
                        <a>
                            <svg class=\"icon-svg\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_whatsapp\"></use>
                            </svg>
                        </a>
                        <a>
                            <svg class=\"icon-svg\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_viber\"></use>
                            </svg>
                        </a>
                    </div>
                    <div class=\"header-top_block\">
                        <a class=\"header-top_block-phone\" href=\"tel:+79956686050\">+7 995 668 60 50</a>
                        <a class=\"header-top_block-order\" href=\"\">Заказать звонок</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"header-bottom\">
        <div class=\"container\">
            <div class=\"header-bottom_inner\">
                <div class=\"header-bottom_block\">
                    <a href=\"/\" class=\"header-bottom_block-logo\">
                        <img src=\"";
        // line 99
        echo ($context["logo"] ?? null);
        echo "\">
                    </a>
                    <div class=\"header-bottom_block-catalog\">
                        <div class=\"header-bottom_block-catalog_btn\">
                            <svg class=\"burger\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_burger\"></use>
                            </svg>
                            <svg class=\"cross\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_cross\"></use>
                            </svg>
                            <span>Каталог</span>
                        </div>
                        <div class=\"header-bottom_block-catalog_modal\">
                            <div class=\"header-bottom_block-catalog_bg\">
                                <div class=\"container\">
                                    <div class=\"header-bottom_block-catalog_modal-inner\">
                                        <div class=\"header-bottom_block-catalog_categories\">
                                            ";
        // line 116
        echo ($context["menu_main"] ?? null);
        echo "
                                        </div>
                                        <div class=\"header-bottom_block-catalog_about\">
                                            <a class=\"header-bottom_block-catalog_about-link\">
                                                <span class=\"header-bottom_block-catalog_about-text\">Все товары в категории</span>
                                                <svg class=\"svg-arrow\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                                </svg>
                                            </a>
                                            <div class=\"header-bottom_block-catalog_about-inner\"></div>
                                        </div>
                                        <div class=\"header-bottom_block-catalog_info\">
                                            <div class=\"header-bottom_block-catalog_info-inner\">
                                                <h3>Подарочные карты</h3>
                                                <p>Когда вы не уверены в том, что именно может понравиться близкому
                                                    человеку или боитесь прогадать с размером, электронная подарочная
                                                    карта – лучший сюрприз.</p>
                                                <img src=\"image/menu/gift_card.png\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"header-bottom_navigation\">
                    <ul class=\"header-bottom_navigation_list\">
                        <li class=\"header-bottom_navigation_list-item\"><a href=\"/\">Ателье</a></li>
                        <li class=\"header-bottom_navigation_list-item\"><a href=\"/\">В подарок</a></li>
                        <li class=\"header-bottom_navigation_list-item\"><a href=\"/aboutcompany\">О нас</a></li>
                        <li class=\"header-bottom_navigation_list-item\"><a href=\"/\">Блог</a></li>
                        <li class=\"header-bottom_navigation_list-item\"><a href=\"/\">Оплата и доставка</a></li>
                        <li class=\"header-bottom_navigation_list-item\"><a href=\"/\">Сотрудничество</a></li>
                        <li class=\"header-bottom_navigation_list-item\"><a href=\"/contact\">Контакты</a></li>
                    </ul>
                </div>
                <div class=\"header-bottom_about\">
                    <ul class=\"header-bottom_about-list\">
                        <li>
                            <a href=\"\">
                                <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_search\"></use>
                                </svg>
                            </a>
                            ";
        // line 162
        echo "                        </li>
                        <li class=\"dropdown\">
                            <a class=\"\">
                                <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_login\"></use>
                                </svg>
                            </a>
                            ";
        // line 227
        echo "                        </li>
                        <li>
                            <a class=\"header-bottom_about-list_wishlist\" href=\"";
        // line 229
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\"
                               title=\"";
        // line 230
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                                <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_wishlist\"></use>
                                </svg>
                                <span class=\"\">";
        // line 234
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
                            </a>
                        </li>
                        <li>";
        // line 237
        echo ($context["cart"] ?? null);
        echo "</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

";
        // line 366
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 366,  299 => 237,  293 => 234,  286 => 230,  282 => 229,  278 => 227,  269 => 162,  221 => 116,  201 => 99,  150 => 51,  145 => 49,  142 => 48,  133 => 46,  128 => 45,  117 => 43,  112 => 42,  110 => 41,  107 => 34,  105 => 33,  96 => 25,  94 => 23,  92 => 21,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  55 => 7,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/header.twig", "");
    }
}
