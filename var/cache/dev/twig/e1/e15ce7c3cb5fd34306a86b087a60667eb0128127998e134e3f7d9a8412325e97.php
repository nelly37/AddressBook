<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e2e122f7d3c27ca818efeef5ac70894bd4f95ea027318de241ebcf36f794d690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77de18d9d40a25a184d81c1e56ea49bd1530108689003ca72c2075b060acf4c8 = $this->env->getExtension("native_profiler");
        $__internal_77de18d9d40a25a184d81c1e56ea49bd1530108689003ca72c2075b060acf4c8->enter($__internal_77de18d9d40a25a184d81c1e56ea49bd1530108689003ca72c2075b060acf4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77de18d9d40a25a184d81c1e56ea49bd1530108689003ca72c2075b060acf4c8->leave($__internal_77de18d9d40a25a184d81c1e56ea49bd1530108689003ca72c2075b060acf4c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3041d562fbb4cbb6e3f298622ef90ad7d7f277309a4fa06b223cc4e3449e291a = $this->env->getExtension("native_profiler");
        $__internal_3041d562fbb4cbb6e3f298622ef90ad7d7f277309a4fa06b223cc4e3449e291a->enter($__internal_3041d562fbb4cbb6e3f298622ef90ad7d7f277309a4fa06b223cc4e3449e291a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3041d562fbb4cbb6e3f298622ef90ad7d7f277309a4fa06b223cc4e3449e291a->leave($__internal_3041d562fbb4cbb6e3f298622ef90ad7d7f277309a4fa06b223cc4e3449e291a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5918082678db77eb46f05468b23ac37984f7b129aadbfbb0bb2de4142f59835 = $this->env->getExtension("native_profiler");
        $__internal_e5918082678db77eb46f05468b23ac37984f7b129aadbfbb0bb2de4142f59835->enter($__internal_e5918082678db77eb46f05468b23ac37984f7b129aadbfbb0bb2de4142f59835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5918082678db77eb46f05468b23ac37984f7b129aadbfbb0bb2de4142f59835->leave($__internal_e5918082678db77eb46f05468b23ac37984f7b129aadbfbb0bb2de4142f59835_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecfd1020c960797b81fba9298f35e839d10d90da6293bfc3e6a291f28abf1214 = $this->env->getExtension("native_profiler");
        $__internal_ecfd1020c960797b81fba9298f35e839d10d90da6293bfc3e6a291f28abf1214->enter($__internal_ecfd1020c960797b81fba9298f35e839d10d90da6293bfc3e6a291f28abf1214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ecfd1020c960797b81fba9298f35e839d10d90da6293bfc3e6a291f28abf1214->leave($__internal_ecfd1020c960797b81fba9298f35e839d10d90da6293bfc3e6a291f28abf1214_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
