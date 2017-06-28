<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08cb262f401b86e992d1004fbf010831700bf01c8a8e8de713bcccee294436cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28f71db44400d8dcac777d65704337d6f45a967f3bb2012eac3054491319f0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f71db44400d8dcac777d65704337d6f45a967f3bb2012eac3054491319f0f6->enter($__internal_28f71db44400d8dcac777d65704337d6f45a967f3bb2012eac3054491319f0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3d169f3352236064b35e3df7e1c199f06fd0450704f7228ce1cee9337c9ce95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d169f3352236064b35e3df7e1c199f06fd0450704f7228ce1cee9337c9ce95b->enter($__internal_3d169f3352236064b35e3df7e1c199f06fd0450704f7228ce1cee9337c9ce95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f71db44400d8dcac777d65704337d6f45a967f3bb2012eac3054491319f0f6->leave($__internal_28f71db44400d8dcac777d65704337d6f45a967f3bb2012eac3054491319f0f6_prof);

        
        $__internal_3d169f3352236064b35e3df7e1c199f06fd0450704f7228ce1cee9337c9ce95b->leave($__internal_3d169f3352236064b35e3df7e1c199f06fd0450704f7228ce1cee9337c9ce95b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec875d3997211dbbad9a188fbdf3b3896a08502b559b5876b8e49887efdd2211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec875d3997211dbbad9a188fbdf3b3896a08502b559b5876b8e49887efdd2211->enter($__internal_ec875d3997211dbbad9a188fbdf3b3896a08502b559b5876b8e49887efdd2211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce8fc1146860eac12a6cd06283035b8e4fdbb1abc225c87d58e2ac601f0e9401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8fc1146860eac12a6cd06283035b8e4fdbb1abc225c87d58e2ac601f0e9401->enter($__internal_ce8fc1146860eac12a6cd06283035b8e4fdbb1abc225c87d58e2ac601f0e9401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ce8fc1146860eac12a6cd06283035b8e4fdbb1abc225c87d58e2ac601f0e9401->leave($__internal_ce8fc1146860eac12a6cd06283035b8e4fdbb1abc225c87d58e2ac601f0e9401_prof);

        
        $__internal_ec875d3997211dbbad9a188fbdf3b3896a08502b559b5876b8e49887efdd2211->leave($__internal_ec875d3997211dbbad9a188fbdf3b3896a08502b559b5876b8e49887efdd2211_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f7e137f2c3b0737eb6963bb3bcb9cb10064d7fa85fd49f65aa5b3ded057aab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7e137f2c3b0737eb6963bb3bcb9cb10064d7fa85fd49f65aa5b3ded057aab1->enter($__internal_7f7e137f2c3b0737eb6963bb3bcb9cb10064d7fa85fd49f65aa5b3ded057aab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89083399dec2915d7c4812c032a247645a9e58bb6db5b0be777a6b8b3959615b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89083399dec2915d7c4812c032a247645a9e58bb6db5b0be777a6b8b3959615b->enter($__internal_89083399dec2915d7c4812c032a247645a9e58bb6db5b0be777a6b8b3959615b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_89083399dec2915d7c4812c032a247645a9e58bb6db5b0be777a6b8b3959615b->leave($__internal_89083399dec2915d7c4812c032a247645a9e58bb6db5b0be777a6b8b3959615b_prof);

        
        $__internal_7f7e137f2c3b0737eb6963bb3bcb9cb10064d7fa85fd49f65aa5b3ded057aab1->leave($__internal_7f7e137f2c3b0737eb6963bb3bcb9cb10064d7fa85fd49f65aa5b3ded057aab1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_04631f2050f0f1648b2ef4ded428a93eaab994a686e0e9d41a221a03219e499a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04631f2050f0f1648b2ef4ded428a93eaab994a686e0e9d41a221a03219e499a->enter($__internal_04631f2050f0f1648b2ef4ded428a93eaab994a686e0e9d41a221a03219e499a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b150974da9ed4c6215fcbadbd57b92de528435eae05c5593fb9a0f71bcc213b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b150974da9ed4c6215fcbadbd57b92de528435eae05c5593fb9a0f71bcc213b->enter($__internal_5b150974da9ed4c6215fcbadbd57b92de528435eae05c5593fb9a0f71bcc213b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5b150974da9ed4c6215fcbadbd57b92de528435eae05c5593fb9a0f71bcc213b->leave($__internal_5b150974da9ed4c6215fcbadbd57b92de528435eae05c5593fb9a0f71bcc213b_prof);

        
        $__internal_04631f2050f0f1648b2ef4ded428a93eaab994a686e0e9d41a221a03219e499a->leave($__internal_04631f2050f0f1648b2ef4ded428a93eaab994a686e0e9d41a221a03219e499a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\fdema\\dev\\ikom-microservice-bundle\\IkomRequest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
