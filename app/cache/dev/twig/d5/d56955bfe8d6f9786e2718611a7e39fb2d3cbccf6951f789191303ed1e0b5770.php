<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fb0b385eb31a821f01e3436bbf2b89e134b87d2958ae9f6d480beb1256f4fe85 extends Twig_Template
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
        $__internal_97b5c60a6a370b02147a984cc9d677ff36a21ded18d711185e96fa8861d279f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b5c60a6a370b02147a984cc9d677ff36a21ded18d711185e96fa8861d279f8->enter($__internal_97b5c60a6a370b02147a984cc9d677ff36a21ded18d711185e96fa8861d279f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97b5c60a6a370b02147a984cc9d677ff36a21ded18d711185e96fa8861d279f8->leave($__internal_97b5c60a6a370b02147a984cc9d677ff36a21ded18d711185e96fa8861d279f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c5032b8dd8678ecb76c970499ce341a997a7c28ec512159c0c6d835b548c159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5032b8dd8678ecb76c970499ce341a997a7c28ec512159c0c6d835b548c159->enter($__internal_9c5032b8dd8678ecb76c970499ce341a997a7c28ec512159c0c6d835b548c159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c5032b8dd8678ecb76c970499ce341a997a7c28ec512159c0c6d835b548c159->leave($__internal_9c5032b8dd8678ecb76c970499ce341a997a7c28ec512159c0c6d835b548c159_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_337964e589726eb2cdd811c81901912b3a885d98038863f6ca2af6a4846d47f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337964e589726eb2cdd811c81901912b3a885d98038863f6ca2af6a4846d47f0->enter($__internal_337964e589726eb2cdd811c81901912b3a885d98038863f6ca2af6a4846d47f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_337964e589726eb2cdd811c81901912b3a885d98038863f6ca2af6a4846d47f0->leave($__internal_337964e589726eb2cdd811c81901912b3a885d98038863f6ca2af6a4846d47f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9bb8eeeddc8610817e319acd6a9131f27c9b798b583be1d6b4f0b6606390a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bb8eeeddc8610817e319acd6a9131f27c9b798b583be1d6b4f0b6606390a95->enter($__internal_c9bb8eeeddc8610817e319acd6a9131f27c9b798b583be1d6b4f0b6606390a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9bb8eeeddc8610817e319acd6a9131f27c9b798b583be1d6b4f0b6606390a95->leave($__internal_c9bb8eeeddc8610817e319acd6a9131f27c9b798b583be1d6b4f0b6606390a95_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\zadanie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
