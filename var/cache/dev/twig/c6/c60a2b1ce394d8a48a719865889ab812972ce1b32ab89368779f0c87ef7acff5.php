<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_ff14dbf9b1af0d59cdb458f172abb6d943d5967081ea1b0a56587dd9649cd962 extends Twig_Template
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
        $__internal_092d75b24699386387080cc4b33e970b9eda5cc002162e0fe44ab80f8fcbf0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092d75b24699386387080cc4b33e970b9eda5cc002162e0fe44ab80f8fcbf0e8->enter($__internal_092d75b24699386387080cc4b33e970b9eda5cc002162e0fe44ab80f8fcbf0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_256fcd012e07a1a81376d6abd5b67c0312e6b4744aca41c3947bac6a9e66ce11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256fcd012e07a1a81376d6abd5b67c0312e6b4744aca41c3947bac6a9e66ce11->enter($__internal_256fcd012e07a1a81376d6abd5b67c0312e6b4744aca41c3947bac6a9e66ce11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_092d75b24699386387080cc4b33e970b9eda5cc002162e0fe44ab80f8fcbf0e8->leave($__internal_092d75b24699386387080cc4b33e970b9eda5cc002162e0fe44ab80f8fcbf0e8_prof);

        
        $__internal_256fcd012e07a1a81376d6abd5b67c0312e6b4744aca41c3947bac6a9e66ce11->leave($__internal_256fcd012e07a1a81376d6abd5b67c0312e6b4744aca41c3947bac6a9e66ce11_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_bigint.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_bigint.html.twig");
    }
}
