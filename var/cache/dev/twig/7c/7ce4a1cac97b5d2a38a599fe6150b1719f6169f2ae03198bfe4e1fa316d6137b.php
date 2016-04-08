<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3226f611e552a034355ea502c4dcbd73694e2a8e80ec603236cfd8e064e49ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_80643e50c025043c9391dfd30df3664f19469a0c63055e4c19f7ac27eb8f9b7a = $this->env->getExtension("native_profiler");
        $__internal_80643e50c025043c9391dfd30df3664f19469a0c63055e4c19f7ac27eb8f9b7a->enter($__internal_80643e50c025043c9391dfd30df3664f19469a0c63055e4c19f7ac27eb8f9b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80643e50c025043c9391dfd30df3664f19469a0c63055e4c19f7ac27eb8f9b7a->leave($__internal_80643e50c025043c9391dfd30df3664f19469a0c63055e4c19f7ac27eb8f9b7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_878c30b10856d5ea7878e07ef71d3d5a4b9f9534e9a3bae049ad3a946bc62446 = $this->env->getExtension("native_profiler");
        $__internal_878c30b10856d5ea7878e07ef71d3d5a4b9f9534e9a3bae049ad3a946bc62446->enter($__internal_878c30b10856d5ea7878e07ef71d3d5a4b9f9534e9a3bae049ad3a946bc62446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_878c30b10856d5ea7878e07ef71d3d5a4b9f9534e9a3bae049ad3a946bc62446->leave($__internal_878c30b10856d5ea7878e07ef71d3d5a4b9f9534e9a3bae049ad3a946bc62446_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
