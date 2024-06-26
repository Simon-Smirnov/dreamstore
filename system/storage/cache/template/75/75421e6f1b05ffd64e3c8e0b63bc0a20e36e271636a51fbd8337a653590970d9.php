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
class __TwigTemplate_b12061feff6de1f95b83bd2e896136d95b3a3806f8818cf3a4ce95e69433d4eb extends \Twig\Template
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
            <section class=\"atelier-main\">
                <p class=\"atelier-main__text\">Мы предлагаем уникальную возможность создавать индивидуальные наборы
                    постельного белья, позволяя вам наслаждаться разнообразными комбинациями тканей и дизайнов.
                </p>
                <p class=\"atelier-main__text\">Каждое изделие можно изготовить в неограниченном количестве и различных
                    размерах, а также украсить
                    его дизайнерской обработкой или персонализированной вышивкой, чтобы придать ему уникальный
                    характер.</p>
                <img class=\"atelier-main__img\" src=\"";
        // line 21
        echo $this->env->getAssets();
        echo "/assets/images/atelier/main.webp\">
            </section>
            <section class=\"atelier-toOrder\">
                <div class=\"atelier-toOrder_info\">
                    <h2 class=\"section-title atelier-toOrder_info-title\">Пошив эксклюзивного белья на заказ</h2>
                    <p class=\"atelier-toOrder_info-text\">В мире волшебного постельного белья вы найдете всё, что сделает
                        ваш ночной отдых комфортным и приятным.</p>
                    <p class=\"atelier-toOrder_info-text\">С нами вы откроете новые грани снов! Ведь мы создаём комплекты,
                        которые вас любят!</p>
                </div>
                <div class=\"atelier-toOrder_images\">
                    <img class=\"atelier-toOrder_smallImg\" src=\"";
        // line 32
        echo $this->env->getAssets();
        echo "/assets/images/atelier/to_order_1.webp\">
                    <img class=\"atelier-toOrder_bigImg\" src=\"";
        // line 33
        echo $this->env->getAssets();
        echo "/assets/images/atelier/to_order_2.webp\">
                </div>
            </section>
            <section class=\"atelier-why\">
                <h2 class=\"section-title atelier-why__title\">Почему выбирают нас?</h2>
                <ul class=\"atelier-why__list\">
                    <li class=\"atelier-why__item\">Мы создаём изделия только из натуральных тканей, дружим с тенселем и
                        египетским хлопком. Эти материалы гипоаллергенны, особенны нежны, не требуют глажки и просты в
                        уходе. После ночи на постели из этих тканей вы уже не захотите возвращаться к другим
                    </li>
                    <li class=\"atelier-why__item\">Мы работаем с нестандартными заказами, размерами и количеством
                        предметов персонально для вас. Плюс, вы всегда найдете готовые комплекты в разных оттенках и
                        размерах
                    </li>
                    <li class=\"atelier-why__item\">У нас вы найдете как классические варианты, так и модели для любителей
                        сложных дизайнов. Комбинированные, с ушками, двойными ушками, рамками, кантами — мы не
                        ограничены идеями
                    </li>
                    <li class=\"atelier-why__item\">Хотите познакомиться с тканью ещё до заказа? Отправим вам образцы,
                        чтобы вы могли прочувствовать и ощутить весь комфорт и качество
                    </li>
                    <li class=\"atelier-why__item\">Мы не боимся матрасов и подушек любой высоты и формы! Круглый матрас
                        или высокий, ортопедическая подушка или детская — для каждого из них у нас свой «наряд»
                    </li>
                    <li class=\"atelier-why__item\">Мы создаём изделия только из натуральных тканей, дружим с тенселем и
                        египетским хлопком. Эти материалы гипоаллергенны, особенны нежны, не требуют глажки и просты в
                        уходе. После ночи на постели из этих тканей вы уже не захотите возвращаться к другим
                    </li>
                    <li class=\"atelier-why__item\">Помните, вот это невероятное постельное в дорогих отелях? И такое мы
                        тоже умеем! А помогает нам в этом страйп сатин и уникальный, самый нежный из возможных тенсель
                    </li>
                    <li class=\"atelier-why__item\">Наше бельё обладает всеми необходимыми сертификатами
                    </li>
                </ul>
            </section>

            <section class=\"atelier-info\">
                <p class=\"atelier-info__text\">Мы создаём атмосферу вашего сна уже более 6 лет. У нас работают только
                    швеи с большим стажем и опытом работы в премиум сегменте. Мы проверяем каждый стежок, чтобы быть
                    уверенным в качестве белья. Чтобы дарить вам только приятные эмоции. И чтобы каждый раз, возвращаясь
                    в кровать, вы знали, что с вами комплект, который вас любит.</p>
            </section>

            <section class=\"atelier-quiz\">
                <h2 class=\"section-title atelier-quiz__title\">Расчёт индивидуального комплекта</h2>
                <p class=\"atelier-quiz__info\">Создайте набор постельного белья с уникальным характером</p>
                <div class=\"atelier-quiz__block\">
                    <div class=\"atelier-quiz__image\">
                        <img src=\"";
        // line 81
        echo $this->env->getAssets();
        echo "/assets/images/atelier/quiz.webp\">
                    </div>
                </div>
            </section>

            ";
        // line 87
        echo "            ";
        // line 88
        echo "            ";
        // line 89
        echo "            ";
        // line 90
        echo "        </div>
    </div>
</div>
";
        // line 93
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
        return array (  165 => 93,  160 => 90,  158 => 89,  156 => 88,  154 => 87,  146 => 81,  95 => 33,  91 => 32,  77 => 21,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/atelier.twig", "");
    }
}
