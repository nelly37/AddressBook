<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5670947fe0466124a222d2cae18928a09a366ef46b9badb2a7a1a7900ac2068f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_6a031384edb5c86e4af5acaaf469e13c4b12ee6eeade0714f5f0d104b9560b40 = $this->env->getExtension("native_profiler");
        $__internal_6a031384edb5c86e4af5acaaf469e13c4b12ee6eeade0714f5f0d104b9560b40->enter($__internal_6a031384edb5c86e4af5acaaf469e13c4b12ee6eeade0714f5f0d104b9560b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a031384edb5c86e4af5acaaf469e13c4b12ee6eeade0714f5f0d104b9560b40->leave($__internal_6a031384edb5c86e4af5acaaf469e13c4b12ee6eeade0714f5f0d104b9560b40_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_309bf1c0f82e5a6d779e03433eb43333a9750422047e13341dccd0be33c1d60f = $this->env->getExtension("native_profiler");
        $__internal_309bf1c0f82e5a6d779e03433eb43333a9750422047e13341dccd0be33c1d60f->enter($__internal_309bf1c0f82e5a6d779e03433eb43333a9750422047e13341dccd0be33c1d60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_309bf1c0f82e5a6d779e03433eb43333a9750422047e13341dccd0be33c1d60f->leave($__internal_309bf1c0f82e5a6d779e03433eb43333a9750422047e13341dccd0be33c1d60f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
