<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_83b0972fd9cacddebd440dae6426dd0baca742e6ba480134c719cf6858c7e842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b42103de622225ac7908d51936f74f887a97c45281f52da3347714e12f1f7b06 = $this->env->getExtension("native_profiler");
        $__internal_b42103de622225ac7908d51936f74f887a97c45281f52da3347714e12f1f7b06->enter($__internal_b42103de622225ac7908d51936f74f887a97c45281f52da3347714e12f1f7b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b42103de622225ac7908d51936f74f887a97c45281f52da3347714e12f1f7b06->leave($__internal_b42103de622225ac7908d51936f74f887a97c45281f52da3347714e12f1f7b06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ee77d6648bcb14610581249a566292c9c644a93e1ee576f6e1513c5fbae85a3 = $this->env->getExtension("native_profiler");
        $__internal_6ee77d6648bcb14610581249a566292c9c644a93e1ee576f6e1513c5fbae85a3->enter($__internal_6ee77d6648bcb14610581249a566292c9c644a93e1ee576f6e1513c5fbae85a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6ee77d6648bcb14610581249a566292c9c644a93e1ee576f6e1513c5fbae85a3->leave($__internal_6ee77d6648bcb14610581249a566292c9c644a93e1ee576f6e1513c5fbae85a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_08d8bdd69b3e526d246983945dd7290fddf132c7749606008b873b14f00a254f = $this->env->getExtension("native_profiler");
        $__internal_08d8bdd69b3e526d246983945dd7290fddf132c7749606008b873b14f00a254f->enter($__internal_08d8bdd69b3e526d246983945dd7290fddf132c7749606008b873b14f00a254f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_08d8bdd69b3e526d246983945dd7290fddf132c7749606008b873b14f00a254f->leave($__internal_08d8bdd69b3e526d246983945dd7290fddf132c7749606008b873b14f00a254f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_38f403411c8c2d4580c49dc4c5ead680b190b6335435ffd5f44aa68e1c181c3a = $this->env->getExtension("native_profiler");
        $__internal_38f403411c8c2d4580c49dc4c5ead680b190b6335435ffd5f44aa68e1c181c3a->enter($__internal_38f403411c8c2d4580c49dc4c5ead680b190b6335435ffd5f44aa68e1c181c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_38f403411c8c2d4580c49dc4c5ead680b190b6335435ffd5f44aa68e1c181c3a->leave($__internal_38f403411c8c2d4580c49dc4c5ead680b190b6335435ffd5f44aa68e1c181c3a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
