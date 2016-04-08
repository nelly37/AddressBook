<?php

/* BookBundle:Default:carnet.html.twig */
class __TwigTemplate_b8c9d910a9bce003560517268890cecf8efa8b0a55a30dbc75bc31b07d3f83dd extends Twig_Template
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
        $__internal_de4009aa6f3fdd1daefecb6c58236d34c1aa4012c66d15b9ef4705ca2c5035ac = $this->env->getExtension("native_profiler");
        $__internal_de4009aa6f3fdd1daefecb6c58236d34c1aa4012c66d15b9ef4705ca2c5035ac->enter($__internal_de4009aa6f3fdd1daefecb6c58236d34c1aa4012c66d15b9ef4705ca2c5035ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookBundle:Default:carnet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de4009aa6f3fdd1daefecb6c58236d34c1aa4012c66d15b9ef4705ca2c5035ac->leave($__internal_de4009aa6f3fdd1daefecb6c58236d34c1aa4012c66d15b9ef4705ca2c5035ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec8cb83e41ec7c96fbce1a785213dd1e9bb72d4e6ef589ec41b8bdc98127803b = $this->env->getExtension("native_profiler");
        $__internal_ec8cb83e41ec7c96fbce1a785213dd1e9bb72d4e6ef589ec41b8bdc98127803b->enter($__internal_ec8cb83e41ec7c96fbce1a785213dd1e9bb72d4e6ef589ec41b8bdc98127803b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carnet d'adresse";
        
        $__internal_ec8cb83e41ec7c96fbce1a785213dd1e9bb72d4e6ef589ec41b8bdc98127803b->leave($__internal_ec8cb83e41ec7c96fbce1a785213dd1e9bb72d4e6ef589ec41b8bdc98127803b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c500284b1a8cb255944e94d91c24db2b23b7cb7d8da3bc9599d1981be33321cc = $this->env->getExtension("native_profiler");
        $__internal_c500284b1a8cb255944e94d91c24db2b23b7cb7d8da3bc9599d1981be33321cc->enter($__internal_c500284b1a8cb255944e94d91c24db2b23b7cb7d8da3bc9599d1981be33321cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 8
            echo "        <p>Salut ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        
        $__internal_c500284b1a8cb255944e94d91c24db2b23b7cb7d8da3bc9599d1981be33321cc->leave($__internal_c500284b1a8cb255944e94d91c24db2b23b7cb7d8da3bc9599d1981be33321cc_prof);

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
        return array (  81 => 15,  75 => 14,  70 => 12,  65 => 11,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
