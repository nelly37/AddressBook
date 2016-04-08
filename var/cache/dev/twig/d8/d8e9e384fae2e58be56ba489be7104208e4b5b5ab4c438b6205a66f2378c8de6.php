<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_68feb9c0f534ff86060fac1cdbd5de7de5ab31096ad47e9966cb45cbedd226f7 extends Twig_Template
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
        $__internal_76e47d94677027d71efa5d2731631ae524de47173c7f5cee50b60ad1adf8456e = $this->env->getExtension("native_profiler");
        $__internal_76e47d94677027d71efa5d2731631ae524de47173c7f5cee50b60ad1adf8456e->enter($__internal_76e47d94677027d71efa5d2731631ae524de47173c7f5cee50b60ad1adf8456e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_76e47d94677027d71efa5d2731631ae524de47173c7f5cee50b60ad1adf8456e->leave($__internal_76e47d94677027d71efa5d2731631ae524de47173c7f5cee50b60ad1adf8456e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
