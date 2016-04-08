<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9bf8127db906a4df318a5bf225f10a35f9eb8323aae9cbdadecfe7e40836ffe3 extends Twig_Template
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
        $__internal_69df2c16907754cf782aacc539a285a4de3ffff76ca5150624d70937242198dc = $this->env->getExtension("native_profiler");
        $__internal_69df2c16907754cf782aacc539a285a4de3ffff76ca5150624d70937242198dc->enter($__internal_69df2c16907754cf782aacc539a285a4de3ffff76ca5150624d70937242198dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_69df2c16907754cf782aacc539a285a4de3ffff76ca5150624d70937242198dc->leave($__internal_69df2c16907754cf782aacc539a285a4de3ffff76ca5150624d70937242198dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
