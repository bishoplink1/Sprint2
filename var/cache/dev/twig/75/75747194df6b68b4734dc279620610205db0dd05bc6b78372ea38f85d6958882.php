<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_605e79b7c61f433887f4b541105509286aeff5f77a05b6669870e9e7be136460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1df2ef4b67d4d9c58a68f1e21d4f973fbb665947d3407efa8335008de0c2fa1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df2ef4b67d4d9c58a68f1e21d4f973fbb665947d3407efa8335008de0c2fa1f->enter($__internal_1df2ef4b67d4d9c58a68f1e21d4f973fbb665947d3407efa8335008de0c2fa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_1562c0d663d0cbd3af66aa9cbee7127e0c1160e2857f2411a3e5f1f3efeae223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1562c0d663d0cbd3af66aa9cbee7127e0c1160e2857f2411a3e5f1f3efeae223->enter($__internal_1562c0d663d0cbd3af66aa9cbee7127e0c1160e2857f2411a3e5f1f3efeae223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1df2ef4b67d4d9c58a68f1e21d4f973fbb665947d3407efa8335008de0c2fa1f->leave($__internal_1df2ef4b67d4d9c58a68f1e21d4f973fbb665947d3407efa8335008de0c2fa1f_prof);

        
        $__internal_1562c0d663d0cbd3af66aa9cbee7127e0c1160e2857f2411a3e5f1f3efeae223->leave($__internal_1562c0d663d0cbd3af66aa9cbee7127e0c1160e2857f2411a3e5f1f3efeae223_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ccb25abd713c4cdbeed9b64afec8d30d210efac3b13561bae27767a891786684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb25abd713c4cdbeed9b64afec8d30d210efac3b13561bae27767a891786684->enter($__internal_ccb25abd713c4cdbeed9b64afec8d30d210efac3b13561bae27767a891786684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_af4ed77bbcacd2faf68b8bd34a1eb1ff2aea2991024d96784a9432cc40e8ed1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4ed77bbcacd2faf68b8bd34a1eb1ff2aea2991024d96784a9432cc40e8ed1c->enter($__internal_af4ed77bbcacd2faf68b8bd34a1eb1ff2aea2991024d96784a9432cc40e8ed1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_af4ed77bbcacd2faf68b8bd34a1eb1ff2aea2991024d96784a9432cc40e8ed1c->leave($__internal_af4ed77bbcacd2faf68b8bd34a1eb1ff2aea2991024d96784a9432cc40e8ed1c_prof);

        
        $__internal_ccb25abd713c4cdbeed9b64afec8d30d210efac3b13561bae27767a891786684->leave($__internal_ccb25abd713c4cdbeed9b64afec8d30d210efac3b13561bae27767a891786684_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
