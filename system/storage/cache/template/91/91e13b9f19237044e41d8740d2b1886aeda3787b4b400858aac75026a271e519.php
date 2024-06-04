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
class __TwigTemplate_afebe86313cf9882dac9e3618c86d44bb6aceb0aaf5493375e1b236e58b580ef extends \Twig\Template
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
        echo "\t\t<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
\t\t";
        // line 23
        echo "\t\t";
        // line 25
        echo "
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"> <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap\" rel=\"stylesheet\">

\t\t";
        // line 31
        echo "        <link href=\"/catalog/view/javascript/swiper-master/swiper-bundle.min.css\" rel=\"stylesheet\">
\t\t<link href=\"catalog/view/theme/dreamsstore/stylesheet/style.css\" rel=\"stylesheet\">
\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 34
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 34);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 34);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 34);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 37
            echo "\t\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        echo "\t</head>
\t<body class=\"";
        // line 47
        echo ($context["class"] ?? null);
        echo "\">
    test
        ";
        // line 49
        echo $this->env->getAssets();
        echo "
    test2
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
        // line 98
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
                                ";
        // line 110
        echo ($context["menu"] ?? null);
        echo "
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
        // line 133
        echo "                                </li>
                                <li class=\"dropdown\">
                                    <a class=\"\">
                                        <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_login\"></use>
                                        </svg>
                                    </a>
                                    ";
        // line 198
        echo "                                </li>
                                <li>
                                    <a class=\"header-bottom_about-list_wishlist\" href=\"";
        // line 200
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                                        <svg class=\"icon-svg-stroke\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_wishlist\"></use>
                                        </svg>
                                        <span class=\"\">";
        // line 204
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
                                    </a>
                                </li>
                                <li>";
        // line 207
        echo ($context["cart"] ?? null);
        echo "</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

\t\t";
        // line 336
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
        return array (  308 => 336,  297 => 207,  291 => 204,  282 => 200,  278 => 198,  269 => 133,  244 => 110,  229 => 98,  177 => 49,  172 => 47,  169 => 46,  160 => 44,  155 => 43,  144 => 41,  140 => 40,  137 => 39,  128 => 37,  123 => 36,  110 => 34,  106 => 33,  102 => 31,  95 => 25,  93 => 23,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  55 => 7,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/header.twig", "");
    }
}
