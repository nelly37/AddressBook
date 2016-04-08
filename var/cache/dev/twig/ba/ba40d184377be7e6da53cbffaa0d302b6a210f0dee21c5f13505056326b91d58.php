<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_566e2ccfaf85187bbe488f695f9c1b21e35ea374845600a8cce3b0c32baa2b7f extends Twig_Template
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
        $__internal_9dba88c78a90e45f038a6a5bbe71eaa897233ce8a86d5f035a4302b07a7ed85c = $this->env->getExtension("native_profiler");
        $__internal_9dba88c78a90e45f038a6a5bbe71eaa897233ce8a86d5f035a4302b07a7ed85c->enter($__internal_9dba88c78a90e45f038a6a5bbe71eaa897233ce8a86d5f035a4302b07a7ed85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9dba88c78a90e45f038a6a5bbe71eaa897233ce8a86d5f035a4302b07a7ed85c->leave($__internal_9dba88c78a90e45f038a6a5bbe71eaa897233ce8a86d5f035a4302b07a7ed85c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
