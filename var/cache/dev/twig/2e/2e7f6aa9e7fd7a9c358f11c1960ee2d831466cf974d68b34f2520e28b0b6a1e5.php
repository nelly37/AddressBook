<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0a8e960e2b9ce77bf34179d97078438e210549562b5ec7a460834f2b57b49813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_131335cb89d90cba9bf7854a2a59db55dfc0b897618f9355f9d3e5288fd61fb2 = $this->env->getExtension("native_profiler");
        $__internal_131335cb89d90cba9bf7854a2a59db55dfc0b897618f9355f9d3e5288fd61fb2->enter($__internal_131335cb89d90cba9bf7854a2a59db55dfc0b897618f9355f9d3e5288fd61fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_131335cb89d90cba9bf7854a2a59db55dfc0b897618f9355f9d3e5288fd61fb2->leave($__internal_131335cb89d90cba9bf7854a2a59db55dfc0b897618f9355f9d3e5288fd61fb2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ca70af6d5126f79b7ba93c18bc2293d54c8c8034819a97ca6e4fde2f126cbed = $this->env->getExtension("native_profiler");
        $__internal_4ca70af6d5126f79b7ba93c18bc2293d54c8c8034819a97ca6e4fde2f126cbed->enter($__internal_4ca70af6d5126f79b7ba93c18bc2293d54c8c8034819a97ca6e4fde2f126cbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4ca70af6d5126f79b7ba93c18bc2293d54c8c8034819a97ca6e4fde2f126cbed->leave($__internal_4ca70af6d5126f79b7ba93c18bc2293d54c8c8034819a97ca6e4fde2f126cbed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_82a7d089f7b4a2495f8ab50ac8705c654ad5a367894e36f6e2f8c5ee8b4701d7 = $this->env->getExtension("native_profiler");
        $__internal_82a7d089f7b4a2495f8ab50ac8705c654ad5a367894e36f6e2f8c5ee8b4701d7->enter($__internal_82a7d089f7b4a2495f8ab50ac8705c654ad5a367894e36f6e2f8c5ee8b4701d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_82a7d089f7b4a2495f8ab50ac8705c654ad5a367894e36f6e2f8c5ee8b4701d7->leave($__internal_82a7d089f7b4a2495f8ab50ac8705c654ad5a367894e36f6e2f8c5ee8b4701d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
