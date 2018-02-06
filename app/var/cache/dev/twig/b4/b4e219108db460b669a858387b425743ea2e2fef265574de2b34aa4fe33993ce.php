<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4e0ab2b50d1c4b325d687ccf36c2ff86665e5c5078eac941eac2888a210a3468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c2493f340bc030e7ab8192b3acfba35e481fefa96f38074e0f52f2fc8dec998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2493f340bc030e7ab8192b3acfba35e481fefa96f38074e0f52f2fc8dec998->enter($__internal_6c2493f340bc030e7ab8192b3acfba35e481fefa96f38074e0f52f2fc8dec998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6c2493f340bc030e7ab8192b3acfba35e481fefa96f38074e0f52f2fc8dec998->leave($__internal_6c2493f340bc030e7ab8192b3acfba35e481fefa96f38074e0f52f2fc8dec998_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7f515bf7bbf3f80be796f5a39ec5eef3df3770c997cb7240e6a3ee902800419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f515bf7bbf3f80be796f5a39ec5eef3df3770c997cb7240e6a3ee902800419->enter($__internal_b7f515bf7bbf3f80be796f5a39ec5eef3df3770c997cb7240e6a3ee902800419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b7f515bf7bbf3f80be796f5a39ec5eef3df3770c997cb7240e6a3ee902800419->leave($__internal_b7f515bf7bbf3f80be796f5a39ec5eef3df3770c997cb7240e6a3ee902800419_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc8d7829fe862f6f66a490654eeb96b457749e9f0afabdff3ee2c99448a3a521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8d7829fe862f6f66a490654eeb96b457749e9f0afabdff3ee2c99448a3a521->enter($__internal_fc8d7829fe862f6f66a490654eeb96b457749e9f0afabdff3ee2c99448a3a521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fc8d7829fe862f6f66a490654eeb96b457749e9f0afabdff3ee2c99448a3a521->leave($__internal_fc8d7829fe862f6f66a490654eeb96b457749e9f0afabdff3ee2c99448a3a521_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdf597cd013a2bfe5d56cdca6506bc916064b3e74a0e49cbddfc265ec552b40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf597cd013a2bfe5d56cdca6506bc916064b3e74a0e49cbddfc265ec552b40c->enter($__internal_fdf597cd013a2bfe5d56cdca6506bc916064b3e74a0e49cbddfc265ec552b40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fdf597cd013a2bfe5d56cdca6506bc916064b3e74a0e49cbddfc265ec552b40c->leave($__internal_fdf597cd013a2bfe5d56cdca6506bc916064b3e74a0e49cbddfc265ec552b40c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/application/app/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
