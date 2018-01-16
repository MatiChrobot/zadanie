<?php

/* default/index.html.php */
class __TwigTemplate_0446c3a38dc8e0c9c2a7fe44c7c99a93c6836840ffa91e4d345cc9d399a1aa06 extends Twig_Template
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
        $__internal_8ac79c81a9dfe5b21982897009d10eabaf232f4b150b1107755f65be7e2890d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac79c81a9dfe5b21982897009d10eabaf232f4b150b1107755f65be7e2890d6->enter($__internal_8ac79c81a9dfe5b21982897009d10eabaf232f4b150b1107755f65be7e2890d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.php"));

        // line 1
        echo "<?php \$view->extend('base.html.php') ?>

<h1>Zadanie</h1>
";
        
        $__internal_8ac79c81a9dfe5b21982897009d10eabaf232f4b150b1107755f65be7e2890d6->leave($__internal_8ac79c81a9dfe5b21982897009d10eabaf232f4b150b1107755f65be7e2890d6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$view->extend('base.html.php') ?>

<h1>Zadanie</h1>
", "default/index.html.php", "C:\\xampp\\htdocs\\zadanie\\app\\Resources\\views\\default\\index.html.php");
    }
}
