<?php

/* ControlBundle:Client:index.html.twig */
class __TwigTemplate_10586a0a5a82cf46e68d83a2faa2b30336da70b7f698520ee9de9cbc71125952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ControlBundle:Client:index.html.twig", 1);
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
        $__internal_0c95b771ee5c0cd6a568ab7ce7d6f4f92e3c1699b8e462dbe461988762ac9d8b = $this->env->getExtension("native_profiler");
        $__internal_0c95b771ee5c0cd6a568ab7ce7d6f4f92e3c1699b8e462dbe461988762ac9d8b->enter($__internal_0c95b771ee5c0cd6a568ab7ce7d6f4f92e3c1699b8e462dbe461988762ac9d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ControlBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c95b771ee5c0cd6a568ab7ce7d6f4f92e3c1699b8e462dbe461988762ac9d8b->leave($__internal_0c95b771ee5c0cd6a568ab7ce7d6f4f92e3c1699b8e462dbe461988762ac9d8b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dcf75011a9b43c870050efd32524c2852f188980ce80775b93a1369252d4967 = $this->env->getExtension("native_profiler");
        $__internal_6dcf75011a9b43c870050efd32524c2852f188980ce80775b93a1369252d4967->enter($__internal_6dcf75011a9b43c870050efd32524c2852f188980ce80775b93a1369252d4967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"table-responsive container\">
        <div class=\"page-header\">
            <h3>clients list</h3>
        </div>
        
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>name</th>
                    <th>lastname</th>
                    <th>identification type</th>
                    <th>indentification number</th>
                    <th>phone</th>
                    <th>cellphone</th>
                    <th>adress</th>
                    <th>birthdate</th>
                    <th>action</th>
                </tr>
            </thead>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 28
            echo "                
                    <tr>
                        <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "lastname", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "identificationType", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "identificationNumber", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "phone", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cellphone", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "address", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "birthdate", array()), "d-m-Y H:i"), "html", null, true);
            echo "</th>
                        <td>
                            <a href=\"#\" class=\"btn btn-sm btn-info\">View</a>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("control_client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Edit</a>
                            <a href=\"#\" class=\"btn btn-sm btn-info\">Delete</a>
                        </td>
                    </tr>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </table>
    </div>
";
        
        $__internal_6dcf75011a9b43c870050efd32524c2852f188980ce80775b93a1369252d4967->leave($__internal_6dcf75011a9b43c870050efd32524c2852f188980ce80775b93a1369252d4967_prof);

    }

    public function getTemplateName()
    {
        return "ControlBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 46,  109 => 40,  103 => 37,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  83 => 32,  79 => 31,  75 => 30,  71 => 28,  67 => 27,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* {{ parent() }}*/
/* */
/*     <div class="table-responsive container">*/
/*         <div class="page-header">*/
/*             <h3>clients list</h3>*/
/*         </div>*/
/*         */
/*         <table class="table table-striped table-hover">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>name</th>*/
/*                     <th>lastname</th>*/
/*                     <th>identification type</th>*/
/*                     <th>indentification number</th>*/
/*                     <th>phone</th>*/
/*                     <th>cellphone</th>*/
/*                     <th>adress</th>*/
/*                     <th>birthdate</th>*/
/*                     <th>action</th>*/
/*                 </tr>*/
/*             </thead>*/
/*                 {% for client in clients %}*/
/*                 */
/*                     <tr>*/
/*                         <th>{{ client.name }}</th>*/
/*                         <th>{{ client.lastname}}</th>*/
/*                         <th>{{ client.identificationType }}</th>*/
/*                         <th>{{ client.identificationNumber }}</th>*/
/*                         <th>{{ client.phone }}</th>*/
/*                         <th>{{ client.cellphone }}</th>*/
/*                         <th>{{ client.address}}</th>*/
/*                         <th>{{ client.birthdate | date('d-m-Y H:i') }}</th>*/
/*                         <td>*/
/*                             <a href="#" class="btn btn-sm btn-info">View</a>*/
/*                             <a href="{{ path('control_client_edit', {id: client.id}) }}" class="btn btn-sm btn-info">Edit</a>*/
/*                             <a href="#" class="btn btn-sm btn-info">Delete</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 */
/*                 {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
