<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_529b61b8b33ebf5021a53e07f56b07ee611a410f9a8834d344a70e8f2aae3b2b extends Twig_Template
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
        $__internal_802dd809b717724b8e807d3cc27c3c0097bb2807208cd271737081d932c9917b = $this->env->getExtension("native_profiler");
        $__internal_802dd809b717724b8e807d3cc27c3c0097bb2807208cd271737081d932c9917b->enter($__internal_802dd809b717724b8e807d3cc27c3c0097bb2807208cd271737081d932c9917b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_802dd809b717724b8e807d3cc27c3c0097bb2807208cd271737081d932c9917b->leave($__internal_802dd809b717724b8e807d3cc27c3c0097bb2807208cd271737081d932c9917b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
