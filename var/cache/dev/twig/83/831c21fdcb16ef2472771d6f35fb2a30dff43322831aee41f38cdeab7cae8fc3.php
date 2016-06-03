<?php

/* base.html.twig */
class __TwigTemplate_e0b41ebc599822b3d8fd6d2bb5ce459feabc1e44bc4189bfa5e9081126b2ffd1 extends Twig_Template
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
        $__internal_551f543c00026898c37af5d26fb202864347621d75598d1f95e215f961e784e8 = $this->env->getExtension("native_profiler");
        $__internal_551f543c00026898c37af5d26fb202864347621d75598d1f95e215f961e784e8->enter($__internal_551f543c00026898c37af5d26fb202864347621d75598d1f95e215f961e784e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_551f543c00026898c37af5d26fb202864347621d75598d1f95e215f961e784e8->leave($__internal_551f543c00026898c37af5d26fb202864347621d75598d1f95e215f961e784e8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e91914c59481a18b15012cec3153754962f1ab29e2ee35ecbe5ef8b2521aba59 = $this->env->getExtension("native_profiler");
        $__internal_e91914c59481a18b15012cec3153754962f1ab29e2ee35ecbe5ef8b2521aba59->enter($__internal_e91914c59481a18b15012cec3153754962f1ab29e2ee35ecbe5ef8b2521aba59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e91914c59481a18b15012cec3153754962f1ab29e2ee35ecbe5ef8b2521aba59->leave($__internal_e91914c59481a18b15012cec3153754962f1ab29e2ee35ecbe5ef8b2521aba59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2bda483ed894d67d4478ac0b560afe5fe3766428ddab499542c262a1dbd67d7 = $this->env->getExtension("native_profiler");
        $__internal_c2bda483ed894d67d4478ac0b560afe5fe3766428ddab499542c262a1dbd67d7->enter($__internal_c2bda483ed894d67d4478ac0b560afe5fe3766428ddab499542c262a1dbd67d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c2bda483ed894d67d4478ac0b560afe5fe3766428ddab499542c262a1dbd67d7->leave($__internal_c2bda483ed894d67d4478ac0b560afe5fe3766428ddab499542c262a1dbd67d7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_293dea4a874de552b80e1c991f12664ff0be38b707fd460e37bb19ad4d18845f = $this->env->getExtension("native_profiler");
        $__internal_293dea4a874de552b80e1c991f12664ff0be38b707fd460e37bb19ad4d18845f->enter($__internal_293dea4a874de552b80e1c991f12664ff0be38b707fd460e37bb19ad4d18845f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_293dea4a874de552b80e1c991f12664ff0be38b707fd460e37bb19ad4d18845f->leave($__internal_293dea4a874de552b80e1c991f12664ff0be38b707fd460e37bb19ad4d18845f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe5408e60b2bdb4148f523eb263a88cdcd111dace0f656cdfe5bb3d5d9543226 = $this->env->getExtension("native_profiler");
        $__internal_fe5408e60b2bdb4148f523eb263a88cdcd111dace0f656cdfe5bb3d5d9543226->enter($__internal_fe5408e60b2bdb4148f523eb263a88cdcd111dace0f656cdfe5bb3d5d9543226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fe5408e60b2bdb4148f523eb263a88cdcd111dace0f656cdfe5bb3d5d9543226->leave($__internal_fe5408e60b2bdb4148f523eb263a88cdcd111dace0f656cdfe5bb3d5d9543226_prof);

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
