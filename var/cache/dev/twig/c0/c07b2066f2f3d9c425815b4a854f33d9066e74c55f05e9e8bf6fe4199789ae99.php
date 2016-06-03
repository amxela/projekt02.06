<?php

/* category_page.html.twig */
class __TwigTemplate_1b7d349be8cfdb0563a95cecd9c174d1906497680d60a82861149028d083378e extends Twig_Template
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
        $__internal_1311f75442c6555f425350e5cc0691ceb79c41219ad57e3c0651f656a94a0ef5 = $this->env->getExtension("native_profiler");
        $__internal_1311f75442c6555f425350e5cc0691ceb79c41219ad57e3c0651f656a94a0ef5->enter($__internal_1311f75442c6555f425350e5cc0691ceb79c41219ad57e3c0651f656a94a0ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category_page.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1311f75442c6555f425350e5cc0691ceb79c41219ad57e3c0651f656a94a0ef5->leave($__internal_1311f75442c6555f425350e5cc0691ceb79c41219ad57e3c0651f656a94a0ef5_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_ef530b7f7a13f48b9b23779692d10d255242d031aa9990b414b348899c8aa3bd = $this->env->getExtension("native_profiler");
        $__internal_ef530b7f7a13f48b9b23779692d10d255242d031aa9990b414b348899c8aa3bd->enter($__internal_ef530b7f7a13f48b9b23779692d10d255242d031aa9990b414b348899c8aa3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<script src=\"http://code.jquery.com/jquery-1.8.3.js\"></script>
<table>
<tr>
<td>
\t<ul id=\"navigation\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 8
            echo "\t\t\t\t<li><a href=\"/site.com/category_name/";
            echo twig_escape_filter($this->env, $context["elem"], "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["elem"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["elem"], "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</ul>
</td>
</tr>
<tr>
<td>
</td>
</tr>
</table>

<script type=\"text/javascript\">
\t\t\$(\"a\").click(function(event){
\t\t});
</script>
";
        
        $__internal_ef530b7f7a13f48b9b23779692d10d255242d031aa9990b414b348899c8aa3bd->leave($__internal_ef530b7f7a13f48b9b23779692d10d255242d031aa9990b414b348899c8aa3bd_prof);

    }

    public function getTemplateName()
    {
        return "category_page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  46 => 8,  42 => 7,  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/* <script src="http://code.jquery.com/jquery-1.8.3.js"></script>*/
/* <table>*/
/* <tr>*/
/* <td>*/
/* 	<ul id="navigation">*/
/* 		{%for elem in navigation%}*/
/* 				<li><a href="/site.com/category_name/{{elem}}" id="{{elem}}">{{elem}}</a></li>*/
/* 		{%endfor%}*/
/* 	</ul>*/
/* </td>*/
/* </tr>*/
/* <tr>*/
/* <td>*/
/* </td>*/
/* </tr>*/
/* </table>*/
/* */
/* <script type="text/javascript">*/
/* 		$("a").click(function(event){*/
/* 		});*/
/* </script>*/
/* {% endblock %}*/
/* */
