<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/custom/centro/templates/page.html.twig */
class __TwigTemplate_e892be4e62c56eff894e70902ed7f3ef6e7d50e805ecdd2bc1ef7fedd056b4d4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 62];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Making tabs for information</title>
    
    <link href=\"https://fonts.googleapis.com/css2?family=Lato&family=Rokkitt&display=swap\" rel=\"stylesheet\">
</head>
<body>
<header>
    <div class=\"row grid-container-col-3\">
            <div class=\"full-bleed\">
                <h1>Mock Front-page</h1>
        </div>        
    </div>    
</header>
    <main >
       
        <section class = \"main-resources full-bleed u-margin-top\">
                <div class=\"row grid-container-col-3 grid-container-col-3--resize  \">
                        <div class=\"point__description \">     
                                <div class=\"point__description__horizontal\">
                                        <svg class = \"point__icon svg-icon\" id=\"Capa_1\" enable-background=\"new 0 0 512 512\" height=\"512\" viewBox=\"0 0 512 512\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><g><path d=\"m63.623 367.312h-62.815v144.688h148.689v-116.926h-68.752zm55.971 114.786h-88.884v-84.883h16.222l17.123 27.761h55.539z\"/><path d=\"m244.47 367.312h-62.815v144.688h148.689v-116.926h-68.751zm55.972 114.786h-88.884v-84.883h16.222l17.123 27.761h55.539z\"/><path d=\"m442.44 395.074-17.122-27.761h-62.815v144.687h148.689v-116.926zm38.85 87.024h-88.884v-84.883h16.222l17.122 27.761h55.54z\"/><path d=\"m90.104 292.958h150.945v42.267h29.902v-42.267h150.945v42.267h29.902v-72.169h-180.847v-64.555h80.049c31.767 0 57.612-25.926 57.612-57.793 0-26.955-18.608-49.646-43.653-55.903-4.476-22.152-24.093-38.882-47.545-38.882-1.967 0-3.917.116-5.842.347-4.829-26.287-27.911-46.27-55.572-46.27s-50.744 19.983-55.572 46.269c-1.925-.23-3.876-.347-5.843-.347-23.452 0-43.069 16.73-47.544 38.882-25.044 6.256-43.653 28.948-43.653 55.903 0 31.867 25.844 57.793 57.612 57.793h80.049v64.555h-180.848v72.169h29.902v-42.266zm70.896-124.36c-15.279 0-27.709-12.511-27.709-27.891 0-15.279 12.43-27.71 27.709-27.71h15.971c-1.22-3.119-1.897-6.511-1.897-10.063 0-15.266 12.375-27.641 27.641-27.641 12.773 0 23.517 8.666 26.687 20.438v-39.232c0-14.665 11.932-26.596 26.597-26.596s26.597 11.931 26.597 26.596v39.233c3.17-11.772 13.914-20.438 26.687-20.438 15.266 0 27.642 12.375 27.642 27.641 0 3.552-.677 6.943-1.897 10.063h15.972c15.279 0 27.709 12.431 27.709 27.71 0 15.379-12.43 27.891-27.709 27.891h-190z\"/></g></svg>
                                        <p class = \"point__title\"> Archival</p>                                                                                 
                                </div>                                             
                                        <p class = \"point__side-paragraph\">Puerto Rican Archival Data</p>                                                                        
                                        <div class=\"btn btn--hunter point__side-paragraph u-margin-top-s\"><a href=\"#\">Learn More</a></div>
                        </div>
                        
                        <div class=\"point-content\">
                                        <p class = \"point-content__title\">
                                        Collections
                                        </p>
                                        <p>
                                        The Centro Library and Archives is a <span class = \"gold\"> treasured  </span>place where researchers, academics, teachers, students, genealogists, filmmakers, and the community at large find primary (historical documents) and secondary sources about the history and culture of the Puerto Rican diaspora.  The Digital Collections provide access to photographs, documents, artifacts, art, maps, oral histories, moving image and audio clips, and other digitized or born digital material pertaining to stateside Puerto Ricans.
                                        </p>
                        </div>
                </div>        
                
        </section>

        <!-- <div class=\"row extend-connect\"></div>                                                             -->
        <section class=\"main-resources--data\">
                <div class=\"row grid-container-col-3 \">
                        <div class=\"point__description \">     
                                <div class=\"point__description__horizontal\">
<svg class = \"svg-icon\" id=\"Layer_3\" enable-background=\"new 0 0 64 64\" height=\"512\" viewBox=\"0 0 64 64\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><g><path d=\"m62 7c.553 0 1-.448 1-1v-4c0-.552-.447-1-1-1h-48c-.553 0-1 .448-1 1v4c0 .552.447 1 1 1h1v16.525c-3.49 1.24-6 4.566-6 8.475 0 3.127 1.604 5.884 4.031 7.497-.016.167-.031.335-.031.503h-3c-4.963 0-9 4.038-9 9v13c0 .552.447 1 1 1h27c.553 0 1-.448 1-1v-7.515c0-1.336.521-2.592 1.465-3.536l13.95-13.949h16.585c.553 0 1-.448 1-1v-4c0-.552-.447-1-1-1h-1v-24zm-47-4h46v2h-46zm3 22c.53 0 1.045.064 1.542.177-1.688 1.782-4.066 2.823-6.542 2.823h-.736c1.266-1.811 3.364-3 5.736-3zm18.586 8-2 2h-8.111c.227-.638.389-1.306.466-2zm7.672 2.329-.258.257-3.586-3.586.258-.258c.479-.478 1.116-.742 1.793-.742 1.397 0 2.535 1.138 2.535 2.536 0 .677-.264 1.314-.742 1.793zm-26.258 5.671c1.034 0 2.024-.184 2.95-.507-.237 1.419-1.465 2.507-2.95 2.507s-2.713-1.088-2.95-2.507c.926.323 1.916.507 2.95.507zm4.969-1.503c.992-.659 1.846-1.509 2.51-2.497h7.108l-1.535 1.535c-.947.945-2.202 1.465-3.537 1.465h-4.515c0-.168-.015-.336-.031-.503zm-1.465-13.547c1.161.675 2.11 1.672 2.725 2.871-1.376-.279-2.676-.884-3.784-1.751.377-.347.731-.72 1.059-1.12zm-10.504 6.05c0-.695.105-1.366.295-2h1.705c2.074 0 4.088-.606 5.817-1.683 1.709 1.472 3.852 2.401 6.095 2.628.052.345.088.695.088 1.055 0 3.86-3.141 7-7 7s-7-3.14-7-7zm19.051 17.535c-1.322 1.322-2.051 3.08-2.051 4.95v6.515h-17v-11h-2v11h-6v-12c0-3.86 3.141-7 7-7h3.424c.774 1.763 2.531 3 4.576 3s3.802-1.237 4.576-3h4.938c1.869 0 3.627-.728 4.95-2.05l6.536-6.536 3.586 3.586zm30.949-14.535h-14.26c.16-.467.26-.956.26-1.464 0-.183-.033-.358-.054-.536h14.054zm-2-4h-12.777c-.816-1.206-2.196-2-3.758-2-1.211 0-2.351.472-3.207 1.329l-.672.671h-11.645c-.499-4.493-4.316-8-8.941-8-.338 0-.671.022-1 .059v-16.059h42z\"/><path d=\"m28 23c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7zm0-2c-1.455 0-2.756-.636-3.67-1.632l3.947-2.368h4.622c-.465 2.279-2.485 4-4.899 4zm4.899-6h-3.899v-3.899c1.956.399 3.5 1.943 3.899 3.899zm-5.899-3.899v4.333l-3.697 2.219c-.184-.521-.303-1.071-.303-1.653 0-2.414 1.721-4.434 4-4.899z\"/><path d=\"m40 24h16c.553 0 1-.448 1-1v-4c0-.552-.447-1-1-1h-1v-3h-2v3h-2v-5h-2v5h-2v-7h-2v7h-2v-9h-2v9h-1c-.553 0-1 .448-1 1v4c0 .552.447 1 1 1zm1-4h14v2h-14z\"/><path d=\"m47 26h10v2h-10z\"/><path d=\"m28 26h7v2h-7z\"/><path d=\"m26 47h-6c-.553 0-1 .448-1 1v3c0 2.206 1.794 4 4 4s4-1.794 4-4v-3c0-.552-.447-1-1-1zm-1 4c0 1.103-.897 2-2 2s-2-.897-2-2v-2h4z\"/></g></svg>
                                                                    
                                        <p class = \"point__title\"> Data Research</p>                                                                                 
                                </div>                                             
                                        <p class = \"point__side-paragraph\">Our Research tools</p>                                                                        
                                        <div class=\"btn btn--hunter point__side-paragraph u-margin-top-s\"><a href=\"#\">Learn More</a></div>
                        </div>
                        
                        <div class=\"point-content\">
                                <ul class=\"main-tabs\">
                                        <li class=\"main-tabs__item\">
                                                <div class=\"trigger-tab tab__header tab__header--dark\">
                                                        <p>Item one</p>
                                                        <img class = \" tab__icon tab__icon--light\" src=\"";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/triangle.svg\" alt=\"triangle\">
                                                </div>
                                            <ul class=\"info-container\">
                                                    <li class=\"item__information\">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </li>
                                                </ul>
                                        </li>
                                        <li class=\"main-tabs__item\">
                                                <div class=\"trigger-tab tab__header tab__header--dark\">
                                                        <p>Item two</p>
                                                        <img class = \" tab__icon tab__icon--light \" src=\"";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/triangle.svg\" alt=\"triangle\">
                                                </div>
                                                
                                                <ul class=\"info-container\">
                                                    <li class=\"item__information\">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </li>
                                                </ul>
                                        </li>
                                        <li class=\"main-tabs__item\">
                                                <div class=\"trigger-tab tab__header tab__header--dark\">
                                                        <p>Item three</p>
                                                        <img class = \" tab__icon tab__icon--light\" src=\"";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/triangle.svg\" alt=\"triangle\">
                                                </div>
                                                <ul class=\"info-container\">
                                                    <li class=\"item__information\">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </li>
                                                </ul>
                                        </li>
                                        <li class=\"main-tabs__item\">
                                                <div class=\"trigger-tab tab__header tab__header--dark\">
                                                        <p>Item four</p>
                                                        <img class = \" tab__icon tab__icon--light\" src=\"";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/triangle.svg\" alt=\"triangle\">
                                                </div>
                                                <ul class=\"info-container\">
                                                    <li class=\"item__information\">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </li>
                                                </ul>
                                        </li>
                                        <li class=\"main-tabs__item\">
                                                <div class=\"trigger-tab tab__header tab__header--dark\">
                                                        <p>Item one</p>
                                                        <img class = \" tab__icon tab__icon--light\" src=\"";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/triangle.svg\" alt=\"triangle\">
                                                </div>
                                                <ul class=\"info-container\">
                                                    <li class=\"item__information\">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </li>
                                                </ul>
                                        </li>
                                    </ul>                                     
                        </div>
                </div>                                    
        </section>
        <section class=\"extra-resources full-bleed\">
                <h1 class=\"title \">
                More Resources 
                </h1>
                <div class=\"row grid-container-col-3\">
                        <div class=\"point__description point-connect\">     
                                <div class=\"point__description__horizontal\">
                                        <img class = \"point__icon svg-icon\" src=\"";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/book.svg\" alt=\"icon\">                              
                                        <p class = \"point__title\"> Library</p>                                                 
                                </div>     
                                        <p class = \"point__side-paragraph\">Our Physical Library</p>
                                        <div class=\"point\"></div>
                        </div>
                        
                        <div class=\"point-content\">
                                        <p>
                                        Centro Library provides access to over 14,000 books, 2,550 dissertations and masters theses, over 500 titles of historical newspapers and periodicals on 3,700 reels of microfilm, 600 audio recordings, 514 videos and DVD’s containing information by and about Puerto Ricans, and 21.3 linear feet of Vertical Files encompassing a variety of subjects.                                                        
                                        </p>
                                        <p>
                                        A major strength of the Library collection is the history of Puerto Ricans in the United States, particularly in New York and the Northeast region, and also in all the areas of the humanities, the social sciences and the arts. The library, although dedicated to the Puerto Rican experience, also acquires selected materials related to other Latino communities in the United States.  
                                        </p>
                        </div>
                </div>                                    
                <div class=\"row point-connect extend-connect\">
                        
                </div>
                <div class=\"row grid-container-col-3 grid-container-col-3--resize \">
                        <div class=\"point__description point-connect \">     
                                <div class=\"point__description__horizontal\">
                                        <img class = \"point__icon svg-icon\" src=\"";
        // line 148
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/certificate.svg\" alt=\"icon\">                              
                                        <p class = \"point__title\"> Education</p>                                                 
                                </div>     
                                        <p class = \"point__side-paragraph\">Online/distance learning</p>
                                        <div class=\"point\"></div>
                        </div>
                        
                        <div class=\"point-content\">
                                        <p>
                                                Centro’s education program focuses on the development of pedagogies (distance learning, contextual learning, group and project-based learning) and classroom support products (curriculum guides, readings, multi-media materials, DVD’s/videos & study guides, professional conferences and training, posters, crafts) that foster teaching and learning about stateside Puerto Ricans.
                                        </p>                                        
                        </div>
                </div>  
                <div class=\"row point-connect extend-connect\">  
                        
                </div>                                  
                <div class=\"row grid-container-col-3 point-connect--end grid-container-col-3--resize\">
                        <div class=\"point__description\">     
                                <div class=\"point__description__horizontal\">
                                        <img class = \"point__icon svg-icon\" src=\"";
        // line 167
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/edit.svg\" alt=\"icon\">                              
                                        <p class = \"point__title\"> Publications</p>                                                 
                                </div>     
                                        <p class = \"point__side-paragraph\">Latest: Spring 2020</p>
                                        <div class=\"point\"></div>
                        </div>
                        
                        <div class=\"point-content\">
                                        <img class = \"point-content__img\" src=\"";
        // line 175
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/front-cover.png\" alt=\"publication2020cover\">
                        </div>
                </div>                                    
        </section>
    </main>

    <footer style = \"padding-left: 20px;\">
        <div class=\"row grid-container-col-3\">
                <div class=\"full-bleed\">
                        <h1>An example.</h1>
                </div>                
        </div>
        
    </footer>
    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/custom/centro/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 175,  244 => 167,  222 => 148,  197 => 126,  175 => 107,  161 => 96,  147 => 85,  132 => 73,  118 => 62,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/custom/centro/templates/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/drupal8/themes/contrib/custom/centro/templates/page.html.twig");
    }
}
