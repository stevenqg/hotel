<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a16629f25521703f316af498cf562816b115516a2e2a7746ee72f4b850de7f1 extends Twig_Template
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
        $__internal_6908649348d315e522c81b667f361ebd55e78c2217bb5be45070dde62b4996ef = $this->env->getExtension("native_profiler");
        $__internal_6908649348d315e522c81b667f361ebd55e78c2217bb5be45070dde62b4996ef->enter($__internal_6908649348d315e522c81b667f361ebd55e78c2217bb5be45070dde62b4996ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6908649348d315e522c81b667f361ebd55e78c2217bb5be45070dde62b4996ef->leave($__internal_6908649348d315e522c81b667f361ebd55e78c2217bb5be45070dde62b4996ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f48b033270a706d0cd882f7312d0c2feb724f71c4cc76aa8b3b027bcd8b70076 = $this->env->getExtension("native_profiler");
        $__internal_f48b033270a706d0cd882f7312d0c2feb724f71c4cc76aa8b3b027bcd8b70076->enter($__internal_f48b033270a706d0cd882f7312d0c2feb724f71c4cc76aa8b3b027bcd8b70076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f48b033270a706d0cd882f7312d0c2feb724f71c4cc76aa8b3b027bcd8b70076->leave($__internal_f48b033270a706d0cd882f7312d0c2feb724f71c4cc76aa8b3b027bcd8b70076_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d9e212a509b3a37c17073575f16cbd625daf0b3b695c0f14980d0f1cab7796d = $this->env->getExtension("native_profiler");
        $__internal_0d9e212a509b3a37c17073575f16cbd625daf0b3b695c0f14980d0f1cab7796d->enter($__internal_0d9e212a509b3a37c17073575f16cbd625daf0b3b695c0f14980d0f1cab7796d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d9e212a509b3a37c17073575f16cbd625daf0b3b695c0f14980d0f1cab7796d->leave($__internal_0d9e212a509b3a37c17073575f16cbd625daf0b3b695c0f14980d0f1cab7796d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7d1e4affdae60db2d612d151fe9b70791852ae25aca1416f4e821450e369464 = $this->env->getExtension("native_profiler");
        $__internal_a7d1e4affdae60db2d612d151fe9b70791852ae25aca1416f4e821450e369464->enter($__internal_a7d1e4affdae60db2d612d151fe9b70791852ae25aca1416f4e821450e369464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a7d1e4affdae60db2d612d151fe9b70791852ae25aca1416f4e821450e369464->leave($__internal_a7d1e4affdae60db2d612d151fe9b70791852ae25aca1416f4e821450e369464_prof);

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
