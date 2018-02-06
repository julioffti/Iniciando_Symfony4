<?php

/* produto/_form.html.twig */
class __TwigTemplate_cc8c966466734acc217e45a84828be62b9e35d135cbb5bcf30b2810d61240abf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9d50cd7d372e3b7b2e08f8123960e109746cd3fc9df8a2a33d015f722318f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d50cd7d372e3b7b2e08f8123960e109746cd3fc9df8a2a33d015f722318f56->enter($__internal_e9d50cd7d372e3b7b2e08f8123960e109746cd3fc9df8a2a33d015f722318f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produto/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

<div class=\"form-group\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "nome", array()), 'label');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "nome", array()), 'widget');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "nome", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "preco", array()), 'label');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "preco", array()), 'widget');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "preco", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "descricao", array()), 'label');
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "descricao", array()), 'widget');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "descricao", array()), 'errors');
        echo "
</div>

";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "enviar", array()), 'widget');
        
        $__internal_e9d50cd7d372e3b7b2e08f8123960e109746cd3fc9df8a2a33d015f722318f56->leave($__internal_e9d50cd7d372e3b7b2e08f8123960e109746cd3fc9df8a2a33d015f722318f56_prof);

    }

    public function getTemplateName()
    {
        return "produto/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  66 => 18,  62 => 17,  58 => 16,  51 => 12,  47 => 11,  43 => 10,  36 => 6,  32 => 5,  28 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {\"attr\": {\"novalidate\": \"novalidate\"}}) }}

<div class=\"form-group\">
    {{ form_label(form.nome) }}
    {{ form_widget(form.nome) }}
    {{ form_errors(form.nome) }}
</div>

<div class=\"form-group\">
    {{ form_label(form.preco) }}
    {{ form_widget(form.preco) }}
    {{ form_errors(form.preco) }}
</div>

<div class=\"form-group\">
    {{ form_label(form.descricao) }}
    {{ form_widget(form.descricao) }}
    {{ form_errors(form.descricao) }}
</div>

{{ form_widget(form.enviar) }}", "produto/_form.html.twig", "/application/app/templates/produto/_form.html.twig");
    }
}
