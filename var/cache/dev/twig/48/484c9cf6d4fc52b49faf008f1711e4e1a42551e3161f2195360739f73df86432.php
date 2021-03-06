<?php

/* EasyAdminBundle:form:bootstrap_3_layout.html.twig */
class __TwigTemplate_e47afaed8dacf4f0e65c6628f482645ff53ad9e4cf9af98b70661d70b1b148ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_widget_groups' => array($this, 'block_easyadmin_widget_groups'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4196982f19fd8ba05f2d01509798e54fb6d48c88f319a93b7d309176e2a0e996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4196982f19fd8ba05f2d01509798e54fb6d48c88f319a93b7d309176e2a0e996->enter($__internal_4196982f19fd8ba05f2d01509798e54fb6d48c88f319a93b7d309176e2a0e996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_layout.html.twig"));

        $__internal_ffce07f1566bb66a35b5ce8e4f737e436440a1e93584817b13f855aa185fea5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffce07f1566bb66a35b5ce8e4f737e436440a1e93584817b13f855aa185fea5a->enter($__internal_ffce07f1566bb66a35b5ce8e4f737e436440a1e93584817b13f855aa185fea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('button_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('money_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('form_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('choice_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_label', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_row', $context, $blocks);
        // line 277
        echo "
";
        // line 278
        $this->displayBlock('collection_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('button_row', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('choice_row', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('date_row', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('time_row', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('radio_row', $context, $blocks);
        // line 353
        echo "
";
        // line 355
        $this->displayBlock('form_errors', $context, $blocks);
        // line 373
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 386
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('item_actions', $context, $blocks);
        // line 487
        echo "
";
        // line 489
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 569
        echo "
";
        // line 571
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 581
        echo "
";
        // line 582
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 586
        echo "
";
        // line 588
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 593
        echo "
";
        // line 595
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_4196982f19fd8ba05f2d01509798e54fb6d48c88f319a93b7d309176e2a0e996->leave($__internal_4196982f19fd8ba05f2d01509798e54fb6d48c88f319a93b7d309176e2a0e996_prof);

        
        $__internal_ffce07f1566bb66a35b5ce8e4f737e436440a1e93584817b13f855aa185fea5a->leave($__internal_ffce07f1566bb66a35b5ce8e4f737e436440a1e93584817b13f855aa185fea5a_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_22e1c1026618d88e501ead1455eec10bd545907abda35386fb61eeab6f4421b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e1c1026618d88e501ead1455eec10bd545907abda35386fb61eeab6f4421b5->enter($__internal_22e1c1026618d88e501ead1455eec10bd545907abda35386fb61eeab6f4421b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_fd9e7f5fc944de6272a45e7bda4eadedde570a86e79e3c3edffb3c40d2a6eca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9e7f5fc944de6272a45e7bda4eadedde570a86e79e3c3edffb3c40d2a6eca7->enter($__internal_fd9e7f5fc944de6272a45e7bda4eadedde570a86e79e3c3edffb3c40d2a6eca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter(($context["_easyadmin_form_type"] ?? $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
        
        $__internal_fd9e7f5fc944de6272a45e7bda4eadedde570a86e79e3c3edffb3c40d2a6eca7->leave($__internal_fd9e7f5fc944de6272a45e7bda4eadedde570a86e79e3c3edffb3c40d2a6eca7_prof);

        
        $__internal_22e1c1026618d88e501ead1455eec10bd545907abda35386fb61eeab6f4421b5->leave($__internal_22e1c1026618d88e501ead1455eec10bd545907abda35386fb61eeab6f4421b5_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_027f6b3b1b4767e9bf96ca4eaeaff4043e5c13c1cefaaa4316bd8f7a9ac03672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027f6b3b1b4767e9bf96ca4eaeaff4043e5c13c1cefaaa4316bd8f7a9ac03672->enter($__internal_027f6b3b1b4767e9bf96ca4eaeaff4043e5c13c1cefaaa4316bd8f7a9ac03672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_35eaf71ec9c969b22e9d6e36b42b9cfdbd4cef5308e778fec9c0424a48370b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35eaf71ec9c969b22e9d6e36b42b9cfdbd4cef5308e778fec9c0424a48370b6e->enter($__internal_35eaf71ec9c969b22e9d6e36b42b9cfdbd4cef5308e778fec9c0424a48370b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start();
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 48
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_35eaf71ec9c969b22e9d6e36b42b9cfdbd4cef5308e778fec9c0424a48370b6e->leave($__internal_35eaf71ec9c969b22e9d6e36b42b9cfdbd4cef5308e778fec9c0424a48370b6e_prof);

        
        $__internal_027f6b3b1b4767e9bf96ca4eaeaff4043e5c13c1cefaaa4316bd8f7a9ac03672->leave($__internal_027f6b3b1b4767e9bf96ca4eaeaff4043e5c13c1cefaaa4316bd8f7a9ac03672_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f856558a0ad33932d090b782da138fec7b640b7942d321ab3c8dcc651a258d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f856558a0ad33932d090b782da138fec7b640b7942d321ab3c8dcc651a258d6e->enter($__internal_f856558a0ad33932d090b782da138fec7b640b7942d321ab3c8dcc651a258d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_4ab9a0f1b145f3409bdb5a9bd8a0963388878cdbb7242d2fdabdb7e37b56d368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab9a0f1b145f3409bdb5a9bd8a0963388878cdbb7242d2fdabdb7e37b56d368->enter($__internal_4ab9a0f1b145f3409bdb5a9bd8a0963388878cdbb7242d2fdabdb7e37b56d368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4ab9a0f1b145f3409bdb5a9bd8a0963388878cdbb7242d2fdabdb7e37b56d368->leave($__internal_4ab9a0f1b145f3409bdb5a9bd8a0963388878cdbb7242d2fdabdb7e37b56d368_prof);

        
        $__internal_f856558a0ad33932d090b782da138fec7b640b7942d321ab3c8dcc651a258d6e->leave($__internal_f856558a0ad33932d090b782da138fec7b640b7942d321ab3c8dcc651a258d6e_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d52364f649d00e20d389567bf3ec9086f1a0426d3461006307a0dda5d0e11515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52364f649d00e20d389567bf3ec9086f1a0426d3461006307a0dda5d0e11515->enter($__internal_d52364f649d00e20d389567bf3ec9086f1a0426d3461006307a0dda5d0e11515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_c42eea778779bb4a84aebe776e883652798c685b7c530290c30d18b691b658bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42eea778779bb4a84aebe776e883652798c685b7c530290c30d18b691b658bc->enter($__internal_c42eea778779bb4a84aebe776e883652798c685b7c530290c30d18b691b658bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_c42eea778779bb4a84aebe776e883652798c685b7c530290c30d18b691b658bc->leave($__internal_c42eea778779bb4a84aebe776e883652798c685b7c530290c30d18b691b658bc_prof);

        
        $__internal_d52364f649d00e20d389567bf3ec9086f1a0426d3461006307a0dda5d0e11515->leave($__internal_d52364f649d00e20d389567bf3ec9086f1a0426d3461006307a0dda5d0e11515_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2cdf397415f4044ac50904641d2e3bcd07a1ea016c277cb5d59de6a8ce5c23fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cdf397415f4044ac50904641d2e3bcd07a1ea016c277cb5d59de6a8ce5c23fa->enter($__internal_2cdf397415f4044ac50904641d2e3bcd07a1ea016c277cb5d59de6a8ce5c23fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_810d9e20dffa37fd4806a26d5e7156cb0a062824550e58ea2da0daf953f3e8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810d9e20dffa37fd4806a26d5e7156cb0a062824550e58ea2da0daf953f3e8e2->enter($__internal_810d9e20dffa37fd4806a26d5e7156cb0a062824550e58ea2da0daf953f3e8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_810d9e20dffa37fd4806a26d5e7156cb0a062824550e58ea2da0daf953f3e8e2->leave($__internal_810d9e20dffa37fd4806a26d5e7156cb0a062824550e58ea2da0daf953f3e8e2_prof);

        
        $__internal_2cdf397415f4044ac50904641d2e3bcd07a1ea016c277cb5d59de6a8ce5c23fa->leave($__internal_2cdf397415f4044ac50904641d2e3bcd07a1ea016c277cb5d59de6a8ce5c23fa_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_847aa68d7287e2e8189d9ab35e9ffd6980bfd4a3accc6bd145ef43d1ad95d66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847aa68d7287e2e8189d9ab35e9ffd6980bfd4a3accc6bd145ef43d1ad95d66b->enter($__internal_847aa68d7287e2e8189d9ab35e9ffd6980bfd4a3accc6bd145ef43d1ad95d66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_aa1fbc264efdebb32253b1f551a285bbe3c55b8b870610d9068f21f31e2e1904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1fbc264efdebb32253b1f551a285bbe3c55b8b870610d9068f21f31e2e1904->enter($__internal_aa1fbc264efdebb32253b1f551a285bbe3c55b8b870610d9068f21f31e2e1904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 74
        echo "<div class=\"input-group\">
        ";
        // line 75
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 76
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 77
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 80
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 81
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 83
        echo "    </div>";
        
        $__internal_aa1fbc264efdebb32253b1f551a285bbe3c55b8b870610d9068f21f31e2e1904->leave($__internal_aa1fbc264efdebb32253b1f551a285bbe3c55b8b870610d9068f21f31e2e1904_prof);

        
        $__internal_847aa68d7287e2e8189d9ab35e9ffd6980bfd4a3accc6bd145ef43d1ad95d66b->leave($__internal_847aa68d7287e2e8189d9ab35e9ffd6980bfd4a3accc6bd145ef43d1ad95d66b_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8d088c535f55bbbaef59a1934efe11b12aa1a8fb8c01d0ebdaf6dba8c2287fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d088c535f55bbbaef59a1934efe11b12aa1a8fb8c01d0ebdaf6dba8c2287fe8->enter($__internal_8d088c535f55bbbaef59a1934efe11b12aa1a8fb8c01d0ebdaf6dba8c2287fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e1fa535941f9933d8f0c97bf7491ac6989e385172c6da8a24a3546f0680a1424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fa535941f9933d8f0c97bf7491ac6989e385172c6da8a24a3546f0680a1424->enter($__internal_e1fa535941f9933d8f0c97bf7491ac6989e385172c6da8a24a3546f0680a1424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_e1fa535941f9933d8f0c97bf7491ac6989e385172c6da8a24a3546f0680a1424->leave($__internal_e1fa535941f9933d8f0c97bf7491ac6989e385172c6da8a24a3546f0680a1424_prof);

        
        $__internal_8d088c535f55bbbaef59a1934efe11b12aa1a8fb8c01d0ebdaf6dba8c2287fe8->leave($__internal_8d088c535f55bbbaef59a1934efe11b12aa1a8fb8c01d0ebdaf6dba8c2287fe8_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f1990f05efaceb73b17e93716350eacbe456cdf48cc96b81f95139e21e355162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1990f05efaceb73b17e93716350eacbe456cdf48cc96b81f95139e21e355162->enter($__internal_f1990f05efaceb73b17e93716350eacbe456cdf48cc96b81f95139e21e355162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_c753e79604f67a87ad48338459e6f1d6ca096fe761ebb0cd4d7dd71a83394536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c753e79604f67a87ad48338459e6f1d6ca096fe761ebb0cd4d7dd71a83394536->enter($__internal_c753e79604f67a87ad48338459e6f1d6ca096fe761ebb0cd4d7dd71a83394536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 94
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 95
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 103
            echo "</div>";
        }
        
        $__internal_c753e79604f67a87ad48338459e6f1d6ca096fe761ebb0cd4d7dd71a83394536->leave($__internal_c753e79604f67a87ad48338459e6f1d6ca096fe761ebb0cd4d7dd71a83394536_prof);

        
        $__internal_f1990f05efaceb73b17e93716350eacbe456cdf48cc96b81f95139e21e355162->leave($__internal_f1990f05efaceb73b17e93716350eacbe456cdf48cc96b81f95139e21e355162_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_2d04bddf3f3483ea76d5ce27828ceaa73dcf8c2769f399b30c496da232e6128e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d04bddf3f3483ea76d5ce27828ceaa73dcf8c2769f399b30c496da232e6128e->enter($__internal_2d04bddf3f3483ea76d5ce27828ceaa73dcf8c2769f399b30c496da232e6128e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c6733a12f3041fbc86dcb94a726c6567b7e620ab482b7e4151ef784be9d1cea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6733a12f3041fbc86dcb94a726c6567b7e620ab482b7e4151ef784be9d1cea0->enter($__internal_c6733a12f3041fbc86dcb94a726c6567b7e620ab482b7e4151ef784be9d1cea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 108
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 112
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 117
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 118
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 120
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 121
                echo "</div>";
            }
        }
        
        $__internal_c6733a12f3041fbc86dcb94a726c6567b7e620ab482b7e4151ef784be9d1cea0->leave($__internal_c6733a12f3041fbc86dcb94a726c6567b7e620ab482b7e4151ef784be9d1cea0_prof);

        
        $__internal_2d04bddf3f3483ea76d5ce27828ceaa73dcf8c2769f399b30c496da232e6128e->leave($__internal_2d04bddf3f3483ea76d5ce27828ceaa73dcf8c2769f399b30c496da232e6128e_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_fea385e913d1a2d651551ab319c9828beba1cb8323f0e2377fc13d21835db497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea385e913d1a2d651551ab319c9828beba1cb8323f0e2377fc13d21835db497->enter($__internal_fea385e913d1a2d651551ab319c9828beba1cb8323f0e2377fc13d21835db497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_4d253f343d00f035dbfdf282889f99e915c0a2395e3ad29ee3fe73f33aaf6d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d253f343d00f035dbfdf282889f99e915c0a2395e3ad29ee3fe73f33aaf6d46->enter($__internal_4d253f343d00f035dbfdf282889f99e915c0a2395e3ad29ee3fe73f33aaf6d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 127
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 131
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 132
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 134
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 135
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 136
                echo "</div>";
            }
        }
        
        $__internal_4d253f343d00f035dbfdf282889f99e915c0a2395e3ad29ee3fe73f33aaf6d46->leave($__internal_4d253f343d00f035dbfdf282889f99e915c0a2395e3ad29ee3fe73f33aaf6d46_prof);

        
        $__internal_fea385e913d1a2d651551ab319c9828beba1cb8323f0e2377fc13d21835db497->leave($__internal_fea385e913d1a2d651551ab319c9828beba1cb8323f0e2377fc13d21835db497_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_de0efc0124c02f5cb24b644e985cba231954cacc9b916946cd35c7b78c647483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0efc0124c02f5cb24b644e985cba231954cacc9b916946cd35c7b78c647483->enter($__internal_de0efc0124c02f5cb24b644e985cba231954cacc9b916946cd35c7b78c647483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_04d31caaf32b065ad77188706ca3483c1b67c863810d494b810e99c377511810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d31caaf32b065ad77188706ca3483c1b67c863810d494b810e99c377511810->enter($__internal_04d31caaf32b065ad77188706ca3483c1b67c863810d494b810e99c377511810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 142
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 143
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 144
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 145
            echo "        ";
            ob_start();
            // line 146
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 149
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 161
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_04d31caaf32b065ad77188706ca3483c1b67c863810d494b810e99c377511810->leave($__internal_04d31caaf32b065ad77188706ca3483c1b67c863810d494b810e99c377511810_prof);

        
        $__internal_de0efc0124c02f5cb24b644e985cba231954cacc9b916946cd35c7b78c647483->leave($__internal_de0efc0124c02f5cb24b644e985cba231954cacc9b916946cd35c7b78c647483_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e0e19896c7f7dd8e48231d3bd036a57a01a5b1b19e9a7e517d9783a9d71503db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e19896c7f7dd8e48231d3bd036a57a01a5b1b19e9a7e517d9783a9d71503db->enter($__internal_e0e19896c7f7dd8e48231d3bd036a57a01a5b1b19e9a7e517d9783a9d71503db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_783ea8e22f0c3083b703ed1ab52636f09e02d399223497011ec1405afee3970e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783ea8e22f0c3083b703ed1ab52636f09e02d399223497011ec1405afee3970e->enter($__internal_783ea8e22f0c3083b703ed1ab52636f09e02d399223497011ec1405afee3970e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 170
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 171
            echo "<div class=\"control-group\">";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 173
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 174
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 175
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "</div>";
        } else {
            // line 180
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 182
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 183
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 184
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "</div>";
        }
        
        $__internal_783ea8e22f0c3083b703ed1ab52636f09e02d399223497011ec1405afee3970e->leave($__internal_783ea8e22f0c3083b703ed1ab52636f09e02d399223497011ec1405afee3970e_prof);

        
        $__internal_e0e19896c7f7dd8e48231d3bd036a57a01a5b1b19e9a7e517d9783a9d71503db->leave($__internal_e0e19896c7f7dd8e48231d3bd036a57a01a5b1b19e9a7e517d9783a9d71503db_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_854865c6da7703cc0d44b6f05bf3fed336209135335063a6bd310cf5900128e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854865c6da7703cc0d44b6f05bf3fed336209135335063a6bd310cf5900128e5->enter($__internal_854865c6da7703cc0d44b6f05bf3fed336209135335063a6bd310cf5900128e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6b8f756fcda40db8b480af4b5d6aa4c881cf6d9d7f4f6346bf97c9903e8914e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8f756fcda40db8b480af4b5d6aa4c881cf6d9d7f4f6346bf97c9903e8914e0->enter($__internal_6b8f756fcda40db8b480af4b5d6aa4c881cf6d9d7f4f6346bf97c9903e8914e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 193
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 194
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 196
            echo "<div class=\"checkbox\">";
            // line 197
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 198
            echo "</div>";
        }
        
        $__internal_6b8f756fcda40db8b480af4b5d6aa4c881cf6d9d7f4f6346bf97c9903e8914e0->leave($__internal_6b8f756fcda40db8b480af4b5d6aa4c881cf6d9d7f4f6346bf97c9903e8914e0_prof);

        
        $__internal_854865c6da7703cc0d44b6f05bf3fed336209135335063a6bd310cf5900128e5->leave($__internal_854865c6da7703cc0d44b6f05bf3fed336209135335063a6bd310cf5900128e5_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b90809918f7836bf00d83e52472fc1394f46c36858da2c70523aa876ef55bb5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90809918f7836bf00d83e52472fc1394f46c36858da2c70523aa876ef55bb5e->enter($__internal_b90809918f7836bf00d83e52472fc1394f46c36858da2c70523aa876ef55bb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_91d41c2d71c3082eb2cd434dca6c75d8c256a2cfb432627b2f998e8c2fb2ddcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d41c2d71c3082eb2cd434dca6c75d8c256a2cfb432627b2f998e8c2fb2ddcf->enter($__internal_91d41c2d71c3082eb2cd434dca6c75d8c256a2cfb432627b2f998e8c2fb2ddcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 203
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 204
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 205
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 207
            echo "<div class=\"radio\">";
            // line 208
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 209
            echo "</div>";
        }
        
        $__internal_91d41c2d71c3082eb2cd434dca6c75d8c256a2cfb432627b2f998e8c2fb2ddcf->leave($__internal_91d41c2d71c3082eb2cd434dca6c75d8c256a2cfb432627b2f998e8c2fb2ddcf_prof);

        
        $__internal_b90809918f7836bf00d83e52472fc1394f46c36858da2c70523aa876ef55bb5e->leave($__internal_b90809918f7836bf00d83e52472fc1394f46c36858da2c70523aa876ef55bb5e_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_57b52ec1d60d7b38e4b2c9921803faf62c0f5069bd6c80ad66870d9558c2135a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b52ec1d60d7b38e4b2c9921803faf62c0f5069bd6c80ad66870d9558c2135a->enter($__internal_57b52ec1d60d7b38e4b2c9921803faf62c0f5069bd6c80ad66870d9558c2135a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b38df532f49b8e2d9966fbad07ffc93702110ebfe85c53305c3817fa83fd910f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38df532f49b8e2d9966fbad07ffc93702110ebfe85c53305c3817fa83fd910f->enter($__internal_b38df532f49b8e2d9966fbad07ffc93702110ebfe85c53305c3817fa83fd910f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b38df532f49b8e2d9966fbad07ffc93702110ebfe85c53305c3817fa83fd910f->leave($__internal_b38df532f49b8e2d9966fbad07ffc93702110ebfe85c53305c3817fa83fd910f_prof);

        
        $__internal_57b52ec1d60d7b38e4b2c9921803faf62c0f5069bd6c80ad66870d9558c2135a->leave($__internal_57b52ec1d60d7b38e4b2c9921803faf62c0f5069bd6c80ad66870d9558c2135a_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_82aca338cd3ccc8309578d798ea1fe4517c877edaf793c623d73e1b63b807777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82aca338cd3ccc8309578d798ea1fe4517c877edaf793c623d73e1b63b807777->enter($__internal_82aca338cd3ccc8309578d798ea1fe4517c877edaf793c623d73e1b63b807777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f7d1ec2072fa63353f333bd54896f9df785a3aa5c4bd955f8d83800814dfe0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d1ec2072fa63353f333bd54896f9df785a3aa5c4bd955f8d83800814dfe0c2->enter($__internal_f7d1ec2072fa63353f333bd54896f9df785a3aa5c4bd955f8d83800814dfe0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f7d1ec2072fa63353f333bd54896f9df785a3aa5c4bd955f8d83800814dfe0c2->leave($__internal_f7d1ec2072fa63353f333bd54896f9df785a3aa5c4bd955f8d83800814dfe0c2_prof);

        
        $__internal_82aca338cd3ccc8309578d798ea1fe4517c877edaf793c623d73e1b63b807777->leave($__internal_82aca338cd3ccc8309578d798ea1fe4517c877edaf793c623d73e1b63b807777_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_9ce326a7b2cd74cb03edb8903f7986e8b3273ce1d2751a9994c8c9754f98020f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce326a7b2cd74cb03edb8903f7986e8b3273ce1d2751a9994c8c9754f98020f->enter($__internal_9ce326a7b2cd74cb03edb8903f7986e8b3273ce1d2751a9994c8c9754f98020f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_84b61f7ee4ec5077036b791ec310b31e21e80de505c179f0e976f2fbf76346a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b61f7ee4ec5077036b791ec310b31e21e80de505c179f0e976f2fbf76346a2->enter($__internal_84b61f7ee4ec5077036b791ec310b31e21e80de505c179f0e976f2fbf76346a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_84b61f7ee4ec5077036b791ec310b31e21e80de505c179f0e976f2fbf76346a2->leave($__internal_84b61f7ee4ec5077036b791ec310b31e21e80de505c179f0e976f2fbf76346a2_prof);

        
        $__internal_9ce326a7b2cd74cb03edb8903f7986e8b3273ce1d2751a9994c8c9754f98020f->leave($__internal_9ce326a7b2cd74cb03edb8903f7986e8b3273ce1d2751a9994c8c9754f98020f_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e0084039512a0ed629c2bc7fb62fc0383d4cc1c5979023979703dd8da72faa9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0084039512a0ed629c2bc7fb62fc0383d4cc1c5979023979703dd8da72faa9e->enter($__internal_e0084039512a0ed629c2bc7fb62fc0383d4cc1c5979023979703dd8da72faa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_46d9136308c784e89b57675a57b560530986fa0542364a9af6a0d8cb97de19dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d9136308c784e89b57675a57b560530986fa0542364a9af6a0d8cb97de19dc->enter($__internal_46d9136308c784e89b57675a57b560530986fa0542364a9af6a0d8cb97de19dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_46d9136308c784e89b57675a57b560530986fa0542364a9af6a0d8cb97de19dc->leave($__internal_46d9136308c784e89b57675a57b560530986fa0542364a9af6a0d8cb97de19dc_prof);

        
        $__internal_e0084039512a0ed629c2bc7fb62fc0383d4cc1c5979023979703dd8da72faa9e->leave($__internal_e0084039512a0ed629c2bc7fb62fc0383d4cc1c5979023979703dd8da72faa9e_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_665d02510d1413775f5cdc43960746788d1534c16bc774342dc055ae12de4b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665d02510d1413775f5cdc43960746788d1534c16bc774342dc055ae12de4b9b->enter($__internal_665d02510d1413775f5cdc43960746788d1534c16bc774342dc055ae12de4b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_fae79b2f9b9fa4576b92274429d46ac68a371024c2cfab5f19faf28561aaa801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae79b2f9b9fa4576b92274429d46ac68a371024c2cfab5f19faf28561aaa801->enter($__internal_fae79b2f9b9fa4576b92274429d46ac68a371024c2cfab5f19faf28561aaa801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 235
        echo "    ";
        // line 236
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 237
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 238
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 241
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 244
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 245
                echo "        ";
            }
            // line 246
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 247
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 248
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ((($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))) ? (($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))) : ($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 249
            echo "</label>
    ";
        }
        
        $__internal_fae79b2f9b9fa4576b92274429d46ac68a371024c2cfab5f19faf28561aaa801->leave($__internal_fae79b2f9b9fa4576b92274429d46ac68a371024c2cfab5f19faf28561aaa801_prof);

        
        $__internal_665d02510d1413775f5cdc43960746788d1534c16bc774342dc055ae12de4b9b->leave($__internal_665d02510d1413775f5cdc43960746788d1534c16bc774342dc055ae12de4b9b_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bdf83edf7abcd6733a77832504e8b657054e4f5cd95dd45a51fb7f090e79bf10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf83edf7abcd6733a77832504e8b657054e4f5cd95dd45a51fb7f090e79bf10->enter($__internal_bdf83edf7abcd6733a77832504e8b657054e4f5cd95dd45a51fb7f090e79bf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9d8380cfeab31235a3d77000f5af7483650e5836233333f4c5d7b2c416912fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8380cfeab31235a3d77000f5af7483650e5836233333f4c5d7b2c416912fe4->enter($__internal_9d8380cfeab31235a3d77000f5af7483650e5836233333f4c5d7b2c416912fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 256
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 257
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 258
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 261
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 262
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 264
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 273
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 275
        echo "    </div>";
        
        $__internal_9d8380cfeab31235a3d77000f5af7483650e5836233333f4c5d7b2c416912fe4->leave($__internal_9d8380cfeab31235a3d77000f5af7483650e5836233333f4c5d7b2c416912fe4_prof);

        
        $__internal_bdf83edf7abcd6733a77832504e8b657054e4f5cd95dd45a51fb7f090e79bf10->leave($__internal_bdf83edf7abcd6733a77832504e8b657054e4f5cd95dd45a51fb7f090e79bf10_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_1e5b8948017a5161a2a3771ea6d2cb1f740fc50f351fa252019d7e333b67b1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5b8948017a5161a2a3771ea6d2cb1f740fc50f351fa252019d7e333b67b1f7->enter($__internal_1e5b8948017a5161a2a3771ea6d2cb1f740fc50f351fa252019d7e333b67b1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_3c049ba4e39f63fc7b7423a76e1e6cf589eedb74a6245b2ce3919143e9ed03ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c049ba4e39f63fc7b7423a76e1e6cf589eedb74a6245b2ce3919143e9ed03ee->enter($__internal_3c049ba4e39f63fc7b7423a76e1e6cf589eedb74a6245b2ce3919143e9ed03ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 281
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 282
            echo "        ";
            ob_start();
            // line 283
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 286
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 294
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 295
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 304
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 306
            echo ($context["js_add_item"] ?? $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_3c049ba4e39f63fc7b7423a76e1e6cf589eedb74a6245b2ce3919143e9ed03ee->leave($__internal_3c049ba4e39f63fc7b7423a76e1e6cf589eedb74a6245b2ce3919143e9ed03ee_prof);

        
        $__internal_1e5b8948017a5161a2a3771ea6d2cb1f740fc50f351fa252019d7e333b67b1f7->leave($__internal_1e5b8948017a5161a2a3771ea6d2cb1f740fc50f351fa252019d7e333b67b1f7_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_79a54a36e0021d10e268d334bf64accb613591ccf2fa55054539c39c6cc25d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a54a36e0021d10e268d334bf64accb613591ccf2fa55054539c39c6cc25d03->enter($__internal_79a54a36e0021d10e268d334bf64accb613591ccf2fa55054539c39c6cc25d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9f4d27fde2c4830c70815e02f9140cf79fbddf4848c54373e511acb584b9b88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4d27fde2c4830c70815e02f9140cf79fbddf4848c54373e511acb584b9b88b->enter($__internal_9f4d27fde2c4830c70815e02f9140cf79fbddf4848c54373e511acb584b9b88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 315
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 316
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 317
        echo "</div>";
        
        $__internal_9f4d27fde2c4830c70815e02f9140cf79fbddf4848c54373e511acb584b9b88b->leave($__internal_9f4d27fde2c4830c70815e02f9140cf79fbddf4848c54373e511acb584b9b88b_prof);

        
        $__internal_79a54a36e0021d10e268d334bf64accb613591ccf2fa55054539c39c6cc25d03->leave($__internal_79a54a36e0021d10e268d334bf64accb613591ccf2fa55054539c39c6cc25d03_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f9056b6d0e034ad651ec59a7c5010cabaff952474f279fadbd43018addf4cca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9056b6d0e034ad651ec59a7c5010cabaff952474f279fadbd43018addf4cca8->enter($__internal_f9056b6d0e034ad651ec59a7c5010cabaff952474f279fadbd43018addf4cca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7d9299bc4643daf4fe432bbe2b94b9a6d0b86df717a96cc128e2a925e81ae89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9299bc4643daf4fe432bbe2b94b9a6d0b86df717a96cc128e2a925e81ae89b->enter($__internal_7d9299bc4643daf4fe432bbe2b94b9a6d0b86df717a96cc128e2a925e81ae89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7d9299bc4643daf4fe432bbe2b94b9a6d0b86df717a96cc128e2a925e81ae89b->leave($__internal_7d9299bc4643daf4fe432bbe2b94b9a6d0b86df717a96cc128e2a925e81ae89b_prof);

        
        $__internal_f9056b6d0e034ad651ec59a7c5010cabaff952474f279fadbd43018addf4cca8->leave($__internal_f9056b6d0e034ad651ec59a7c5010cabaff952474f279fadbd43018addf4cca8_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_2bf9dfccbdce714d2df4ba07376a8cc1507c0208987ae3c4f6c0d7027f15d19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf9dfccbdce714d2df4ba07376a8cc1507c0208987ae3c4f6c0d7027f15d19f->enter($__internal_2bf9dfccbdce714d2df4ba07376a8cc1507c0208987ae3c4f6c0d7027f15d19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_87bdef1113256d5dce960c22b84188190446fe19beca9b8ae6cd24c2454cb79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bdef1113256d5dce960c22b84188190446fe19beca9b8ae6cd24c2454cb79b->enter($__internal_87bdef1113256d5dce960c22b84188190446fe19beca9b8ae6cd24c2454cb79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_87bdef1113256d5dce960c22b84188190446fe19beca9b8ae6cd24c2454cb79b->leave($__internal_87bdef1113256d5dce960c22b84188190446fe19beca9b8ae6cd24c2454cb79b_prof);

        
        $__internal_2bf9dfccbdce714d2df4ba07376a8cc1507c0208987ae3c4f6c0d7027f15d19f->leave($__internal_2bf9dfccbdce714d2df4ba07376a8cc1507c0208987ae3c4f6c0d7027f15d19f_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0c1e90a39efcffca3a839b3bd93fb0d61fb22c83e419eb97ba44946ab77aa377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1e90a39efcffca3a839b3bd93fb0d61fb22c83e419eb97ba44946ab77aa377->enter($__internal_0c1e90a39efcffca3a839b3bd93fb0d61fb22c83e419eb97ba44946ab77aa377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_57dd5ef3caa92c015db4a3c548ea40b6b766eedaaf1a8d0cda576b755bbdd764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57dd5ef3caa92c015db4a3c548ea40b6b766eedaaf1a8d0cda576b755bbdd764->enter($__internal_57dd5ef3caa92c015db4a3c548ea40b6b766eedaaf1a8d0cda576b755bbdd764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_57dd5ef3caa92c015db4a3c548ea40b6b766eedaaf1a8d0cda576b755bbdd764->leave($__internal_57dd5ef3caa92c015db4a3c548ea40b6b766eedaaf1a8d0cda576b755bbdd764_prof);

        
        $__internal_0c1e90a39efcffca3a839b3bd93fb0d61fb22c83e419eb97ba44946ab77aa377->leave($__internal_0c1e90a39efcffca3a839b3bd93fb0d61fb22c83e419eb97ba44946ab77aa377_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b6fdb19b1ecc3c03e7b55f8ce045c103e92a162a6700024afb7b72e276a2b4e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6fdb19b1ecc3c03e7b55f8ce045c103e92a162a6700024afb7b72e276a2b4e6->enter($__internal_b6fdb19b1ecc3c03e7b55f8ce045c103e92a162a6700024afb7b72e276a2b4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_5b211b7e8873b87ddffbc2ee49fd36dc84d29cf58b92dcc79a5eaa34fd17e85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b211b7e8873b87ddffbc2ee49fd36dc84d29cf58b92dcc79a5eaa34fd17e85b->enter($__internal_5b211b7e8873b87ddffbc2ee49fd36dc84d29cf58b92dcc79a5eaa34fd17e85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5b211b7e8873b87ddffbc2ee49fd36dc84d29cf58b92dcc79a5eaa34fd17e85b->leave($__internal_5b211b7e8873b87ddffbc2ee49fd36dc84d29cf58b92dcc79a5eaa34fd17e85b_prof);

        
        $__internal_b6fdb19b1ecc3c03e7b55f8ce045c103e92a162a6700024afb7b72e276a2b4e6->leave($__internal_b6fdb19b1ecc3c03e7b55f8ce045c103e92a162a6700024afb7b72e276a2b4e6_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d0813b823ab0d8942ebea89a06f478567442181a0d80a3fdebf096e50e54d1d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0813b823ab0d8942ebea89a06f478567442181a0d80a3fdebf096e50e54d1d4->enter($__internal_d0813b823ab0d8942ebea89a06f478567442181a0d80a3fdebf096e50e54d1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e5d5ef7a52bc77f7f31da8ecb761a16f5ef056bec806757332a653c5b02b6c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d5ef7a52bc77f7f31da8ecb761a16f5ef056bec806757332a653c5b02b6c60->enter($__internal_e5d5ef7a52bc77f7f31da8ecb761a16f5ef056bec806757332a653c5b02b6c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_e5d5ef7a52bc77f7f31da8ecb761a16f5ef056bec806757332a653c5b02b6c60->leave($__internal_e5d5ef7a52bc77f7f31da8ecb761a16f5ef056bec806757332a653c5b02b6c60_prof);

        
        $__internal_d0813b823ab0d8942ebea89a06f478567442181a0d80a3fdebf096e50e54d1d4->leave($__internal_d0813b823ab0d8942ebea89a06f478567442181a0d80a3fdebf096e50e54d1d4_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ea10125b97ac0e548318d659dc1410b099aa773d672ae1c2649c75675e10390d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea10125b97ac0e548318d659dc1410b099aa773d672ae1c2649c75675e10390d->enter($__internal_ea10125b97ac0e548318d659dc1410b099aa773d672ae1c2649c75675e10390d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f6aaab245de1e8ac5908915ed4d8235c95ecf187f76b479f738a378dae83133b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6aaab245de1e8ac5908915ed4d8235c95ecf187f76b479f738a378dae83133b->enter($__internal_f6aaab245de1e8ac5908915ed4d8235c95ecf187f76b479f738a378dae83133b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 348
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 350
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 351
        echo "</div>";
        
        $__internal_f6aaab245de1e8ac5908915ed4d8235c95ecf187f76b479f738a378dae83133b->leave($__internal_f6aaab245de1e8ac5908915ed4d8235c95ecf187f76b479f738a378dae83133b_prof);

        
        $__internal_ea10125b97ac0e548318d659dc1410b099aa773d672ae1c2649c75675e10390d->leave($__internal_ea10125b97ac0e548318d659dc1410b099aa773d672ae1c2649c75675e10390d_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c0e59e174ee112ed52a2b0a26ee0d313b1cfe881159de7a038c91085d2529e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e59e174ee112ed52a2b0a26ee0d313b1cfe881159de7a038c91085d2529e32->enter($__internal_c0e59e174ee112ed52a2b0a26ee0d313b1cfe881159de7a038c91085d2529e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_0c13a94971a58f77e7501296e06a1f136a7b550dbeb554200eb1443aa7ef0369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c13a94971a58f77e7501296e06a1f136a7b550dbeb554200eb1443aa7ef0369->enter($__internal_0c13a94971a58f77e7501296e06a1f136a7b550dbeb554200eb1443aa7ef0369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 356
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors")));
        // line 357
        echo "    ";
        if ((($context["error_count"] ?? $this->getContext($context, "error_count")) >= 1)) {
            // line 358
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 359
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", ($context["error_count"] ?? $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 360
            if ((($context["error_count"] ?? $this->getContext($context, "error_count")) == 1)) {
                // line 361
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 363
                echo "                <ul>
                    ";
                // line 364
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 365
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                </ul>
            ";
            }
            // line 369
            echo "        </div>
    ";
        }
        
        $__internal_0c13a94971a58f77e7501296e06a1f136a7b550dbeb554200eb1443aa7ef0369->leave($__internal_0c13a94971a58f77e7501296e06a1f136a7b550dbeb554200eb1443aa7ef0369_prof);

        
        $__internal_c0e59e174ee112ed52a2b0a26ee0d313b1cfe881159de7a038c91085d2529e32->leave($__internal_c0e59e174ee112ed52a2b0a26ee0d313b1cfe881159de7a038c91085d2529e32_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_71e4b4f6e302680533db4581e86093f6bfb9a6eb4189d921d51ea90be7f29c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e4b4f6e302680533db4581e86093f6bfb9a6eb4189d921d51ea90be7f29c5a->enter($__internal_71e4b4f6e302680533db4581e86093f6bfb9a6eb4189d921d51ea90be7f29c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_24fa8c093dc405bbd300b6b559df2959df48bc6d416da438c07d7caffb1c8052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fa8c093dc405bbd300b6b559df2959df48bc6d416da438c07d7caffb1c8052->enter($__internal_24fa8c093dc405bbd300b6b559df2959df48bc6d416da438c07d7caffb1c8052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 376
        echo "    ";
        if ((twig_test_iterable(($context["value"] ?? $this->getContext($context, "value"))) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
            // line 377
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 379
        echo "    ";
        if (((twig_test_iterable(($context["value"] ?? $this->getContext($context, "value"))) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 380
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_24fa8c093dc405bbd300b6b559df2959df48bc6d416da438c07d7caffb1c8052->leave($__internal_24fa8c093dc405bbd300b6b559df2959df48bc6d416da438c07d7caffb1c8052_prof);

        
        $__internal_71e4b4f6e302680533db4581e86093f6bfb9a6eb4189d921d51ea90be7f29c5a->leave($__internal_71e4b4f6e302680533db4581e86093f6bfb9a6eb4189d921d51ea90be7f29c5a_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_704601d0a9a7aa5a4b3748df3605edbf7596d4da04342ff4b117ece1837adbc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704601d0a9a7aa5a4b3748df3605edbf7596d4da04342ff4b117ece1837adbc9->enter($__internal_704601d0a9a7aa5a4b3748df3605edbf7596d4da04342ff4b117ece1837adbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_37f0e70aafcd5f9199bb6ecb72a755df1ae54e8c4187ec86a30a614a6972548c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f0e70aafcd5f9199bb6ecb72a755df1ae54e8c4187ec86a30a614a6972548c->enter($__internal_37f0e70aafcd5f9199bb6ecb72a755df1ae54e8c4187ec86a30a614a6972548c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_37f0e70aafcd5f9199bb6ecb72a755df1ae54e8c4187ec86a30a614a6972548c->leave($__internal_37f0e70aafcd5f9199bb6ecb72a755df1ae54e8c4187ec86a30a614a6972548c_prof);

        
        $__internal_704601d0a9a7aa5a4b3748df3605edbf7596d4da04342ff4b117ece1837adbc9->leave($__internal_704601d0a9a7aa5a4b3748df3605edbf7596d4da04342ff4b117ece1837adbc9_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_405a753bbca229009bf365b023bf2cbb07cd69727b1b59f2260433c2f9c74918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405a753bbca229009bf365b023bf2cbb07cd69727b1b59f2260433c2f9c74918->enter($__internal_405a753bbca229009bf365b023bf2cbb07cd69727b1b59f2260433c2f9c74918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_1914afbc607e4084f51462af2dc38f8714bc37e8639af708a40b9284042275fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1914afbc607e4084f51462af2dc38f8714bc37e8639af708a40b9284042275fa->enter($__internal_1914afbc607e4084f51462af2dc38f8714bc37e8639af708a40b9284042275fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_1914afbc607e4084f51462af2dc38f8714bc37e8639af708a40b9284042275fa->leave($__internal_1914afbc607e4084f51462af2dc38f8714bc37e8639af708a40b9284042275fa_prof);

        
        $__internal_405a753bbca229009bf365b023bf2cbb07cd69727b1b59f2260433c2f9c74918->leave($__internal_405a753bbca229009bf365b023bf2cbb07cd69727b1b59f2260433c2f9c74918_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_10f0503bd32d4c6e17a2212d48845002645c44b3ee89fdff3d5fedaacfc9310c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f0503bd32d4c6e17a2212d48845002645c44b3ee89fdff3d5fedaacfc9310c->enter($__internal_10f0503bd32d4c6e17a2212d48845002645c44b3ee89fdff3d5fedaacfc9310c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_c18ad85c1794e0f4a76fb9ed5ab9c5cd3997dc5238b978f38a5b6fe54a5312f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18ad85c1794e0f4a76fb9ed5ab9c5cd3997dc5238b978f38a5b6fe54a5312f2->enter($__internal_c18ad85c1794e0f4a76fb9ed5ab9c5cd3997dc5238b978f38a5b6fe54a5312f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 398
        ob_start();
        // line 399
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 400
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 401
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 402
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["download_title"] ?? $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 404
        echo "
        <div class=\"row\">
            ";
        // line 406
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 407
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 408
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 411
        echo "            <div class=\"";
        echo (($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 412
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c18ad85c1794e0f4a76fb9ed5ab9c5cd3997dc5238b978f38a5b6fe54a5312f2->leave($__internal_c18ad85c1794e0f4a76fb9ed5ab9c5cd3997dc5238b978f38a5b6fe54a5312f2_prof);

        
        $__internal_10f0503bd32d4c6e17a2212d48845002645c44b3ee89fdff3d5fedaacfc9310c->leave($__internal_10f0503bd32d4c6e17a2212d48845002645c44b3ee89fdff3d5fedaacfc9310c_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_6479abf8203de0062ee47b1b6d1f4b246e131cda49264b00d26438c95009359a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6479abf8203de0062ee47b1b6d1f4b246e131cda49264b00d26438c95009359a->enter($__internal_6479abf8203de0062ee47b1b6d1f4b246e131cda49264b00d26438c95009359a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_3252f36b150a5c66a245882912e5ffd127306321498384f2fc19db7c9f891f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3252f36b150a5c66a245882912e5ffd127306321498384f2fc19db7c9f891f3c->enter($__internal_3252f36b150a5c66a245882912e5ffd127306321498384f2fc19db7c9f891f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_3252f36b150a5c66a245882912e5ffd127306321498384f2fc19db7c9f891f3c->leave($__internal_3252f36b150a5c66a245882912e5ffd127306321498384f2fc19db7c9f891f3c_prof);

        
        $__internal_6479abf8203de0062ee47b1b6d1f4b246e131cda49264b00d26438c95009359a->leave($__internal_6479abf8203de0062ee47b1b6d1f4b246e131cda49264b00d26438c95009359a_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_2c98bbec8c28ffcf282132dd67e342ccd397447a8d20d0f41d980436fb970b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c98bbec8c28ffcf282132dd67e342ccd397447a8d20d0f41d980436fb970b43->enter($__internal_2c98bbec8c28ffcf282132dd67e342ccd397447a8d20d0f41d980436fb970b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_397b99afb00735bd525c011044593d962fd17a32a0356cc208696b1d7eb5c55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397b99afb00735bd525c011044593d962fd17a32a0356cc208696b1d7eb5c55f->enter($__internal_397b99afb00735bd525c011044593d962fd17a32a0356cc208696b1d7eb5c55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 425
        ob_start();
        // line 426
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 427
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 428
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 429
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 431
        echo "
        ";
        // line 432
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 433
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? $this->getContext($context, "id")));
            // line 434
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 435
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 439
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 443
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_397b99afb00735bd525c011044593d962fd17a32a0356cc208696b1d7eb5c55f->leave($__internal_397b99afb00735bd525c011044593d962fd17a32a0356cc208696b1d7eb5c55f_prof);

        
        $__internal_2c98bbec8c28ffcf282132dd67e342ccd397447a8d20d0f41d980436fb970b43->leave($__internal_2c98bbec8c28ffcf282132dd67e342ccd397447a8d20d0f41d980436fb970b43_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_343fb80bfd0596f252f240a19cda84938411f0dc66d65a7df76ede9248bf0688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343fb80bfd0596f252f240a19cda84938411f0dc66d65a7df76ede9248bf0688->enter($__internal_343fb80bfd0596f252f240a19cda84938411f0dc66d65a7df76ede9248bf0688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        $__internal_6541dae588928c524c7e0c62d5b01be82371daee4820d393ee85e950e43aa586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6541dae588928c524c7e0c62d5b01be82371daee4820d393ee85e950e43aa586->enter($__internal_6541dae588928c524c7e0c62d5b01be82371daee4820d393ee85e950e43aa586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 448
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 449
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 453
        $this->displayBlock("item_actions", $context, $blocks);
        // line 454
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_6541dae588928c524c7e0c62d5b01be82371daee4820d393ee85e950e43aa586->leave($__internal_6541dae588928c524c7e0c62d5b01be82371daee4820d393ee85e950e43aa586_prof);

        
        $__internal_343fb80bfd0596f252f240a19cda84938411f0dc66d65a7df76ede9248bf0688->leave($__internal_343fb80bfd0596f252f240a19cda84938411f0dc66d65a7df76ede9248bf0688_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_a50a061cf7a10474fb0a651aa07f2973570fcd1003c26e93a7356b3d2970508f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50a061cf7a10474fb0a651aa07f2973570fcd1003c26e93a7356b3d2970508f->enter($__internal_a50a061cf7a10474fb0a651aa07f2973570fcd1003c26e93a7356b3d2970508f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_69eedb6b3e27739f1d8508824ce7c9a11ee9a1094c00ed63ce491c552f7ac438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69eedb6b3e27739f1d8508824ce7c9a11ee9a1094c00ed63ce491c552f7ac438->enter($__internal_69eedb6b3e27739f1d8508824ce7c9a11ee9a1094c00ed63ce491c552f7ac438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 461
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 462
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 463
        echo "
    ";
        // line 465
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
    </button>

    ";
        // line 469
        $context["_entity_actions"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 470
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 471
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 472
        echo "
    ";
        // line 473
        $context["_entity_id"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 475
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 478
        echo "
    ";
        // line 479
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 480
($context["_entity_actions"] ?? $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 481
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 482
($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 483
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 484
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 485
        echo "
";
        
        $__internal_69eedb6b3e27739f1d8508824ce7c9a11ee9a1094c00ed63ce491c552f7ac438->leave($__internal_69eedb6b3e27739f1d8508824ce7c9a11ee9a1094c00ed63ce491c552f7ac438_prof);

        
        $__internal_a50a061cf7a10474fb0a651aa07f2973570fcd1003c26e93a7356b3d2970508f->leave($__internal_a50a061cf7a10474fb0a651aa07f2973570fcd1003c26e93a7356b3d2970508f_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_c5d766c769aa7ef6e5a56e864832c928658857e946dc5da99fe1aabc54dbde1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d766c769aa7ef6e5a56e864832c928658857e946dc5da99fe1aabc54dbde1a->enter($__internal_c5d766c769aa7ef6e5a56e864832c928658857e946dc5da99fe1aabc54dbde1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_76815ac956f183c4c4b9aa18139be5fc02e48c077671863eee1c08fc9c0e483c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76815ac956f183c4c4b9aa18139be5fc02e48c077671863eee1c08fc9c0e483c->enter($__internal_76815ac956f183c4c4b9aa18139be5fc02e48c077671863eee1c08fc9c0e483c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 490
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 491
        echo "    <div class=\"row\">
        ";
        // line 492
        if ((twig_length_filter($this->env, ($context["easyadmin_form_tabs"] ?? $this->getContext($context, "easyadmin_form_tabs"))) > 0)) {
            // line 493
            echo "            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 496
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? $this->getContext($context, "easyadmin_form_tabs")));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 497
                echo "                            <li class=\"";
                if ($this->getAttribute($context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 498
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 499
                if ((($this->getAttribute($context["tab_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab_config"], "icon", array()), false)) : (false))) {
                    // line 500
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 502
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "label", array(), "array"), "html", null, true);
                echo "
                                    ";
                // line 503
                if (($this->getAttribute($context["tab_config"], "errors", array()) > 0)) {
                    // line 504
                    echo "                                        <span class=\"label label-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("form.tab.error_badge_title", $this->getAttribute($context["tab_config"], "errors", array()), array(), "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 505
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "errors", array()), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 508
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? $this->getContext($context, "easyadmin_form_tabs")));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 514
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" class=\"tab-pane ";
                if ($this->getAttribute($context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <div class=\"row\">
                                    ";
                // line 516
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 520
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 524
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 526
        echo "    </div>
";
        
        $__internal_76815ac956f183c4c4b9aa18139be5fc02e48c077671863eee1c08fc9c0e483c->leave($__internal_76815ac956f183c4c4b9aa18139be5fc02e48c077671863eee1c08fc9c0e483c_prof);

        
        $__internal_c5d766c769aa7ef6e5a56e864832c928658857e946dc5da99fe1aabc54dbde1a->leave($__internal_c5d766c769aa7ef6e5a56e864832c928658857e946dc5da99fe1aabc54dbde1a_prof);

    }

    // line 529
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        $__internal_3fbc60fc77ea1e2d962e1339875ccd14f583f140c0a4f5714905ea8f90403966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbc60fc77ea1e2d962e1339875ccd14f583f140c0a4f5714905ea8f90403966->enter($__internal_3fbc60fc77ea1e2d962e1339875ccd14f583f140c0a4f5714905ea8f90403966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        $__internal_ea07457599011b29ae1e8a6d70f935776cd1aef098c02e4aeb4d5d91518fac7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea07457599011b29ae1e8a6d70f935776cd1aef098c02e4aeb4d5d91518fac7a->enter($__internal_ea07457599011b29ae1e8a6d70f935776cd1aef098c02e4aeb4d5d91518fac7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        // line 530
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !$this->getAttribute($context["group_config"], "form_tab", array()) || ($this->getAttribute($context["group_config"], "form_tab", array()) == ($context["tab_name"] ?? $this->getContext($context, "tab_name"))))) {
                // line 531
                echo "        <div class=\"field-group col-xs-12 ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"box box-default\">
                ";
                // line 533
                if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                    // line 534
                    echo "                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            ";
                    // line 536
                    if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                        // line 537
                        echo "                                <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                        echo "\"></i>
                            ";
                    }
                    // line 539
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
                    echo "
                        </h3>
                    </div>
                ";
                }
                // line 543
                echo "
                <div class=\"box-body\">
                    ";
                // line 545
                if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                    // line 546
                    echo "                        <p class=\"help-block\">";
                    echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
                    echo "</p>
                    ";
                }
                // line 548
                echo "
                    <div class=\"row\">
                        ";
                // line 550
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                        // line 551
                        echo "                            ";
                        if (( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == ($context["tab_name"] ?? $this->getContext($context, "tab_name"))))) {
                            // line 552
                            echo "                                <div class=\"col-xs-12 ";
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                            echo "\">
                                    ";
                            // line 553
                            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                                </div>
                            ";
                        }
                        // line 556
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 557
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 562
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == ($context["tab_name"] ?? $this->getContext($context, "tab_name")))))) {
                    // line 563
                    echo "            <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 564
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ea07457599011b29ae1e8a6d70f935776cd1aef098c02e4aeb4d5d91518fac7a->leave($__internal_ea07457599011b29ae1e8a6d70f935776cd1aef098c02e4aeb4d5d91518fac7a_prof);

        
        $__internal_3fbc60fc77ea1e2d962e1339875ccd14f583f140c0a4f5714905ea8f90403966->leave($__internal_3fbc60fc77ea1e2d962e1339875ccd14f583f140c0a4f5714905ea8f90403966_prof);

    }

    // line 571
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_a7116cf304d6073e0f05ecd4162be2843b4c36836833624d7ed8ba8c736aa5e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7116cf304d6073e0f05ecd4162be2843b4c36836833624d7ed8ba8c736aa5e3->enter($__internal_a7116cf304d6073e0f05ecd4162be2843b4c36836833624d7ed8ba8c736aa5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_de8ec748d596d0e9d9eafd03cb7d4ebb8bb0b406171a41ed3ef92eefa5db2117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8ec748d596d0e9d9eafd03cb7d4ebb8bb0b406171a41ed3ef92eefa5db2117->enter($__internal_de8ec748d596d0e9d9eafd03cb7d4ebb8bb0b406171a41ed3ef92eefa5db2117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 572
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 573
($context["attr"] ?? $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 576
($context["autocomplete_entity_name"] ?? $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 579
        echo "
";
        
        $__internal_de8ec748d596d0e9d9eafd03cb7d4ebb8bb0b406171a41ed3ef92eefa5db2117->leave($__internal_de8ec748d596d0e9d9eafd03cb7d4ebb8bb0b406171a41ed3ef92eefa5db2117_prof);

        
        $__internal_a7116cf304d6073e0f05ecd4162be2843b4c36836833624d7ed8ba8c736aa5e3->leave($__internal_a7116cf304d6073e0f05ecd4162be2843b4c36836833624d7ed8ba8c736aa5e3_prof);

    }

    // line 582
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_350c37c843fa0e199b99f29e921bc5b5511cbf41bc79814ae5e0b132e875d505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350c37c843fa0e199b99f29e921bc5b5511cbf41bc79814ae5e0b132e875d505->enter($__internal_350c37c843fa0e199b99f29e921bc5b5511cbf41bc79814ae5e0b132e875d505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_0f984e0e6ba6365d27dc0599d0dd4cda23360a4e7ce8d4efac0a198a7ab507c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f984e0e6ba6365d27dc0599d0dd4cda23360a4e7ce8d4efac0a198a7ab507c0->enter($__internal_0f984e0e6ba6365d27dc0599d0dd4cda23360a4e7ce8d4efac0a198a7ab507c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 583
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 584
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0f984e0e6ba6365d27dc0599d0dd4cda23360a4e7ce8d4efac0a198a7ab507c0->leave($__internal_0f984e0e6ba6365d27dc0599d0dd4cda23360a4e7ce8d4efac0a198a7ab507c0_prof);

        
        $__internal_350c37c843fa0e199b99f29e921bc5b5511cbf41bc79814ae5e0b132e875d505->leave($__internal_350c37c843fa0e199b99f29e921bc5b5511cbf41bc79814ae5e0b132e875d505_prof);

    }

    // line 588
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_28e2a7eeeb64a18e3c2990af0899d1823036b71a17c9983344f61f4c423553f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e2a7eeeb64a18e3c2990af0899d1823036b71a17c9983344f61f4c423553f1->enter($__internal_28e2a7eeeb64a18e3c2990af0899d1823036b71a17c9983344f61f4c423553f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_97251ee1e05473f52e88513f75e2564ae4ed073e7dc402d7d7351d7b18d9ffa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97251ee1e05473f52e88513f75e2564ae4ed073e7dc402d7d7351d7b18d9ffa8->enter($__internal_97251ee1e05473f52e88513f75e2564ae4ed073e7dc402d7d7351d7b18d9ffa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 589
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_97251ee1e05473f52e88513f75e2564ae4ed073e7dc402d7d7351d7b18d9ffa8->leave($__internal_97251ee1e05473f52e88513f75e2564ae4ed073e7dc402d7d7351d7b18d9ffa8_prof);

        
        $__internal_28e2a7eeeb64a18e3c2990af0899d1823036b71a17c9983344f61f4c423553f1->leave($__internal_28e2a7eeeb64a18e3c2990af0899d1823036b71a17c9983344f61f4c423553f1_prof);

    }

    // line 595
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_80a416c31250dd0df7f3e7709438c6745a73124fc6dc4f6289b5a6ef07c1ec47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a416c31250dd0df7f3e7709438c6745a73124fc6dc4f6289b5a6ef07c1ec47->enter($__internal_80a416c31250dd0df7f3e7709438c6745a73124fc6dc4f6289b5a6ef07c1ec47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_7bb63222c096f75a197f82185db8385fc7f4ed211990e02d2644419453136548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb63222c096f75a197f82185db8385fc7f4ed211990e02d2644419453136548->enter($__internal_7bb63222c096f75a197f82185db8385fc7f4ed211990e02d2644419453136548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 596
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 597
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 598
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 599
            echo "            <h2>
                ";
            // line 600
            if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 601
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 604
        echo "
        ";
        // line 605
        if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 606
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 608
        echo "    </div>
";
        
        $__internal_7bb63222c096f75a197f82185db8385fc7f4ed211990e02d2644419453136548->leave($__internal_7bb63222c096f75a197f82185db8385fc7f4ed211990e02d2644419453136548_prof);

        
        $__internal_80a416c31250dd0df7f3e7709438c6745a73124fc6dc4f6289b5a6ef07c1ec47->leave($__internal_80a416c31250dd0df7f3e7709438c6745a73124fc6dc4f6289b5a6ef07c1ec47_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2111 => 608,  2105 => 606,  2103 => 605,  2100 => 604,  2093 => 601,  2087 => 600,  2084 => 599,  2082 => 598,  2077 => 597,  2074 => 596,  2065 => 595,  2052 => 589,  2043 => 588,  2033 => 584,  2030 => 583,  2021 => 582,  2010 => 579,  2008 => 576,  2007 => 573,  2005 => 572,  1996 => 571,  1982 => 567,  1972 => 564,  1967 => 563,  1961 => 562,  1951 => 557,  1944 => 556,  1938 => 553,  1933 => 552,  1930 => 551,  1925 => 550,  1921 => 548,  1915 => 546,  1913 => 545,  1909 => 543,  1901 => 539,  1895 => 537,  1893 => 536,  1889 => 534,  1887 => 533,  1881 => 531,  1874 => 530,  1865 => 529,  1854 => 526,  1848 => 524,  1842 => 520,  1824 => 516,  1814 => 514,  1797 => 513,  1793 => 511,  1785 => 508,  1779 => 505,  1774 => 504,  1772 => 503,  1767 => 502,  1761 => 500,  1759 => 499,  1753 => 498,  1746 => 497,  1742 => 496,  1737 => 493,  1735 => 492,  1732 => 491,  1729 => 490,  1720 => 489,  1709 => 485,  1707 => 484,  1706 => 483,  1705 => 482,  1704 => 481,  1703 => 480,  1702 => 479,  1699 => 478,  1697 => 477,  1694 => 476,  1692 => 475,  1691 => 473,  1688 => 472,  1686 => 471,  1685 => 470,  1684 => 469,  1678 => 466,  1675 => 465,  1672 => 463,  1669 => 462,  1666 => 461,  1657 => 460,  1643 => 454,  1641 => 453,  1636 => 449,  1634 => 448,  1625 => 447,  1613 => 443,  1607 => 440,  1603 => 439,  1597 => 436,  1593 => 435,  1590 => 434,  1587 => 433,  1585 => 432,  1582 => 431,  1576 => 429,  1574 => 428,  1570 => 427,  1567 => 426,  1565 => 425,  1556 => 424,  1543 => 421,  1540 => 420,  1531 => 419,  1515 => 412,  1510 => 411,  1504 => 408,  1501 => 407,  1499 => 406,  1495 => 404,  1487 => 402,  1484 => 401,  1482 => 400,  1479 => 399,  1477 => 398,  1468 => 397,  1455 => 394,  1452 => 393,  1443 => 392,  1430 => 388,  1427 => 387,  1418 => 386,  1408 => 383,  1405 => 382,  1402 => 381,  1399 => 380,  1396 => 379,  1390 => 377,  1387 => 376,  1378 => 373,  1366 => 369,  1362 => 367,  1353 => 365,  1349 => 364,  1346 => 363,  1340 => 361,  1338 => 360,  1334 => 359,  1331 => 358,  1328 => 357,  1325 => 356,  1316 => 355,  1306 => 351,  1304 => 350,  1302 => 349,  1294 => 348,  1285 => 347,  1275 => 344,  1273 => 343,  1271 => 342,  1263 => 341,  1254 => 340,  1244 => 337,  1242 => 336,  1233 => 335,  1223 => 332,  1221 => 331,  1212 => 330,  1202 => 327,  1200 => 326,  1191 => 325,  1181 => 322,  1179 => 321,  1170 => 320,  1160 => 317,  1158 => 316,  1152 => 315,  1143 => 314,  1128 => 308,  1123 => 306,  1119 => 304,  1105 => 295,  1099 => 294,  1088 => 286,  1083 => 283,  1080 => 282,  1078 => 281,  1072 => 279,  1063 => 278,  1053 => 275,  1047 => 273,  1045 => 272,  1043 => 270,  1036 => 265,  1030 => 264,  1026 => 262,  1024 => 261,  1022 => 259,  1020 => 258,  1012 => 257,  1010 => 256,  1001 => 255,  989 => 249,  987 => 248,  985 => 247,  970 => 246,  967 => 245,  964 => 244,  961 => 243,  958 => 242,  955 => 241,  952 => 240,  949 => 239,  946 => 238,  943 => 237,  940 => 236,  938 => 235,  929 => 234,  919 => 231,  910 => 230,  900 => 227,  891 => 226,  881 => 223,  879 => 222,  870 => 220,  860 => 217,  858 => 216,  849 => 215,  838 => 209,  836 => 208,  834 => 207,  831 => 205,  829 => 204,  827 => 203,  818 => 202,  807 => 198,  805 => 197,  803 => 196,  800 => 194,  798 => 193,  796 => 192,  787 => 191,  776 => 187,  770 => 184,  769 => 183,  768 => 182,  764 => 181,  760 => 180,  757 => 178,  751 => 175,  750 => 174,  749 => 173,  745 => 172,  743 => 171,  741 => 170,  732 => 169,  717 => 163,  712 => 161,  708 => 159,  695 => 149,  690 => 146,  687 => 145,  685 => 144,  683 => 143,  681 => 142,  672 => 141,  660 => 136,  657 => 135,  649 => 134,  644 => 132,  642 => 131,  640 => 130,  637 => 128,  635 => 127,  626 => 126,  614 => 121,  612 => 120,  610 => 118,  609 => 117,  608 => 116,  607 => 115,  602 => 113,  600 => 112,  598 => 111,  595 => 109,  593 => 108,  584 => 107,  573 => 103,  571 => 102,  569 => 101,  567 => 100,  565 => 99,  561 => 98,  559 => 97,  556 => 95,  554 => 94,  545 => 93,  534 => 89,  532 => 88,  530 => 87,  521 => 86,  511 => 83,  505 => 81,  503 => 80,  501 => 79,  495 => 77,  492 => 76,  490 => 75,  487 => 74,  478 => 73,  468 => 70,  466 => 69,  457 => 68,  447 => 65,  445 => 64,  436 => 63,  426 => 60,  423 => 58,  421 => 57,  412 => 56,  397 => 50,  392 => 48,  388 => 46,  375 => 36,  370 => 33,  367 => 32,  365 => 31,  363 => 29,  354 => 28,  342 => 23,  340 => 21,  334 => 18,  332 => 17,  329 => 16,  326 => 15,  324 => 13,  323 => 12,  322 => 11,  321 => 9,  320 => 8,  319 => 7,  317 => 5,  315 => 4,  306 => 3,  296 => 595,  293 => 593,  291 => 588,  288 => 586,  286 => 582,  283 => 581,  281 => 571,  278 => 569,  276 => 529,  273 => 528,  271 => 489,  268 => 487,  266 => 460,  263 => 459,  261 => 447,  258 => 446,  256 => 424,  253 => 423,  251 => 419,  248 => 418,  246 => 397,  243 => 396,  241 => 392,  238 => 391,  236 => 386,  234 => 373,  232 => 355,  229 => 353,  227 => 347,  224 => 346,  222 => 340,  219 => 339,  217 => 335,  214 => 334,  212 => 330,  209 => 329,  207 => 325,  204 => 324,  202 => 320,  199 => 319,  197 => 314,  194 => 313,  192 => 278,  189 => 277,  187 => 255,  184 => 254,  181 => 252,  179 => 234,  176 => 233,  174 => 230,  171 => 229,  169 => 226,  166 => 225,  164 => 220,  161 => 219,  159 => 215,  156 => 214,  153 => 212,  151 => 202,  148 => 201,  146 => 191,  143 => 190,  141 => 169,  138 => 168,  136 => 141,  133 => 140,  131 => 126,  128 => 125,  126 => 107,  123 => 106,  121 => 93,  118 => 92,  116 => 86,  113 => 85,  111 => 73,  108 => 72,  106 => 68,  103 => 67,  101 => 63,  98 => 62,  96 => 56,  93 => 55,  91 => 28,  88 => 27,  85 => 25,  83 => 3,  80 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
       returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% if value is iterable and value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is iterable and value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block easyadmin_rest %}
    {{- form_rest(form) -}}
    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {{- block('item_actions') -}}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% if easyadmin_form_tabs | length > 0 %}
            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <li class=\"{% if tab_config.active %}active{% endif %}\">
                                <a href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-toggle=\"tab\">
                                    {% if tab_config.icon|default(false) %}
                                        <i class=\"fa fa-{{ tab_config.icon }}\"></i>
                                    {% endif %}
                                    {{ tab_config['label'] }}
                                    {% if tab_config.errors > 0 %}
                                        <span class=\"label label-danger\" title=\"{{ 'form.tab.error_badge_title'|transchoice(tab_config.errors, {}, 'EasyAdminBundle') }}\">
                                            {{ tab_config.errors }}
                                        </span>
                                    {% endif %}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"tab-content\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %}\">
                                <div class=\"row\">
                                    {{ block('easyadmin_widget_groups') }}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% else %}
            {{ block('easyadmin_widget_groups') }}
        {% endif %}
    </div>
{% endblock easyadmin_widget %}

{% block easyadmin_widget_groups %}
    {% for group_name, group_config in easyadmin_form_groups if not group_config.form_tab or group_config.form_tab == tab_name %}
        <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
            <div class=\"box box-default\">
                {% if group_config.label|default(false) or group_config.icon|default(false) %}
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            {% if group_config.icon|default(false) %}
                                <i class=\"fa fa-{{ group_config.icon }}\"></i>
                            {% endif %}
                            {{ group_config.label|trans(domain = _translation_domain)|raw }}
                        </h3>
                    </div>
                {% endif %}

                <div class=\"box-body\">
                    {% if group_config.help|default(false) %}
                        <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                    {% endif %}

                    <div class=\"row\">
                        {% for field in form if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                            {% if not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        {% for field in form if 'hidden' not in field.vars.block_prefixes and (not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name) %}
            <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                {{ form_row(field) }}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock easyadmin_widget_groups %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
