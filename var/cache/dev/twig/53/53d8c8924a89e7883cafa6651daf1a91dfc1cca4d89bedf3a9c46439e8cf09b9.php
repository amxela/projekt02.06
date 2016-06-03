<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ce7b7762107fb259cc829a116bd72b08b425f90d124d0c01049c65008b07a60e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7737e5d55a705a1765e246eac989a195368162a62942d35289ef633e57a4691 = $this->env->getExtension("native_profiler");
        $__internal_c7737e5d55a705a1765e246eac989a195368162a62942d35289ef633e57a4691->enter($__internal_c7737e5d55a705a1765e246eac989a195368162a62942d35289ef633e57a4691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7737e5d55a705a1765e246eac989a195368162a62942d35289ef633e57a4691->leave($__internal_c7737e5d55a705a1765e246eac989a195368162a62942d35289ef633e57a4691_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e91a3bb2c22838a53e392b6bb9b61f085d6e41d031b72c49f0e3572908a30f3b = $this->env->getExtension("native_profiler");
        $__internal_e91a3bb2c22838a53e392b6bb9b61f085d6e41d031b72c49f0e3572908a30f3b->enter($__internal_e91a3bb2c22838a53e392b6bb9b61f085d6e41d031b72c49f0e3572908a30f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e91a3bb2c22838a53e392b6bb9b61f085d6e41d031b72c49f0e3572908a30f3b->leave($__internal_e91a3bb2c22838a53e392b6bb9b61f085d6e41d031b72c49f0e3572908a30f3b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aab390dd7ec525ff8c41d91969a6d7b46269c9d56ed0dbc27c9fd2d16da75b7 = $this->env->getExtension("native_profiler");
        $__internal_3aab390dd7ec525ff8c41d91969a6d7b46269c9d56ed0dbc27c9fd2d16da75b7->enter($__internal_3aab390dd7ec525ff8c41d91969a6d7b46269c9d56ed0dbc27c9fd2d16da75b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3aab390dd7ec525ff8c41d91969a6d7b46269c9d56ed0dbc27c9fd2d16da75b7->leave($__internal_3aab390dd7ec525ff8c41d91969a6d7b46269c9d56ed0dbc27c9fd2d16da75b7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dd065e42da335d369fbdd1c8cf33888c2a3db6ce20abcbd4ce9dfe5c017b029 = $this->env->getExtension("native_profiler");
        $__internal_6dd065e42da335d369fbdd1c8cf33888c2a3db6ce20abcbd4ce9dfe5c017b029->enter($__internal_6dd065e42da335d369fbdd1c8cf33888c2a3db6ce20abcbd4ce9dfe5c017b029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6dd065e42da335d369fbdd1c8cf33888c2a3db6ce20abcbd4ce9dfe5c017b029->leave($__internal_6dd065e42da335d369fbdd1c8cf33888c2a3db6ce20abcbd4ce9dfe5c017b029_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
