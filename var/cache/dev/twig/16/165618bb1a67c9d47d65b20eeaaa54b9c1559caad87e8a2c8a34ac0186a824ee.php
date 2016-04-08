<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_25f029fd908729347c3ecbfb5e3062b77aed48b70666d40753c90bb6f44ea823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e01e1f8eb6590a6519cb7aa230cdd555e224477f24e612923018e83035270e0c = $this->env->getExtension("native_profiler");
        $__internal_e01e1f8eb6590a6519cb7aa230cdd555e224477f24e612923018e83035270e0c->enter($__internal_e01e1f8eb6590a6519cb7aa230cdd555e224477f24e612923018e83035270e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e01e1f8eb6590a6519cb7aa230cdd555e224477f24e612923018e83035270e0c->leave($__internal_e01e1f8eb6590a6519cb7aa230cdd555e224477f24e612923018e83035270e0c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
