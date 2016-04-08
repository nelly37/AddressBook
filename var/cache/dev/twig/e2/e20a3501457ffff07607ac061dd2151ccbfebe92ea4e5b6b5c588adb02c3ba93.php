<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_68d23eabfef451d901c924d923042ee4c5a1de0c96787b93c12bc8d90d249ec6 extends Twig_Template
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
        $__internal_c2b282bcdc5dc645802efa677bfe7eb3a479bd376677dca47a2ce31eec0522b5 = $this->env->getExtension("native_profiler");
        $__internal_c2b282bcdc5dc645802efa677bfe7eb3a479bd376677dca47a2ce31eec0522b5->enter($__internal_c2b282bcdc5dc645802efa677bfe7eb3a479bd376677dca47a2ce31eec0522b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c2b282bcdc5dc645802efa677bfe7eb3a479bd376677dca47a2ce31eec0522b5->leave($__internal_c2b282bcdc5dc645802efa677bfe7eb3a479bd376677dca47a2ce31eec0522b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
