<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e7116213f4a593b10dfc5f0354abbc92f0476e599ee8cf82c1e13e7e144bce2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a078f70af7db3f038f81cc740c4907500cff9b5a1cce7457faa6db72e6c429b2 = $this->env->getExtension("native_profiler");
        $__internal_a078f70af7db3f038f81cc740c4907500cff9b5a1cce7457faa6db72e6c429b2->enter($__internal_a078f70af7db3f038f81cc740c4907500cff9b5a1cce7457faa6db72e6c429b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a078f70af7db3f038f81cc740c4907500cff9b5a1cce7457faa6db72e6c429b2->leave($__internal_a078f70af7db3f038f81cc740c4907500cff9b5a1cce7457faa6db72e6c429b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48f7b97d5d1a05ce43b1a51a19a2e9e2ce0d8818d17c47b08a74ee85ea656324 = $this->env->getExtension("native_profiler");
        $__internal_48f7b97d5d1a05ce43b1a51a19a2e9e2ce0d8818d17c47b08a74ee85ea656324->enter($__internal_48f7b97d5d1a05ce43b1a51a19a2e9e2ce0d8818d17c47b08a74ee85ea656324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_48f7b97d5d1a05ce43b1a51a19a2e9e2ce0d8818d17c47b08a74ee85ea656324->leave($__internal_48f7b97d5d1a05ce43b1a51a19a2e9e2ce0d8818d17c47b08a74ee85ea656324_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_327599b283e7f7184288c3c25baf0f5b7b89aa96067ad4b9d3bfdda3ffce3258 = $this->env->getExtension("native_profiler");
        $__internal_327599b283e7f7184288c3c25baf0f5b7b89aa96067ad4b9d3bfdda3ffce3258->enter($__internal_327599b283e7f7184288c3c25baf0f5b7b89aa96067ad4b9d3bfdda3ffce3258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_327599b283e7f7184288c3c25baf0f5b7b89aa96067ad4b9d3bfdda3ffce3258->leave($__internal_327599b283e7f7184288c3c25baf0f5b7b89aa96067ad4b9d3bfdda3ffce3258_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_edacf85827750c12f45759bef5f2b7f3598ca2b7cafb6816a7ab29315270fee4 = $this->env->getExtension("native_profiler");
        $__internal_edacf85827750c12f45759bef5f2b7f3598ca2b7cafb6816a7ab29315270fee4->enter($__internal_edacf85827750c12f45759bef5f2b7f3598ca2b7cafb6816a7ab29315270fee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_edacf85827750c12f45759bef5f2b7f3598ca2b7cafb6816a7ab29315270fee4->leave($__internal_edacf85827750c12f45759bef5f2b7f3598ca2b7cafb6816a7ab29315270fee4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
