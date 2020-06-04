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

/* portfolio/cv.html.twig */
class __TwigTemplate_7b02073a6b91ee064f4e2a8ddf8f130d56c3722fdc91c46bcb16219998e5f405 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/cv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/cv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/cv.html.twig", 1);
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

        echo "CV";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <h1>Bienvenue sur la page de mon CV</h1>

  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus nobis possimus rerum aliquam illum
    consectetur, tenetur totam odio excepturi numquam aliquid omnis obcaecati optio blanditiis cum accusamus doloremque
    dolores unde voluptatem quia adipisci repellat fuga culpa! Eaque enim similique dignissimos!</p>
  <p>Nulla molestiae ea illum, voluptatibus obcaecati velit ab et. Nemo odit voluptate saepe, iusto quaerat tenetur
    placeat sunt, voluptates quas dolor in ipsum, pariatur incidunt excepturi. Est autem voluptates non, perspiciatis
    beatae ipsum at cumque omnis sequi qui corrupti aut.</p>

  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quasi quos aliquam nemo consectetur ipsa ut
    dicta exercitationem perspiciatis vel, necessitatibus excepturi obcaecati amet repudiandae maxime error nostrum
    doloribus impedit animi minus non optio iure eligendi libero? Sed libero eligendi repellat saepe distinctio? Autem
    excepturi nulla quod dolorem iure assumenda!</p>
  <p>Quibusdam tempora aut, praesentium laborum dolore possimus culpa soluta voluptatum provident blanditiis nostrum!
    Quas, amet esse. Qui eaque autem quo sint animi exercitationem laborum distinctio commodi perferendis sunt
    consequuntur earum, maxime aspernatur rem dicta quas optio nam cupiditate. Numquam consectetur commodi doloremque
    exercitationem necessitatibus quis quam asperiores ipsa similique assumenda?</p>
  <p>Molestiae ipsa non quaerat hic dolore provident pariatur magnam, itaque perspiciatis voluptate quisquam architecto
    tempora quo officiis eos rerum adipisci, dolor numquam. Doloribus asperiores quasi amet ea quo illo doloremque
    sapiente quas velit facilis unde, maxime repudiandae eveniet eius nesciunt vitae sunt similique, inventore quod nemo
    at! Corrupti, perferendis sunt!</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "portfolio/cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}CV{% endblock %}

{% block body %}
  <h1>Bienvenue sur la page de mon CV</h1>

  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus nobis possimus rerum aliquam illum
    consectetur, tenetur totam odio excepturi numquam aliquid omnis obcaecati optio blanditiis cum accusamus doloremque
    dolores unde voluptatem quia adipisci repellat fuga culpa! Eaque enim similique dignissimos!</p>
  <p>Nulla molestiae ea illum, voluptatibus obcaecati velit ab et. Nemo odit voluptate saepe, iusto quaerat tenetur
    placeat sunt, voluptates quas dolor in ipsum, pariatur incidunt excepturi. Est autem voluptates non, perspiciatis
    beatae ipsum at cumque omnis sequi qui corrupti aut.</p>

  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quasi quos aliquam nemo consectetur ipsa ut
    dicta exercitationem perspiciatis vel, necessitatibus excepturi obcaecati amet repudiandae maxime error nostrum
    doloribus impedit animi minus non optio iure eligendi libero? Sed libero eligendi repellat saepe distinctio? Autem
    excepturi nulla quod dolorem iure assumenda!</p>
  <p>Quibusdam tempora aut, praesentium laborum dolore possimus culpa soluta voluptatum provident blanditiis nostrum!
    Quas, amet esse. Qui eaque autem quo sint animi exercitationem laborum distinctio commodi perferendis sunt
    consequuntur earum, maxime aspernatur rem dicta quas optio nam cupiditate. Numquam consectetur commodi doloremque
    exercitationem necessitatibus quis quam asperiores ipsa similique assumenda?</p>
  <p>Molestiae ipsa non quaerat hic dolore provident pariatur magnam, itaque perspiciatis voluptate quisquam architecto
    tempora quo officiis eos rerum adipisci, dolor numquam. Doloribus asperiores quasi amet ea quo illo doloremque
    sapiente quas velit facilis unde, maxime repudiandae eveniet eius nesciunt vitae sunt similique, inventore quod nemo
    at! Corrupti, perferendis sunt!</p>

{% endblock %}", "portfolio/cv.html.twig", "C:\\Users\\s1mply\\code\\dylan\\templates\\portfolio\\cv.html.twig");
    }
}
