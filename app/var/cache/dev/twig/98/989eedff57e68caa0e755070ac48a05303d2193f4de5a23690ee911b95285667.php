<?php

/* produto/create.html.twig */
class __TwigTemplate_608748ae62013d694124123449485205e2baf91b92b9bfa62d8b2c3bde52dce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produto/create.html.twig", 1);
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
        $__internal_5df57499c64e59c6627bc925900131979285da4836b43ae318df753c57ade98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df57499c64e59c6627bc925900131979285da4836b43ae318df753c57ade98f->enter($__internal_5df57499c64e59c6627bc925900131979285da4836b43ae318df753c57ade98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produto/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5df57499c64e59c6627bc925900131979285da4836b43ae318df753c57ade98f->leave($__internal_5df57499c64e59c6627bc925900131979285da4836b43ae318df753c57ade98f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f181d9602858f34ed38f93da74d1c93594a5c1fe32ed9e093ac40a86bf64dbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f181d9602858f34ed38f93da74d1c93594a5c1fe32ed9e093ac40a86bf64dbd7->enter($__internal_f181d9602858f34ed38f93da74d1c93594a5c1fe32ed9e093ac40a86bf64dbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Cadastro de produto
";
        
        $__internal_f181d9602858f34ed38f93da74d1c93594a5c1fe32ed9e093ac40a86bf64dbd7->leave($__internal_f181d9602858f34ed38f93da74d1c93594a5c1fe32ed9e093ac40a86bf64dbd7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_85acb3d9645062a147467e52bd4de4bf4c607925821030c1948dc7e28ebec0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85acb3d9645062a147467e52bd4de4bf4c607925821030c1948dc7e28ebec0db->enter($__internal_85acb3d9645062a147467e52bd4de4bf4c607925821030c1948dc7e28ebec0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h2>Cadastrar produto</h2>
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
        $this->loadTemplate("produto/_form.html.twig", "produto/create.html.twig", 16)->display($context);
        
        $__internal_85acb3d9645062a147467e52bd4de4bf4c607925821030c1948dc7e28ebec0db->leave($__internal_85acb3d9645062a147467e52bd4de4bf4c607925821030c1948dc7e28ebec0db_prof);

    }

    public function getTemplateName()
    {
        return "produto/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  61 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}
    Cadastro de produto
{% endblock %}

{% block body %}
    <h2>Cadastrar produto</h2>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <a href=\"{{ path('listar-produto') }}\" class=\"pull-right\"><i class=\"fa fa-arrow-circle-left fa-3x\"></i></a>
        </div>
    </div>
    <hr>
    {% include \"produto/_form.html.twig\" %}
{% endblock %}", "produto/create.html.twig", "/application/app/templates/produto/create.html.twig");
    }
}
