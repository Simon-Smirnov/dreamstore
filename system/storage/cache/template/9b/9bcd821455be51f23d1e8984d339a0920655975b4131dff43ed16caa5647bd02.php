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
class __TwigTemplate_75c6460e4c80507c806b605dec96d31ab4ee68aeae89879196c565fb5aa64992 extends \Twig\Template
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
                    <div class=\"atelier-quiz__body\">
                        <div class=\"atelier-quiz__step1\"></div>
                        <div class=\"atelier-quiz__step2\"></div>
                        <div class=\"atelier-quiz__step3\"></div>
                        <div class=\"atelier-quiz__step4\"></div>
                        <div class=\"atelier-quiz__step5\"></div>
                    </div>
                </div>
            </section>

            <section class=\"atelier-models\">
                <h2 class=\"section-title atelier-models__title\">Описание моделей</h2>
                <div class=\"atelier-models__grid\">
                    ";
        // line 96
        if (($context["models"] ?? null)) {
            // line 97
            echo "                        <div class=\"atelier-models__item\">
                            <picture>
                                <source srcset=\"";
            // line 99
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 99), "webp", [], "any", false, false, false, 99);
            echo "\">
                                <img class=\"atelier-models__image\" alt=\"";
            // line 100
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 100);
            echo "\"
                                     title=\"";
            // line 101
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 101);
            echo "\"
                                     src=\"";
            // line 102
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 102), "default", [], "any", false, false, false, 102);
            echo "\" loading=\"lazy\">
                            </picture>
                            <h4 class=\"atelier-models__title\"></h4>
                        </div>
                    ";
        }
        // line 107
        echo "                </div>
                <button class=\"btn btn-second\">Показать еще</button>
            </section>

            <section class=\"atelier-form\">
                <div class=\"atelier-form__img\">
                    <img src=\"";
        // line 113
        echo $this->env->getAssets();
        echo "/assets/images/atelier/form.webp\">
                </div>
                <div class=\"atelier-form_body\">
                    <form class=\"atelier-form_form\">
                        <h2 class=\"section-title atelier-form_form-title\">Заявка на расчёт</h2>
                        <p class=\"atelier-form_form-text\">Оставьте Ваши контакты для связи. Мы свяжемся с Вами, уточним
                            Ваши пожелания и рассчитаем стоимость заказа</p>
                        <div class=\"atelier-form_form-item\">
                            <input class=\"input-text\" name=\"name\">
                            <div class=\"name-error error\"></div>
                        </div>
                        <div class=\"atelier-form_form-item\">
                            <input class=\"input-text\" name=\"email\">
                            <div class=\"email-error error\"></div>
                        </div>
                        <div class=\"atelier-form_form-item\">
                            <textarea class=\"input-text\" name=\"message\">

                            </textarea>
                            <div class=\"message-error error\"></div>
                        </div>
                        <button class=\"btn btn-primary\">Отправить</button>
                        <div>
                            <label class=\"agree\">
                                <input class=\"input-checkbox\" name=\"agree\" type=\"checkbox\">
                                <span>Даю согласие на <a>обработку персональных данных</a></span>
                            </label>
                            <div class=\"agree-error error\">Вы должны дать согласие на обработку персональных данных
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            ";
        // line 148
        echo "            ";
        // line 149
        echo "            ";
        // line 150
        echo "            ";
        // line 151
        echo "        </div>
    </div>
</div>
";
        // line 154
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
        return array (  246 => 154,  241 => 151,  239 => 150,  237 => 149,  235 => 148,  198 => 113,  190 => 107,  182 => 102,  178 => 101,  174 => 100,  170 => 99,  166 => 97,  164 => 96,  146 => 81,  95 => 33,  91 => 32,  77 => 21,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/atelier.twig", "");
    }
}
