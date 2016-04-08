<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5a94cf2be941f81449eed35a65eb035f5bdb942ebf453388069ee70417f8aa36 extends Twig_Template
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
        $__internal_270e7e1e688bc0c43ba4bbedb26e18d6377d980996f7aa86bc9d65b9bc87bd8c = $this->env->getExtension("native_profiler");
        $__internal_270e7e1e688bc0c43ba4bbedb26e18d6377d980996f7aa86bc9d65b9bc87bd8c->enter($__internal_270e7e1e688bc0c43ba4bbedb26e18d6377d980996f7aa86bc9d65b9bc87bd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_270e7e1e688bc0c43ba4bbedb26e18d6377d980996f7aa86bc9d65b9bc87bd8c->leave($__internal_270e7e1e688bc0c43ba4bbedb26e18d6377d980996f7aa86bc9d65b9bc87bd8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
