<?php

/* base.html.twig */
class __TwigTemplate_d952832983514ce91caf2e0c35f5fa78d61b21c8c67dcbf1af56a96955b84ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7053a6ea1e6312692be020433b93ac7088597d7efe5b7ae114a50fcc8e4333d4 = $this->env->getExtension("native_profiler");
        $__internal_7053a6ea1e6312692be020433b93ac7088597d7efe5b7ae114a50fcc8e4333d4->enter($__internal_7053a6ea1e6312692be020433b93ac7088597d7efe5b7ae114a50fcc8e4333d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7053a6ea1e6312692be020433b93ac7088597d7efe5b7ae114a50fcc8e4333d4->leave($__internal_7053a6ea1e6312692be020433b93ac7088597d7efe5b7ae114a50fcc8e4333d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5a5802eb634873e1353f55a3735a3133c526072b520043681a50cd862958710 = $this->env->getExtension("native_profiler");
        $__internal_c5a5802eb634873e1353f55a3735a3133c526072b520043681a50cd862958710->enter($__internal_c5a5802eb634873e1353f55a3735a3133c526072b520043681a50cd862958710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c5a5802eb634873e1353f55a3735a3133c526072b520043681a50cd862958710->leave($__internal_c5a5802eb634873e1353f55a3735a3133c526072b520043681a50cd862958710_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93ce01475f174e82df2b8f6af0557ae6c47decf5c6c0fcfb3695aaedcd163761 = $this->env->getExtension("native_profiler");
        $__internal_93ce01475f174e82df2b8f6af0557ae6c47decf5c6c0fcfb3695aaedcd163761->enter($__internal_93ce01475f174e82df2b8f6af0557ae6c47decf5c6c0fcfb3695aaedcd163761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_93ce01475f174e82df2b8f6af0557ae6c47decf5c6c0fcfb3695aaedcd163761->leave($__internal_93ce01475f174e82df2b8f6af0557ae6c47decf5c6c0fcfb3695aaedcd163761_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f701ae571f3ca43f5395a87bb400a5a6079737535cb7ec56462517b6f3ebe3d5 = $this->env->getExtension("native_profiler");
        $__internal_f701ae571f3ca43f5395a87bb400a5a6079737535cb7ec56462517b6f3ebe3d5->enter($__internal_f701ae571f3ca43f5395a87bb400a5a6079737535cb7ec56462517b6f3ebe3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f701ae571f3ca43f5395a87bb400a5a6079737535cb7ec56462517b6f3ebe3d5->leave($__internal_f701ae571f3ca43f5395a87bb400a5a6079737535cb7ec56462517b6f3ebe3d5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09d724b57ea21a98c9734b2b83153c73c2cdf5d8281edd24785814447740defd = $this->env->getExtension("native_profiler");
        $__internal_09d724b57ea21a98c9734b2b83153c73c2cdf5d8281edd24785814447740defd->enter($__internal_09d724b57ea21a98c9734b2b83153c73c2cdf5d8281edd24785814447740defd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_09d724b57ea21a98c9734b2b83153c73c2cdf5d8281edd24785814447740defd->leave($__internal_09d724b57ea21a98c9734b2b83153c73c2cdf5d8281edd24785814447740defd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
