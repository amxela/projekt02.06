<?php

/* number.html.twig */
class __TwigTemplate_a7a98141f334a9b476779fc612fdb2391e4e71a1118a2b5ab87e2e923e531121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "number.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_269876b34574c19e11584e62db55981e04d845615b1138be6efc916251f6bae7 = $this->env->getExtension("native_profiler");
        $__internal_269876b34574c19e11584e62db55981e04d845615b1138be6efc916251f6bae7->enter($__internal_269876b34574c19e11584e62db55981e04d845615b1138be6efc916251f6bae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_269876b34574c19e11584e62db55981e04d845615b1138be6efc916251f6bae7->leave($__internal_269876b34574c19e11584e62db55981e04d845615b1138be6efc916251f6bae7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_57a2b6afc6f0b01532fc03293bb3c0309763de836b2e2ed5ad32a3da09e5d9d9 = $this->env->getExtension("native_profiler");
        $__internal_57a2b6afc6f0b01532fc03293bb3c0309763de836b2e2ed5ad32a3da09e5d9d9->enter($__internal_57a2b6afc6f0b01532fc03293bb3c0309763de836b2e2ed5ad32a3da09e5d9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_57a2b6afc6f0b01532fc03293bb3c0309763de836b2e2ed5ad32a3da09e5d9d9->leave($__internal_57a2b6afc6f0b01532fc03293bb3c0309763de836b2e2ed5ad32a3da09e5d9d9_prof);

    }

    public function getTemplateName()
    {
        return "number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
