<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_50f673285b125e6badd257fc92ae4c5b6ae6de1cf6339c591900d3d02d1c58b0 extends Twig_Template
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
        $__internal_373e7b682acfea221e578b8091948550af52edf6a44df50fbba98ac018b9f1cb = $this->env->getExtension("native_profiler");
        $__internal_373e7b682acfea221e578b8091948550af52edf6a44df50fbba98ac018b9f1cb->enter($__internal_373e7b682acfea221e578b8091948550af52edf6a44df50fbba98ac018b9f1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_373e7b682acfea221e578b8091948550af52edf6a44df50fbba98ac018b9f1cb->leave($__internal_373e7b682acfea221e578b8091948550af52edf6a44df50fbba98ac018b9f1cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
