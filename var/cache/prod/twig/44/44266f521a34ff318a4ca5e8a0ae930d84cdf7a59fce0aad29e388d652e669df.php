<?php

/* BookBundle:Default:carnet.html.twig */
class __TwigTemplate_fef764da94e6f18d90318c7a279d940ac8a16e66feebf15b3c68d091dbd8c293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BookBundle:Default:carnet.html.twig", 1);
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
        // line 11
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>


";
    }

    public function getTemplateName()
    {
        return "BookBundle:Default:carnet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  60 => 14,  55 => 12,  50 => 11,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
/* */
/*     {% endif %}*/
/*     <a href="{{ path('fos_user_security_logout') }}">*/
/*         {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*     </a>*/
/*     <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*     <a href="{{ path('fos_user_registration_register') }}">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>*/
/* */
/* */
/* {% endblock %}*/
