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

/* portfolio/index.html.twig */
class __TwigTemplate_3fe6d55149ee219b91886ea0da2bb722d63fb7cc25494b8507a0e71c5aa44e5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<!-- Banière -->
\t<section class=\"container-fluid banner\">
\t\t<div class=\"ban\">
\t\t\t<img src=\"img/banner.jpg\" alt=\"\">
\t\t</div>
\t\t<div class=\"inner-banner\">
\t\t\t<h1 class=\"text-banner\">Bienvenue sur mon portfolio</h1>
\t\t</div>
\t</section>
\t<!-- Banière Fin -->

\t<!-- à propos -->

\t<section class=\"container-fluid about\">
\t\t<h2 id=\"center\">À propos de moi</h2>
\t\t<hr class=\"separator apm\">
\t\t<div class=\"container inner-about\">
\t\t\t<h2 id=\"projet\" class=\"souligner\">Mon projet professionel</h2>
\t\t\t<div class=\"row\">

\t\t\t\t<article class=\"col-sm-4 col-lg-4 col-xs-12 col-sm-12 mpp\">

\t\t\t\t\t<h3>Bachelor Responsable de Projet Informatique</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>Cette formation me formera à la conduite de projets en technologies des systèmes et réseaux, bases de données, outils et langages de développement,
\t\t\t\t\tElle couvre les principaux domaines de l'informatique, réseaux et conduite de projets me permettant d'assurer la production, 
\t\t\t\t\tl'exploitation et la maintenance des moyens informatiques.</p>
\t\t\t\t</article>
\t\t\t</div>
\t\t\t<h2 id=\"parcours\" class=\"souligner\">Mon parcours</h2>
\t\t\t<div class=\"row\">
\t\t\t\t<article class=\"col-sm-4 col-lg-4 col-xs-12 col-sm-12 sio\">

\t\t\t\t\t<h3>BTS SIO</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>BTS - Services Informatique aux Organisations.
            Option SLAM Solutions Logiciels et Applications Métiers.
\t\t\t\t\t\tAu sein de l'institut Limayrac à TOULOUSE</p>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>-2019/2021-</p>
\t\t\t\t</article>
\t\t\t\t<article class=\"col-sm-4 col-lg-4 col-xs-12 col-sm-12 sti\">

\t\t\t\t\t<h3>BAC STI2D</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>STI2D - Science Technologique de l’Industrie et du Développement Durable.
\t\t\t\t\t  Option SIN Système d'Information et Numérique.
\t\t\t\t\t  Au sein du Lycée Gaston Monnerville à KOUROU</p>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>- 2017/2019 -</p>
\t\t\t\t</article>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- à propos Fin -->


\t<!-- footer/contact -->
\t<footer class=\"container-fluid footer\">
\t\t<h2 id=\"center\" class=\"contact\">Me contacter</h2>
\t\t<hr class=\"separator mc\">
\t\t<div class=\"container contfoot\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<h3 class=\"contact\">Contactez moi !</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<address>
\t\t\t\t\t\t<strong class=\"contact\">Email:</strong>
\t\t\t\t\t\t<p class=\"contact\">
\t\t\t\t\t\t\t<a href=\"mailto:#\">
\t\t\t\t\t\t\t\tdylan.goult@limayrac.fr</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<strong class=\"contact\">Phone:</strong>
\t\t\t\t\t\t<p class=\"contact\">07 85 58 53 03</p>
\t\t\t\t\t</address>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-8 contact-form\">
\t\t\t\t\t<form id=\"contact\" method=\"post\" class=\"form\" role=\"form\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-6 col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Nom\" type=\"text\" required/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-6 col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\" type=\"email\" required/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"Message\" rows=\"5\"></textarea>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 form-group\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary pull-right\" type=\"submit\">Envoyer</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    <div class=\"row\">
    <a class=\"source\" href=\"http://www.freepik.com\">Images Designed by natalka_dmitrova / Freepik</a>
    </div>
\t\t
\t</footer>
\t<!-- footer/contact Fin -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "portfolio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Portfolio
{% endblock %}

{% block body %}
\t<!-- Banière -->
\t<section class=\"container-fluid banner\">
\t\t<div class=\"ban\">
\t\t\t<img src=\"img/banner.jpg\" alt=\"\">
\t\t</div>
\t\t<div class=\"inner-banner\">
\t\t\t<h1 class=\"text-banner\">Bienvenue sur mon portfolio</h1>
\t\t</div>
\t</section>
\t<!-- Banière Fin -->

\t<!-- à propos -->

\t<section class=\"container-fluid about\">
\t\t<h2 id=\"center\">À propos de moi</h2>
\t\t<hr class=\"separator apm\">
\t\t<div class=\"container inner-about\">
\t\t\t<h2 id=\"projet\" class=\"souligner\">Mon projet professionel</h2>
\t\t\t<div class=\"row\">

\t\t\t\t<article class=\"col-sm-4 col-lg-4 col-xs-12 col-sm-12 mpp\">

\t\t\t\t\t<h3>Bachelor Responsable de Projet Informatique</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>Cette formation me formera à la conduite de projets en technologies des systèmes et réseaux, bases de données, outils et langages de développement,
\t\t\t\t\tElle couvre les principaux domaines de l'informatique, réseaux et conduite de projets me permettant d'assurer la production, 
\t\t\t\t\tl'exploitation et la maintenance des moyens informatiques.</p>
\t\t\t\t</article>
\t\t\t</div>
\t\t\t<h2 id=\"parcours\" class=\"souligner\">Mon parcours</h2>
\t\t\t<div class=\"row\">
\t\t\t\t<article class=\"col-sm-4 col-lg-4 col-xs-12 col-sm-12 sio\">

\t\t\t\t\t<h3>BTS SIO</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>BTS - Services Informatique aux Organisations.
            Option SLAM Solutions Logiciels et Applications Métiers.
\t\t\t\t\t\tAu sein de l'institut Limayrac à TOULOUSE</p>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>-2019/2021-</p>
\t\t\t\t</article>
\t\t\t\t<article class=\"col-sm-4 col-lg-4 col-xs-12 col-sm-12 sti\">

\t\t\t\t\t<h3>BAC STI2D</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>STI2D - Science Technologique de l’Industrie et du Développement Durable.
\t\t\t\t\t  Option SIN Système d'Information et Numérique.
\t\t\t\t\t  Au sein du Lycée Gaston Monnerville à KOUROU</p>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>- 2017/2019 -</p>
\t\t\t\t</article>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- à propos Fin -->


\t<!-- footer/contact -->
\t<footer class=\"container-fluid footer\">
\t\t<h2 id=\"center\" class=\"contact\">Me contacter</h2>
\t\t<hr class=\"separator mc\">
\t\t<div class=\"container contfoot\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<h3 class=\"contact\">Contactez moi !</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<address>
\t\t\t\t\t\t<strong class=\"contact\">Email:</strong>
\t\t\t\t\t\t<p class=\"contact\">
\t\t\t\t\t\t\t<a href=\"mailto:#\">
\t\t\t\t\t\t\t\tdylan.goult@limayrac.fr</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<strong class=\"contact\">Phone:</strong>
\t\t\t\t\t\t<p class=\"contact\">07 85 58 53 03</p>
\t\t\t\t\t</address>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-8 contact-form\">
\t\t\t\t\t<form id=\"contact\" method=\"post\" class=\"form\" role=\"form\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-6 col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Nom\" type=\"text\" required/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-6 col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\" type=\"email\" required/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"Message\" rows=\"5\"></textarea>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 form-group\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary pull-right\" type=\"submit\">Envoyer</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    <div class=\"row\">
    <a class=\"source\" href=\"http://www.freepik.com\">Images Designed by natalka_dmitrova / Freepik</a>
    </div>
\t\t
\t</footer>
\t<!-- footer/contact Fin -->


{% endblock %}
", "portfolio/index.html.twig", "C:\\Users\\s1mply\\code\\dylan\\templates\\portfolio\\index.html.twig");
    }
}
