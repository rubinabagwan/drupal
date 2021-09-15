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

/* @mytheme/macros.twig */
class __TwigTemplate_f692e84c44b94192ef2bd5175f70a417ec337c9060a6b52100ec145bba42c7c6 extends \Twig\Template
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
    }

    // line 1
    public function macro_mythememacro($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "<div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 2, $this->source), "mythemeclassmacro")) : ("mythemeclassmacro")), "html", null, true);
            echo " > ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_upper_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 2, $this->source), "This text from Macro")) : ("This text from Macro"))), "html", null, true);
            echo " </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@mytheme/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro mythememacro(name, value) %}
<div class={{ name|default('mythemeclassmacro')}} > {{ value|default('This text from Macro')|upper }} </div>
{% endmacro %}", "@mytheme/macros.twig", "C:\\xampp\\htdocs\\newdemo\\themes\\contrib\\mytheme\\templates\\macros.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 1);
        static $filters = array("escape" => 2, "default" => 2, "upper" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['macro'],
                ['escape', 'default', 'upper'],
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
