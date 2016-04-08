<?php

/* BookBundle:Default:index.html.twig */
class __TwigTemplate_e514f3fd98631e438b027cd873bfc851d11b6fd7f2cafa1c66d5f690dc7adbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BookBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a99421a41b327ddace4c7ce115aae11185decc225ef2fa1739d738b1fd57754 = $this->env->getExtension("native_profiler");
        $__internal_3a99421a41b327ddace4c7ce115aae11185decc225ef2fa1739d738b1fd57754->enter($__internal_3a99421a41b327ddace4c7ce115aae11185decc225ef2fa1739d738b1fd57754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a99421a41b327ddace4c7ce115aae11185decc225ef2fa1739d738b1fd57754->leave($__internal_3a99421a41b327ddace4c7ce115aae11185decc225ef2fa1739d738b1fd57754_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f2d1435f73a2feeb19734b66f86afe0623144c5257d070a064c5ff42dd4d509 = $this->env->getExtension("native_profiler");
        $__internal_6f2d1435f73a2feeb19734b66f86afe0623144c5257d070a064c5ff42dd4d509->enter($__internal_6f2d1435f73a2feeb19734b66f86afe0623144c5257d070a064c5ff42dd4d509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carnet";
        
        $__internal_6f2d1435f73a2feeb19734b66f86afe0623144c5257d070a064c5ff42dd4d509->leave($__internal_6f2d1435f73a2feeb19734b66f86afe0623144c5257d070a064c5ff42dd4d509_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c792f2a1f08f6228020f05f365f9329010d1e7295f5fe205759429d12f6ac8f = $this->env->getExtension("native_profiler");
        $__internal_8c792f2a1f08f6228020f05f365f9329010d1e7295f5fe205759429d12f6ac8f->enter($__internal_8c792f2a1f08f6228020f05f365f9329010d1e7295f5fe205759429d12f6ac8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "        <p>Salut ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
        <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mon Compte", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>

    ";
        } else {
            // line 13
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 16
        echo "
";
        
        $__internal_8c792f2a1f08f6228020f05f365f9329010d1e7295f5fe205759429d12f6ac8f->leave($__internal_8c792f2a1f08f6228020f05f365f9329010d1e7295f5fe205759429d12f6ac8f_prof);

    }

    public function getTemplateName()
    {
        return "BookBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 16,  84 => 14,  77 => 13,  69 => 10,  63 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Carnet{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*         <p>Salut {{ app.user.username }}</p>*/
/*         <a href="{{ path('fos_user_security_logout') }}">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>*/
/*         <a href="{{ path('fos_user_profile_edit') }}">{{ 'Mon Compte'|trans({}, 'FOSUserBundle') }}</a>*/
/* */
/*     {% else %}*/
/*         <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*         <a href="{{ path('fos_user_registration_register') }}">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
