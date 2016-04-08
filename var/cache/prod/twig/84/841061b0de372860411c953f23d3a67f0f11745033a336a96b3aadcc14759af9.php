<?php

/* BookBundle:Default:index.html.twig */
class __TwigTemplate_f71bbee814edea00d406f4c25ed9d38b01b84db6aeb71a6e32b75e2ba8ec1539 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Carnet d'adresse";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 8
            echo "        <p>Salut ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</p>
    ";
        }
        // line 10
        echo "
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>

";
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
        return array (  58 => 12,  52 => 11,  49 => 10,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Carnet d'adresse{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {% if is_granted('ROLE_USER') %}*/
/*         <p>Salut {{ app.user.username }}</p>*/
/*     {% endif %}*/
/* */
/*     <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*     <a href="{{ path('fos_user_registration_register') }}">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>*/
/* */
/* {% endblock %}*/
