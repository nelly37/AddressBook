<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b1e3c1f0f93a040d6c3bf2221852f107363d85469287a68323d930e86f36a76f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42c7a6cb49202d4e7a924d823e7e00ab8e86dbc972f1504553d8951851ab9870 = $this->env->getExtension("native_profiler");
        $__internal_42c7a6cb49202d4e7a924d823e7e00ab8e86dbc972f1504553d8951851ab9870->enter($__internal_42c7a6cb49202d4e7a924d823e7e00ab8e86dbc972f1504553d8951851ab9870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_42c7a6cb49202d4e7a924d823e7e00ab8e86dbc972f1504553d8951851ab9870->leave($__internal_42c7a6cb49202d4e7a924d823e7e00ab8e86dbc972f1504553d8951851ab9870_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
