<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_31b2cfc546513b0312611267b9b0746bdaadb4ab2e097ecd0af8289c619a3c1c extends Twig_Template
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
        $__internal_e22885fcaeb7068a2e3baf10ad1da403e86852e39d6ecebdcd3170e9562dd717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22885fcaeb7068a2e3baf10ad1da403e86852e39d6ecebdcd3170e9562dd717->enter($__internal_e22885fcaeb7068a2e3baf10ad1da403e86852e39d6ecebdcd3170e9562dd717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a76ad1c6e91f7725ea14ff041f2f1c0bd83c09c63fd889f52af84c3cbced6b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76ad1c6e91f7725ea14ff041f2f1c0bd83c09c63fd889f52af84c3cbced6b4c->enter($__internal_a76ad1c6e91f7725ea14ff041f2f1c0bd83c09c63fd889f52af84c3cbced6b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e22885fcaeb7068a2e3baf10ad1da403e86852e39d6ecebdcd3170e9562dd717->leave($__internal_e22885fcaeb7068a2e3baf10ad1da403e86852e39d6ecebdcd3170e9562dd717_prof);

        
        $__internal_a76ad1c6e91f7725ea14ff041f2f1c0bd83c09c63fd889f52af84c3cbced6b4c->leave($__internal_a76ad1c6e91f7725ea14ff041f2f1c0bd83c09c63fd889f52af84c3cbced6b4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b021e53b760fa7945e6c6f176e772b1f8fb440c51ececd436b206ff52c2128f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b021e53b760fa7945e6c6f176e772b1f8fb440c51ececd436b206ff52c2128f5->enter($__internal_b021e53b760fa7945e6c6f176e772b1f8fb440c51ececd436b206ff52c2128f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_906bf3db6410ff1131af301aa0b9ac54d01303d111537fc5f6bd5b96f211eb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906bf3db6410ff1131af301aa0b9ac54d01303d111537fc5f6bd5b96f211eb4c->enter($__internal_906bf3db6410ff1131af301aa0b9ac54d01303d111537fc5f6bd5b96f211eb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_906bf3db6410ff1131af301aa0b9ac54d01303d111537fc5f6bd5b96f211eb4c->leave($__internal_906bf3db6410ff1131af301aa0b9ac54d01303d111537fc5f6bd5b96f211eb4c_prof);

        
        $__internal_b021e53b760fa7945e6c6f176e772b1f8fb440c51ececd436b206ff52c2128f5->leave($__internal_b021e53b760fa7945e6c6f176e772b1f8fb440c51ececd436b206ff52c2128f5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f60520b916a4126851c3e45b61fcd3646b0db9d35efd7fa78d72f65da0d3651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f60520b916a4126851c3e45b61fcd3646b0db9d35efd7fa78d72f65da0d3651->enter($__internal_2f60520b916a4126851c3e45b61fcd3646b0db9d35efd7fa78d72f65da0d3651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c8265d959bab554640346d8f71b1a61eb0ddd24ae321c42511c1ff53a7a3a5cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8265d959bab554640346d8f71b1a61eb0ddd24ae321c42511c1ff53a7a3a5cf->enter($__internal_c8265d959bab554640346d8f71b1a61eb0ddd24ae321c42511c1ff53a7a3a5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c8265d959bab554640346d8f71b1a61eb0ddd24ae321c42511c1ff53a7a3a5cf->leave($__internal_c8265d959bab554640346d8f71b1a61eb0ddd24ae321c42511c1ff53a7a3a5cf_prof);

        
        $__internal_2f60520b916a4126851c3e45b61fcd3646b0db9d35efd7fa78d72f65da0d3651->leave($__internal_2f60520b916a4126851c3e45b61fcd3646b0db9d35efd7fa78d72f65da0d3651_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_112a605d39e6273d03709ef6cc5f5c29fa7f1f9742b1a6513ddde69337402b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112a605d39e6273d03709ef6cc5f5c29fa7f1f9742b1a6513ddde69337402b50->enter($__internal_112a605d39e6273d03709ef6cc5f5c29fa7f1f9742b1a6513ddde69337402b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cef7385ac37319a63f0669dfe6e794b730fc725dd21a878ff751a34116c9a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cef7385ac37319a63f0669dfe6e794b730fc725dd21a878ff751a34116c9a1a->enter($__internal_2cef7385ac37319a63f0669dfe6e794b730fc725dd21a878ff751a34116c9a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2cef7385ac37319a63f0669dfe6e794b730fc725dd21a878ff751a34116c9a1a->leave($__internal_2cef7385ac37319a63f0669dfe6e794b730fc725dd21a878ff751a34116c9a1a_prof);

        
        $__internal_112a605d39e6273d03709ef6cc5f5c29fa7f1f9742b1a6513ddde69337402b50->leave($__internal_112a605d39e6273d03709ef6cc5f5c29fa7f1f9742b1a6513ddde69337402b50_prof);

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
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/layout.html.twig", "C:\\Users\\fdema\\dev\\ikom-microservice-bundle\\IkomRequest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
