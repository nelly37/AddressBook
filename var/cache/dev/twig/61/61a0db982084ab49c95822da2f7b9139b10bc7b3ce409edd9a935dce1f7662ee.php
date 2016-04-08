<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_72a89674917e46b67c045dd353cb8ff20cfa64d8a401c080cfc7681a860eb41b extends Twig_Template
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
        $__internal_1f9fa76a0c65fb7964851e8bb203b5876524f4c825233b82d4daffc7e54d5acc = $this->env->getExtension("native_profiler");
        $__internal_1f9fa76a0c65fb7964851e8bb203b5876524f4c825233b82d4daffc7e54d5acc->enter($__internal_1f9fa76a0c65fb7964851e8bb203b5876524f4c825233b82d4daffc7e54d5acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1f9fa76a0c65fb7964851e8bb203b5876524f4c825233b82d4daffc7e54d5acc->leave($__internal_1f9fa76a0c65fb7964851e8bb203b5876524f4c825233b82d4daffc7e54d5acc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
