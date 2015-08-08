<?php

/* core/themes/classy/templates/layout/page.html.twig */
class __TwigTemplate_2a81ac0a95d59e8b572aee38e25303e4259b1f158463ce30f16fadb9285b47ff extends Twig_Template
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
        // line 60
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 63
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 64
            echo "      <a href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 65
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 68
        echo "
    ";
        // line 69
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 70
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 73
            echo "        ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 74
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 75
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 78
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 79
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 82
            echo "
        ";
            // line 83
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 84
                echo "          <div class=\"site-slogan\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
                echo "</div>
        ";
            }
            // line 86
            echo "      </div>";
            // line 87
            echo "    ";
        }
        // line 88
        echo "
    ";
        // line 89
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "
  </header>

  ";
        // line 92
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "
  ";
        // line 93
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true);
        echo "

  ";
        // line 95
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true);
        echo "

  ";
        // line 97
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "

  ";
        // line 99
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 103
        echo "
    <div class=\"layout-content\">
      ";
        // line 105
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "

      ";
        // line 107
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
      ";
        // line 108
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 109
            echo "        <h1>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
      ";
        }
        // line 111
        echo "      ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

      ";
        // line 113
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
        echo "

      ";
        // line 115
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 116
            echo "        <nav class=\"action-links\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</nav>
      ";
        }
        // line 118
        echo "
      ";
        // line 119
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
    </div>";
        // line 121
        echo "
    ";
        // line 122
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 123
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 124
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 129
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 130
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 133
        echo "
  </main>

  ";
        // line 136
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 137
            echo "    <footer role=\"contentinfo\">
      ";
            // line 138
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 141
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 141,  214 => 138,  211 => 137,  209 => 136,  204 => 133,  198 => 130,  195 => 129,  193 => 128,  190 => 127,  184 => 124,  181 => 123,  179 => 122,  176 => 121,  172 => 119,  169 => 118,  163 => 116,  161 => 115,  156 => 113,  150 => 111,  144 => 109,  142 => 108,  138 => 107,  133 => 105,  129 => 103,  123 => 99,  118 => 97,  113 => 95,  108 => 93,  104 => 92,  98 => 89,  95 => 88,  92 => 87,  90 => 86,  84 => 84,  82 => 83,  79 => 82,  69 => 79,  66 => 78,  56 => 75,  53 => 74,  50 => 73,  46 => 70,  44 => 69,  41 => 68,  33 => 65,  26 => 64,  24 => 63,  19 => 60,);
    }
}
