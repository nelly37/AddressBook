<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ab729e8484cb751890411e7c060d673821bb3fe8f292d7f2c1b48746c8757c2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9b509b17589b4b9efb7fde9486508f0e3d10ed3f4e8a069b86359778a1b21d4 = $this->env->getExtension("native_profiler");
        $__internal_d9b509b17589b4b9efb7fde9486508f0e3d10ed3f4e8a069b86359778a1b21d4->enter($__internal_d9b509b17589b4b9efb7fde9486508f0e3d10ed3f4e8a069b86359778a1b21d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9b509b17589b4b9efb7fde9486508f0e3d10ed3f4e8a069b86359778a1b21d4->leave($__internal_d9b509b17589b4b9efb7fde9486508f0e3d10ed3f4e8a069b86359778a1b21d4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac0fc2579725a7fa014d8184ce77f46c800666cc0533fe9f7a19a9bb42bf21d2 = $this->env->getExtension("native_profiler");
        $__internal_ac0fc2579725a7fa014d8184ce77f46c800666cc0533fe9f7a19a9bb42bf21d2->enter($__internal_ac0fc2579725a7fa014d8184ce77f46c800666cc0533fe9f7a19a9bb42bf21d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ac0fc2579725a7fa014d8184ce77f46c800666cc0533fe9f7a19a9bb42bf21d2->leave($__internal_ac0fc2579725a7fa014d8184ce77f46c800666cc0533fe9f7a19a9bb42bf21d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
