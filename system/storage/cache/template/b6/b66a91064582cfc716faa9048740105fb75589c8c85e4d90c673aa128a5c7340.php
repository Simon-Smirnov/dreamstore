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

/* dreamsstore/template/information/atelier.twig */
class __TwigTemplate_8de8dc78d2250adeed1356273459faf1ce86e9aa80ede576943a4b2e6dedd5c2 extends \Twig\Template
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
                    </div>
                    <div class=\"about_company-inner_images\">
                        <div class=\"about_company-inner_images-one\">
                            <img src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/aboutcompany/aboutcompany_4.webp\">
                        </div>
                        <div class=\"about_company-inner_images-two\">
                            <img src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/aboutcompany/aboutcompany_3.webp\">
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
        // line 110
        if (($context["categories"] ?? null)) {
            // line 111
            echo "            <section class=\"catalog\">
                <div class=\"container\">
                    <div class=\"catalog-inner\">
                        <h2 class=\"section-title\">Наш ассортимент</h2>
                        <nav>
                            <ul class=\"catalog-inner_grid\">
                                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 118
                echo "                                    <li class=\"catalog-inner_item\">
                                        <a class=\"catalog-inner_link\" href=\"";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 119);
                echo "\">
                                            <picture>
                                                <source srcset=\"";
                // line 121
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 121), "webp", [], "any", false, false, false, 121);
                echo "\">
                                                <img class=\"catalog-inner_link-img\" src=\"";
                // line 122
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 122), "default", [], "any", false, false, false, 122);
                echo "\"
                                                     loading=\"lazy\">
                                            </picture>
                                            <h4 class=\"catalog-inner_link-title\">";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 125);
                echo "</h4>
                                        </a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
        ";
        }
        // line 135
        echo "        <section class=\"fabric-samples\">
            <div class=\"container\">
                <div class=\"fabric-samples-inner\">
                    <div class=\"fabric-samples-inner_block\">
                        <h2 class=\"fabric-samples-inner_block-title\">Образцы ткани бесплатно</h2>
                        <p class=\"fabric-samples-inner_block-text\">Чтобы быть уверенным в том, что цветовая гамма
                            постельного белья будет идеально подходить под ваш интерьер, мы рады предложить вам оформить
                            заказ на образцы используемых тканей со всей выборкой расцветок бесплатно в любую точку
                            России</p>
                    </div>
                    <div class=\"fabric-samples-inner_btn\">
                        <a class=\"btn btn-primary\">Оставить заявку</a>
                    </div>
                </div>
            </div>
        </section>

        ";
        // line 153
        echo "        ";
        // line 154
        echo "        ";
        // line 155
        echo "        ";
        // line 156
        echo "    </div>
</div>
";
        // line 158
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/atelier.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 158,  241 => 156,  239 => 155,  237 => 154,  235 => 153,  216 => 135,  208 => 129,  198 => 125,  192 => 122,  188 => 121,  183 => 119,  180 => 118,  176 => 117,  168 => 111,  166 => 110,  64 => 11,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/atelier.twig", "");
    }
}
