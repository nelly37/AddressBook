<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_fbc1c4fb73154c28983149650f4913cd7d20692d40cca9f30ee3797152ced248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d80225d78401476900efe37cf691f96252345adb7556ca27db247ae6e4e7c60a = $this->env->getExtension("native_profiler");
        $__internal_d80225d78401476900efe37cf691f96252345adb7556ca27db247ae6e4e7c60a->enter($__internal_d80225d78401476900efe37cf691f96252345adb7556ca27db247ae6e4e7c60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d80225d78401476900efe37cf691f96252345adb7556ca27db247ae6e4e7c60a->leave($__internal_d80225d78401476900efe37cf691f96252345adb7556ca27db247ae6e4e7c60a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c254f162e908385a6232b1bdd6c115a6394b7db055247283fe63d6afc9e67d7 = $this->env->getExtension("native_profiler");
        $__internal_9c254f162e908385a6232b1bdd6c115a6394b7db055247283fe63d6afc9e67d7->enter($__internal_9c254f162e908385a6232b1bdd6c115a6394b7db055247283fe63d6afc9e67d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9c254f162e908385a6232b1bdd6c115a6394b7db055247283fe63d6afc9e67d7->leave($__internal_9c254f162e908385a6232b1bdd6c115a6394b7db055247283fe63d6afc9e67d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
