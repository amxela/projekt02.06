<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_061703111d90830838755db2a060dc1ab8c44661ad9199cd209005d01c1b4ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5adda5a950c4a5ad8e7797664d9e19c633aec2fa03915c7506fc33c95c51894 = $this->env->getExtension("native_profiler");
        $__internal_b5adda5a950c4a5ad8e7797664d9e19c633aec2fa03915c7506fc33c95c51894->enter($__internal_b5adda5a950c4a5ad8e7797664d9e19c633aec2fa03915c7506fc33c95c51894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5adda5a950c4a5ad8e7797664d9e19c633aec2fa03915c7506fc33c95c51894->leave($__internal_b5adda5a950c4a5ad8e7797664d9e19c633aec2fa03915c7506fc33c95c51894_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c46252ef97efef161ad1993b2e218532a2eadee99dbbfd0960295ef601cb8ad4 = $this->env->getExtension("native_profiler");
        $__internal_c46252ef97efef161ad1993b2e218532a2eadee99dbbfd0960295ef601cb8ad4->enter($__internal_c46252ef97efef161ad1993b2e218532a2eadee99dbbfd0960295ef601cb8ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c46252ef97efef161ad1993b2e218532a2eadee99dbbfd0960295ef601cb8ad4->leave($__internal_c46252ef97efef161ad1993b2e218532a2eadee99dbbfd0960295ef601cb8ad4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21499302630f1c4b9fedfe99e662ec1755083db5347c4ad9e09e8702ce43124c = $this->env->getExtension("native_profiler");
        $__internal_21499302630f1c4b9fedfe99e662ec1755083db5347c4ad9e09e8702ce43124c->enter($__internal_21499302630f1c4b9fedfe99e662ec1755083db5347c4ad9e09e8702ce43124c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21499302630f1c4b9fedfe99e662ec1755083db5347c4ad9e09e8702ce43124c->leave($__internal_21499302630f1c4b9fedfe99e662ec1755083db5347c4ad9e09e8702ce43124c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc14580219b6f4110870c35901cd37c742b0a83f8daa48fc7b1e5192dfff2b8a = $this->env->getExtension("native_profiler");
        $__internal_fc14580219b6f4110870c35901cd37c742b0a83f8daa48fc7b1e5192dfff2b8a->enter($__internal_fc14580219b6f4110870c35901cd37c742b0a83f8daa48fc7b1e5192dfff2b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc14580219b6f4110870c35901cd37c742b0a83f8daa48fc7b1e5192dfff2b8a->leave($__internal_fc14580219b6f4110870c35901cd37c742b0a83f8daa48fc7b1e5192dfff2b8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
