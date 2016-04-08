<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0f8dbe030f61db69a68bb31055c52ea99496cb1d159427479ccb58b9742506e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_80b3fff3510480e993d2a23c5c88ace250dfdbe1ad2aba6795dd1a0129978969 = $this->env->getExtension("native_profiler");
        $__internal_80b3fff3510480e993d2a23c5c88ace250dfdbe1ad2aba6795dd1a0129978969->enter($__internal_80b3fff3510480e993d2a23c5c88ace250dfdbe1ad2aba6795dd1a0129978969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b3fff3510480e993d2a23c5c88ace250dfdbe1ad2aba6795dd1a0129978969->leave($__internal_80b3fff3510480e993d2a23c5c88ace250dfdbe1ad2aba6795dd1a0129978969_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e67fffe700017d09af6b96958d7145ab07732f86c8f59b65943d53d5610211b2 = $this->env->getExtension("native_profiler");
        $__internal_e67fffe700017d09af6b96958d7145ab07732f86c8f59b65943d53d5610211b2->enter($__internal_e67fffe700017d09af6b96958d7145ab07732f86c8f59b65943d53d5610211b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e67fffe700017d09af6b96958d7145ab07732f86c8f59b65943d53d5610211b2->leave($__internal_e67fffe700017d09af6b96958d7145ab07732f86c8f59b65943d53d5610211b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
