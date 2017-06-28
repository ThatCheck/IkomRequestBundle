<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e5544c4b532c80ec31e341431ee4776b3d27fcfff955ffe815489b243dbbb6af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9a30f60c5407e1d9a7c924e1f44e0f89d46025b207d3cc599b17707423ad7063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a30f60c5407e1d9a7c924e1f44e0f89d46025b207d3cc599b17707423ad7063->enter($__internal_9a30f60c5407e1d9a7c924e1f44e0f89d46025b207d3cc599b17707423ad7063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8e8749e5383923c34dd669539f9b03ba708255ddb75a5bac5af38238b6552316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8749e5383923c34dd669539f9b03ba708255ddb75a5bac5af38238b6552316->enter($__internal_8e8749e5383923c34dd669539f9b03ba708255ddb75a5bac5af38238b6552316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a30f60c5407e1d9a7c924e1f44e0f89d46025b207d3cc599b17707423ad7063->leave($__internal_9a30f60c5407e1d9a7c924e1f44e0f89d46025b207d3cc599b17707423ad7063_prof);

        
        $__internal_8e8749e5383923c34dd669539f9b03ba708255ddb75a5bac5af38238b6552316->leave($__internal_8e8749e5383923c34dd669539f9b03ba708255ddb75a5bac5af38238b6552316_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06f81bc8c3bb46b9c0001f37b04952ad5e35b327bf9f39e5e53ae4aedfab0d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f81bc8c3bb46b9c0001f37b04952ad5e35b327bf9f39e5e53ae4aedfab0d5f->enter($__internal_06f81bc8c3bb46b9c0001f37b04952ad5e35b327bf9f39e5e53ae4aedfab0d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b1db835fb4438a2befee9965d00a522b3cea41d6657c844cc12cd9c8c9bc7bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1db835fb4438a2befee9965d00a522b3cea41d6657c844cc12cd9c8c9bc7bd4->enter($__internal_b1db835fb4438a2befee9965d00a522b3cea41d6657c844cc12cd9c8c9bc7bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1db835fb4438a2befee9965d00a522b3cea41d6657c844cc12cd9c8c9bc7bd4->leave($__internal_b1db835fb4438a2befee9965d00a522b3cea41d6657c844cc12cd9c8c9bc7bd4_prof);

        
        $__internal_06f81bc8c3bb46b9c0001f37b04952ad5e35b327bf9f39e5e53ae4aedfab0d5f->leave($__internal_06f81bc8c3bb46b9c0001f37b04952ad5e35b327bf9f39e5e53ae4aedfab0d5f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0385fb360b143701093e46e450cda13c9033deec3012a7c7caad0cdd4a3bd24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0385fb360b143701093e46e450cda13c9033deec3012a7c7caad0cdd4a3bd24->enter($__internal_e0385fb360b143701093e46e450cda13c9033deec3012a7c7caad0cdd4a3bd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a1e5f209477ae1ff7f1887a54bc4aec25aeb8e843f3dae314a0af04656b2a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1e5f209477ae1ff7f1887a54bc4aec25aeb8e843f3dae314a0af04656b2a43->enter($__internal_5a1e5f209477ae1ff7f1887a54bc4aec25aeb8e843f3dae314a0af04656b2a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a1e5f209477ae1ff7f1887a54bc4aec25aeb8e843f3dae314a0af04656b2a43->leave($__internal_5a1e5f209477ae1ff7f1887a54bc4aec25aeb8e843f3dae314a0af04656b2a43_prof);

        
        $__internal_e0385fb360b143701093e46e450cda13c9033deec3012a7c7caad0cdd4a3bd24->leave($__internal_e0385fb360b143701093e46e450cda13c9033deec3012a7c7caad0cdd4a3bd24_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fcd76b37e96b4aef3633a73a9a161aa492bd60b14325fef4058d036fa85211a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fcd76b37e96b4aef3633a73a9a161aa492bd60b14325fef4058d036fa85211a->enter($__internal_3fcd76b37e96b4aef3633a73a9a161aa492bd60b14325fef4058d036fa85211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c71f0ed117a3bd4079b583dd0d1c6d3bedfa785ad04a10628a864c1ef850e8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71f0ed117a3bd4079b583dd0d1c6d3bedfa785ad04a10628a864c1ef850e8ac->enter($__internal_c71f0ed117a3bd4079b583dd0d1c6d3bedfa785ad04a10628a864c1ef850e8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c71f0ed117a3bd4079b583dd0d1c6d3bedfa785ad04a10628a864c1ef850e8ac->leave($__internal_c71f0ed117a3bd4079b583dd0d1c6d3bedfa785ad04a10628a864c1ef850e8ac_prof);

        
        $__internal_3fcd76b37e96b4aef3633a73a9a161aa492bd60b14325fef4058d036fa85211a->leave($__internal_3fcd76b37e96b4aef3633a73a9a161aa492bd60b14325fef4058d036fa85211a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\fdema\\dev\\ikom-microservice-bundle\\IkomRequest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
