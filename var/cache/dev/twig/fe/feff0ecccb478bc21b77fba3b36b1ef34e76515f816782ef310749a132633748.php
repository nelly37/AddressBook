<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7fac6c04431816c611c311ebe403307908c71677b72757d0352ec6125b7f4bc2 extends Twig_Template
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
        $__internal_7ebe14f210743de1afcaf63bbd3eedbf8ae2230bf514d621827450ca8e7adf6b = $this->env->getExtension("native_profiler");
        $__internal_7ebe14f210743de1afcaf63bbd3eedbf8ae2230bf514d621827450ca8e7adf6b->enter($__internal_7ebe14f210743de1afcaf63bbd3eedbf8ae2230bf514d621827450ca8e7adf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7ebe14f210743de1afcaf63bbd3eedbf8ae2230bf514d621827450ca8e7adf6b->leave($__internal_7ebe14f210743de1afcaf63bbd3eedbf8ae2230bf514d621827450ca8e7adf6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
