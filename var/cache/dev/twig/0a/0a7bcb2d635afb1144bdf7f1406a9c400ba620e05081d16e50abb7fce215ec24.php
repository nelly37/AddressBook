<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b5bcedeab9da07d57b384fbf516f8235c9cb7edad73c985536681cf187bd8626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f43cd651c968f06c40fe8b7bb42d49ba5aa3ceb46b2cc068261eb09988d6f395 = $this->env->getExtension("native_profiler");
        $__internal_f43cd651c968f06c40fe8b7bb42d49ba5aa3ceb46b2cc068261eb09988d6f395->enter($__internal_f43cd651c968f06c40fe8b7bb42d49ba5aa3ceb46b2cc068261eb09988d6f395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f43cd651c968f06c40fe8b7bb42d49ba5aa3ceb46b2cc068261eb09988d6f395->leave($__internal_f43cd651c968f06c40fe8b7bb42d49ba5aa3ceb46b2cc068261eb09988d6f395_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dbd940d17604056ed92f75463234a5d5de0d00b1efeb687ca3f3e5939c97060f = $this->env->getExtension("native_profiler");
        $__internal_dbd940d17604056ed92f75463234a5d5de0d00b1efeb687ca3f3e5939c97060f->enter($__internal_dbd940d17604056ed92f75463234a5d5de0d00b1efeb687ca3f3e5939c97060f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_dbd940d17604056ed92f75463234a5d5de0d00b1efeb687ca3f3e5939c97060f->leave($__internal_dbd940d17604056ed92f75463234a5d5de0d00b1efeb687ca3f3e5939c97060f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c167b377f1241f85c2c01733347042a3f584b50a148c630da6fe93e163d7b692 = $this->env->getExtension("native_profiler");
        $__internal_c167b377f1241f85c2c01733347042a3f584b50a148c630da6fe93e163d7b692->enter($__internal_c167b377f1241f85c2c01733347042a3f584b50a148c630da6fe93e163d7b692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c167b377f1241f85c2c01733347042a3f584b50a148c630da6fe93e163d7b692->leave($__internal_c167b377f1241f85c2c01733347042a3f584b50a148c630da6fe93e163d7b692_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e8d90ca5f7b01cb643312587c9310f52d79bb214ef63b98b3db217375bf97785 = $this->env->getExtension("native_profiler");
        $__internal_e8d90ca5f7b01cb643312587c9310f52d79bb214ef63b98b3db217375bf97785->enter($__internal_e8d90ca5f7b01cb643312587c9310f52d79bb214ef63b98b3db217375bf97785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e8d90ca5f7b01cb643312587c9310f52d79bb214ef63b98b3db217375bf97785->leave($__internal_e8d90ca5f7b01cb643312587c9310f52d79bb214ef63b98b3db217375bf97785_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
