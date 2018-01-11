<?php

/* partials/base.html.twig */
class __TwigTemplate_b4cb997e8164542971c69422d01fe298c9ff75da48ef8c3ca6c10c545da80e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "</head>


<body id=\"top\" class=\"";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
  <div class=\"navigasi container-fluid bg-white\">
    <nav class=\"navbar navbar-expand-lg navbar-custom\">
      <a class=\"navbar-brand\" href=\"";
        // line 39
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
        <img class=\"\" src=\"";
        // line 40
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user://media/logo.png");
        echo "\">
        ";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse justify-content-end mr-auto\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav text-right\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#produk\">Product</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#customer\">Customer</a>
              </li>
            </ul>
      </div>
    </nav>
  </div>

  <div class=\"container-fluid about\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-md-6 kiri\">
        <img src=\"";
        // line 64
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user://media/003-packing.svg");
        echo "\" alt=\"\">
      </div>
      <div class=\"col-12 col-md-6 kanan\">
        <p>PT. Visindo Guna Mandiri adalah suatu perusahaan yang bergerak di bidang jasa pengepakan barang / packaging dengan carton box, impraboard, paper pallet dan pallet kayu.</p>
      </div>
    </div>
  </div>
  </div>

  <div class=\"container-fluid vimi\">
    <div class=\"row\">
      <div class=\"col-12 col-md-6 visi\">
        <i class=\"flaticon-aviator\"></i>
        <h4>VISI</h4>
        <p>Menjadikan perusahaan yang selalu mengedepankan kualitas pelayanan baik produk ataupun jasa dan menjadi perusahaan yang dipercayai oleh pelanggannya.</p>
      </div>
      <div class=\"col-12 col-md-6 misi\">
        <i class=\"flaticon-transport\"></i>
        <h4>MISI</h4>
        <p>Memberikan pelayanan terbaik yang bersifat customer statisfaction dan memperhatikan pada safety, quality, cost, delivery serta social.</p>
      </div>
    </div>
  </div>

  <div class=\"container produk\" id=\"produk\">
    <div class=\"judul text-center\">Product</div>
    <div class=\"penjelasan text-center\">Ini merupakan contoh produk yang Kami hasilkan</div>
    <div class=\"row\">
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"";
        // line 93
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user://media/IMG-20171208-WA0003.jpg");
        echo "\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"";
        // line 96
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user://media/IMG-20171208-WA0004.jpg");
        echo "\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"";
        // line 99
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user://media/IMG-20171208-WA0005.jpg");
        echo "\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"";
        // line 102
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user://media/IMG-20171208-WA0006.jpg");
        echo "\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"";
        // line 105
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user://media/IMG-20171208-WA0007.jpg");
        echo "\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"";
        // line 108
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user://media/IMG-20171208-WA0008.jpg");
        echo "\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"";
        // line 111
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user://media/IMG-20171208-WA0009.jpg");
        echo "\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"";
        // line 114
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user://media/IMG-20171208-WA0010.jpg");
        echo "\">
      </div>
    </div>
  </div>

  <div class=\"container-fluid customer\" id=\"customer\">
    <div class=\"container\">
      <div class=\"judul text-center\">Who's using our products?</div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 item\">PT. Fuji Seat Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Alloy Mas Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Pong Codan Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Nittsu Shoji Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Tri Cipta Teknindo</div>
        <div class=\"col-12 col-md-6 item\">PT. Sanko Gonsei</div>
        <div class=\"col-12 col-md-6 item\">PT. Jaeil Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Kartika Naya</div>
        <div class=\"col-12 col-md-6 item\">PT. Hanwa Steel Service Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Multi Pratama Interbuana Indonesia</div>
      </div>
    </div>
  </div>

  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12 col-md-4 alamat\">
          Jl. Raya Setu, Kamp. Rawa Banteng No.62 RT. 24/11<br>
          Kel. Cibuntu, Kec. Cibitung<br>
          Kota Bekasi<br>


        </div>
        <div class=\"col-12 col-md-4 text-center logo\">
          PT. Visindo Guna Mandiri<br>

        </div>
        <div class=\"col-12 col-md-4 kontak\">
          Telp : (021) 29091407<br>
          Fax : (021) 29091407<br>
          pt_visindogunamandiri@yahoo.com
        </div>
      </div>
      <div class=\"row madewithlove\">
        <div class=\"col text-center\">
          Made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://github.com/aulatechno\">AulaTechno</a>
        </div>
      </div>
    </div>
  </footer>


  ";
        // line 167
        $this->displayBlock('javascripts', $context, $blocks);
        // line 171
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />

    <title>
    ";
        // line 9
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array()) == "Pages") || twig_test_empty($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array())))) {
            // line 10
            echo "    ";
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " |
    ";
        } else {
            // line 12
            echo "    ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "title", array());
            echo " - ";
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " |
    ";
        }
        // line 14
        echo "    ";
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "
    </title>

    ";
        // line 17
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 17)->display($context);
        // line 18
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 20
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://node_modules/bootstrap/dist/css/bootstrap.css", 1 => 103), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://node_modules/font-awesome/css/font-awesome.min.css", 1 => 102), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/flaticon/flaticon.css", 1 => 102), "method");
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Zilla+Slab:400,700", 1 => 102), "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/styles.css"), "method");
        // line 30
        echo "    ";
    }

    // line 167
    public function block_javascripts($context, array $blocks = array())
    {
        // line 168
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 169
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://node_modules/bootstrap/dist/js/bootstrap.min.js", 1 => 100), "method");
        // line 170
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 170,  304 => 169,  301 => 168,  298 => 167,  294 => 30,  291 => 29,  288 => 28,  285 => 27,  282 => 26,  279 => 25,  276 => 24,  269 => 31,  267 => 24,  260 => 20,  256 => 19,  253 => 18,  251 => 17,  244 => 14,  236 => 12,  230 => 10,  228 => 9,  223 => 6,  220 => 5,  211 => 171,  209 => 167,  153 => 114,  147 => 111,  141 => 108,  135 => 105,  129 => 102,  123 => 99,  117 => 96,  111 => 93,  79 => 64,  53 => 41,  49 => 40,  45 => 39,  39 => 36,  34 => 33,  32 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />

    <title>
    {% if (page.parent.title == 'Pages') or (page.parent.title is empty) %}
    {{ header.title }} |
    {% else %}
    {{ page.parent.title }} - {{ header.title }} |
    {% endif %}
    {{ site.title }}
    </title>

    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    {% block stylesheets %}
        {% do assets.addCss('theme://node_modules/bootstrap/dist/css/bootstrap.css', 103) %}
        {% do assets.addCss('theme://node_modules/font-awesome/css/font-awesome.min.css', 102) %}
        {% do assets.addCss('theme://assets/flaticon/flaticon.css', 102) %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Zilla+Slab:400,700', 102) %}
        {% do assets.addCss('theme://css/styles.css') %}
    {% endblock %}
    {{ assets.css() }}
{% endblock head %}
</head>


<body id=\"top\" class=\"{{ page.header.body_classes }}\">
  <div class=\"navigasi container-fluid bg-white\">
    <nav class=\"navbar navbar-expand-lg navbar-custom\">
      <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
        <img class=\"\" src=\"{{ url('user://media/logo.png') }}\">
        {{ config.site.title }}
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse justify-content-end mr-auto\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav text-right\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#produk\">Product</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#customer\">Customer</a>
              </li>
            </ul>
      </div>
    </nav>
  </div>

  <div class=\"container-fluid about\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-md-6 kiri\">
        <img src=\"{{ url('user://media/003-packing.svg') }}\" alt=\"\">
      </div>
      <div class=\"col-12 col-md-6 kanan\">
        <p>PT. Visindo Guna Mandiri adalah suatu perusahaan yang bergerak di bidang jasa pengepakan barang / packaging dengan carton box, impraboard, paper pallet dan pallet kayu.</p>
      </div>
    </div>
  </div>
  </div>

  <div class=\"container-fluid vimi\">
    <div class=\"row\">
      <div class=\"col-12 col-md-6 visi\">
        <i class=\"flaticon-aviator\"></i>
        <h4>VISI</h4>
        <p>Menjadikan perusahaan yang selalu mengedepankan kualitas pelayanan baik produk ataupun jasa dan menjadi perusahaan yang dipercayai oleh pelanggannya.</p>
      </div>
      <div class=\"col-12 col-md-6 misi\">
        <i class=\"flaticon-transport\"></i>
        <h4>MISI</h4>
        <p>Memberikan pelayanan terbaik yang bersifat customer statisfaction dan memperhatikan pada safety, quality, cost, delivery serta social.</p>
      </div>
    </div>
  </div>

  <div class=\"container produk\" id=\"produk\">
    <div class=\"judul text-center\">Product</div>
    <div class=\"penjelasan text-center\">Ini merupakan contoh produk yang Kami hasilkan</div>
    <div class=\"row\">
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"{{ url('user://media/IMG-20171208-WA0003.jpg') }}\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"{{ url('user://media/IMG-20171208-WA0004.jpg') }}\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"{{ url('user://media/IMG-20171208-WA0005.jpg') }}\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"{{ url('user://media/IMG-20171208-WA0006.jpg') }}\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"{{ url('user://media/IMG-20171208-WA0007.jpg') }}\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"{{ url('user://media/IMG-20171208-WA0008.jpg') }}\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"{{ url('user://media/IMG-20171208-WA0009.jpg') }}\">
      </div>
      <div class=\"col-6 col-md-3 item\">
        <img class=\"w-100\" src=\"{{ url('user://media/IMG-20171208-WA0010.jpg') }}\">
      </div>
    </div>
  </div>

  <div class=\"container-fluid customer\" id=\"customer\">
    <div class=\"container\">
      <div class=\"judul text-center\">Who's using our products?</div>

      <div class=\"row\">
        <div class=\"col-12 col-md-6 item\">PT. Fuji Seat Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Alloy Mas Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Pong Codan Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Nittsu Shoji Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Tri Cipta Teknindo</div>
        <div class=\"col-12 col-md-6 item\">PT. Sanko Gonsei</div>
        <div class=\"col-12 col-md-6 item\">PT. Jaeil Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Kartika Naya</div>
        <div class=\"col-12 col-md-6 item\">PT. Hanwa Steel Service Indonesia</div>
        <div class=\"col-12 col-md-6 item\">PT. Multi Pratama Interbuana Indonesia</div>
      </div>
    </div>
  </div>

  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12 col-md-4 alamat\">
          Jl. Raya Setu, Kamp. Rawa Banteng No.62 RT. 24/11<br>
          Kel. Cibuntu, Kec. Cibitung<br>
          Kota Bekasi<br>


        </div>
        <div class=\"col-12 col-md-4 text-center logo\">
          PT. Visindo Guna Mandiri<br>

        </div>
        <div class=\"col-12 col-md-4 kontak\">
          Telp : (021) 29091407<br>
          Fax : (021) 29091407<br>
          pt_visindogunamandiri@yahoo.com
        </div>
      </div>
      <div class=\"row madewithlove\">
        <div class=\"col text-center\">
          Made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://github.com/aulatechno\">AulaTechno</a>
        </div>
      </div>
    </div>
  </footer>


  {% block javascripts %}
      {% do assets.addJs('jquery', 101) %}
      {% do assets.addJs('theme://node_modules/bootstrap/dist/js/bootstrap.min.js', 100) %}
  {% endblock %}
  {{ assets.js() }}
</body>
</html>
", "partials/base.html.twig", "D:\\xampp\\htdocs\\grav\\user\\themes\\visindo\\templates\\partials\\base.html.twig");
    }
}
