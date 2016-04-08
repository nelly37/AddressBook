<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_dc37337ab06c29f7f3df9a398f68d80f59465795cc347a6c30cbe8984030f0b8 extends Twig_Template
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
        $__internal_2962ab9cd13f144cc1e8b35587c488f99e74ee5b3dda90f76d4c82fc6c86aad1 = $this->env->getExtension("native_profiler");
        $__internal_2962ab9cd13f144cc1e8b35587c488f99e74ee5b3dda90f76d4c82fc6c86aad1->enter($__internal_2962ab9cd13f144cc1e8b35587c488f99e74ee5b3dda90f76d4c82fc6c86aad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2962ab9cd13f144cc1e8b35587c488f99e74ee5b3dda90f76d4c82fc6c86aad1->leave($__internal_2962ab9cd13f144cc1e8b35587c488f99e74ee5b3dda90f76d4c82fc6c86aad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
