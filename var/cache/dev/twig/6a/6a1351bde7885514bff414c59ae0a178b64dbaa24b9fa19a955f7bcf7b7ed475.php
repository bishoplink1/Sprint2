<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_ff2e3cb1bb127724f12e12a45c21a478bc86cbbbe27d49b718cc247034b9449c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'show_fields' => array($this, 'block_show_fields'),
            'show_field' => array($this, 'block_show_field'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5651659301ecee013fcd792208911072679e77e48d56962629528b78fac9ec24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5651659301ecee013fcd792208911072679e77e48d56962629528b78fac9ec24->enter($__internal_5651659301ecee013fcd792208911072679e77e48d56962629528b78fac9ec24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_ff45f93c9a652b7c12e5e0f84478cfef062ca133b9a764cf3c792ef58f2a1224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff45f93c9a652b7c12e5e0f84478cfef062ca133b9a764cf3c792ef58f2a1224->enter($__internal_ff45f93c9a652b7c12e5e0f84478cfef062ca133b9a764cf3c792ef58f2a1224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc"] ?? $this->getContext($context, "__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc"] ?? $this->getContext($context, "__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5651659301ecee013fcd792208911072679e77e48d56962629528b78fac9ec24->leave($__internal_5651659301ecee013fcd792208911072679e77e48d56962629528b78fac9ec24_prof);

        
        $__internal_ff45f93c9a652b7c12e5e0f84478cfef062ca133b9a764cf3c792ef58f2a1224->leave($__internal_ff45f93c9a652b7c12e5e0f84478cfef062ca133b9a764cf3c792ef58f2a1224_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_be559555895a052e8139743f4fa131b026e8e6b5278ce4c2e1cd42f1143b4557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be559555895a052e8139743f4fa131b026e8e6b5278ce4c2e1cd42f1143b4557->enter($__internal_be559555895a052e8139743f4fa131b026e8e6b5278ce4c2e1cd42f1143b4557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_90fb9baef464470f6a5802bc9470917420b52dc143b718fd369017776a7fcdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fb9baef464470f6a5802bc9470917420b52dc143b718fd369017776a7fcdac->enter($__internal_90fb9baef464470f6a5802bc9470917420b52dc143b718fd369017776a7fcdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_90fb9baef464470f6a5802bc9470917420b52dc143b718fd369017776a7fcdac->leave($__internal_90fb9baef464470f6a5802bc9470917420b52dc143b718fd369017776a7fcdac_prof);

        
        $__internal_be559555895a052e8139743f4fa131b026e8e6b5278ce4c2e1cd42f1143b4557->leave($__internal_be559555895a052e8139743f4fa131b026e8e6b5278ce4c2e1cd42f1143b4557_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b08beb7885f48744df4c41cb9f04ed3889c45dd178239738162f5fefb3e92461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08beb7885f48744df4c41cb9f04ed3889c45dd178239738162f5fefb3e92461->enter($__internal_b08beb7885f48744df4c41cb9f04ed3889c45dd178239738162f5fefb3e92461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_76770e7a70770e3dc817cda18833567f3686d6453b5dd6b9dedba097096e74fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76770e7a70770e3dc817cda18833567f3686d6453b5dd6b9dedba097096e74fc->enter($__internal_76770e7a70770e3dc817cda18833567f3686d6453b5dd6b9dedba097096e74fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_76770e7a70770e3dc817cda18833567f3686d6453b5dd6b9dedba097096e74fc->leave($__internal_76770e7a70770e3dc817cda18833567f3686d6453b5dd6b9dedba097096e74fc_prof);

        
        $__internal_b08beb7885f48744df4c41cb9f04ed3889c45dd178239738162f5fefb3e92461->leave($__internal_b08beb7885f48744df4c41cb9f04ed3889c45dd178239738162f5fefb3e92461_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ac942e771f178d37ffea2a1e91ac1eff3964f8a512208bf15f44c4cfec1a23bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac942e771f178d37ffea2a1e91ac1eff3964f8a512208bf15f44c4cfec1a23bf->enter($__internal_ac942e771f178d37ffea2a1e91ac1eff3964f8a512208bf15f44c4cfec1a23bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_449aaa0c2c35742b17bd970b7b0dde40bfd0636f42dd2524a80cd190d1efa8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449aaa0c2c35742b17bd970b7b0dde40bfd0636f42dd2524a80cd190d1efa8e8->enter($__internal_449aaa0c2c35742b17bd970b7b0dde40bfd0636f42dd2524a80cd190d1efa8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc"] ?? $this->getContext($context, "__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_449aaa0c2c35742b17bd970b7b0dde40bfd0636f42dd2524a80cd190d1efa8e8->leave($__internal_449aaa0c2c35742b17bd970b7b0dde40bfd0636f42dd2524a80cd190d1efa8e8_prof);

        
        $__internal_ac942e771f178d37ffea2a1e91ac1eff3964f8a512208bf15f44c4cfec1a23bf->leave($__internal_ac942e771f178d37ffea2a1e91ac1eff3964f8a512208bf15f44c4cfec1a23bf_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_04c1a7538e90a550ba6eadc571a8b1fa18100b63cd3b6b72f76fb8865399b292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c1a7538e90a550ba6eadc571a8b1fa18100b63cd3b6b72f76fb8865399b292->enter($__internal_04c1a7538e90a550ba6eadc571a8b1fa18100b63cd3b6b72f76fb8865399b292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6eb7baec698a6917ff3651de06ff5dc74ba47e7207deae254bf64c70900b77d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb7baec698a6917ff3651de06ff5dc74ba47e7207deae254bf64c70900b77d4->enter($__internal_6eb7baec698a6917ff3651de06ff5dc74ba47e7207deae254bf64c70900b77d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_6eb7baec698a6917ff3651de06ff5dc74ba47e7207deae254bf64c70900b77d4->leave($__internal_6eb7baec698a6917ff3651de06ff5dc74ba47e7207deae254bf64c70900b77d4_prof);

        
        $__internal_04c1a7538e90a550ba6eadc571a8b1fa18100b63cd3b6b72f76fb8865399b292->leave($__internal_04c1a7538e90a550ba6eadc571a8b1fa18100b63cd3b6b72f76fb8865399b292_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_746e61a6adb5e5db88ecbf75535c881fd48dbc68044a3d1bbc79654526aaf48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746e61a6adb5e5db88ecbf75535c881fd48dbc68044a3d1bbc79654526aaf48e->enter($__internal_746e61a6adb5e5db88ecbf75535c881fd48dbc68044a3d1bbc79654526aaf48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_54513baacedc79ba8f56f54902e0749439f19cce3125276068c83a68dfe13b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54513baacedc79ba8f56f54902e0749439f19cce3125276068c83a68dfe13b74->enter($__internal_54513baacedc79ba8f56f54902e0749439f19cce3125276068c83a68dfe13b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_54513baacedc79ba8f56f54902e0749439f19cce3125276068c83a68dfe13b74->leave($__internal_54513baacedc79ba8f56f54902e0749439f19cce3125276068c83a68dfe13b74_prof);

        
        $__internal_746e61a6adb5e5db88ecbf75535c881fd48dbc68044a3d1bbc79654526aaf48e->leave($__internal_746e61a6adb5e5db88ecbf75535c881fd48dbc68044a3d1bbc79654526aaf48e_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_80381e2470684f2f35b62d90208f804a63938ae7e1f46b41820dfafdef2038bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80381e2470684f2f35b62d90208f804a63938ae7e1f46b41820dfafdef2038bc->enter($__internal_80381e2470684f2f35b62d90208f804a63938ae7e1f46b41820dfafdef2038bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_3a2010570e652d706a24e82de83e696f98341ca372ed6ea1abba177160bf2d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2010570e652d706a24e82de83e696f98341ca372ed6ea1abba177160bf2d43->enter($__internal_3a2010570e652d706a24e82de83e696f98341ca372ed6ea1abba177160bf2d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "type", array()), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) ? ($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["field"] ?? $this->getContext($context, "field"))))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc"] ?? $this->getContext($context, "__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc")));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), ($context["metadata"] ?? $this->getContext($context, "metadata")));
        echo "
                            </div>

                            ";
        // line 33
        if (((($this->getAttribute(($context["metadata"] ?? null), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "help", array()), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "help", array()), array(),             // line 4
($context["__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc"] ?? $this->getContext($context, "__internal_8b824de09d9283b3a3a7f6a59df20ae342a9a9a0a7b6781b254d7ae3fcc9cbdc")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_3a2010570e652d706a24e82de83e696f98341ca372ed6ea1abba177160bf2d43->leave($__internal_3a2010570e652d706a24e82de83e696f98341ca372ed6ea1abba177160bf2d43_prof);

        
        $__internal_80381e2470684f2f35b62d90208f804a63938ae7e1f46b41820dfafdef2038bc->leave($__internal_80381e2470684f2f35b62d90208f804a63938ae7e1f46b41820dfafdef2038bc_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_4b28171ece1e09f262d808abf00dedb9c88253835e94573ba99e8f4bad37b52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b28171ece1e09f262d808abf00dedb9c88253835e94573ba99e8f4bad37b52c->enter($__internal_4b28171ece1e09f262d808abf00dedb9c88253835e94573ba99e8f4bad37b52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_7cf274ef6e5624ae22243e29339c9c19db7203a6645564361329738a4eaf4a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf274ef6e5624ae22243e29339c9c19db7203a6645564361329738a4eaf4a13->enter($__internal_7cf274ef6e5624ae22243e29339c9c19db7203a6645564361329738a4eaf4a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 45
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 46
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 49
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 50
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 51
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 52
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 53
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 54
        echo "
            ";
        
        $__internal_7cf274ef6e5624ae22243e29339c9c19db7203a6645564361329738a4eaf4a13->leave($__internal_7cf274ef6e5624ae22243e29339c9c19db7203a6645564361329738a4eaf4a13_prof);

        
        $__internal_4b28171ece1e09f262d808abf00dedb9c88253835e94573ba99e8f4bad37b52c->leave($__internal_4b28171ece1e09f262d808abf00dedb9c88253835e94573ba99e8f4bad37b52c_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_661313cadfba204f470eaf9de0c403b43f577e7e9d627ddd6bf1bd2c40eeb17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661313cadfba204f470eaf9de0c403b43f577e7e9d627ddd6bf1bd2c40eeb17e->enter($__internal_661313cadfba204f470eaf9de0c403b43f577e7e9d627ddd6bf1bd2c40eeb17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_cd00355b9c102e3b458a15bcde79c149349599d0d5e694bf453418afba44241d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd00355b9c102e3b458a15bcde79c149349599d0d5e694bf453418afba44241d->enter($__internal_cd00355b9c102e3b458a15bcde79c149349599d0d5e694bf453418afba44241d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 64
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 65
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 66
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 67
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 68
        echo "
    ";
        
        $__internal_cd00355b9c102e3b458a15bcde79c149349599d0d5e694bf453418afba44241d->leave($__internal_cd00355b9c102e3b458a15bcde79c149349599d0d5e694bf453418afba44241d_prof);

        
        $__internal_661313cadfba204f470eaf9de0c403b43f577e7e9d627ddd6bf1bd2c40eeb17e->leave($__internal_661313cadfba204f470eaf9de0c403b43f577e7e9d627ddd6bf1bd2c40eeb17e_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_55720a7c15253fa9f01948ec6044fa0439aff5129ebc72919dd1845e98661247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55720a7c15253fa9f01948ec6044fa0439aff5129ebc72919dd1845e98661247->enter($__internal_55720a7c15253fa9f01948ec6044fa0439aff5129ebc72919dd1845e98661247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_0848eb17efe05403e4cae64b6dbd09f2932620f23696691211ffdc5942d165c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0848eb17efe05403e4cae64b6dbd09f2932620f23696691211ffdc5942d165c4->enter($__internal_0848eb17efe05403e4cae64b6dbd09f2932620f23696691211ffdc5942d165c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_0848eb17efe05403e4cae64b6dbd09f2932620f23696691211ffdc5942d165c4->leave($__internal_0848eb17efe05403e4cae64b6dbd09f2932620f23696691211ffdc5942d165c4_prof);

        
        $__internal_55720a7c15253fa9f01948ec6044fa0439aff5129ebc72919dd1845e98661247->leave($__internal_55720a7c15253fa9f01948ec6044fa0439aff5129ebc72919dd1845e98661247_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 73,  335 => 72,  324 => 68,  322 => 67,  321 => 66,  320 => 65,  319 => 64,  318 => 63,  316 => 61,  307 => 60,  296 => 54,  294 => 53,  293 => 52,  292 => 51,  291 => 50,  290 => 49,  289 => 48,  286 => 47,  283 => 46,  280 => 45,  271 => 44,  259 => 36,  255 => 34,  253 => 4,  251 => 34,  249 => 33,  243 => 30,  237 => 26,  235 => 4,  234 => 26,  226 => 24,  217 => 23,  207 => 40,  193 => 39,  190 => 23,  172 => 22,  163 => 21,  153 => 60,  147 => 56,  145 => 44,  140 => 41,  138 => 21,  135 => 20,  126 => 19,  113 => 15,  112 => 4,  110 => 15,  107 => 14,  105 => 13,  96 => 12,  78 => 10,  60 => 9,  50 => 7,  48 => 5,  47 => 4,  46 => 5,  45 => 4,  44 => 5,  42 => 4,  40 => 3,  38 => 1,  26 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% block show_fields %}
            {% for field, metadata in fields %}
                {% block show_field %}
                    <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                        <label class=\"col-sm-2 control-label\">
                            {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                            </div>

                            {% if metadata.help|default('') != '' %}
                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endblock %}
            {% endfor %}
        {% endblock %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
