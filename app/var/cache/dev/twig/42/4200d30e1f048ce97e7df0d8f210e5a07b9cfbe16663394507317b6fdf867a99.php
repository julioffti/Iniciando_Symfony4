<?php

/* base.html.twig */
class __TwigTemplate_c6efce9f98153a63ad42efb657e8be12737f6217ef904377dede52c152d0e442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_427f843c61c540142ab64198874069a469678314311a05e25676c459cfcfb593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427f843c61c540142ab64198874069a469678314311a05e25676c459cfcfb593->enter($__internal_427f843c61c540142ab64198874069a469678314311a05e25676c459cfcfb593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

    <script type=\"text/javascript\" src=\"https://use.fontawesome.com/6410112707.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
<div class=\"container\">
    <div class=\"row mt-5\">
        <div class=\"col-md-12\">
            ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
</body>
</html>";
        
        $__internal_427f843c61c540142ab64198874069a469678314311a05e25676c459cfcfb593->leave($__internal_427f843c61c540142ab64198874069a469678314311a05e25676c459cfcfb593_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_31ac13878c8cda67cd5de6a51d9ae66248c8d1a6ddee215c0baff95f15475fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ac13878c8cda67cd5de6a51d9ae66248c8d1a6ddee215c0baff95f15475fe0->enter($__internal_31ac13878c8cda67cd5de6a51d9ae66248c8d1a6ddee215c0baff95f15475fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Cadastro de Produtos";
        
        $__internal_31ac13878c8cda67cd5de6a51d9ae66248c8d1a6ddee215c0baff95f15475fe0->leave($__internal_31ac13878c8cda67cd5de6a51d9ae66248c8d1a6ddee215c0baff95f15475fe0_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb28a5c8c3ee07369c2c2c3c2b0c317108d522011ecf014ca5d2fa759bf3f17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb28a5c8c3ee07369c2c2c3c2b0c317108d522011ecf014ca5d2fa759bf3f17c->enter($__internal_bb28a5c8c3ee07369c2c2c3c2b0c317108d522011ecf014ca5d2fa759bf3f17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_bb28a5c8c3ee07369c2c2c3c2b0c317108d522011ecf014ca5d2fa759bf3f17c->leave($__internal_bb28a5c8c3ee07369c2c2c3c2b0c317108d522011ecf014ca5d2fa759bf3f17c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  65 => 13,  49 => 20,  47 => 19,  38 => 13,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

    <script type=\"text/javascript\" src=\"https://use.fontawesome.com/6410112707.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <title>{% block title %} Cadastro de Produtos{% endblock %}</title>
</head>
<body>
<div class=\"container\">
    <div class=\"row mt-5\">
        <div class=\"col-md-12\">
            {% block body %} {% endblock %}
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
</body>
</html>", "base.html.twig", "/application/app/templates/base.html.twig");
    }
}
