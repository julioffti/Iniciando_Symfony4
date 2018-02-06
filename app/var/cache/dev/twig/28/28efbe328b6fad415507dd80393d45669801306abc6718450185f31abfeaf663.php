<?php

/* produto/show.html.twig */
class __TwigTemplate_1830adb816fccb2e8319f722a7d8fc8b2afb8c8e1ec96105a846e871d86ee80b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produto/show.html.twig", 1);
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
        $__internal_759a4b2d1008f233f2157c1c69fb72af727f44f3511622c15d0d962962c2c4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759a4b2d1008f233f2157c1c69fb72af727f44f3511622c15d0d962962c2c4e5->enter($__internal_759a4b2d1008f233f2157c1c69fb72af727f44f3511622c15d0d962962c2c4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produto/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_759a4b2d1008f233f2157c1c69fb72af727f44f3511622c15d0d962962c2c4e5->leave($__internal_759a4b2d1008f233f2157c1c69fb72af727f44f3511622c15d0d962962c2c4e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc2072ffdab854e8d783ac30c30e71840ccf29619a387c192f0c74443d03d067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2072ffdab854e8d783ac30c30e71840ccf29619a387c192f0c74443d03d067->enter($__internal_fc2072ffdab854e8d783ac30c30e71840ccf29619a387c192f0c74443d03d067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Edição de produto -
";
        
        $__internal_fc2072ffdab854e8d783ac30c30e71840ccf29619a387c192f0c74443d03d067->leave($__internal_fc2072ffdab854e8d783ac30c30e71840ccf29619a387c192f0c74443d03d067_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1404a1ce7f42e762bf1094cbc93254672e7d71d2042c93b7a7769da3b61faeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1404a1ce7f42e762bf1094cbc93254672e7d71d2042c93b7a7769da3b61faeb6->enter($__internal_1404a1ce7f42e762bf1094cbc93254672e7d71d2042c93b7a7769da3b61faeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listar-produto");
        echo "\" class=\"pull-right\"><i class=\"fa fa-arrow-circle-left fa-3x\"></i></a>
        </div>
    </div>
    <hr>
    <table class=\"table table-striped table-hover mt-3\">
        <tbody>
            <tr>
                <th>Código</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 18, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 22, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Preço</th>
                <td>R\$ ";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 26, $this->getSourceContext()); })()), "preco", array()), 2, ",", "."), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrição</th>
                <td>";
        // line 30
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 30, $this->getSourceContext()); })()), "descricao", array()), "html", null, true));
        echo "</td>
            </tr>
        </tbody>
    </table>
";
        
        $__internal_1404a1ce7f42e762bf1094cbc93254672e7d71d2042c93b7a7769da3b61faeb6->leave($__internal_1404a1ce7f42e762bf1094cbc93254672e7d71d2042c93b7a7769da3b61faeb6_prof);

    }

    public function getTemplateName()
    {
        return "produto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  84 => 26,  77 => 22,  70 => 18,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}
    Edição de produto -
{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <a href=\"{{ path('listar-produto') }}\" class=\"pull-right\"><i class=\"fa fa-arrow-circle-left fa-3x\"></i></a>
        </div>
    </div>
    <hr>
    <table class=\"table table-striped table-hover mt-3\">
        <tbody>
            <tr>
                <th>Código</th>
                <td>{{ produto.id }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>{{ produto.nome }}</td>
            </tr>
            <tr>
                <th>Preço</th>
                <td>R\$ {{ produto.preco|number_format(2, \",\", \".\") }}</td>
            </tr>
            <tr>
                <th>Descrição</th>
                <td>{{ produto.descricao|nl2br }}</td>
            </tr>
        </tbody>
    </table>
{% endblock %}", "produto/show.html.twig", "/application/app/templates/produto/show.html.twig");
    }
}
