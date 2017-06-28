<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d6a6a31272debe58f423308ac57c0bb350e83169423a3b3c61ae04de197e4346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63063559a002d6e052d020c4f28e606133dac8d43d267e5279a4e42b63af6a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63063559a002d6e052d020c4f28e606133dac8d43d267e5279a4e42b63af6a89->enter($__internal_63063559a002d6e052d020c4f28e606133dac8d43d267e5279a4e42b63af6a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b324b36e2ed06764db19c566c40b15531ebb3a390496083fb7b42ea586db8b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b324b36e2ed06764db19c566c40b15531ebb3a390496083fb7b42ea586db8b08->enter($__internal_b324b36e2ed06764db19c566c40b15531ebb3a390496083fb7b42ea586db8b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63063559a002d6e052d020c4f28e606133dac8d43d267e5279a4e42b63af6a89->leave($__internal_63063559a002d6e052d020c4f28e606133dac8d43d267e5279a4e42b63af6a89_prof);

        
        $__internal_b324b36e2ed06764db19c566c40b15531ebb3a390496083fb7b42ea586db8b08->leave($__internal_b324b36e2ed06764db19c566c40b15531ebb3a390496083fb7b42ea586db8b08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2839407f6ea7e2090cfcd4aa55ac689ca72a942e6a9eacde36b1d0280c59f314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2839407f6ea7e2090cfcd4aa55ac689ca72a942e6a9eacde36b1d0280c59f314->enter($__internal_2839407f6ea7e2090cfcd4aa55ac689ca72a942e6a9eacde36b1d0280c59f314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_735134d2f7818648e067b7aa39c0ebccfa0f0fa78d8341ff84c5c88a10fefeb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735134d2f7818648e067b7aa39c0ebccfa0f0fa78d8341ff84c5c88a10fefeb0->enter($__internal_735134d2f7818648e067b7aa39c0ebccfa0f0fa78d8341ff84c5c88a10fefeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_735134d2f7818648e067b7aa39c0ebccfa0f0fa78d8341ff84c5c88a10fefeb0->leave($__internal_735134d2f7818648e067b7aa39c0ebccfa0f0fa78d8341ff84c5c88a10fefeb0_prof);

        
        $__internal_2839407f6ea7e2090cfcd4aa55ac689ca72a942e6a9eacde36b1d0280c59f314->leave($__internal_2839407f6ea7e2090cfcd4aa55ac689ca72a942e6a9eacde36b1d0280c59f314_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e95e8d43d46121bee9da40876b5e3b16a78709305a989a7228739c0dec3874c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e95e8d43d46121bee9da40876b5e3b16a78709305a989a7228739c0dec3874c->enter($__internal_8e95e8d43d46121bee9da40876b5e3b16a78709305a989a7228739c0dec3874c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_680791ef7d87478cddefa7efe084f993b304e11e3464facbc33573e860d53082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680791ef7d87478cddefa7efe084f993b304e11e3464facbc33573e860d53082->enter($__internal_680791ef7d87478cddefa7efe084f993b304e11e3464facbc33573e860d53082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_680791ef7d87478cddefa7efe084f993b304e11e3464facbc33573e860d53082->leave($__internal_680791ef7d87478cddefa7efe084f993b304e11e3464facbc33573e860d53082_prof);

        
        $__internal_8e95e8d43d46121bee9da40876b5e3b16a78709305a989a7228739c0dec3874c->leave($__internal_8e95e8d43d46121bee9da40876b5e3b16a78709305a989a7228739c0dec3874c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94bd52637557124f85e1cd50632205de28e07222500e259fb4f1ba29a0f2f70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bd52637557124f85e1cd50632205de28e07222500e259fb4f1ba29a0f2f70d->enter($__internal_94bd52637557124f85e1cd50632205de28e07222500e259fb4f1ba29a0f2f70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_efdf6d98fd3229a33bc4125fe18cb9570b0cf77fc2d28465e11dfb6658062de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdf6d98fd3229a33bc4125fe18cb9570b0cf77fc2d28465e11dfb6658062de7->enter($__internal_efdf6d98fd3229a33bc4125fe18cb9570b0cf77fc2d28465e11dfb6658062de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_efdf6d98fd3229a33bc4125fe18cb9570b0cf77fc2d28465e11dfb6658062de7->leave($__internal_efdf6d98fd3229a33bc4125fe18cb9570b0cf77fc2d28465e11dfb6658062de7_prof);

        
        $__internal_94bd52637557124f85e1cd50632205de28e07222500e259fb4f1ba29a0f2f70d->leave($__internal_94bd52637557124f85e1cd50632205de28e07222500e259fb4f1ba29a0f2f70d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\fdema\\dev\\ikom-microservice-bundle\\IkomRequest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
