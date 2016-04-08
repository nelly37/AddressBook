<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d34d8fdbc0848125db1b4fd0f8bd0676778a97488b63072d143caa1224e816f5 extends Twig_Template
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
        $__internal_3c6061d567d7206157a2e6cf9fa232508838204ea78133d95954562a891f263f = $this->env->getExtension("native_profiler");
        $__internal_3c6061d567d7206157a2e6cf9fa232508838204ea78133d95954562a891f263f->enter($__internal_3c6061d567d7206157a2e6cf9fa232508838204ea78133d95954562a891f263f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3c6061d567d7206157a2e6cf9fa232508838204ea78133d95954562a891f263f->leave($__internal_3c6061d567d7206157a2e6cf9fa232508838204ea78133d95954562a891f263f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
