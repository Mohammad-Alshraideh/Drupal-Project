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

/* themes/yg_news/templates/layout/page--404.html.twig */
class __TwigTemplate_bca564a32b88dc95fa71fb02faa317b6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<div class=\"container-fluid fh5co_header_bg\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_trending", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
        </div>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3 fh5co_padding_menu\">
                ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-12 col-md-9 align-self-center fh5co_mediya_right\">
                ";
        // line 73
        if (($context["linkedin"] ?? null)) {
            // line 74
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 75, $this->source), "html", null, true);
            echo "\" target=\"_blank\"  class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-linkedin\"></i></div></a>
                </div>
                ";
        }
        // line 77
        echo " 
                ";
        // line 78
        if (($context["googleplus"] ?? null)) {
            // line 79
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["googleplus"] ?? null), 80, $this->source), "html", null, true);
            echo "\" target=\"_blank\"  class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-google-plus\"></i></div></a>
                </div>
                ";
        }
        // line 83
        echo "                ";
        if (($context["twitter"] ?? null)) {
            // line 84
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 85, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-twitter\"></i></div></a>
                </div>
                ";
        }
        // line 88
        echo "                ";
        if (($context["facebook"] ?? null)) {
            // line 89
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 90, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-facebook\"></i></div></a>
                </div>
                ";
        }
        // line 92
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
            ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "
        </nav>
    </div>
</div>

";
        // line 110
        echo "<section id=\"not-found-section\" class=\"text-center\">
  <div class=\"container\">               
    <div class=\"row\"> 
      <div class=\"not-found-body\" >
        <div class=\"not-title\" >
          <h1>404</h1>
          <h2>Page Not Found</h2> 
        </div>  
          <h2>Sorry. We can't find a page.</h2>
          <p>The Page you are looking for might have a removed, had its name changed, or its temporarily unavailable.</p>      
          <a href=\"";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 120, $this->source), "html", null, true);
        echo "\" class=\"btn btn-custom\"> Go Home </a>      
      </div>
    </div>          
  </div>    
</section>
 

<div class=\"container-fluid fh5co_footer_bg pb-3\">
    <div class=\"container animate-box\">
        <div class=\"row\">
            <div class=\"col-12 spdp_right py-5\">";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
        echo "</div>
            <div class=\"clearfix\"></div>
            <div class=\"col-12 col-md-4 col-lg-3\">
                <div class=\"footer_sub_about pb-3\"> 
                ";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_about", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"footer_mediya_icon\">

                    ";
        // line 138
        if (($context["linkedin"] ?? null)) {
            // line 139
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 139, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-linkedin\"></i></div>
                    </a></div>
                    ";
        }
        // line 142
        echo " 

                    ";
        // line 144
        if (($context["googleplus"] ?? null)) {
            // line 145
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["googleplus"] ?? null), 145, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-google-plus\"></i></div>
                    </a></div>
                    ";
        }
        // line 149
        echo "
                    ";
        // line 150
        if (($context["twitter"] ?? null)) {
            // line 151
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 151, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-twitter\"></i></div>
                    </a></div>
                    ";
        }
        // line 155
        echo "
                    ";
        // line 156
        if (($context["facebook"] ?? null)) {
            // line 157
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 157, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-facebook\"></i></div>
                    </a></div>
                    ";
        }
        // line 161
        echo "
                </div>
            </div>
            <div class=\"col-12 col-md-3 col-lg-2\">
                <ul class=\"footer_menu\">
                   ";
        // line 166
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_category", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
        echo "
                </ul>
            </div>
            <div class=\"col-12 col-md-5 col-lg-3 position_footer_relative\">
                ";
        // line 170
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_most_viewed_post", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
        echo "
                <div class=\"footer_position_absolute\"><img src=\"";
        // line 171
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["basepath"] ?? null), 171, $this->source), "html", null, true);
        echo "/themes/yg_news/images/footer_sub_tipik.png\" alt=\"img\" class=\"width_footer_sub_img\"/></div>
            </div>
            <div class=\"col-12 col-md-12 col-lg-4 \">
                 ";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last_modified_post", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"row justify-content-center pt-2 pb-4\">
            ";
        // line 178
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_subscribe", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
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
        // line 188
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copy_right_footer_menu", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"gototop js-top\">
    <a href=\"#\" class=\"js-gotop\"><i class=\"fa fa-arrow-up\"></i></a>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/yg_news/templates/layout/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 188,  252 => 178,  245 => 174,  239 => 171,  235 => 170,  228 => 166,  221 => 161,  213 => 157,  211 => 156,  208 => 155,  200 => 151,  198 => 150,  195 => 149,  187 => 145,  185 => 144,  181 => 142,  173 => 139,  171 => 138,  164 => 134,  157 => 130,  144 => 120,  132 => 110,  124 => 104,  110 => 92,  104 => 90,  101 => 89,  98 => 88,  92 => 85,  89 => 84,  86 => 83,  80 => 80,  77 => 79,  75 => 78,  72 => 77,  66 => 75,  63 => 74,  61 => 73,  55 => 70,  44 => 62,  39 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_news/templates/layout/page--404.html.twig", "C:\\xampp\\htdocs\\Food\\themes\\yg_news\\templates\\layout\\page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 73);
        static $filters = array("escape" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
