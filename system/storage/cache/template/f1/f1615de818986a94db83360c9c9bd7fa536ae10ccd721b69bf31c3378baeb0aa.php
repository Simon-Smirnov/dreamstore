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
class __TwigTemplate_b10ed54c9e82b0ba516c026ba648863aee8a119dbd85a073bcd8853810543572 extends \Twig\Template
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
        <section class=\"about_company\">
            <div class=\"container\">
                <div class=\"about_company-inner\">
                    <div class=\"about_company-inner_block\">
                        <h3 class=\"about_company-inner_block-title\">О компании</h3>
                        <p class=\"about_company-inner_block-text\">Dreams Store — это интернет-магазин постельного белья,
                            который поможет вам создать уютную атмосферу для комфортного сна и отдыха. Наша компания уже
                            более трёх лет радует своих клиентов постельным бельем из экологических натуральных
                            материалов. </p>
                        <p class=\"about_company-inner_block-text\">Заказывая в Dreams Store, вы получите недорогое
                            качественное постельное белье. Оно долго прослужит вам, сохраняя свой первоначальный внешний
                            вид.</p>
                        <p class=\"about_company-inner_block-text\">Многочисленное количество отзывов покупателей помогает
                            нам двигаться дальше и становиться лучше. Мы не просто предлагаем качественный и красивый
                            домашний текстиль, но и хотим быть уверены, что вы получаете высокий уровень сервиса,
                            наслаждаетесь каждой мелочью и всегда делитесь мнением, которое мы слышим и ценим.</p>
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
                    <div class=\"advatagesToBuy_inner-grid\">
                        <div class=\"advatagesToBuy_inner-item\">
                            <img class=\"advatagesToBuy_inner-item_img\"
                                 src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-3.webp\">
                            <h3 class=\"advatagesToBuy_inner-item_title\">Широкий выбор</h3>
                            <p class=\"advatagesToBuy_inner-item_text\">Большое разнообразие необычных принтов и расцветок
                                постельного белья. Приятное сочетание оттенков украсит вашу спальню, создавая
                                неповторимую атмосферу уюта.</p>
                        </div>
                        <div class=\"advatagesToBuy_inner-item\">
                            <img class=\"advatagesToBuy_inner-item_img\"
                                 src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-2.webp\">
                            <h3 class=\"advatagesToBuy_inner-item_title\">Индивидуальный размер</h3>
                            <p class=\"advatagesToBuy_inner-item_text\">Основную часть представленных комплектов
                                постельного белья возможно изготовить по индивидуальным параметрам, мы также можем
                                сделать натяжную простыню для вашего матраса. Выберите в каталоге любую понравившуюся
                                модель, укажите в комментариях к заказу необходимые параметры и мы специально для вас
                                сошьем ее по вашим предпочтениям.</p>
                        </div>
                        <div class=\"advatagesToBuy_inner-item\">
                            <img class=\"advatagesToBuy_inner-item_img\"
                                 src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-1.webp\">
                            <h3 class=\"advatagesToBuy_inner-item_title\">Только лучшие ткани</h3>
                            <ul class=\"advatagesToBuy_inner-item_list\">
                                <li>Египетский и королевский хлопок — ткань имеет
                                    благородный блеск и шелковистость.
                                </li>
                                <li>
                                    Тенсель — Это экологически чистый продукт, не вызывает аллергии и раздражения.
                                    Обладает
                                    всеми полезными свойствами хлопка. А также обладает антибактериальным эффектом,
                                    подавляет развитие бактерий и пылевых клещей.
                                </li>
                            </ul>
                        </div>
                        <div class=\"advatagesToBuy_inner-item\">
                            <img class=\"advatagesToBuy_inner-item_img\"
                                 src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-5.webp\">
                            <h3 class=\"advatagesToBuy_inner-item_title\">Разумные цены за хорошее качество</h3>
                            <p class=\"advatagesToBuy_inner-item_text\">Выгодная стоимость белья по привлекательной цене
                                обусловлена тем, что после изготовления наши комплекты отправляются к вам, минуя
                                привычные для других производителей этапы, которые увеличивают стоимость постельного
                                белья в несколько раз.</p>
                        </div>
                        <div class=\"advatagesToBuy_inner-item\">
                            <img class=\"advatagesToBuy_inner-item_img\"
                                 src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-6.webp\">
                            <h3 class=\"advatagesToBuy_inner-item_title\">Мягкость и комфорт для кожи</h3>
                            <p class=\"advatagesToBuy_inner-item_text\">Постельное белье, представленное в магазине Dreams
                                Store — мягкое, приятное и комфортное к телу, эффектно выглядит. Натуральный состав
                                белья хорошо пропускает воздух, проводит тепло, не электризуется. Не линяет, не
                                выцветает при стирке и не покрывается катышками.</p>
                        </div>
                        <div class=\"advatagesToBuy_inner-item\">
                            <img class=\"advatagesToBuy_inner-item_img\"
                                 src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-7.webp\">
                            <h3 class=\"advatagesToBuy_inner-item_title\">Упаковка</h3>
                            <p class=\"advatagesToBuy_inner-item_text\">Мы заранее позаботились о том, чтобы вы могли
                                порадовать красивым и качественным бельем не только себя, но и своих родных и близких.
                                Комплект белья будет упакован в фирменную подарочную коробку.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        ";
        // line 113
        echo "        ";
        // line 114
        echo "        ";
        // line 115
        echo "        ";
        // line 116
        echo "    </div>
</div>
";
        // line 118
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
        return array (  178 => 118,  174 => 116,  172 => 115,  170 => 114,  168 => 113,  64 => 11,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/aboutcompany.twig", "");
    }
}