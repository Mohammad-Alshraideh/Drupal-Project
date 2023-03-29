<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/yg_news/templates/layout/page.html.twig */
class __TwigTemplate_07c51a07daf537a27d832b62b1014c7f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container-fluid fh5co_header_bg\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_trending", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
        </div>
    </div>
</div>
<div class=\"container-fluid header-res\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3 fh5co_padding_menu\">
                ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-12 col-md-9 align-self-center fh5co_mediya_right\">
                ";
        // line 15
        if (($context["linkedin"] ?? null)) {
            // line 16
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 17, $this->source), "html", null, true);
            echo "\" target=\"_blank\"  class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-linkedin\"></i></div></a>
                </div>
                ";
        }
        // line 19
        echo " 
                ";
        // line 20
        if (($context["googleplus"] ?? null)) {
            // line 21
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["googleplus"] ?? null), 22, $this->source), "html", null, true);
            echo "\" target=\"_blank\"  class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-google-plus\"></i></div></a>
                </div>
                ";
        }
        // line 25
        echo "                ";
        if (($context["twitter"] ?? null)) {
            // line 26
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 27, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-twitter\"></i></div></a>
                </div>
                ";
        }
        // line 30
        echo "                ";
        if (($context["facebook"] ?? null)) {
            // line 31
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 32, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-facebook\"></i></div></a>
                </div>
                ";
        }
        // line 34
        echo "              
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid bg-faded fh5co_padd_mediya padding_786\">
    <div class=\"container padding_786\">
        <nav class=\"navbar navbar-toggleable-md navbar-light \">
            <button class=\"navbar-toggler navbar-toggler-right mt-3\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\"><span class=\"fa fa-bars\"></span></button>
          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">        
            ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
            </div>
        </nav>
    </div>
</div>

<!-- Banner -->
";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "



";
        // line 59
        $this->displayBlock('main', $context, $blocks);
        // line 131
        echo "
";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "trending_news", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "


<div class=\"container-fluid fh5co_footer_bg pb-3\">
    <div class=\"container animate-box\">
        <div class=\"row\">
            <div class=\"col-12 spdp_right py-5\">";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "</div>
            <div class=\"clearfix\"></div>
            <div class=\"col-12 col-md-4 col-lg-3\">
                <div class=\"footer_sub_about pb-3\"> 
                ";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_about", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"footer_mediya_icon\">

                    ";
        // line 147
        if (($context["linkedin"] ?? null)) {
            // line 148
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 148, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-linkedin\"></i></div>
                    </a></div>
                    ";
        }
        // line 151
        echo " 

                    ";
        // line 153
        if (($context["googleplus"] ?? null)) {
            // line 154
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["googleplus"] ?? null), 154, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-google-plus\"></i></div>
                    </a></div>
                    ";
        }
        // line 158
        echo "
                    ";
        // line 159
        if (($context["twitter"] ?? null)) {
            // line 160
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 160, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-twitter\"></i></div>
                    </a></div>
                    ";
        }
        // line 164
        echo "
                    ";
        // line 165
        if (($context["facebook"] ?? null)) {
            // line 166
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 166, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-facebook\"></i></div>
                    </a></div>
                    ";
        }
        // line 170
        echo "
                </div>
            </div>
            <div class=\"col-12 col-md-3 col-lg-2\">
                <ul class=\"footer_menu\">
                   ";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_category", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
        echo "
                </ul>
            </div>
            <div class=\"col-12 col-md-5 col-lg-3 position_footer_relative\">
                ";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_most_viewed_post", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
        echo "
                <div class=\"footer_position_absolute\"><img src=\"";
        // line 180
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["basepath"] ?? null), 180, $this->source), "html", null, true);
        echo "/themes/yg_news/images/footer_sub_tipik.png\" alt=\"img\" class=\"width_footer_sub_img\"/></div>
            </div>
            <div class=\"col-12 col-md-12 col-lg-4 \">
                 ";
        // line 183
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last_modified_post", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"row justify-content-center pt-2 pb-4\">
            ";
        // line 187
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_subscribe", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
        echo "
        </div>
    </div>
</div>
<div class=\"container-fluid fh5co_footer_right_reserved\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-6 py-4 Reserved\"> © Copyright 2018, All rights reserved. Design by <a href=\"https://freehtml5.co\" title=\"Free HTML5 Bootstrap templates\">FreeHTML5.co</a>.
            <p>Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>   </div>
            <div class=\"col-12 col-md-6 spdp_right py-4\">
               ";
        // line 197
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copy_right_footer_menu", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"gototop js-top\">
    <a href=\"#\" class=\"js-gotop\"><i class=\"fa fa-arrow-up\"></i></a>
</div>";
    }

    // line 59
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "<div role=\"main\" class=\"container-fluid pb-4 pt-4 paddding\">
  <div class=\"container paddding main-container ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 61, $this->source), "html", null, true);
        echo " js-quickedit-main-content \">
    <div class=\"row mx-0\">

     

      ";
        // line 67
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 67)) {
            // line 68
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 73
            echo "      ";
        }
        // line 74
        echo "
      ";
        // line 76
        echo "      ";
        // line 77
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 78
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 78) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 78))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 79
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 79) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 79)))) ? ("col-sm-12 col-md-8") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 80
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 80) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 80)))) ? ("col-sm-12 col-md-8") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 81
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 81)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 81)))) ? ("col-sm-12") : (""))];
        // line 84
        echo "      <section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
        echo " class=\"top-space co-md-8 col-sm-12 animate-box\"  data-animate-effect=\"fadeInLeft\">

      

        ";
        // line 89
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 90
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 93
            echo "        ";
        }
        // line 94
        echo "
        ";
        // line 96
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 97
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 100
            echo "        ";
        }
        // line 101
        echo "
        ";
        // line 103
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 103)) {
            // line 104
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 107
            echo "        ";
        }
        // line 108
        echo "
        ";
        // line 110
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 114
        echo "      </section>

      ";
        // line 117
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 117)) {
            // line 118
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 126
            echo "      ";
        }
        // line 127
        echo "    </div>
  </div>
  </div>
";
    }

    // line 68
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 90
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 91, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 97
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 98, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 104
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 110
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "          <a id=\"main-content\"></a>
          ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 118
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "          <aside class=\"col-md-3 animate-box\" data-animate-effect=\"fadeInRight\" role=\"complementary\">
            <div class=\"clearfix\"></div>
                <div class=\"fh5co_tags_all\">
                  ";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "
                </div> 
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_news/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 122,  450 => 119,  446 => 118,  440 => 112,  437 => 111,  433 => 110,  426 => 105,  422 => 104,  415 => 98,  411 => 97,  404 => 91,  400 => 90,  393 => 70,  390 => 69,  386 => 68,  379 => 127,  376 => 126,  373 => 118,  370 => 117,  366 => 114,  363 => 110,  360 => 108,  357 => 107,  354 => 104,  351 => 103,  348 => 101,  345 => 100,  342 => 97,  339 => 96,  336 => 94,  333 => 93,  330 => 90,  327 => 89,  319 => 84,  317 => 81,  316 => 80,  315 => 79,  314 => 78,  313 => 77,  311 => 76,  308 => 74,  305 => 73,  302 => 68,  299 => 67,  291 => 61,  288 => 60,  284 => 59,  271 => 197,  258 => 187,  251 => 183,  245 => 180,  241 => 179,  234 => 175,  227 => 170,  219 => 166,  217 => 165,  214 => 164,  206 => 160,  204 => 159,  201 => 158,  193 => 154,  191 => 153,  187 => 151,  179 => 148,  177 => 147,  170 => 143,  163 => 139,  154 => 133,  151 => 131,  149 => 59,  142 => 54,  132 => 47,  117 => 34,  111 => 32,  108 => 31,  105 => 30,  99 => 27,  96 => 26,  93 => 25,  87 => 22,  84 => 21,  82 => 20,  79 => 19,  73 => 17,  70 => 16,  68 => 15,  62 => 12,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_news/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\Food\\themes\\yg_news\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "block" => 59, "set" => 77);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
