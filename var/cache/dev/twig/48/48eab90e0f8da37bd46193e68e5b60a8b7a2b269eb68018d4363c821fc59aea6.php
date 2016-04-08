<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3242a7ded57b2a9e1ff53161aa415b9212f3b52815bbc73fced7e9a146687186 extends Twig_Template
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
        $__internal_04773528f186c1dc5fb7a913c8ae366d4c15cb98387cdccb8543a69b9348f2cf = $this->env->getExtension("native_profiler");
        $__internal_04773528f186c1dc5fb7a913c8ae366d4c15cb98387cdccb8543a69b9348f2cf->enter($__internal_04773528f186c1dc5fb7a913c8ae366d4c15cb98387cdccb8543a69b9348f2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_04773528f186c1dc5fb7a913c8ae366d4c15cb98387cdccb8543a69b9348f2cf->leave($__internal_04773528f186c1dc5fb7a913c8ae366d4c15cb98387cdccb8543a69b9348f2cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
