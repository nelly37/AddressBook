<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0891d4bd590a75887dce72551bbd078d1b649c4545c53e9c645651f99deffcdf extends Twig_Template
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
        $__internal_419cb45a5eef3db4c82458c76def3a374d36d275cd1701d2b31096773608f19b = $this->env->getExtension("native_profiler");
        $__internal_419cb45a5eef3db4c82458c76def3a374d36d275cd1701d2b31096773608f19b->enter($__internal_419cb45a5eef3db4c82458c76def3a374d36d275cd1701d2b31096773608f19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_419cb45a5eef3db4c82458c76def3a374d36d275cd1701d2b31096773608f19b->leave($__internal_419cb45a5eef3db4c82458c76def3a374d36d275cd1701d2b31096773608f19b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
