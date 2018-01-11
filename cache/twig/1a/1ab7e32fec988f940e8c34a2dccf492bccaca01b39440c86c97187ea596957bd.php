<?php

/* rename-modal.twig.html */
class __TwigTemplate_3bf96dbed38439a5a3e11707e7aadd4d2ccaad9c713af84c18f42985fb579525 extends Twig_Template
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
        // line 1
        echo "<div class=\"remodal\" data-remodal-id=\"modal-admin-addon-media-rename\" data-remodal-options=\"hashTracking: false\">
  <form method=\"post\" onsubmit='return false;'>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 4
            echo "      ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 5
                echo "        ";
                $context["value"] = $this->getAttribute(($context["data"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 6
                echo "        <div class=\"block block-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                echo "\">
          ";
                // line 7
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "rename-modal.twig.html", 7)->display($context);
                // line 8
                echo "        </div>
      ";
            }
            // line 10
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    <div class=\"block page-media-info hidden\">
      <div class=\"form-field grid\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ADMIN_ADDON_MEDIA_RENAME.PAGE_MEDIA_INFO"), "html", null, true);
        echo "</div>
    </div>

    <div class=\"block non-page-media-info hidden\">
      <div class=\"form-field grid\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ADMIN_ADDON_MEDIA_RENAME.NON_PAGE_MEDIA_INFO"), "html", null, true);
        echo "</div>
    </div>

    <div class=\"button-bar\">
      <div class=\"loading\">
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ADMIN_ADDON_MEDIA_RENAME.RENAMING"), "html", null, true);
        echo "... <i class=\"fa fa-spinner fa-spin\"></i>
      </div>

      <button class=\"button primary\" style=\"visibility: hidden\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
    </div>
  </form>
</div>

<div class=\"remodal\" data-remodal-id=\"modal-admin-addon-media-rename-alert\" data-remodal-options=\"hashTracking: false\">
  <form method=\"post\" onsubmit='return false;'>
    <h1>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ADMIN_ADDON_MEDIA_RENAME.RENAME_FAILED"), "html", null, true);
        echo "</h1>
    <p class=\"bigger\"></p>
    <div class=\"button-bar\">
        <button data-remodal-action=\"confirm\" class=\"button primary\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
    </div>
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "rename-modal.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  106 => 32,  96 => 25,  90 => 22,  82 => 17,  75 => 13,  71 => 11,  57 => 10,  53 => 8,  51 => 7,  46 => 6,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"remodal\" data-remodal-id=\"modal-admin-addon-media-rename\" data-remodal-options=\"hashTracking: false\">
  <form method=\"post\" onsubmit='return false;'>
    {% for field in fields %}
      {% if field.type %}
        {% set value = data.value(field.name) %}
        <div class=\"block block-{{field.type}}\">
          {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
        </div>
      {% endif %}
    {% endfor %}

    <div class=\"block page-media-info hidden\">
      <div class=\"form-field grid\">{{ \"PLUGIN_ADMIN_ADDON_MEDIA_RENAME.PAGE_MEDIA_INFO\"|t }}</div>
    </div>

    <div class=\"block non-page-media-info hidden\">
      <div class=\"form-field grid\">{{ \"PLUGIN_ADMIN_ADDON_MEDIA_RENAME.NON_PAGE_MEDIA_INFO\"|t }}</div>
    </div>

    <div class=\"button-bar\">
      <div class=\"loading\">
        {{ \"PLUGIN_ADMIN_ADDON_MEDIA_RENAME.RENAMING\"|t }}... <i class=\"fa fa-spinner fa-spin\"></i>
      </div>

      <button class=\"button primary\" style=\"visibility: hidden\">{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
    </div>
  </form>
</div>

<div class=\"remodal\" data-remodal-id=\"modal-admin-addon-media-rename-alert\" data-remodal-options=\"hashTracking: false\">
  <form method=\"post\" onsubmit='return false;'>
    <h1>{{ \"PLUGIN_ADMIN_ADDON_MEDIA_RENAME.RENAME_FAILED\"|t }}</h1>
    <p class=\"bigger\"></p>
    <div class=\"button-bar\">
        <button data-remodal-action=\"confirm\" class=\"button primary\">{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
    </div>
  </form>
</div>", "rename-modal.twig.html", "D:\\xampp\\htdocs\\grav\\user\\plugins\\admin-addon-media-rename\\templates\\rename-modal.twig.html");
    }
}
