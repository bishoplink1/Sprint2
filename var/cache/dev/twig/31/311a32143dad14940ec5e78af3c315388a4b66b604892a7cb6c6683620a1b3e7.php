<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_c53fd5d87109096b919a4d7eff09285794dd91cd9b0607f251b1a16593507e89 extends Twig_Template
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
        $__internal_f3f9b9dc412a92a4b6e52c47ead72a67ec1d8a1dde82320e949ea402557c6560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f9b9dc412a92a4b6e52c47ead72a67ec1d8a1dde82320e949ea402557c6560->enter($__internal_f3f9b9dc412a92a4b6e52c47ead72a67ec1d8a1dde82320e949ea402557c6560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_75be31cb239eae78237a6517826681031aaf5d7172eaaed62b6422a54fcab55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75be31cb239eae78237a6517826681031aaf5d7172eaaed62b6422a54fcab55d->enter($__internal_75be31cb239eae78237a6517826681031aaf5d7172eaaed62b6422a54fcab55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f3f9b9dc412a92a4b6e52c47ead72a67ec1d8a1dde82320e949ea402557c6560->leave($__internal_f3f9b9dc412a92a4b6e52c47ead72a67ec1d8a1dde82320e949ea402557c6560_prof);

        
        $__internal_75be31cb239eae78237a6517826681031aaf5d7172eaaed62b6422a54fcab55d->leave($__internal_75be31cb239eae78237a6517826681031aaf5d7172eaaed62b6422a54fcab55d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
