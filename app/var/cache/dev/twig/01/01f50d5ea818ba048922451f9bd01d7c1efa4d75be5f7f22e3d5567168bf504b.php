<?php

/* produto/index.html.twig */
class __TwigTemplate_624c3127e603aa56e7950149bdaebca30017d972bbf1a5104133b73c852c18ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produto/index.html.twig", 1);
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
        $__internal_aea2ed8cdc08c6f2441fd0d1ca8d0cd6eae1b7de7762c0e3c1070b4ddb97cb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea2ed8cdc08c6f2441fd0d1ca8d0cd6eae1b7de7762c0e3c1070b4ddb97cb53->enter($__internal_aea2ed8cdc08c6f2441fd0d1ca8d0cd6eae1b7de7762c0e3c1070b4ddb97cb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produto/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aea2ed8cdc08c6f2441fd0d1ca8d0cd6eae1b7de7762c0e3c1070b4ddb97cb53->leave($__internal_aea2ed8cdc08c6f2441fd0d1ca8d0cd6eae1b7de7762c0e3c1070b4ddb97cb53_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2b286aa9586939ac289a06434c4730bf360b9b6af0255c5207b207ad93da05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b286aa9586939ac289a06434c4730bf360b9b6af0255c5207b207ad93da05b->enter($__internal_f2b286aa9586939ac289a06434c4730bf360b9b6af0255c5207b207ad93da05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Listagem de produtos
";
        
        $__internal_f2b286aa9586939ac289a06434c4730bf360b9b6af0255c5207b207ad93da05b->leave($__internal_f2b286aa9586939ac289a06434c4730bf360b9b6af0255c5207b207ad93da05b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5aae25682ebf092e5f869f30dd8a5db39d3ae6d5d8ba30ff8a9df7573eb7c4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aae25682ebf092e5f869f30dd8a5db39d3ae6d5d8ba30ff8a9df7573eb7c4c2->enter($__internal_5aae25682ebf092e5f869f30dd8a5db39d3ae6d5d8ba30ff8a9df7573eb7c4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h2>Listando produtos</h2>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"alert alert-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <hr>
    <div class=\"row\">
        <div class=\"col-md-12\">
        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cadastrar-produto");
        echo "\" class=\"btn btn-primary btn-lg pull-right\">Adicionar produto</a>
        </div>
    </div>

    <table class=\"table table-striped table-hover mt-3\">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produtos"]) || array_key_exists("produtos", $context) ? $context["produtos"] : (function () { throw new Twig_Error_Runtime('Variable "produtos" does not exist.', 41, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
            // line 42
            echo "                <tr>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "nome", array()), "html", null, true);
            echo "</td>
                    <td>R\$ ";
            // line 45
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "preco", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar-produto", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
                        <a class=\"btn btn-sm btn-warning\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visualizar-produto", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-sm btn-danger bt-excluir-produto\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletar-produto", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i></a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            <script type=\"text/javascript\">
                \$(document).ready(function(){
                   \$(\".bt-excluir-produto\").click(function (ev) {
                       ev.preventDefault();

                       var url = \$(this).prop(\"href\");

                       if (confirm(\"Deseja excluir esse produto?\")) {
                           window.location = url;
                       }
                   });
                });
            </script>

        </tbody>
    </table>

";
        
        $__internal_5aae25682ebf092e5f869f30dd8a5db39d3ae6d5d8ba30ff8a9df7573eb7c4c2->leave($__internal_5aae25682ebf092e5f869f30dd8a5db39d3ae6d5d8ba30ff8a9df7573eb7c4c2_prof);

    }

    public function getTemplateName()
    {
        return "produto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  147 => 49,  143 => 48,  139 => 47,  134 => 45,  130 => 44,  126 => 43,  123 => 42,  119 => 41,  101 => 26,  95 => 22,  86 => 19,  83 => 18,  79 => 17,  76 => 16,  67 => 13,  64 => 12,  60 => 11,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{%  block title %}
    Listagem de produtos
{% endblock %}

{% block body %}

    <h2>Listando produtos</h2>

    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {% for flashMessage in app.session.flashbag.get('warning') %}
        <div class=\"alert alert-warning\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <hr>
    <div class=\"row\">
        <div class=\"col-md-12\">
        <a href=\"{{ path('cadastrar-produto') }}\" class=\"btn btn-primary btn-lg pull-right\">Adicionar produto</a>
        </div>
    </div>

    <table class=\"table table-striped table-hover mt-3\">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            {% for produto in produtos %}
                <tr>
                    <td>{{ produto.id }}</td>
                    <td>{{ produto.nome }}</td>
                    <td>R\$ {{ produto.preco|number_format(2, \",\", \".\") }}</td>
                    <td>
                        <a class=\"btn btn-sm btn-primary\" href=\"{{ path('editar-produto', {\"id\":produto.id}) }}\"><i class=\"fa fa-pencil\"></i></a>
                        <a class=\"btn btn-sm btn-warning\" href=\"{{ path('visualizar-produto', {\"id\":produto.id}) }}\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-sm btn-danger bt-excluir-produto\" href=\"{{ path('deletar-produto', {\"id\":produto.id}) }}\"><i class=\"fa fa-trash\"></i></a>
                    </td>
                </tr>
            {% endfor %}

            <script type=\"text/javascript\">
                \$(document).ready(function(){
                   \$(\".bt-excluir-produto\").click(function (ev) {
                       ev.preventDefault();

                       var url = \$(this).prop(\"href\");

                       if (confirm(\"Deseja excluir esse produto?\")) {
                           window.location = url;
                       }
                   });
                });
            </script>

        </tbody>
    </table>

{% endblock %}", "produto/index.html.twig", "/application/app/templates/produto/index.html.twig");
    }
}
