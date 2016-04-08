<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b9accdb12d32a0a04187146bdf0df539f2e0e62c9309a583a1ffaa1f6cd94271 extends Twig_Template
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
        $__internal_e525453438c3e3e50c77ffa6f530ca6ce6d55f73cdfc47f72a7815f0c67429c5 = $this->env->getExtension("native_profiler");
        $__internal_e525453438c3e3e50c77ffa6f530ca6ce6d55f73cdfc47f72a7815f0c67429c5->enter($__internal_e525453438c3e3e50c77ffa6f530ca6ce6d55f73cdfc47f72a7815f0c67429c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e525453438c3e3e50c77ffa6f530ca6ce6d55f73cdfc47f72a7815f0c67429c5->leave($__internal_e525453438c3e3e50c77ffa6f530ca6ce6d55f73cdfc47f72a7815f0c67429c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
