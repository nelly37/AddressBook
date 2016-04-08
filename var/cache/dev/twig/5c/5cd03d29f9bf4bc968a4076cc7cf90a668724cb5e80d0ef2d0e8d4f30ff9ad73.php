<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d9d64059376f37911377bd731ccdbdf98a24b32b0453fafd391ef617b908c384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c3be51599a5fcb93241c8aecc4f41e40736cbcf977626e5cdccbcbc55f9bebf2 = $this->env->getExtension("native_profiler");
        $__internal_c3be51599a5fcb93241c8aecc4f41e40736cbcf977626e5cdccbcbc55f9bebf2->enter($__internal_c3be51599a5fcb93241c8aecc4f41e40736cbcf977626e5cdccbcbc55f9bebf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3be51599a5fcb93241c8aecc4f41e40736cbcf977626e5cdccbcbc55f9bebf2->leave($__internal_c3be51599a5fcb93241c8aecc4f41e40736cbcf977626e5cdccbcbc55f9bebf2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad86a5a18b1431022b569fe12577ff26da3ed1daa6a1d9d1967650f2b2544c0e = $this->env->getExtension("native_profiler");
        $__internal_ad86a5a18b1431022b569fe12577ff26da3ed1daa6a1d9d1967650f2b2544c0e->enter($__internal_ad86a5a18b1431022b569fe12577ff26da3ed1daa6a1d9d1967650f2b2544c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ad86a5a18b1431022b569fe12577ff26da3ed1daa6a1d9d1967650f2b2544c0e->leave($__internal_ad86a5a18b1431022b569fe12577ff26da3ed1daa6a1d9d1967650f2b2544c0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
