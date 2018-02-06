<?php

/* produto/update.html.twig */
class __TwigTemplate_078484e07cd5bbc58af9ebe610edf9d897847c9b662b639c28761a02b6ebf84b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produto/update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc24c4c201f52f4deeef5d70172335b282b45b1d3fbfb7ed6737f0bcf3a3d4db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc24c4c201f52f4deeef5d70172335b282b45b1d3fbfb7ed6737f0bcf3a3d4db->enter($__internal_fc24c4c201f52f4deeef5d70172335b282b45b1d3fbfb7ed6737f0bcf3a3d4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produto/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc24c4c201f52f4deeef5d70172335b282b45b1d3fbfb7ed6737f0bcf3a3d4db->leave($__internal_fc24c4c201f52f4deeef5d70172335b282b45b1d3fbfb7ed6737f0bcf3a3d4db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7b044654f72fbbdf296b5915ffa66af40155223c22a2bc2f3f71ba88d2e7979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b044654f72fbbdf296b5915ffa66af40155223c22a2bc2f3f71ba88d2e7979->enter($__internal_c7b044654f72fbbdf296b5915ffa66af40155223c22a2bc2f3f71ba88d2e7979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Edição de produto -
";
        
        $__internal_c7b044654f72fbbdf296b5915ffa66af40155223c22a2bc2f3f71ba88d2e7979->leave($__internal_c7b044654f72fbbdf296b5915ffa66af40155223c22a2bc2f3f71ba88d2e7979_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_de0814dcfd3a9c8ec669414f1a03f3a3de28a1eb8de056c5e1546d392ca37c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0814dcfd3a9c8ec669414f1a03f3a3de28a1eb8de056c5e1546d392ca37c86->enter($__internal_de0814dcfd3a9c8ec669414f1a03f3a3de28a1eb8de056c5e1546d392ca37c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Editar produto - <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 8, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "</small></h1>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listar-produto");
        echo "\" class=\"pull-right\"><i class=\"fa fa-arrow-circle-left fa-3x\"></i></a>
        </div>
    </div>
    <hr>
    ";
        // line 16
        $this->loadTemplate("produto/_form.html.twig", "produto/update.html.twig", 16)->display($context);
        
        $__internal_de0814dcfd3a9c8ec669414f1a03f3a3de28a1eb8de056c5e1546d392ca37c86->leave($__internal_de0814dcfd3a9c8ec669414f1a03f3a3de28a1eb8de056c5e1546d392ca37c86_prof);

    }

    public function getTemplateName()
    {
        return "produto/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  63 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}
    Edição de produto -
{% endblock %}

{% block body %}
    <h1>Editar produto - <small>{{ produto.nome }}</small></h1>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <a href=\"{{ path('listar-produto') }}\" class=\"pull-right\"><i class=\"fa fa-arrow-circle-left fa-3x\"></i></a>
        </div>
    </div>
    <hr>
    {% include \"produto/_form.html.twig\" %}
{% endblock %}", "produto/update.html.twig", "/application/app/templates/produto/update.html.twig");
    }
}
