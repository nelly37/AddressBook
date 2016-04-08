<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a262359842ecff8236736dc21ae0e4e9c2c8e5c2005e748d2e18e2223dfea6c9 extends Twig_Template
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
        $__internal_3a5acd8f5bc8236efc73307d6b9396c0f1dbfdfe630248e3a73e11e89d0feac6 = $this->env->getExtension("native_profiler");
        $__internal_3a5acd8f5bc8236efc73307d6b9396c0f1dbfdfe630248e3a73e11e89d0feac6->enter($__internal_3a5acd8f5bc8236efc73307d6b9396c0f1dbfdfe630248e3a73e11e89d0feac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3a5acd8f5bc8236efc73307d6b9396c0f1dbfdfe630248e3a73e11e89d0feac6->leave($__internal_3a5acd8f5bc8236efc73307d6b9396c0f1dbfdfe630248e3a73e11e89d0feac6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d1fc4cf9cb10aaf8131552e9c6e2d0ed9f5a2454a4053408c8d804efee957e7c = $this->env->getExtension("native_profiler");
        $__internal_d1fc4cf9cb10aaf8131552e9c6e2d0ed9f5a2454a4053408c8d804efee957e7c->enter($__internal_d1fc4cf9cb10aaf8131552e9c6e2d0ed9f5a2454a4053408c8d804efee957e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d1fc4cf9cb10aaf8131552e9c6e2d0ed9f5a2454a4053408c8d804efee957e7c->leave($__internal_d1fc4cf9cb10aaf8131552e9c6e2d0ed9f5a2454a4053408c8d804efee957e7c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_21eb32e972135499d82034672afc5e7ad6fc0309f9833943ca8f438cb37d5e02 = $this->env->getExtension("native_profiler");
        $__internal_21eb32e972135499d82034672afc5e7ad6fc0309f9833943ca8f438cb37d5e02->enter($__internal_21eb32e972135499d82034672afc5e7ad6fc0309f9833943ca8f438cb37d5e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_21eb32e972135499d82034672afc5e7ad6fc0309f9833943ca8f438cb37d5e02->leave($__internal_21eb32e972135499d82034672afc5e7ad6fc0309f9833943ca8f438cb37d5e02_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0101b40cab524a5e9e18d971c9cf80c0f2a355ce3a8f47c7d5572f9e2a07d139 = $this->env->getExtension("native_profiler");
        $__internal_0101b40cab524a5e9e18d971c9cf80c0f2a355ce3a8f47c7d5572f9e2a07d139->enter($__internal_0101b40cab524a5e9e18d971c9cf80c0f2a355ce3a8f47c7d5572f9e2a07d139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0101b40cab524a5e9e18d971c9cf80c0f2a355ce3a8f47c7d5572f9e2a07d139->leave($__internal_0101b40cab524a5e9e18d971c9cf80c0f2a355ce3a8f47c7d5572f9e2a07d139_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
