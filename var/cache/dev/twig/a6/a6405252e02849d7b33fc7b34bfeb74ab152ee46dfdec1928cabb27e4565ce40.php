<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0b1e81261f8390722ab5a81d2046d109adee6e5b23ed164920dcba0adf5f56ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c2f6fa1cead3d3cfc69130eb84288bec942f1f46bdf672074193f597120eff62 = $this->env->getExtension("native_profiler");
        $__internal_c2f6fa1cead3d3cfc69130eb84288bec942f1f46bdf672074193f597120eff62->enter($__internal_c2f6fa1cead3d3cfc69130eb84288bec942f1f46bdf672074193f597120eff62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f6fa1cead3d3cfc69130eb84288bec942f1f46bdf672074193f597120eff62->leave($__internal_c2f6fa1cead3d3cfc69130eb84288bec942f1f46bdf672074193f597120eff62_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d21b69c4adf42fcb918f8b719f8c087192d8cef995f8e592a84146b514a8f127 = $this->env->getExtension("native_profiler");
        $__internal_d21b69c4adf42fcb918f8b719f8c087192d8cef995f8e592a84146b514a8f127->enter($__internal_d21b69c4adf42fcb918f8b719f8c087192d8cef995f8e592a84146b514a8f127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d21b69c4adf42fcb918f8b719f8c087192d8cef995f8e592a84146b514a8f127->leave($__internal_d21b69c4adf42fcb918f8b719f8c087192d8cef995f8e592a84146b514a8f127_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
