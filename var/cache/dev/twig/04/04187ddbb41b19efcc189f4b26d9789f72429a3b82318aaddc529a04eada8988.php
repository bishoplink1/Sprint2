<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_f37be46aee4a487f0ec057948762def5a5ad2ee4b0fc160f6a32ada6deb7cf35 extends Twig_Template
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
        $__internal_f0dbe58e83169c3ec5e6a2bf739b1bf3f2185bfdcd1e103e07f94910f5957e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0dbe58e83169c3ec5e6a2bf739b1bf3f2185bfdcd1e103e07f94910f5957e96->enter($__internal_f0dbe58e83169c3ec5e6a2bf739b1bf3f2185bfdcd1e103e07f94910f5957e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_20e837dc152180201e09ffcf61e719e41dba7fe3d1349076996afff91f462f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e837dc152180201e09ffcf61e719e41dba7fe3d1349076996afff91f462f2c->enter($__internal_20e837dc152180201e09ffcf61e719e41dba7fe3d1349076996afff91f462f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_f0dbe58e83169c3ec5e6a2bf739b1bf3f2185bfdcd1e103e07f94910f5957e96->leave($__internal_f0dbe58e83169c3ec5e6a2bf739b1bf3f2185bfdcd1e103e07f94910f5957e96_prof);

        
        $__internal_20e837dc152180201e09ffcf61e719e41dba7fe3d1349076996afff91f462f2c->leave($__internal_20e837dc152180201e09ffcf61e719e41dba7fe3d1349076996afff91f462f2c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
