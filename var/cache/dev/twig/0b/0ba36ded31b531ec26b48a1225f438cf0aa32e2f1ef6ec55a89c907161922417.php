<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_9b8e0b48d90e1ce25009ae701abce47ba5832c041cdfa1c299a0e2e2d520c313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_02eb6b3209e811c7b89712b50832e1c4b988217eea7c40cb6cf2fcb433529cb5 = $this->env->getExtension("native_profiler");
        $__internal_02eb6b3209e811c7b89712b50832e1c4b988217eea7c40cb6cf2fcb433529cb5->enter($__internal_02eb6b3209e811c7b89712b50832e1c4b988217eea7c40cb6cf2fcb433529cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02eb6b3209e811c7b89712b50832e1c4b988217eea7c40cb6cf2fcb433529cb5->leave($__internal_02eb6b3209e811c7b89712b50832e1c4b988217eea7c40cb6cf2fcb433529cb5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85c02d6a4b734f8948261e875d400e4ff1cfa19ba8170e84a72b5c733a336f97 = $this->env->getExtension("native_profiler");
        $__internal_85c02d6a4b734f8948261e875d400e4ff1cfa19ba8170e84a72b5c733a336f97->enter($__internal_85c02d6a4b734f8948261e875d400e4ff1cfa19ba8170e84a72b5c733a336f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_85c02d6a4b734f8948261e875d400e4ff1cfa19ba8170e84a72b5c733a336f97->leave($__internal_85c02d6a4b734f8948261e875d400e4ff1cfa19ba8170e84a72b5c733a336f97_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
