<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4d223d4bb358adbc3a0209e0f4ae7fe885ce589e6d34f02209f4dd1e205051e9 extends Twig_Template
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
        $__internal_e913a9fbb2b865566359de4c0797d4ec32e6cc0e1197ef148204d9b4165d108c = $this->env->getExtension("native_profiler");
        $__internal_e913a9fbb2b865566359de4c0797d4ec32e6cc0e1197ef148204d9b4165d108c->enter($__internal_e913a9fbb2b865566359de4c0797d4ec32e6cc0e1197ef148204d9b4165d108c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e913a9fbb2b865566359de4c0797d4ec32e6cc0e1197ef148204d9b4165d108c->leave($__internal_e913a9fbb2b865566359de4c0797d4ec32e6cc0e1197ef148204d9b4165d108c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
