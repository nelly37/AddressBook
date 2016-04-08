<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_892762bdf8c637b2582f95a95af84f3096ed337014aca05279a066d72dcbd25d extends Twig_Template
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
        $__internal_0a09194d479d62c142b99719eecf23f14e3a9a4f4c1f493b7aadd3b99436bc32 = $this->env->getExtension("native_profiler");
        $__internal_0a09194d479d62c142b99719eecf23f14e3a9a4f4c1f493b7aadd3b99436bc32->enter($__internal_0a09194d479d62c142b99719eecf23f14e3a9a4f4c1f493b7aadd3b99436bc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0a09194d479d62c142b99719eecf23f14e3a9a4f4c1f493b7aadd3b99436bc32->leave($__internal_0a09194d479d62c142b99719eecf23f14e3a9a4f4c1f493b7aadd3b99436bc32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
