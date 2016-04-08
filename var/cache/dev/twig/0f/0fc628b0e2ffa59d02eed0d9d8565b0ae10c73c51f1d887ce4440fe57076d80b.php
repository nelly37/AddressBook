<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7405b3b4009a89573059f4c8b2c90d381755218dad901ed14620a506edc68604 extends Twig_Template
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
        $__internal_da42bfa4f762b0bf1f4609d90f3d6a2775b3974623996d4d5d3a10e7a1d3e020 = $this->env->getExtension("native_profiler");
        $__internal_da42bfa4f762b0bf1f4609d90f3d6a2775b3974623996d4d5d3a10e7a1d3e020->enter($__internal_da42bfa4f762b0bf1f4609d90f3d6a2775b3974623996d4d5d3a10e7a1d3e020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_da42bfa4f762b0bf1f4609d90f3d6a2775b3974623996d4d5d3a10e7a1d3e020->leave($__internal_da42bfa4f762b0bf1f4609d90f3d6a2775b3974623996d4d5d3a10e7a1d3e020_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
