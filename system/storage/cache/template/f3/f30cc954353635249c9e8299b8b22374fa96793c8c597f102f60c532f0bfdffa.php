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

/* dreamsstore/template/information/aboutcompany.twig */
class __TwigTemplate_c03ccd8c19e5eb4eab4711020c70924d45ff56b92843f235e1001cce974dd8e0 extends \Twig\Template
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
<div id=\"information-information\">
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
        <div class=\"container\"><h1 class=\"page-title\">";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1></div>
        ";
        // line 12
        echo ($context["description"] ?? null);
        echo "
        <section class=\"about_company\">
            <div class=\"container\">
                <div class=\"about_company-inner\">
                    <div class=\"about_company-inner_block\">
                        <h3 class=\"about_company-inner_block-title\">Премиальное постельное белье для вашего дома</h3>
                        <p class=\"about_company-inner_block-text\">Dreams Store - это интернет-магазин постельного белья
                            и домашнего текстиля, который поможет вам создать уют, теплоту и необходимую атмосферу в
                            вашем доме. Мы помогаем людям сделать дом местом для отдыха, окружив себя качественным,
                            стильным текстилем и товарами для дома</p>
                        <a class=\"about_company-inner_block-btn btn btn-primary\">Подробнее о компании</a>
                    </div>
                    <div class=\"about_company-inner_images\">
                        <div class=\"about_company-inner_images-one\">
                            <img src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/aboutcompany/aboutcompany_1.webp\">
                        </div>
                        <div class=\"about_company-inner_images-two\">
                            <img src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/aboutcompany/aboutcompany_2.webp\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"advatagesToBuy\">
            <div class=\"container\">
                <div class=\"advatagesToBuy_inner\">
                    <h2 class=\"section-title\">Преимущества покупки постельного белья
                        в Dreams Store:</h2>
                    <div class=\"advantages-inner\">
                        <div class=\"advantages-item\">
                            <img class=\"advantages-item_img\"
                                 src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-1.webp\">
                            <h3 class=\"advantages-item_title\">Высокое качество материалов и тактильно приятные
                                текстуры</h3>
                            <p class=\"advantages-item_text\">Изготавливаем текстиль из премиальных тканей: тенселя,
                                египетского и королевского хлопка. Это нежный, шелковистый материал “как в отеле”, что
                                невозможно вылезти из кровати</p>
                        </div>
                        <div class=\"advantages-item\">
                            <img class=\"advantages-item_img\"
                                 src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-2.webp\">
                            <h3 class=\"advantages-item_title\">Возможность заказа индивидуального размера</h3>
                            <p class=\"advantages-item_text\">Шьем постельное белье и домашний текстиль любого размера с
                                необходимым вам количеством предметов под любой запрос</p>
                        </div>
                        <div class=\"advantages-item\">
                            <img class=\"advantages-item_img\"
                                 src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-3.webp\">
                            <h3 class=\"advantages-item_title\">Широкий выбор материалов и цветовая гамма</h3>
                            <p class=\"advantages-item_text\">Имеем более 40 расцветок постельных тканей, большая
                                коллекция портьерных, тюлевых и покрывальных тканей под любой интерьер</p>
                        </div>
                        <div class=\"advantages-item\">
                            <img class=\"advantages-item_img\"
                                 src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-4.webp\">
                            <h3 class=\"advantages-item_title\">Премиум пошив и персональная вышивка</h3>
                            <p class=\"advantages-item_text\">Уделяем огромное внимание деталям и тщательно следим за
                                каждым швом. Для эксклюзивного подарка делаем индивидуальную вышивку инициалов или узор
                                любой сложности</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        ";
        // line 78
        echo "        ";
        // line 79
        echo "        ";
        // line 80
        echo "        ";
        // line 81
        echo "    </div>
</div>
";
        // line 83
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/aboutcompany.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 83,  142 => 81,  140 => 80,  138 => 79,  136 => 78,  68 => 12,  64 => 11,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/aboutcompany.twig", "");
    }
}
