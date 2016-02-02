<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_730bd54c72d0f008a52430b787001293fc2ed64099dd7fc29a4fb58d1b6bad78 extends Twig_Template
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
        $__internal_0db950b64b446380031bc2c480f263cd685f22931b1146226e9a7e2a8f0e779f = $this->env->getExtension("native_profiler");
        $__internal_0db950b64b446380031bc2c480f263cd685f22931b1146226e9a7e2a8f0e779f->enter($__internal_0db950b64b446380031bc2c480f263cd685f22931b1146226e9a7e2a8f0e779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db950b64b446380031bc2c480f263cd685f22931b1146226e9a7e2a8f0e779f->leave($__internal_0db950b64b446380031bc2c480f263cd685f22931b1146226e9a7e2a8f0e779f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3473460c21fd4b12bd077b094212255a74fff145d243f2f550030de61211c8a9 = $this->env->getExtension("native_profiler");
        $__internal_3473460c21fd4b12bd077b094212255a74fff145d243f2f550030de61211c8a9->enter($__internal_3473460c21fd4b12bd077b094212255a74fff145d243f2f550030de61211c8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3473460c21fd4b12bd077b094212255a74fff145d243f2f550030de61211c8a9->leave($__internal_3473460c21fd4b12bd077b094212255a74fff145d243f2f550030de61211c8a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a576466e9d93c46629f5a45e2c9efdcdca0a702f3c9fa843973ec19099ed09b = $this->env->getExtension("native_profiler");
        $__internal_7a576466e9d93c46629f5a45e2c9efdcdca0a702f3c9fa843973ec19099ed09b->enter($__internal_7a576466e9d93c46629f5a45e2c9efdcdca0a702f3c9fa843973ec19099ed09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7a576466e9d93c46629f5a45e2c9efdcdca0a702f3c9fa843973ec19099ed09b->leave($__internal_7a576466e9d93c46629f5a45e2c9efdcdca0a702f3c9fa843973ec19099ed09b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5aba7ddaee432bf5784bf165b47a5c121d183b6c8e129fa15b8d836373c817c4 = $this->env->getExtension("native_profiler");
        $__internal_5aba7ddaee432bf5784bf165b47a5c121d183b6c8e129fa15b8d836373c817c4->enter($__internal_5aba7ddaee432bf5784bf165b47a5c121d183b6c8e129fa15b8d836373c817c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5aba7ddaee432bf5784bf165b47a5c121d183b6c8e129fa15b8d836373c817c4->leave($__internal_5aba7ddaee432bf5784bf165b47a5c121d183b6c8e129fa15b8d836373c817c4_prof);

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
