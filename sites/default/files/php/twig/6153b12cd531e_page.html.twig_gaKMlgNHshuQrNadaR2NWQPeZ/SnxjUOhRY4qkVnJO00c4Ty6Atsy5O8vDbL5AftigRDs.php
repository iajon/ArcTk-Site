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

/* themes/custom/material_base/templates/layout/page.html.twig */
class __TwigTemplate_7edaec4bcee6eae4f89805edf757dc47f98dfe94b2ec55312d9871cd1778c9cd extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "<div id=\"page\" class=\"layout-container\">

  <div id=\"navbar\">
    ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
    <!--
    ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
    ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
    -->
  </div>

  <div id=\"drawer-overlay\"></div>
  <div id=\"drawer\">
    ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "drawer", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
  </div>

  <header id=\"header\" role=\"banner\">
    <div id=\"header-content\">
      ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
    </div>
    <div id=\"header-bg\">
      ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_bg", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
    </div>
  </header>

  ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "actions", [], "any", false, false, true, 70)) {
            // line 71
            echo "    <div id=\"actions\">
      ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "actions", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "
  <div id=\"content\">
    ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_main", [], "any", false, false, true, 77)) {
            // line 78
            echo "      <div id=\"before-main\">
        ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_main", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 82
        echo "
    <main role=\"main\" id=\"main\" class=\"container\">
      <div id=\"main-content\" tabindex=\"-1\">";
        // line 85
        echo "
        <div class=\"card-holder\">
          ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
          ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
          ";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "

          <div class=\"layout-content\">
            ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
          </div>";
        // line 94
        echo "
        </div>";
        // line 96
        echo "
        ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_secondary", [], "any", false, false, true, 97)) {
            // line 98
            echo "          <div id=\"content-secondary\">
            ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_secondary", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 102
        echo "      </div>";
        // line 103
        echo "
      ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 104)) {
            // line 105
            echo "        <aside id=\"sidebar-first\" class=\"sidebar layout-sidebar-first\" role=\"complementary\">
          ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 109
        echo "
      ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 110)) {
            // line 111
            echo "        <aside id=\"sidebar-second\" class=\"sidebar layout-sidebar-second\" role=\"complementary\">
          ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 115
        echo "
    </main>";
        // line 117
        echo "
    ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_main", [], "any", false, false, true, 118)) {
            // line 119
            echo "      <div id=\"after-main\">
        ";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_main", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 123
        echo "
  </div>";
        // line 125
        echo "
  <footer id=\"footer\" role=\"contentinfo\">
    ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
    <div id=\"footer-content\">
      ";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "
    </div>
  </footer>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/material_base/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 129,  206 => 127,  202 => 125,  199 => 123,  193 => 120,  190 => 119,  188 => 118,  185 => 117,  182 => 115,  176 => 112,  173 => 111,  171 => 110,  168 => 109,  162 => 106,  159 => 105,  157 => 104,  154 => 103,  152 => 102,  146 => 99,  143 => 98,  141 => 97,  138 => 96,  135 => 94,  131 => 92,  125 => 89,  121 => 88,  117 => 87,  113 => 85,  109 => 82,  103 => 79,  100 => 78,  98 => 77,  94 => 75,  88 => 72,  85 => 71,  83 => 70,  76 => 66,  70 => 63,  62 => 58,  53 => 52,  49 => 51,  44 => 49,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/material_base/templates/layout/page.html.twig", "/var/www/html/themes/custom/material_base/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 70);
        static $filters = array("escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
