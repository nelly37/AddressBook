<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_cb94c429ae3eef447303b97c703cd7aac1e3d4b9ca5b6733fa5a37ad34aca58f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_64527f18fdb81dc02292e801d97c7335b13fe6da1a6c27babd1b9b5c5ef3b480 = $this->env->getExtension("native_profiler");
        $__internal_64527f18fdb81dc02292e801d97c7335b13fe6da1a6c27babd1b9b5c5ef3b480->enter($__internal_64527f18fdb81dc02292e801d97c7335b13fe6da1a6c27babd1b9b5c5ef3b480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64527f18fdb81dc02292e801d97c7335b13fe6da1a6c27babd1b9b5c5ef3b480->leave($__internal_64527f18fdb81dc02292e801d97c7335b13fe6da1a6c27babd1b9b5c5ef3b480_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9add076e2e3dce146f7364fadf387b4e45f24cbae3058da760ad92d74ee4369b = $this->env->getExtension("native_profiler");
        $__internal_9add076e2e3dce146f7364fadf387b4e45f24cbae3058da760ad92d74ee4369b->enter($__internal_9add076e2e3dce146f7364fadf387b4e45f24cbae3058da760ad92d74ee4369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9add076e2e3dce146f7364fadf387b4e45f24cbae3058da760ad92d74ee4369b->leave($__internal_9add076e2e3dce146f7364fadf387b4e45f24cbae3058da760ad92d74ee4369b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
