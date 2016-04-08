<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_07dcada6a693e967a03b598c05fa025cf21bef2db07aae592da3b014de70674d extends Twig_Template
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
        $__internal_65f8766311e727445de66debb6bc0f952efb5ea050d8832347b9802edca03694 = $this->env->getExtension("native_profiler");
        $__internal_65f8766311e727445de66debb6bc0f952efb5ea050d8832347b9802edca03694->enter($__internal_65f8766311e727445de66debb6bc0f952efb5ea050d8832347b9802edca03694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_65f8766311e727445de66debb6bc0f952efb5ea050d8832347b9802edca03694->leave($__internal_65f8766311e727445de66debb6bc0f952efb5ea050d8832347b9802edca03694_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
