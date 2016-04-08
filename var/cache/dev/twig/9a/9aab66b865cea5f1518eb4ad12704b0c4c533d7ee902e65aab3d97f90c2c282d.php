<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_973a6f9a071b3c2a4a18e437e7553f6cc9760670ecc55f1b1c633b1a07786e4f extends Twig_Template
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
        $__internal_cc4ecf60a59a9ac48c060922c7a58b6e4dd6747611b1fec255255279e308c001 = $this->env->getExtension("native_profiler");
        $__internal_cc4ecf60a59a9ac48c060922c7a58b6e4dd6747611b1fec255255279e308c001->enter($__internal_cc4ecf60a59a9ac48c060922c7a58b6e4dd6747611b1fec255255279e308c001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cc4ecf60a59a9ac48c060922c7a58b6e4dd6747611b1fec255255279e308c001->leave($__internal_cc4ecf60a59a9ac48c060922c7a58b6e4dd6747611b1fec255255279e308c001_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
