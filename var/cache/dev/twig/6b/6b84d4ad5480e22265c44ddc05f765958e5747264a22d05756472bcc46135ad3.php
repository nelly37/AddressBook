<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8ba448f3e594798dcfb813ef2e2b5e33391186e649ea841e5229ad5d71b48a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3086790a89c4773eb08ae34489f73b997647839e76f5724315aaa0196c3e036a = $this->env->getExtension("native_profiler");
        $__internal_3086790a89c4773eb08ae34489f73b997647839e76f5724315aaa0196c3e036a->enter($__internal_3086790a89c4773eb08ae34489f73b997647839e76f5724315aaa0196c3e036a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3086790a89c4773eb08ae34489f73b997647839e76f5724315aaa0196c3e036a->leave($__internal_3086790a89c4773eb08ae34489f73b997647839e76f5724315aaa0196c3e036a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab3a4b970315d9f87c801cb06c56734a276c2c7bb9c8029d12bcb0fa07abde8c = $this->env->getExtension("native_profiler");
        $__internal_ab3a4b970315d9f87c801cb06c56734a276c2c7bb9c8029d12bcb0fa07abde8c->enter($__internal_ab3a4b970315d9f87c801cb06c56734a276c2c7bb9c8029d12bcb0fa07abde8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ab3a4b970315d9f87c801cb06c56734a276c2c7bb9c8029d12bcb0fa07abde8c->leave($__internal_ab3a4b970315d9f87c801cb06c56734a276c2c7bb9c8029d12bcb0fa07abde8c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
