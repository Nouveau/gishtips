<?php

/* core/modules/system/templates/feed-icon.html.twig */
class __TwigTemplate_1ae12d02cfcb366a5ecbae36e54184fa8916a0e2282716e8e97bd1d98b77a9dc extends Twig_Template
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
        // line 15
        echo "<a href=\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "feed-icon"), "method"), "html", null, true);
        echo ">
  ";
        // line 16
        echo $this->env->getExtension('drupal_core')->renderVar(t("Subscribe to @title", array("@title" => (isset($context["title"]) ? $context["title"] : null))));
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 16,  19 => 15,);
    }
}
