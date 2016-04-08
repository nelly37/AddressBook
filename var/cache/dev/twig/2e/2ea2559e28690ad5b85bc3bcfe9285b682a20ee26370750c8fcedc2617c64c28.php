<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_729ffd18451aa9ba9215ba983c227133e69af16c84621b360409d7f3eb6a7d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_387dcebecebad136432a32b295313d5fe3ee00b2c9c3048d41a25ceaa1212233 = $this->env->getExtension("native_profiler");
        $__internal_387dcebecebad136432a32b295313d5fe3ee00b2c9c3048d41a25ceaa1212233->enter($__internal_387dcebecebad136432a32b295313d5fe3ee00b2c9c3048d41a25ceaa1212233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_387dcebecebad136432a32b295313d5fe3ee00b2c9c3048d41a25ceaa1212233->leave($__internal_387dcebecebad136432a32b295313d5fe3ee00b2c9c3048d41a25ceaa1212233_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0a6ad6884c0d5790935d1b6f99d55ecac507c692db8cbd976fbd0411636f4b2 = $this->env->getExtension("native_profiler");
        $__internal_d0a6ad6884c0d5790935d1b6f99d55ecac507c692db8cbd976fbd0411636f4b2->enter($__internal_d0a6ad6884c0d5790935d1b6f99d55ecac507c692db8cbd976fbd0411636f4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d0a6ad6884c0d5790935d1b6f99d55ecac507c692db8cbd976fbd0411636f4b2->leave($__internal_d0a6ad6884c0d5790935d1b6f99d55ecac507c692db8cbd976fbd0411636f4b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
