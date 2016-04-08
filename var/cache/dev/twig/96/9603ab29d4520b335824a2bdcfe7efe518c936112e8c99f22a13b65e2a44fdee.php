<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_212dcdd0e59e9212d3995881d105f2f3b54d0e457526c7032e53393a507df7f3 extends Twig_Template
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
        $__internal_9e3e9767f863861401653fa203a13c1ad1195ef3e2e9871d17567beb2a4f4920 = $this->env->getExtension("native_profiler");
        $__internal_9e3e9767f863861401653fa203a13c1ad1195ef3e2e9871d17567beb2a4f4920->enter($__internal_9e3e9767f863861401653fa203a13c1ad1195ef3e2e9871d17567beb2a4f4920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9e3e9767f863861401653fa203a13c1ad1195ef3e2e9871d17567beb2a4f4920->leave($__internal_9e3e9767f863861401653fa203a13c1ad1195ef3e2e9871d17567beb2a4f4920_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
