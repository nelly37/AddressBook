<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b628a2bf3c34124fddd0ac66ba028c0a2f21825ff6f70c02b4ccb8d1613bd5c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_eea265fb2fbddd92dedbd40e73e55e95b20270df33203b45b05c67c9d798fcc4 = $this->env->getExtension("native_profiler");
        $__internal_eea265fb2fbddd92dedbd40e73e55e95b20270df33203b45b05c67c9d798fcc4->enter($__internal_eea265fb2fbddd92dedbd40e73e55e95b20270df33203b45b05c67c9d798fcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eea265fb2fbddd92dedbd40e73e55e95b20270df33203b45b05c67c9d798fcc4->leave($__internal_eea265fb2fbddd92dedbd40e73e55e95b20270df33203b45b05c67c9d798fcc4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f773eebaa900a863a8f39e2fad8521d9b3b501dffee280aa0798cacf198cc2b7 = $this->env->getExtension("native_profiler");
        $__internal_f773eebaa900a863a8f39e2fad8521d9b3b501dffee280aa0798cacf198cc2b7->enter($__internal_f773eebaa900a863a8f39e2fad8521d9b3b501dffee280aa0798cacf198cc2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f773eebaa900a863a8f39e2fad8521d9b3b501dffee280aa0798cacf198cc2b7->leave($__internal_f773eebaa900a863a8f39e2fad8521d9b3b501dffee280aa0798cacf198cc2b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
