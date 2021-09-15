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

/* themes/contrib/mytheme/templates/system/page--node--1.html.twig */
class __TwigTemplate_1570ec8781587ae3c2950f0b768e5a0e551480f47093ce3bea42adfb5118d13c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mytheme/global-page-styling"), "html", null, true);
        echo "

";
        // line 56
        $macros["myMacros"] = $this->macros["myMacros"] = $this->loadTemplate("@mytheme/macros.twig", "themes/contrib/mytheme/templates/system/page--node--1.html.twig", 56)->unwrap();
        // line 57
        echo "
";
        // line 58
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 58), "fluid_container", [], "any", false, false, true, 58)) ? ("container-fluid") : ("container"));
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 60) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 60))) {
            // line 61
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 98
        echo "
";
        // line 100
        $this->displayBlock('main', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 173)) {
            // line 174
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 61
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    ";
        // line 63
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["theme"] ?? null), "settings", [], "any", false, false, true, 65), "navbar_inverse", [], "any", false, false, true, 65)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["theme"] ?? null), "settings", [], "any", false, false, true, 66), "navbar_position", [], "any", false, false, true, 66)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 66), "navbar_position", [], "any", false, false, true, 66), 66, $this->source)))) : (($context["container"] ?? null)))];
        // line 69
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 70
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 70)) {
            // line 71
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 71, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 73
        echo "      <div class=\"navbar-header\">
        ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
        ";
        // line 76
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 76)) {
            // line 77
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 84
        echo "      </div>

      ";
        // line 87
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 87)) {
            // line 88
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 92
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 92)) {
            // line 93
            echo "        </div>
      ";
        }
        // line 95
        echo "    </header>
  ";
    }

    // line 100
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 101, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 105
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 105)) {
            // line 106
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 111
            echo "      ";
        }
        // line 112
        echo "
      ";
        // line 114
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 114)) {
            // line 115
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 120
            echo "      ";
        }
        // line 121
        echo "
      ";
        // line 123
        echo "      ";
        // line 124
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 125
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 125) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 125))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 126
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 126) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 126)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 127
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 127) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 127)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 128
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 128)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 128)))) ? ("col-sm-12") : (""))];
        // line 131
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 131), 131, $this->source), "html", null, true);
        echo ">

        ";
        // line 134
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 134)) {
            // line 135
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 138
            echo "        ";
        }
        // line 139
        echo "
        ";
        // line 141
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 141)) {
            // line 142
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 145
            echo "        ";
        }
        // line 146
        echo "
        ";
        // line 148
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 152
        echo "
        ";
        // line 154
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mytheme", [], "any", false, false, true, 154)) {
            // line 155
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mytheme", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 157
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["myMacros"], "macro_mythememacro", ["macro_class", "This macro is called from page node twig"], 157, $context, $this->getSourceContext()));
        echo "
        ";
        // line 158
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_var"] ?? null), 158, $this->source), "html", null, true);
        echo "
      </section>

      ";
        // line 162
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 162)) {
            // line 163
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 168
            echo "      ";
        }
        // line 169
        echo "    </div>
  </div>
";
    }

    // line 106
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 115
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 135
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 142
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 148
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "          <a id=\"main-content\"></a>
          ";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 163
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 165
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 174
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 175, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 176
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/mytheme/templates/system/page--node--1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 176,  350 => 175,  346 => 174,  339 => 165,  336 => 164,  332 => 163,  326 => 150,  323 => 149,  319 => 148,  312 => 143,  308 => 142,  301 => 136,  297 => 135,  290 => 117,  287 => 116,  283 => 115,  276 => 108,  273 => 107,  269 => 106,  263 => 169,  260 => 168,  257 => 163,  254 => 162,  248 => 158,  243 => 157,  237 => 155,  234 => 154,  231 => 152,  228 => 148,  225 => 146,  222 => 145,  219 => 142,  216 => 141,  213 => 139,  210 => 138,  207 => 135,  204 => 134,  198 => 131,  196 => 128,  195 => 127,  194 => 126,  193 => 125,  192 => 124,  190 => 123,  187 => 121,  184 => 120,  181 => 115,  178 => 114,  175 => 112,  172 => 111,  169 => 106,  166 => 105,  159 => 101,  155 => 100,  150 => 95,  146 => 93,  143 => 92,  137 => 89,  134 => 88,  131 => 87,  127 => 84,  118 => 78,  115 => 77,  112 => 76,  108 => 74,  105 => 73,  99 => 71,  97 => 70,  92 => 69,  90 => 66,  89 => 65,  88 => 63,  86 => 62,  82 => 61,  76 => 174,  74 => 173,  71 => 172,  69 => 100,  66 => 98,  62 => 61,  60 => 60,  58 => 58,  55 => 57,  53 => 56,  48 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{{ attach_library('mytheme/global-page-styling') }}

{% import '@mytheme/macros.twig' as myMacros %}

{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        {% endif %}
      </div>

      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}

        {# My Theme #}
        {% if page.mytheme %}
            {{ page.mytheme }}
        {% endif %}
        {{ myMacros.mythememacro(\"macro_class\", 'This macro is called from page node twig') }}
        {{ global_var }}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}
", "themes/contrib/mytheme/templates/system/page--node--1.html.twig", "C:\\xampp\\htdocs\\newdemo\\themes\\contrib\\mytheme\\templates\\system\\page--node--1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 56, "set" => 58, "if" => 60, "block" => 61);
        static $filters = array("escape" => 54, "clean_class" => 66, "t" => 78);
        static $functions = array("attach_library" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'if', 'block'],
                ['escape', 'clean_class', 't'],
                ['attach_library']
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
