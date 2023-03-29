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

/* themes/ceremai/templates/system/page.html.twig */
class __TwigTemplate_f3e39aa4e17a79b3401729cd6719d8c8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "
";
        // line 56
        echo "
<button onclick=\"topFunction()\" id=\"myBtn\" title=\"Go to top\"><i class=\"fa fa-angle-up\"></i></button>

";
        // line 59
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "fluid_container", [], "any", false, false, true, 59)) ? ("container-fluid") : ("container"));
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 61) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 61))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 140
        echo "
";
        // line 142
        $this->displayBlock('main', $context, $blocks);
        // line 219
        echo "

  ";
        // line 221
        $this->displayBlock('footer', $context, $blocks);
        // line 277
        echo "
";
    }

    // line 62
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["theme"] ?? null), "settings", [], "any", false, false, true, 66), "navbar_inverse", [], "any", false, false, true, 66)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
($context["theme"] ?? null), "settings", [], "any", false, false, true, 67), "navbar_position", [], "any", false, false, true, 67)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 67), "navbar_position", [], "any", false, false, true, 67), 67, $this->source)))) : (""))];
        // line 70
        echo "    <div class=\"top-header-wrapper clearfix\">
    
      <div class=\"container\">  ";
        // line 73
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_left", [], "any", false, false, true, 73)) {
            // line 74
            echo "          <div class=\"left-top-header\">
            ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_left", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 78
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_right", [], "any", false, false, true, 78)) {
            // line 79
            echo "          <div class=\"right-top-header\">
            ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_right", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 83
        echo "      </div>
    
    </div>

    <div class=\"middle-header-wrapper clearfix\">
      <div class=\"container\"> ";
        // line 89
        echo "        <div class=\"row row-no-gutters\">
            ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_left", [], "any", false, false, true, 90)) {
            // line 91
            echo "              <div class=\"col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_column_left"] ?? null), 91, $this->source), "html", null, true);
            echo "\">
                ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_left", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 95
        echo "            
            ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_center", [], "any", false, false, true, 96)) {
            // line 97
            echo "              <div class=\"col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_column_center"] ?? null), 97, $this->source), "html", null, true);
            echo " text-center\">
                ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_center", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 101
        echo "            
            ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_right", [], "any", false, false, true, 102)) {
            // line 103
            echo "              <div class=\"col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_column_right"] ?? null), 103, $this->source), "html", null, true);
            echo " text-right\">
                ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_right", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 107
        echo "        </div>
      </div>
    </div>

    <header";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 111), 111, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 112
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 112)) {
            // line 113
            echo "        <div class=\"container\">  ";
            // line 114
            echo "      ";
        }
        // line 115
        echo "      <div class=\"navbar-header\">
        ";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "
        ";
        // line 118
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 118)) {
            // line 119
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 126
        echo "      </div>

      ";
        // line 129
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 129)) {
            // line 130
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 134
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 134)) {
            // line 135
            echo "        </div>
      ";
        }
        // line 137
        echo "    </header>
  ";
    }

    // line 142
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "  ";
        // line 144
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 144)) {
            // line 145
            echo "    ";
            $this->displayBlock('header', $context, $blocks);
            // line 154
            echo "  ";
        }
        // line 155
        echo "
  ";
        // line 156
        $context["node_type"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 156), 156, $this->source));
        // line 157
        echo "  ";
        if ((($context["node_type"] ?? null) == "homepage")) {
            // line 158
            echo "    <div role=\"main\" class=\"main-container container-fluid js-quickedit-main-content\">
  ";
        } else {
            // line 160
            echo "    <div role=\"main\" class=\"main-container container       js-quickedit-main-content\">
  ";
        }
        // line 162
        echo "  
    <div class=\"main-container-inner ";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 163, $this->source), "html", null, true);
        echo "\">

      ";
        // line 166
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 166)) {
            // line 167
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 172
            echo "      ";
        }
        // line 173
        echo "
      ";
        // line 175
        echo "      
      ";
        // line 177
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 178
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 178) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 178))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 179
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 179) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 179)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 180
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 180) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 180)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 181
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 181)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 181)))) ? ("col-sm-12xxx") : (""))];
        // line 184
        echo "
      <section";
        // line 185
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 185), 185, $this->source), "html", null, true);
        echo ">

        ";
        // line 188
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 188)) {
            // line 189
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 192
            echo "        ";
        }
        // line 193
        echo "
        ";
        // line 195
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 195)) {
            // line 196
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 199
            echo "        ";
        }
        // line 200
        echo "
        ";
        // line 202
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 206
        echo "      </section>

      ";
        // line 209
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 209)) {
            // line 210
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 215
            echo "      ";
        }
        // line 216
        echo "    </div>
  </div>
";
    }

    // line 145
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "      <div class=\"header-region clearfix\" role=\"heading\">
        <div class=\"container-fluid\">
          <div class=\"header-inner text-center\">
            ";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    ";
    }

    // line 167
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 169
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 189
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 196
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 202
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 203
        echo "          <a id=\"main-content\"></a>
          ";
        // line 204
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 210
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 211
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 212
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 221
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "    <div class=\"container\">
      ";
        // line 223
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_pre_top", [], "any", false, false, true, 223)) {
            // line 224
            echo "        <div class=\"footer-pre-top col-lg-12\">
          ";
            // line 225
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_pre_top", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 228
        echo "    </div>
    
    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"footer-top clearfix\">
        ";
        // line 232
        $context["footer_boxed_classes"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 232), "footer_boxed", [], "any", false, false, true, 232)) ? ("container") : ("container-fluid"));
        echo "  
        <div class=\"";
        // line 233
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_boxed_classes"] ?? null), 233, $this->source), "html", null, true);
        echo "\">
          ";
        // line 234
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 234)) {
            // line 235
            echo "            <div class=\"footer-first col-sm-6 col-md-3\">
              ";
            // line 236
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 239
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 239)) {
            // line 240
            echo "            <div class=\"footer-second col-sm-6 col-md-3\">
              ";
            // line 241
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 244
        echo "          
          ";
        // line 245
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 245)) {
            // line 246
            echo "            ";
            $context["footer_third_classes"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 246)) ? ("col-sm-6 col-md-3") : ("col-sm-12 col-md-6"));
            // line 247
            echo "            <div class=\"footer-third ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_classes"] ?? null), 247, $this->source), "html", null, true);
            echo "\">
              ";
            // line 248
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 251
        echo "          
          ";
        // line 252
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 252)) {
            // line 253
            echo "            <div class=\"footer-fourth col-sm-6 col-md-3\">
              ";
            // line 254
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 257
        echo "        </div>
      </div>

      <div class=\"footer-bottom clearfix\">
        <div class=\"";
        // line 261
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_boxed_classes"] ?? null), 261, $this->source), "html", null, true);
        echo "\">
          <div class=\"footer-bottom-left\">
            ";
        // line 263
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 263)) {
            // line 264
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 264), 264, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 266
        echo "          </div>
          <div class=\"footer-bottom-right\">
            ";
        // line 268
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 268)) {
            // line 269
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 271
        echo "          </div>
        </div>
      </div>

    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/ceremai/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 271,  548 => 269,  546 => 268,  542 => 266,  536 => 264,  534 => 263,  529 => 261,  523 => 257,  517 => 254,  514 => 253,  512 => 252,  509 => 251,  503 => 248,  498 => 247,  495 => 246,  493 => 245,  490 => 244,  484 => 241,  481 => 240,  478 => 239,  472 => 236,  469 => 235,  467 => 234,  463 => 233,  459 => 232,  453 => 228,  447 => 225,  444 => 224,  442 => 223,  439 => 222,  435 => 221,  428 => 212,  425 => 211,  421 => 210,  415 => 204,  412 => 203,  408 => 202,  401 => 197,  397 => 196,  390 => 190,  386 => 189,  379 => 169,  376 => 168,  372 => 167,  363 => 149,  358 => 146,  354 => 145,  348 => 216,  345 => 215,  342 => 210,  339 => 209,  335 => 206,  332 => 202,  329 => 200,  326 => 199,  323 => 196,  320 => 195,  317 => 193,  314 => 192,  311 => 189,  308 => 188,  303 => 185,  300 => 184,  298 => 181,  297 => 180,  296 => 179,  295 => 178,  294 => 177,  291 => 175,  288 => 173,  285 => 172,  282 => 167,  279 => 166,  274 => 163,  271 => 162,  267 => 160,  263 => 158,  260 => 157,  258 => 156,  255 => 155,  252 => 154,  249 => 145,  246 => 144,  244 => 143,  240 => 142,  235 => 137,  231 => 135,  228 => 134,  222 => 131,  219 => 130,  216 => 129,  212 => 126,  203 => 120,  200 => 119,  197 => 118,  193 => 116,  190 => 115,  187 => 114,  185 => 113,  183 => 112,  179 => 111,  173 => 107,  167 => 104,  162 => 103,  160 => 102,  157 => 101,  151 => 98,  146 => 97,  144 => 96,  141 => 95,  135 => 92,  130 => 91,  128 => 90,  125 => 89,  118 => 83,  112 => 80,  109 => 79,  106 => 78,  100 => 75,  97 => 74,  94 => 73,  90 => 70,  88 => 67,  87 => 66,  86 => 64,  84 => 63,  80 => 62,  75 => 277,  73 => 221,  69 => 219,  67 => 142,  64 => 140,  60 => 62,  58 => 61,  56 => 59,  51 => 56,  48 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ceremai/templates/system/page.html.twig", "C:\\xampp\\htdocs\\Food\\themes\\ceremai\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 59, "if" => 61, "block" => 62);
        static $filters = array("clean_class" => 67, "escape" => 75, "t" => 120);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
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
