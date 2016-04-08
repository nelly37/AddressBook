<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_02d31f6b7d68ba7fbe26343d8e23fcfb9d3ff3f6bd9936f12a605f2b8d1a2738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_8bae6914b46699185daaedda63d78f834fcfa95a7945abef8b7208ae0f79b452 = $this->env->getExtension("native_profiler");
        $__internal_8bae6914b46699185daaedda63d78f834fcfa95a7945abef8b7208ae0f79b452->enter($__internal_8bae6914b46699185daaedda63d78f834fcfa95a7945abef8b7208ae0f79b452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bae6914b46699185daaedda63d78f834fcfa95a7945abef8b7208ae0f79b452->leave($__internal_8bae6914b46699185daaedda63d78f834fcfa95a7945abef8b7208ae0f79b452_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0677482793b38df7d4d2d2b1387c30b4ee0afa8d8c4ef916b9d5e1a45f3549d3 = $this->env->getExtension("native_profiler");
        $__internal_0677482793b38df7d4d2d2b1387c30b4ee0afa8d8c4ef916b9d5e1a45f3549d3->enter($__internal_0677482793b38df7d4d2d2b1387c30b4ee0afa8d8c4ef916b9d5e1a45f3549d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_0677482793b38df7d4d2d2b1387c30b4ee0afa8d8c4ef916b9d5e1a45f3549d3->leave($__internal_0677482793b38df7d4d2d2b1387c30b4ee0afa8d8c4ef916b9d5e1a45f3549d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
