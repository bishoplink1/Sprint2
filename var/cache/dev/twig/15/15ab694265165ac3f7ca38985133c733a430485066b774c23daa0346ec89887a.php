<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a0a6084eeb9d4fe20c512fb7ad1fbcbcc8ebdb1e8bce5b6df07e3d9164d56bde extends Twig_Template
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
        $__internal_7a4ad1f83ff2466989ce762548d025bfd2892104a19e71746b4e34c2bac37a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4ad1f83ff2466989ce762548d025bfd2892104a19e71746b4e34c2bac37a1e->enter($__internal_7a4ad1f83ff2466989ce762548d025bfd2892104a19e71746b4e34c2bac37a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_ba4d1e1dd884d2d5ed154e0693915fc019659b79a3ede3302a2914170de0b373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4d1e1dd884d2d5ed154e0693915fc019659b79a3ede3302a2914170de0b373->enter($__internal_ba4d1e1dd884d2d5ed154e0693915fc019659b79a3ede3302a2914170de0b373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7a4ad1f83ff2466989ce762548d025bfd2892104a19e71746b4e34c2bac37a1e->leave($__internal_7a4ad1f83ff2466989ce762548d025bfd2892104a19e71746b4e34c2bac37a1e_prof);

        
        $__internal_ba4d1e1dd884d2d5ed154e0693915fc019659b79a3ede3302a2914170de0b373->leave($__internal_ba4d1e1dd884d2d5ed154e0693915fc019659b79a3ede3302a2914170de0b373_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
