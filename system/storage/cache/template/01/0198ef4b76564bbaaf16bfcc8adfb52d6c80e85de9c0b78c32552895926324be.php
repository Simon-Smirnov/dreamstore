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

/* common/footer.twig */
class __TwigTemplate_55e81602b6f8f3755b941230de6d406edb37ff0ee5ba8bafccdbfa82013cd030 extends \Twig\Template
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
        echo "<footer id=\"footer\">";
        echo ($context["text_footer"] ?? null);
        echo "<br/>";
        echo ($context["text_version"] ?? null);
        echo "</footer></div>
";
        // line 2
        if (($context["logged"] ?? null)) {
            // line 3
            echo "    <script>
        \$('#button-developer, #header-developer').on('click', function () {
            let \$button = \$(this);
            \$.ajax({
                url: 'index.php?route=common/developer&user_token=";
            // line 7
            echo ($context["user_token"] ?? null);
            echo "',
                dataType: 'html',
                beforeSend: function () {
                    \$button.button('loading');
                },
                complete: function () {
                    \$button.button('reset');
                },
                success: function (html) {
                    \$('#modal-developer').remove();

                    \$('body').prepend('<div id=\"modal-developer\" class=\"modal\">' + html + '</div>');

                    \$('#modal-developer').modal('show');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
    </script>
";
        }
        // line 29
        echo "<script src=\"view/javascript/script.js\" type=\"text/javascript\"></script>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  52 => 7,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/footer.twig", "");
    }
}
