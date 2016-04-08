<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_19cd1e3f56de4bed59f256dd7240de0f7d51a0d2673ce3cc677994a35426e4b6 extends Twig_Template
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
        $__internal_0936c927f5e2e98c56ece615a8f8ec0d4179e66e26eaad6897b809b193946a48 = $this->env->getExtension("native_profiler");
        $__internal_0936c927f5e2e98c56ece615a8f8ec0d4179e66e26eaad6897b809b193946a48->enter($__internal_0936c927f5e2e98c56ece615a8f8ec0d4179e66e26eaad6897b809b193946a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0936c927f5e2e98c56ece615a8f8ec0d4179e66e26eaad6897b809b193946a48->leave($__internal_0936c927f5e2e98c56ece615a8f8ec0d4179e66e26eaad6897b809b193946a48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
