<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_84fdf960aa3fa4b26cc89a1d3f0e9c1dc65a9b68b620769a73ef2cb7f5847734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_ce7ea15086efca02f7241a8316daf97cb063fdee5d3b8fb27eaa0378a2e6c5db = $this->env->getExtension("native_profiler");
        $__internal_ce7ea15086efca02f7241a8316daf97cb063fdee5d3b8fb27eaa0378a2e6c5db->enter($__internal_ce7ea15086efca02f7241a8316daf97cb063fdee5d3b8fb27eaa0378a2e6c5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce7ea15086efca02f7241a8316daf97cb063fdee5d3b8fb27eaa0378a2e6c5db->leave($__internal_ce7ea15086efca02f7241a8316daf97cb063fdee5d3b8fb27eaa0378a2e6c5db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f014be50db0b8800013cadc7d41fc8c078a3ea4102e951cca296a3905f55b83d = $this->env->getExtension("native_profiler");
        $__internal_f014be50db0b8800013cadc7d41fc8c078a3ea4102e951cca296a3905f55b83d->enter($__internal_f014be50db0b8800013cadc7d41fc8c078a3ea4102e951cca296a3905f55b83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f014be50db0b8800013cadc7d41fc8c078a3ea4102e951cca296a3905f55b83d->leave($__internal_f014be50db0b8800013cadc7d41fc8c078a3ea4102e951cca296a3905f55b83d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
