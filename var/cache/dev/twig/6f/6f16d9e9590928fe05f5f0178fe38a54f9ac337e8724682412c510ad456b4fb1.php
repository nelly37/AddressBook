<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fe76b8ca0348c9e04cb579651f41911be5fbe43a37eff496e92370c78f21b496 extends Twig_Template
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
        $__internal_eef042c35e2f904e9fe4e7a17ebfa871208bed4729eb642eb3cafbeba636e78e = $this->env->getExtension("native_profiler");
        $__internal_eef042c35e2f904e9fe4e7a17ebfa871208bed4729eb642eb3cafbeba636e78e->enter($__internal_eef042c35e2f904e9fe4e7a17ebfa871208bed4729eb642eb3cafbeba636e78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_eef042c35e2f904e9fe4e7a17ebfa871208bed4729eb642eb3cafbeba636e78e->leave($__internal_eef042c35e2f904e9fe4e7a17ebfa871208bed4729eb642eb3cafbeba636e78e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
