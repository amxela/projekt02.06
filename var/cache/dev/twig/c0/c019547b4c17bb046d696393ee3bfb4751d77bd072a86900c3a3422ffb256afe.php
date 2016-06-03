<?php

/* my_test_twig.html.twig */
class __TwigTemplate_65d6ee8a6c7169120bf6de133ea3d4cc823c48b3e2e7c3085ec7fb9d74b9a9a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5100b7779a63e35adea815ff69b298fb31a7e3731e5722a5b23f6379676f4e7 = $this->env->getExtension("native_profiler");
        $__internal_d5100b7779a63e35adea815ff69b298fb31a7e3731e5722a5b23f6379676f4e7->enter($__internal_d5100b7779a63e35adea815ff69b298fb31a7e3731e5722a5b23f6379676f4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my_test_twig.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d5100b7779a63e35adea815ff69b298fb31a7e3731e5722a5b23f6379676f4e7->leave($__internal_d5100b7779a63e35adea815ff69b298fb31a7e3731e5722a5b23f6379676f4e7_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4721ec7e1f3e92eb7a6995db23797fc6b532df4b0aa20d90a16ad60738d18313 = $this->env->getExtension("native_profiler");
        $__internal_4721ec7e1f3e92eb7a6995db23797fc6b532df4b0aa20d90a16ad60738d18313->enter($__internal_4721ec7e1f3e92eb7a6995db23797fc6b532df4b0aa20d90a16ad60738d18313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <ul id=\"navigation\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 4
            echo "\t\t\t<li><a href=\"\">";
            echo twig_escape_filter($this->env, $context["elem"], "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t</ul>
\t<p><a href=\"http://localhost:8000/site.com/category_name\">Перейти на страницу категорий</a></p>
";
        
        $__internal_4721ec7e1f3e92eb7a6995db23797fc6b532df4b0aa20d90a16ad60738d18313->leave($__internal_4721ec7e1f3e92eb7a6995db23797fc6b532df4b0aa20d90a16ad60738d18313_prof);

    }

    public function getTemplateName()
    {
        return "my_test_twig.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  42 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/*     <ul id="navigation">*/
/* 	{%for elem in navigation%}*/
/* 			<li><a href="">{{elem}}</a></li>*/
/* 	{%endfor%}*/
/* 	</ul>*/
/* 	<p><a href="http://localhost:8000/site.com/category_name">Перейти на страницу категорий</a></p>*/
/* {% endblock %}*/
