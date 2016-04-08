<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_182fd4f9408f250e011d70537bfeda3ac8ac81470b09f6ef09cf9ee181fec3f6 extends Twig_Template
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
        $__internal_5a2dfacc136bc7cd29d8a3966f7cbc8df433d9aee7887caef2b7f73fb4d86685 = $this->env->getExtension("native_profiler");
        $__internal_5a2dfacc136bc7cd29d8a3966f7cbc8df433d9aee7887caef2b7f73fb4d86685->enter($__internal_5a2dfacc136bc7cd29d8a3966f7cbc8df433d9aee7887caef2b7f73fb4d86685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5a2dfacc136bc7cd29d8a3966f7cbc8df433d9aee7887caef2b7f73fb4d86685->leave($__internal_5a2dfacc136bc7cd29d8a3966f7cbc8df433d9aee7887caef2b7f73fb4d86685_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
