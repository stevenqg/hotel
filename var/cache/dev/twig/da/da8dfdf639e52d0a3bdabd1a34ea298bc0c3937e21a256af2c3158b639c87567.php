<?php

/* ControlBundle:Client:add.html.twig */
class __TwigTemplate_72b7552e3545c2dcfa267b69b564affe7637b331ae8ace07b1d3ce6f6b2ac0ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ControlBundle:Client:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56b8735e91ca648c0bab871970ae85b8183a245ca3431c4bfa38ed3aa59f3c6b = $this->env->getExtension("native_profiler");
        $__internal_56b8735e91ca648c0bab871970ae85b8183a245ca3431c4bfa38ed3aa59f3c6b->enter($__internal_56b8735e91ca648c0bab871970ae85b8183a245ca3431c4bfa38ed3aa59f3c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Client:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b8735e91ca648c0bab871970ae85b8183a245ca3431c4bfa38ed3aa59f3c6b->leave($__internal_56b8735e91ca648c0bab871970ae85b8183a245ca3431c4bfa38ed3aa59f3c6b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_67e125e762384e6f165bf59dcfbe86b63d57bb6b198b249be637de741ec68f70 = $this->env->getExtension("native_profiler");
        $__internal_67e125e762384e6f165bf59dcfbe86b63d57bb6b198b249be637de741ec68f70->enter($__internal_67e125e762384e6f165bf59dcfbe86b63d57bb6b198b249be637de741ec68f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
            <h3> Create Client </h3>
        </div>
        <div>
            ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
            <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "your name")));
        echo "
                <span class=\"text-danger\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "your lastname")));
        echo "
                <span class=\"text-danger\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificationType", array()), 'label');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificationType", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "your id type")));
        echo "
                <span class=\"text-danger\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificationType", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificationNumber", array()), 'label');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificationNumber", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "your id number")));
        echo "
                <span class=\"text-danger\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificationNumber", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "your phone number")));
        echo "
                <span class=\"text-danger\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cellphone", array()), 'label');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cellphone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "your cell number")));
        echo "
                <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cellphone", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "your address")));
        echo "
                <span class=\"text-danger\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDate", array()), 'label');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDate", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "your birthDate")));
        echo "
                <span class=\"text-danger\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDate", array()), 'errors');
        echo "</span>
            </div>
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "create client", "attr" => array("class" => "btn btn-success")));
        echo "
            
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            
        </div>        
    </div>
    
";
        
        $__internal_67e125e762384e6f165bf59dcfbe86b63d57bb6b198b249be637de741ec68f70->leave($__internal_67e125e762384e6f165bf59dcfbe86b63d57bb6b198b249be637de741ec68f70_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Client:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 55,  168 => 53,  163 => 51,  159 => 50,  155 => 49,  149 => 46,  145 => 45,  141 => 44,  135 => 41,  131 => 40,  127 => 39,  121 => 36,  117 => 35,  113 => 34,  107 => 31,  103 => 30,  99 => 29,  93 => 26,  89 => 25,  85 => 24,  79 => 21,  75 => 20,  71 => 19,  65 => 16,  61 => 15,  57 => 14,  52 => 12,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* {{ parent() }}*/
/*     <div class="container">*/
/*         <div class="page-header">*/
/*             <h3> Create Client </h3>*/
/*         </div>*/
/*         <div>*/
/*             {{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.name) }}*/
/*                 {{ form_widget(form.name, {'attr' : {'class' : 'form-control', 'placeholder' : 'your name' } }) }}*/
/*                 <span class="text-danger">{{ form_errors(form.name) }}</span>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.lastname) }}*/
/*                 {{ form_widget(form.lastname, {'attr' : {'class' : 'form-control', 'placeholder' : 'your lastname' } }) }}*/
/*                 <span class="text-danger">{{ form_errors(form.lastname) }}</span>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.identificationType) }}*/
/*                 {{ form_widget(form.identificationType, {'attr' : {'class' : 'form-control', 'placeholder' : 'your id type' } }) }}*/
/*                 <span class="text-danger">{{ form_errors(form.identificationType) }}</span>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.identificationNumber) }}*/
/*                 {{ form_widget(form.identificationNumber, {'attr' : {'class' : 'form-control', 'placeholder' : 'your id number' } }) }}*/
/*                 <span class="text-danger">{{ form_errors(form.identificationNumber) }}</span>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.phone) }}*/
/*                 {{ form_widget(form.phone, {'attr' : {'class' : 'form-control', 'placeholder' : 'your phone number' } }) }}*/
/*                 <span class="text-danger">{{ form_errors(form.phone) }}</span>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.cellphone) }}*/
/*                 {{ form_widget(form.cellphone, {'attr' : {'class' : 'form-control', 'placeholder' : 'your cell number' } }) }}*/
/*                 <span class="text-danger">{{ form_errors(form.cellphone) }}</span>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.address) }}*/
/*                 {{ form_widget(form.address, {'attr' : {'class' : 'form-control', 'placeholder' : 'your address' } }) }}*/
/*                 <span class="text-danger">{{ form_errors(form.address) }}</span>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.birthDate) }}*/
/*                 {{ form_widget(form.birthDate, {'attr' : {'class' : 'form-control', 'placeholder' : 'your birthDate' } }) }}*/
/*                 <span class="text-danger">{{ form_errors(form.birthDate) }}</span>*/
/*             </div>*/
/*             {{form_widget(form.save, {'label' : 'create client', 'attr' : {'class' : 'btn btn-success'} }) }}*/
/*             */
/*             {{ form_end(form) }}*/
/*             */
/*         </div>        */
/*     </div>*/
/*     */
/* {% endblock %}*/
