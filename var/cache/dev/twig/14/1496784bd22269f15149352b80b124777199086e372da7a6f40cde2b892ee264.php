<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_60d826c56bcee83f5f31e0c1f02e2a6934612f725830cd274934ec17f7d22a7c extends Twig_Template
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
        $__internal_fd38eeabfd634c84994762fb9ed45803f31bfb16851be7ae66c345b17bd92b43 = $this->env->getExtension("native_profiler");
        $__internal_fd38eeabfd634c84994762fb9ed45803f31bfb16851be7ae66c345b17bd92b43->enter($__internal_fd38eeabfd634c84994762fb9ed45803f31bfb16851be7ae66c345b17bd92b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fd38eeabfd634c84994762fb9ed45803f31bfb16851be7ae66c345b17bd92b43->leave($__internal_fd38eeabfd634c84994762fb9ed45803f31bfb16851be7ae66c345b17bd92b43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
