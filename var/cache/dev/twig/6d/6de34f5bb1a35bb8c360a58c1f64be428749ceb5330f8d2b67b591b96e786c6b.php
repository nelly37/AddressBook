<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2ec50e8c9ec5796379eab0b575085d5211c13aad29c5e10592a4a59b82cefd5e extends Twig_Template
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
        $__internal_18c726c34098a193cea8dcfd5a4b07e9ac346676e8aaba3835abee209436e71c = $this->env->getExtension("native_profiler");
        $__internal_18c726c34098a193cea8dcfd5a4b07e9ac346676e8aaba3835abee209436e71c->enter($__internal_18c726c34098a193cea8dcfd5a4b07e9ac346676e8aaba3835abee209436e71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_18c726c34098a193cea8dcfd5a4b07e9ac346676e8aaba3835abee209436e71c->leave($__internal_18c726c34098a193cea8dcfd5a4b07e9ac346676e8aaba3835abee209436e71c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
