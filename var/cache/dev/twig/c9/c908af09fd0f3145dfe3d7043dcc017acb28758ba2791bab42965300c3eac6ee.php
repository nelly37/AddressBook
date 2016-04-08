<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a00e00a248a4b0d04e9f2adcd7a1d0f956f81a919e701f7a41194f697094ef3f extends Twig_Template
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
        $__internal_004fceb6aa4dbd2dcea5ed721bae8fceb14fc06adb2529ef5a1948f7fb12c816 = $this->env->getExtension("native_profiler");
        $__internal_004fceb6aa4dbd2dcea5ed721bae8fceb14fc06adb2529ef5a1948f7fb12c816->enter($__internal_004fceb6aa4dbd2dcea5ed721bae8fceb14fc06adb2529ef5a1948f7fb12c816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_004fceb6aa4dbd2dcea5ed721bae8fceb14fc06adb2529ef5a1948f7fb12c816->leave($__internal_004fceb6aa4dbd2dcea5ed721bae8fceb14fc06adb2529ef5a1948f7fb12c816_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
