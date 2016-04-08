<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fdebbf651796cdb9dbd9464a9f26ededa208eaeead3703162ec4655d7f51d629 extends Twig_Template
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
        $__internal_e2d5e8e1564550b97659d9751694d25f8ae32c0a0c302f349e81f6a2d5763baf = $this->env->getExtension("native_profiler");
        $__internal_e2d5e8e1564550b97659d9751694d25f8ae32c0a0c302f349e81f6a2d5763baf->enter($__internal_e2d5e8e1564550b97659d9751694d25f8ae32c0a0c302f349e81f6a2d5763baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e2d5e8e1564550b97659d9751694d25f8ae32c0a0c302f349e81f6a2d5763baf->leave($__internal_e2d5e8e1564550b97659d9751694d25f8ae32c0a0c302f349e81f6a2d5763baf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
