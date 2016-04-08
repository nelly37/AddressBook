<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8e305f8300d1cf82e9b3619b96b57bb60b92d14802e8a2c7b3236115cdfebf4e extends Twig_Template
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
        $__internal_41330df32bbcbc746623defdc25f6770b763826cc4daca13bc3028afe4201a0b = $this->env->getExtension("native_profiler");
        $__internal_41330df32bbcbc746623defdc25f6770b763826cc4daca13bc3028afe4201a0b->enter($__internal_41330df32bbcbc746623defdc25f6770b763826cc4daca13bc3028afe4201a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_41330df32bbcbc746623defdc25f6770b763826cc4daca13bc3028afe4201a0b->leave($__internal_41330df32bbcbc746623defdc25f6770b763826cc4daca13bc3028afe4201a0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
