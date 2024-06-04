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
class __TwigTemplate_20b260e63180b03baeb3d5dbb6e9364a3a72125c2d579c3a87763d4349015649 extends \Twig\Template
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
\t<html
\tdir=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"> <!--<![endif]-->
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
\t\t<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 17
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 20
        echo "\t\t";
        // line 21
        echo "\t\t";
        // line 23
        echo "\t\t";
        // line 25
        echo "
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"> <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap\" rel=\"stylesheet\">

\t\t";
        // line 31
        echo "        ";
        // line 32
        echo "\t\t<link href=\"catalog/view/theme/dreamsstore/stylesheet/style.css\" rel=\"stylesheet\">
\t\t";
        // line 39
        echo "\t\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 41
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 41);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 41);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 44
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 47
        echo $this->env->getAssets();
        echo "/assets/app.min.css\">
\t</head>
\t<body class=\"";
        // line 49
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
                            <a class=\"header-bottom_block-logo\">
                                <img src=\"";
        // line 97
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
                                    <div class=\"container\">
                                        <div class=\"header-bottom_block-catalog_modal-inner\">
                                            <div class=\"header-bottom_block-catalog_categories\">
                                                ";
        // line 113
        echo ($context["menu"] ?? null);
        echo "
                                            </div>
                                            <div class=\"header-bottom_block-catalog_about\"></div>
                                            <div class=\"header-bottom_block-catalog_info\">
                                                <div class=\"header-bottom_block-catalog_info-inner\">
                                                    <h3>Подарочные карты</h3>
                                                    <p>Когда вы не уверены в том, что именно может понравиться близкому человеку или боитесь прогадать с размером, электронная подарочная карта – лучший сюрприз.</p>
                                                    <img src=\"image/menu/gift_card.png\">
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
                                <li class=\"header-bottom_navigation_list-item\"><a href=\"/\">О нас</a></li>
                                <li class=\"header-bottom_navigation_list-item\"><a href=\"/\">Блог</a></li>
                                <li class=\"header-bottom_navigation_list-item\"><a href=\"/\">Оплата и доставка</a></li>
                                <li class=\"header-bottom_navigation_list-item\"><a href=\"/\">Сотрудничество</a></li>
                                <li class=\"header-bottom_navigation_list-item\"><a href=\"/\">Контакты</a></li>
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
        // line 148
        echo "                                </li>
                                <li class=\"dropdown\">
                                    <a class=\"\">
                                        <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_login\"></use>
                                        </svg>
                                    </a>
                                    ";
        // line 213
        echo "                                </li>
                                <li>
                                    <a class=\"header-bottom_about-list_wishlist\" href=\"";
        // line 215
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                                        <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_wishlist\"></use>
                                        </svg>
                                        <span class=\"\">";
        // line 219
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
                                    </a>
                                </li>
                                <li>";
        // line 222
        echo ($context["cart"] ?? null);
        echo "</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

\t\t";
        // line 351
        echo "\t</body>
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
        return array (  294 => 351,  283 => 222,  277 => 219,  268 => 215,  264 => 213,  255 => 148,  218 => 113,  199 => 97,  148 => 49,  143 => 47,  140 => 46,  131 => 44,  126 => 43,  115 => 41,  111 => 40,  108 => 39,  105 => 32,  103 => 31,  96 => 25,  94 => 23,  92 => 21,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  55 => 7,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/header.twig", "");
    }
}
