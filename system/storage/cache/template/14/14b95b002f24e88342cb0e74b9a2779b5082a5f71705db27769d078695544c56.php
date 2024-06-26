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
class __TwigTemplate_794aa361cc97e683df8f286783b81baeb5c7153b5f03777133753904686a9213 extends \Twig\Template
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
<div id=\"information-atelier\">
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
        <div id=\"content\" class=\"atelier\">
            <div class=\"container\"><h1 class=\"page-title\">";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1></div>
            <section class=\"about_company\">
                <div class=\"container\">
                    <div class=\"about_company-inner\">
                        <div class=\"about_company-inner_block\">
                            <h3 class=\"about_company-inner_block-title\">О компании</h3>
                            <p class=\"about_company-inner_block-text\">Dreams Store — это интернет-магазин постельного
                                белья,
                                который поможет вам создать уютную атмосферу для комфортного сна и отдыха. Наша компания
                                уже
                                более трёх лет радует своих клиентов постельным бельем из экологических натуральных
                                материалов. </p>
                            <p class=\"about_company-inner_block-text\">Заказывая в Dreams Store, вы получите недорогое
                                качественное постельное белье. Оно долго прослужит вам, сохраняя свой первоначальный
                                внешний
                                вид.</p>
                            <p class=\"about_company-inner_block-text\">Многочисленное количество отзывов покупателей
                                помогает
                                нам двигаться дальше и становиться лучше. Мы не просто предлагаем качественный и
                                красивый
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
                                <p class=\"advatagesToBuy_inner-item_text\">Большое разнообразие необычных принтов и
                                    расцветок
                                    постельного белья. Приятное сочетание оттенков украсит вашу спальню, создавая
                                    неповторимую атмосферу уюта.</p>
                            </div>
                            <div class=\"advatagesToBuy_inner-item\">
                                <img class=\"advatagesToBuy_inner-item_img\"
                                     src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-2.webp\">
                                <h3 class=\"advatagesToBuy_inner-item_title\">Индивидуальный размер</h3>
                                <p class=\"advatagesToBuy_inner-item_text\">Основную часть представленных комплектов
                                    постельного белья возможно изготовить по индивидуальным параметрам, мы также можем
                                    сделать натяжную простыню для вашего матраса. Выберите в каталоге любую
                                    понравившуюся
                                    модель, укажите в комментариях к заказу необходимые параметры и мы специально для
                                    вас
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
                                <p class=\"advatagesToBuy_inner-item_text\">Выгодная стоимость белья по привлекательной
                                    цене
                                    обусловлена тем, что после изготовления наши комплекты отправляются к вам, минуя
                                    привычные для других производителей этапы, которые увеличивают стоимость постельного
                                    белья в несколько раз.</p>
                            </div>
                            <div class=\"advatagesToBuy_inner-item\">
                                <img class=\"advatagesToBuy_inner-item_img\"
                                     src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-6.webp\">
                                <h3 class=\"advatagesToBuy_inner-item_title\">Мягкость и комфорт для кожи</h3>
                                <p class=\"advatagesToBuy_inner-item_text\">Постельное белье, представленное в магазине
                                    Dreams
                                    Store — мягкое, приятное и комфортное к телу, эффектно выглядит. Натуральный состав
                                    белья хорошо пропускает воздух, проводит тепло, не электризуется. Не линяет, не
                                    выцветает при стирке и не покрывается катышками.</p>
                            </div>
                            <div class=\"advatagesToBuy_inner-item\">
                                <img class=\"advatagesToBuy_inner-item_img\"
                                     src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/advantages/advantages-7.webp\">
                                <h3 class=\"advatagesToBuy_inner-item_title\">Упаковка</h3>
                                <p class=\"advatagesToBuy_inner-item_text\">Мы заранее позаботились о том, чтобы вы могли
                                    порадовать красивым и качественным бельем не только себя, но и своих родных и
                                    близких.
                                    Комплект белья будет упакован в фирменную подарочную коробку.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            ";
        // line 122
        if (($context["categories"] ?? null)) {
            // line 123
            echo "                <section class=\"catalog\">
                    <div class=\"container\">
                        <div class=\"catalog-inner\">
                            <h2 class=\"section-title\">Наш ассортимент</h2>
                            <nav>
                                <ul class=\"catalog-inner_grid\">
                                    ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 130
                echo "                                        <li class=\"catalog-inner_item\">
                                            <a class=\"catalog-inner_link\" href=\"";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 131);
                echo "\">
                                                <picture>
                                                    <source srcset=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 133), "webp", [], "any", false, false, false, 133);
                echo "\">
                                                    <img class=\"catalog-inner_link-img\"
                                                         src=\"";
                // line 135
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 135), "default", [], "any", false, false, false, 135);
                echo "\"
                                                         loading=\"lazy\">
                                                </picture>
                                                <h4 class=\"catalog-inner_link-title\">";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 138);
                echo "</h4>
                                            </a>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>
            ";
        }
        // line 148
        echo "            <section class=\"fabric-samples\">
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

            ";
        // line 167
        echo "            ";
        // line 168
        echo "            ";
        // line 169
        echo "            ";
        // line 170
        echo "        </div>
    </div>
</div>
";
        // line 173
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
        return array (  260 => 173,  255 => 170,  253 => 169,  251 => 168,  249 => 167,  229 => 148,  221 => 142,  211 => 138,  205 => 135,  200 => 133,  195 => 131,  192 => 130,  188 => 129,  180 => 123,  178 => 122,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/atelier.twig", "");
    }
}
