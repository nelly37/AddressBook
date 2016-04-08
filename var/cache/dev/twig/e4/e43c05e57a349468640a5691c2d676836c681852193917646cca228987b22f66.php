<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5086eafc57d396ebdc63555c600f6d0c1c125d151581c4776c6811b60dc360b6 extends Twig_Template
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
        $__internal_c32013258d3deee2467d18384ce5ef54627d1a24d1e2c40fca744b3178ac5a9b = $this->env->getExtension("native_profiler");
        $__internal_c32013258d3deee2467d18384ce5ef54627d1a24d1e2c40fca744b3178ac5a9b->enter($__internal_c32013258d3deee2467d18384ce5ef54627d1a24d1e2c40fca744b3178ac5a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c32013258d3deee2467d18384ce5ef54627d1a24d1e2c40fca744b3178ac5a9b->leave($__internal_c32013258d3deee2467d18384ce5ef54627d1a24d1e2c40fca744b3178ac5a9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
