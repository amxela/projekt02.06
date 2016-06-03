<?php

/* article_test.html.twig */
class __TwigTemplate_999b995871794151d9d27c148f00ac4661fb32c7ea706a4b7b29baee85a94792 extends Twig_Template
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
        $__internal_26d6e779839b550e54697e206675b69f9f9e1a02868c6d1f400ea58212747e48 = $this->env->getExtension("native_profiler");
        $__internal_26d6e779839b550e54697e206675b69f9f9e1a02868c6d1f400ea58212747e48->enter($__internal_26d6e779839b550e54697e206675b69f9f9e1a02868c6d1f400ea58212747e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article_test.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_26d6e779839b550e54697e206675b69f9f9e1a02868c6d1f400ea58212747e48->leave($__internal_26d6e779839b550e54697e206675b69f9f9e1a02868c6d1f400ea58212747e48_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c5a9d34e2a4a764f3e919e007889686e83359cfe63821ca6509d9061ff15d351 = $this->env->getExtension("native_profiler");
        $__internal_c5a9d34e2a4a764f3e919e007889686e83359cfe63821ca6509d9061ff15d351->enter($__internal_c5a9d34e2a4a764f3e919e007889686e83359cfe63821ca6509d9061ff15d351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<ul id=\"besobration\">
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["besobration"]) ? $context["besobration"] : $this->getContext($context, "besobration")));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 17
            echo "\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $context["elem"], "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</ul>
</td>
</tr>
</table>

<script type=\"text/javascript\">
\t\t\$(\"a\").click(function(event){
\t\t});
</script>
";
        
        $__internal_c5a9d34e2a4a764f3e919e007889686e83359cfe63821ca6509d9061ff15d351->leave($__internal_c5a9d34e2a4a764f3e919e007889686e83359cfe63821ca6509d9061ff15d351_prof);

    }

    public function getTemplateName()
    {
        return "article_test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  71 => 17,  67 => 16,  59 => 10,  46 => 8,  42 => 7,  35 => 2,  23 => 1,);
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
/* 	<ul id="besobration">*/
/* 		{%for elem in besobration%}*/
/* 				<li>{{elem}}</li>*/
/* 		{%endfor%}*/
/* 	</ul>*/
/* </td>*/
/* </tr>*/
/* </table>*/
/* */
/* <script type="text/javascript">*/
/* 		$("a").click(function(event){*/
/* 		});*/
/* </script>*/
/* {% endblock %}*/
