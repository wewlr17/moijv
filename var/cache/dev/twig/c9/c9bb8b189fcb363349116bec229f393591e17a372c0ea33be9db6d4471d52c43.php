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

/* base.html.twig */
class __TwigTemplate_2904564b65c33aacb4e8527e881256279a7124e1c409f48feade3c6267f1a244 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $macros["__internal_5932d1ce8c2bc121ba790df5c7e23512026cfaea4717f28d43aeeee840342380"] = $this->macros["__internal_5932d1ce8c2bc121ba790df5c7e23512026cfaea4717f28d43aeeee840342380"] = $this->loadTemplate("macros.html.twig", "base.html.twig", 1)->unwrap();
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <!-- Bootstrap core CSS -->
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Custom styles for this template -->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


</head>

<body>

  <!-- Navigation -->
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\">MoiJV</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          ";
        // line 34
        echo twig_call_macro($macros["__internal_5932d1ce8c2bc121ba790df5c7e23512026cfaea4717f28d43aeeee840342380"], "macro_menu_link", ["home", "Accueil"], 34, $context, $this->getSourceContext());
        echo "
          ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "            ";
            echo twig_call_macro($macros["__internal_5932d1ce8c2bc121ba790df5c7e23512026cfaea4717f28d43aeeee840342380"], "macro_menu_link", ["profile", "Profil"], 36, $context, $this->getSourceContext());
            echo "
            ";
            // line 37
            echo twig_call_macro($macros["__internal_5932d1ce8c2bc121ba790df5c7e23512026cfaea4717f28d43aeeee840342380"], "macro_menu_link", ["logout", "Se Deconnecter"], 37, $context, $this->getSourceContext());
            echo "

          ";
        } else {
            // line 40
            echo "            ";
            echo twig_call_macro($macros["__internal_5932d1ce8c2bc121ba790df5c7e23512026cfaea4717f28d43aeeee840342380"], "macro_menu_link", ["login", "Connexion"], 40, $context, $this->getSourceContext());
            echo "
            ";
            // line 41
            echo twig_call_macro($macros["__internal_5932d1ce8c2bc121ba790df5c7e23512026cfaea4717f28d43aeeee840342380"], "macro_menu_link", ["app_register", "Inscription"], 41, $context, $this->getSourceContext());
            echo "

          ";
        }
        // line 44
        echo "
          ";
        // line 52
        echo "        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class=\"container\">

    <div class=\"row\">

      <div class=\"col-lg-3\">

        <h1 class=\"my-4\">MoiJV</h1>
        <div class=\"list-group\">

        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["category_repo"]) || array_key_exists("category_repo", $context) ? $context["category_repo"] : (function () { throw new RuntimeError('Variable "category_repo" does not exist.', 67, $this->source); })()), "findAll", [], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 68
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
        ";
        // line 74
        echo "
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class=\"col-lg-9\">
        ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class=\"py-5 bg-dark\">
    <div class=\"container\">
      <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Moijv | ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 81,  207 => 12,  191 => 101,  187 => 100,  167 => 82,  165 => 81,  156 => 74,  153 => 70,  142 => 68,  138 => 67,  121 => 52,  118 => 44,  112 => 41,  107 => 40,  101 => 37,  96 => 36,  94 => 35,  90 => 34,  71 => 18,  65 => 15,  59 => 12,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% from \"macros.html.twig\" import menu_link %}
<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>{% block title %}Moijv | {%endblock%}</title>

  <!-- Bootstrap core CSS -->
  <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

  <!-- Custom styles for this template -->
  <link href=\"{{ asset('css/shop-homepage.css') }}\" rel=\"stylesheet\">


</head>

<body>

  <!-- Navigation -->
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\">MoiJV</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          {{ menu_link('home', 'Accueil') }}
          {% if app.user %}
            {{ menu_link('profile', 'Profil') }}
            {{ menu_link('logout', 'Se Deconnecter') }}

          {% else %}
            {{ menu_link('login', 'Connexion') }}
            {{ menu_link('app_register', 'Inscription') }}

          {% endif %}

          {# <li class=\"nav-item {% if app.request.get('_route') == 'app_login' %} active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
            Connexion
              {% if app.request.get('_route') == 'app_login' %}<span class=\"sr-only\">(current)</span>{% endif %}
            
            </a>
          </li> #}
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class=\"container\">

    <div class=\"row\">

      <div class=\"col-lg-3\">

        <h1 class=\"my-4\">MoiJV</h1>
        <div class=\"list-group\">

        {% for category in  category_repo.findAll() %}
            <a href=\"{{ path('category', { slug: category.slug} ) }}\" class=\"list-group-item\">{{ category.name }}</a>
        {% endfor %}

        {# {% for category in categories %}
          <a href=\"{{ path('category', { slug: category.slug} ) }}\" class=\"list-group-item\">{{ category.name }}</a>
        {% endfor %} #}

        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class=\"col-lg-9\">
        {% block body %}{% endblock %}
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class=\"py-5 bg-dark\">
    <div class=\"container\">
      <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}\"></script>

</body>

</html>
", "base.html.twig", "/Users/depairegabin/Documents/E-Shop/symphony/moijv/templates/base.html.twig");
    }
}
