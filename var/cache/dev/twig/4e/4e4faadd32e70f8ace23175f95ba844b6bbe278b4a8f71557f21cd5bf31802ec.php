<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1dff96ae97abd15757babbdfa8c5aad5009c365e4b67690e3a10284de2c4d2f4 extends Twig_Template
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
        $__internal_d2c09c3b251dafafd2ca26f42ded96e27ee0780d4304ff3a76ea8e943405b1f2 = $this->env->getExtension("native_profiler");
        $__internal_d2c09c3b251dafafd2ca26f42ded96e27ee0780d4304ff3a76ea8e943405b1f2->enter($__internal_d2c09c3b251dafafd2ca26f42ded96e27ee0780d4304ff3a76ea8e943405b1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d2c09c3b251dafafd2ca26f42ded96e27ee0780d4304ff3a76ea8e943405b1f2->leave($__internal_d2c09c3b251dafafd2ca26f42ded96e27ee0780d4304ff3a76ea8e943405b1f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
