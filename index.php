<?php
    ob_start('ob_gzhandler');
$cssmin = '<style type="text/css" media="all">@font-face{font-family:FMSymb;src:url(fonts/FMSymb.ttf);}*{margin:0;padding:0;}html{font-family:Cursive, Arial;font-size:medium;color:#FFF;background-color:#000;background-image:linear-gradient(transparent50%,rgba(255,255,255,.03) 50% rgba(255,255,255,.03)), linear-gradient(0deg,transparent50%,rgba(255,255,255,.03) 50% rgba(255,255,255,.03));-webkit-background-size:10px 10px;-moz-background-size:10px 10px;background-size:10px 10px;}body{min-width:340px;width:100%;margin:auto;}header{width:80%;margin:1% auto;}nav{text-align:center;}nav ul{list-style:none;padding:0;}nav ul li{text-align:center;display:inline-block;height:20%;min-width:116px;width:20%;border:dotted 2px grey;margin:1% 2.5% 0;padding:1%;}nav ul li:hover{border:solid 2px Orange;}nav ul li a{text-decoration:none;}nav ul li svg{height:100%;width:100%;}section{float:right;min-width:330px;width:70%;top:0;text-align:justify;display:none;margin:0 auto;padding:0 auto;}section:target{display:block;}section article p{margin:5% 2%;}.NosPious .slider{width:100%;text-align:left;}.slider img{opacity:1;width:100px;margin:0 2.5%;}.slider img.M{border:3px solid #009;}.slider img.F{border:3px solid #900;}.slider a{opacity:0.6;}.slider a:hover{opacity:1;}.Diapo{width:320px;height:173px;overflow:hidden;float:left;box-shadow:0 0 10px 1px rgba(0,0,0,0.35);-webkit-box-shadow:0 0 10px 1px rgba(0,0,0,0.35);-moz-box-shadow:0 0 10px 1px rgba(0,0,0,0.35);margin:1%;}.Diapo ul{width:780px;style:none;}.Diapo li{position:relative;display:block;width:30px;float:left;border-left:1px solid #888;transition:all .5s;-webkit-transition:all .5s;-moz-transition:all .5s;}.Diapo ul:hover li{width:30px;}.Diapo .ImageTitle{background:rgba(0,0,0,0.5);position:absolute;left:0;bottom:0;width:260px;}.Diapo .ImageTitle a{display:block;color:#fff;text-decoration:none;padding:1%;}.Description{float:left;min-width:160px;width:30%;margin:5px;}h2.Name{margin-left:25%;}.M{color:blue;}.F{color:#FFC0CB;}h2 .FMSymb{font-family:FMSymb;}.Description ul{width:160px;list-style-type:none;margin:0 auto;}.Description span.Feature{font-size:small;font-family:sans-serif;text-decoration:underline;}.Description a.Lord{font-family:sans-serif;font-size:medium;}.Temper{min-width:310px;width:90%;float:left;margin:5px;}hr{margin:1% 0;}footer{width:100%;display:block;text-align:center;margin:1% 0;}footer li{display:inline-block;width:19%;}header img,nav ul li h2,footer ul{width:100%;}.Diapo li:last-of-type,.Diapo ul li:hover{width:260px;}</style>';
$css = "<link rel='stylesheet' href='style.css' type='text/css' media='all'/>";
    // <link rel='stylesheet' href='styleSmallScreen.css' type='text/css' media='(max-width: 1000px)'/>";
    header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">

        <meta name="description" content="Portfolio d'un étudiant ingénieur IMAC. Programmation, développement, conception, rien ne lui fait peur." />
        <meta name="author" content="Guillaume Albespy" />

        <link rel="icon" type="image/gif" href="images/ico.gif " />
        
        <?php
            echo (1) ? $css : $cssmin; 
        ?>

        <title>Guillaume Albespy | Ingénieur IMAC</title>
    </head>
    
    <body>
        <header>
            <a href="#Accueil">
                <div id="photo">
                    <img src="photos/GuillaumeAlbespy.jpg" alt="Photo de Guillaume Albespy"/>
                    <p>Albespy Guillaume</p>
                </div>
            </a>

            <a href="#MeContacter">

                <div id="insert">

                    <ul id="contact">

                        <li> guillaume(a)albespy.fr </li>

                        <li> 06 65 39 40 35 </li>

                        <li> 22, rue Hector Berlioz </li>

                        <li> 77270 Villeparisis </li>

                    </ul>

                    <ul id="complement">

                        <li> Né le 10 mars 1988 </li>

                        <li> Véhiculé </li>

                    </ul>

                </div>

            </a>
            <a href="#Accueil">
                <div id="entitled">
                    <h1> Actuellement en <strong>stage</strong> chez <strong>Neko entertainment</strong></h1>
                </div>
            </a>
        </header>

        <div class="clear"></div>
        
    <!-- Start: Mon parcours -->
        <section id="MonParcours" >
            <h2>Mon parcours</h2>

            <h3><!-- <a href="#Formation"> -->Formation<!-- </a> --></h3>
            <article id="Formation">
                <ul>
                    <li> 
                        <p>Ecole d'<strong>ingénieurs <a href="HTTP://www.ingenieur-imac.fr" target="_blank"><abbr title="Image Multimédia Audiovisuelle Communication">IMAC</abbr></a></strong></p>
                        <cite>2010 à 2013 - Université Paris-Est (<abbr title="Université de Marne La Vallée">UMLV</abbr>), site de Champs-sur-Marne.</cite>
                    </li>
                    <li> 
                        <p><strong><abbr title="Diplôme Universitaire de Technologie">DUT</abbr> <abbr title="Services et Réseaux de Communication">SRC</abbr></strong> en alternance au <abbr title="Centre de Formation d'Apprentis">CFA</abbr> Descartes</p>
                        <cite>2008 à 2010 - Université Paris-Est (<abbr title="Université de Marne La Vallée">UMLV</abbr>), site de Champs-sur-Marne.</cite>
                    </li>
                    <li> 
                        <p><abbr title="Diplôme Universitaire de Technologie">DUT</abbr> <abbr title="Gestion des Entreprises et des Administrations">GEA</abbr> en continue à l'<abbr title="Institut universitaire de technologie">IUT</abbr> de Meaux</p>
                        <cite>2006 à 2008 - Université Paris-Est (<abbr title="Université de Marne La Vallée">UMLV</abbr>), site de Meaux.</cite>
                    </li>
                    <li> 
                        <p>Baccalauréat Scientifique option <abbr title="Sciences de la vie et de la Terre">SVT</abbr> et spécialité mathématiques</p>
                        <cite>2006 - Lycée Fénelon, Vaujours.</cite>
                    </li>
                </ul>
            </article>
            
            <h3><!-- <a href="#Expérience"> -->Expérience<!-- </a> --></h3>
            <article id="Expérience">
                <ul>
                    <li> 
                        <p>Stage de <strong>développeur</strong> <abbr title="Hypertext Preprocessor">php</abbr>, jquery et <abbr title="ActionScript 3">as3</abbr></p>
                        <cite>2012 (4 mois) - <a href="http://e-volution.fr/">E-volution</a>, à Paris.</cite>
                    </li>
                    <li> 
                        <p><strong>Webmaster</strong> d'une mairie en alternance</p>
                        <cite>2009 à 2010 - Mairie de Compans.</cite>
                    </li>
                    <li> 
                        <p><abbr title="Technicien d’Accueil Client">TAC</abbr> au service Haut débit en alternance</p>
                        <cite>2008 à 2009 - Orange, site de Viry Châtillon.</cite>
                    </li>
                    <li> 
                        <p>Stage d'assistant comptable dans un cabinet d'expertise comptable</p>
                        <cite>2008 (2 mois) - Cabinet <abbr title="CABINET CHRISTINE LEGER">CACL</abbr>, à Enghien-les-Bains.</cite>
                    </li>
                    <li> 
                        <p>Stage d'assistant de la responsable administrative et financière d'une société de déménagement</p> 
                        <cite>2007 (1 mois) - Partner, à Tremblay-en-France.</cite>
                    </li>
                    <li> 
                        <p>Déménageur</p> 
                        <cite>2007 à 2009 (weekend et vacances) - Partner, à Tremblay-en-France.</cite>
                    </li>
                </ul>
            </article>
        </section>
    <!-- End: Mon parcours -->

    <!-- Start: Mes connaissances -->
        <section id="MesConnaissances">
            <h2>Mes connaissances</h2>

            <div id="langage">
                <h3>Langages</h3>
                    
                <article>
                    <div>
                        <h4>Programmation</h4>
                        <ul>
                            <li>
                               <p><strong>C++</strong></p> <meter low="25" high="50" max="100" value="80" optimum="100">80/100</meter>
                            </li>
                            <li>
                                <p><strong>OpenGL</strong></p><meter low="25" high="50" max="100" value="70" optimum="100">70/100</meter>
                            </li>
                            <li>
                                <p><strong><abbr title="OpenGL Shading Language">GLSL</abbr></strong></p><meter low="25" high="50" max="100" value="60" optimum="100">60/100</meter>
                            </li>
                            <li>
                                <p>AS3</p> <meter low="25" high="50" max="100" value="70" optimum="100">70/100</meter>
                            </li>
                            <li>
                                <p>Java</p><meter low="25" high="50" max="100" value="50" optimum="100">60/100</meter>
                            </li>
                            <li>
                                <p>Cuda</p><meter low="25" high="50" max="100" value="50" optimum="100">50/100</meter>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4>Web</h4>
                        <ul>
                            <li>
                                <p><strong>PHP</strong></p><meter low="25" high="50" max="100" value="80" optimum="100">80/100</meter>
                            </li>   
                            <li>
                                <p>MySQL</p><meter low="25" high="50" max="100" value="70" optimum="100">70/100</meter>
                            </li>  
                            <li>
                                <p>Python/Django</p><meter low="25" high="50" max="100" value="60" optimum="100">60/100</meter>
                            </li>
                            <li>
                                <p>HTML5</p><meter low="25" high="50" max="100" value="80" optimum="100">80/100</meter>
                            </li>
                            <li>
                                <p>CSS3</p><meter low="25" high="50" max="100" value="80" optimum="100">80/100</meter>
                            </li>
                            <li>
                                <p>jQuery</p><meter low="25" high="50" max="100" value="60" optimum="100">60/100</meter>
                            </li>
                                
                        </ul>
                    </div>
                </article>
            </div>

            <div id="logiciel">
                <h3>Logiciels</h3>
                    
                <article>
                    <div>
                        <h4>Programmation</h4>
                        <ul>
                            <li>
                                <p><strong>Git/SVN</strong></p><meter low="25" high="50" max="100" value="70" optimum="100">70/100</meter>
                            </li>   
                            <li>
                                <p>FlashDevelop</p><meter low="25" high="50" max="100" value="60" optimum="100">60/100</meter>
                            </li>  
                            <li>
                                <p>MVS 2010</p><meter low="25" high="50" max="100" value="60" optimum="100">60/100</meter>
                            </li>                                
                        </ul>
                    </div>
                    <div>
                        <h4>Création</h4>
                        <ul>
                            <li>
                                <p>Photoshop</p><meter low="25" high="50" max="100" value="70" optimum="100">70/100</meter>
                            </li>   
                            <li>
                                <p>Illustrator</p><meter low="25" high="50" max="100" value="50" optimum="100">50/100</meter>
                            </li>  
                            <li>
                                <p>Premiere</p><meter low="25" high="50" max="100" value="50" optimum="100">50/100</meter>
                            </li>                                
                        </ul>
                    </div>
                </article>
            </div>

            <div class="clear"></div>

            <div id="Loisir">
                <h3>Loisirs</h3>
                <article>
                    <ul>
                        <li>
                            <h4>Jeux Vidéos</h4>
                            <cite>Passioné par les <strong>jeux vidéos</strong> depuis mon plus jeune âge, cette passion ne m'a jamais quittée et reste mon passe temps favoris.

                            Que se soit seul ou entre amis je ne dis jamais non à une partie.</cite>
                        </li>
                        <li>
                            <h4>Cinéma</h4>
                            <cite>Le <strong>cinéma</strong> tient également également une place importante dans mon quotidien.

                            J'ai pu partager ce hobby en co animant, pendant deux ans, une émissions sur la radio Valléefm. </cite>
                        </li>
                        <li>
                            <h4>Les voyages</h4>
                            <cite>Afin de m'ouvrir l'esprit, j'aime de temps en temps aller à l'autre bout du monde.

                            J'ai ainsi eu la chance, entre autres, de poser les pieds au Canda, en Australie, au Paraguay, en Italie, en Espagne, au Maroc et aux Etats-Unis.</cite>
                        <li>
                        <li>
                            <h4>Association</h4>
                            <cite>Toujours curieux de vivre de nouvelles expériences, j'ai créer une association humanitaire avec un ami. J'ai ainsi, pendant 2 ans, été trésorier et membre actif de cette association dont l’objectif était d’acheminer des fournitures scolaires à une école marocaine dans le besoin.</cite>
                        </li>
                    </ul>
                </article>
            </div>
        </section>
    <!--End: Mes connaissances-->
        
    <!-- Start: Mes projets-->

        <section id="MesProjets" class="MesProjets">
            <h2 class="NameProject">Mes projets</h2>
            <div class="slider">

                <a class="lienDynalux" href="#MesProjets:Dynalux"></a>

                <a class="lienGalaxyProject" href="#MesProjets:GalaxyProject"></a>

                <a class="lienLemmings" href="#MesProjets:Lemmings"></a>

                <a class="lienDieHardKart" href="#MesProjets:DieHardKart"></a>

                <a class="lienSquareGame" href="#MesProjets:SquareGame"></a>
                
                <a class="lienTreeClip" href="#MesProjets:TreeClip"></a>
            </div>
            <article>
                <h3>En quelques mots ... </h3>
                <p>Je met ici à votre disposition la présentation en texte et en image de mes projets. 
                    Pour le moment, vous pourrez uniquement y trouver mes principaux projets.
                    Ces derniers sont à mon goût les plus probants et les plus représentatifs de mon niveau en programmation. 
                    D'ici peu vous pourrez également y trouver la présentation d'un jeux vidéo développé avec Ogre3D.</p>

                
                <p>J'ai également réalisé plusieurs projets en web que je compte mettre en avant dès que l'occasion se présentera.
                    Notamment des projets réalisés lors de mon dernier stage dans l'entreprise <a href="http://www.e-volution.fr/">e-volution</a>.

                    Cette dernière m'a permis de travailler pour des clients comme l'INA, Pritt ou encore Barbie.
                    Bien que j'ai essentiellement développé du back et front end, j'ai également eu l'occasion de mettre d'autres compétences en pratique.
                    J'ai pus, entre autre, développer un jeu concours en flash, créer un effet d'explosion à intégrer dans un jeu flash, ou encore effectuer de petits montages sonores.
                    La formation <a href="HTTP://www.ingenieur-imac.fr" target="_blank"><abbr title="Image Multimédia Audiovisuelle Communication">IMAC</abbr></a>
                    étant très diversifiée, j'ai eu la chance d'être initié au travail de la vidéo, de l'image et du son.</p>

                

                <p> A venir également, deux applications mobiles. Je travaille actuellement sur deux projets, dont un sera une application native de réalité augmenté basée sur la géolocalisation.

                    Je participe aussi au développement d'un petit jeu de plateau en HTML5/CSS3/javascript dont le principe est proche du trivial pursuit auquel on aurait ajouté un soupçon de jeu de rôle.</p>
            </article>
        </section>

        <!-- Dynalux -->   
        <section id="MesProjets:Dynalux" class="MesProjets">
    
            <div class="slider">

                <a class="lienDynalux" href="#MesProjets:Dynalux"></a>

                <a class="lienGalaxyProject" href="#MesProjets:GalaxyProject"></a>

                <a class="lienLemmings" href="#MesProjets:Lemmings"></a>

                <a class="lienDieHardKart" href="#MesProjets:DieHardKart"></a>

                <a class="lienSquareGame" href="#MesProjets:SquareGame"></a>
                
                <a class="lienTreeClip" href="#MesProjets:TreeClip"></a>
            </div>
            
            <article>
                <h3 class="NameProject">Dynalux</h3>
                
                <div class="Diapo">   
                    <ul>
                        <li>
                            <div class="ImageTitle">
                                Tourbillon
                            </div>
                            <img src="photos/projets/Dynalux/spirale.gif" width="260" height="173" alt="Tourbillon" />
                        </li>
                        <li>
                            <div class="ImageTitle">
                                Soleil
                            </div>
                            <img src="photos/projets/Dynalux/tornade.gif" width="260" height="173" alt="Soleil" />
                        </li>
                        <li>
                            <div class="ImageTitle">
                                Ninja
                            </div>
                            <img src="photos/projets/Dynalux/ninja.gif" width="260" height="173" alt="Ninja" />
                        </li>
                    </ul>
                </div>
                
                <div class="Description">

                    <ul>

                        <li><span class="Value"><span class="Value icon small green">K</span> C++</span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> OpenGL (<abbr title="OpenGL Shading Language">GLSL</abbr>)</span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> <abbr title="(Simple DirectMedia Layer) A cross-platform multimedia library designed to provide fast access to the graphics framebuffer and audio device.">SDL</abbr></span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> <abbr title="OpenCV (Open Source Computer Vision) is a library of programming functions for real time computer vision.">OpenCV</abbr></span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> Qt</span></li>
                        <li><span class="Value icon medium"><a class="clean" target="_blank" href="https://github.com/Pespo/Graffiti-Light">b</a></span> <span class="Value icon medium"><a class="clean" href="https://github.com/Pespo/Graffiti-Light/archive/master.zip">v</a></span></li>
                    </ul>

                </div>

                <div class="clear"></div><br/>
                
                <iframe src="http://player.vimeo.com/video/42091300" width="330" height="188">Video de présentation du projet Dynalux</iframe>

                <p class="Comment">Graffiti Light est un projet innovant qui s’inscrit dans une démarche artistique moderne, en
                cherchant à mettre à profit les techniques informatiques actuelles.</p>

                <p class="Comment">Dynalux, produit de ce projet, est une application de <strong><a href="http://fr.wikipedia.org/wiki/Light_painting">light painting</a> en vidéo</strong>, développée
                à la demande de <a href="http://lacompagnieduclou.com/laurent%20renaud.html">Laurent Renaud</a>. Elle est pensée pour une utilisation dans un spectacle
                d’art vivant et à la possibilité de devenir un outil du spectacle au même titre qu’un système
                d’éclairage de scène.</p>

                <p class="Comment">Le projet Graffiti Light a pour but la conception d’un <strong>logiciel permettant la captation et la diffusion de
                source(s) lumineuse(s) mouvante(s) en temps réel</strong>. Il était le sujet de notre projet tuteuré de 2ème année et fut mon premier véritable projet 
                aboutit. Il m'a permit de me confronter à l'OpenGL et au GLSL, et surtout de comprendre toutes les possibilités qu'ils offrent. Dans le cadre de notre formation
                nous avons donc du faire une vidéo promotionnelle et explicative de notre produit final : Dynalux. </p>

                
                <p class="Comment">La vidéo est composée de 3 parties. La première fait office d'introduction et présente les acteurs et les objectifs de ce projet. La deuxième a pour but
                de mettre en avant les techniques et compétences mises en place pour l'aboutissement du programme. Enfin la dernière partie est une démonstration des rendus 
                possibles du logiciel Dynalux.</p>

                
            </article>
            
        </section>

        <!-- Galaxy Project -->   
        <section id="MesProjets:GalaxyProject" class="MesProjets">
    
            <div class="slider">

                <a class="lienDynalux" href="#MesProjets:Dynalux"></a>

                <a class="lienGalaxyProject" href="#MesProjets:GalaxyProject"></a>

                <a class="lienLemmings" href="#MesProjets:Lemmings"></a>

                <a class="lienDieHardKart" href="#MesProjets:DieHardKart"></a>

                <a class="lienSquareGame" href="#MesProjets:SquareGame"></a>
                
                <a class="lienTreeClip" href="#MesProjets:TreeClip"></a>
            </div>
            
            <article>
                <h3 class="NameProject">GalaxyProject</h3>
                
                <div class="Diapo">   
                    <ul>
                        <li>
                            <div class="ImageTitle">
                                Zoom sur cube
                            </div>
                            <img src="photos/projets/GalaxyProject/Photo1.jpg" width="260" height="173" alt="Zoom sur cube" />
                        </li>
                        <li>
                            <div class="ImageTitle">
                                Vue d'ensemble 2
                            </div>
                            <img src="photos/projets/GalaxyProject/Photo2.jpg" width="260" height="173" alt="Vue d'ensemble 2" />
                        </li>
                        <li>
                            <div class="ImageTitle">
                                Vue d'ensemble 1
                            </div>
                            <img src="photos/projets/GalaxyProject/Photo3.jpg" width="260" height="173" alt="Vue d'ensemble 1" />
                        </li>
                    </ul>
                </div>
                
                <div class="Description">

                    <ul>

                        <li><span class="Value"><span class="Value icon small green">K</span> C++</span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> OpenGL (<abbr title="OpenGL Shading Language">GLSL</abbr>)</span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> <abbr title="GLFW is a free, Open Source, multi-platform library for opening a window, creating an OpenGL context and managing input.">GLFW</abbr></span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> <abbr title="Native immediate mode gui toolkit for C++">IMGUI</abbr></span></li>

                        <li><span class="Value icon"><a class="clean" target="_blank" href="https://github.com/Pespo/Galaxy-Project">b</a></span> <span class="Value icon"><a class="clean" href="https://github.com/Pespo/Galaxy-Project/archive/master.zip">v</a></span></li>

                    </ul>

                </div>

                <div class="clear"></div><br/>

                <iframe src="http://player.vimeo.com/video/57358256" width="330" height="188"></iframe>

                <p class="Comment">Le but de ce projet était de proposer une démonstration graphique et esthétique dans un
                environnement 3D. Le code est rédigé en C++ utilisant l’API OpenGL et quelques librairies externes.
                Nous avons intégré un panneau de contrôle pour modifier des paramètres en temps réel et un moteur physique crée par nos soins lors de nos cours.
                L’illumination et l’apparence de la scène sont gérées grâce au langage de programmation de shaders GLSL.</p>

                <p class="Comment">Afin de simuler notre monde et son évolution, nous avons mis en place une scène 3D munie
                d’une caméra, de lumières et de plusieurs objets animés ou non. Le résultat est un
                environnement de type lunaire, mystique. Une statue posée sur une roche semble avoir le pouvoir
                faire léviter un système de sphères autour d’un cube de matière inconnue dans sa main.
                Tournant autour, tel un garde protecteur, un dragon veille sur ce lourd secret.</p>

                <p class="Comment">Ce projet, au dela du rendu, m'a surtout permit de mieux appréhender le pipeline OpenGL. 
                En construisant notre chaine de rendu, j'ai pris conscience des limites d'une architecture trop stricte, qui sur 
                de petit projets comme celui ci peuvent être une bride. Le développement de ce programme m'a permit d'acquérir une 
                plus grande maturité vis à vis de la programmation en C++/OpenGL.</p>
            </article>
            
        </section>

        <!-- Lemmings -->   
        <section id="MesProjets:Lemmings" class="Lemmings">
    
            <div class="slider">
                <a class="lienDynalux" href="#MesProjets:Dynalux"></a>
                <a class="lienGalaxyProject" href="#MesProjets:GalaxyProject"></a>

                <a class="lienLemmings" href="#MesProjets:Lemmings"></a>

                <a class="lienDieHardKart" href="#MesProjets:DieHardKart"></a>

                <a class="lienSquareGame" href="#MesProjets:SquareGame"></a>
                
                <a class="lienTreeClip" href="#MesProjets:TreeClip"></a>
            </div>
            
            <article>
                <h3 class="NameProject">Lemmings</h3>
                
                <div class="DiapoSimple">   

                    <img src="photos/projets/Lemmings/Screenshot1.jpg" width="260" height="173" alt="Screenshot" />

                </div>
                
                <div class="Description">

                    <ul>

                        <li><span class="Value"><span class="Value icon small green">K</span> C</span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> OpenGL</span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> <abbr title="(Simple DirectMedia Layer) A cross-platform multimedia library designed to provide fast access to the graphics framebuffer and audio device.">SDL</abbr></span></li>

                        <li><span class="Value icon"><a class="clean" target="_blank" href="https://github.com/Pespo/lemmings">b</a></span> <span class="Value icon"><a class="clean" href="https://github.com/Pespo/lemmings/archive/master.zip">v</a></span></li>

                    </ul>

                </div>

                <div class="clear"></div><br/>

                <p class="Comment">Lemmings est un projet que j'ai réalisé en première année d'IMAC. C'est le premier jeu que j'ai codé en C/OpenGL. 
                    Il fut l'occasion de mettre en place un algorithme de chemins et de construire complètement un programme en partant de zéro.</p>
                <p class="Comment">Le principe du jeu est de sauver des lapins qui se déplacent automatiquement vers la sortie par le chemin le plus court.
                    Mais plusieurs obstacles sont décimés sur le terrain pour les empêcher de progresser correctement. Il y a notamment des cases qui ralentissent, qui blessent, qui brulent, ...
                    A noter également que les lapins perdent de leur vie à chaque déplacement.
                    L'objectif du joueur est donc de réussir à faire en sorte, en modifiant le terrain, que les lapins passent par le ou les chemins les moins dangereux et les moins longs.</p>


            
        </section>

     <!-- DieHard Kart -->   

        <section id="MesProjets:DieHardKart" class="MesProjets">

    

            <div class="slider">

                <a class="lienDynalux" href="#MesProjets:Dynalux"></a>

                <a class="lienGalaxyProject" href="#MesProjets:GalaxyProject"></a>

                <a class="lienLemmings" href="#MesProjets:Lemmings"></a>

                <a class="lienDieHardKart" href="#MesProjets:DieHardKart"></a>

                <a class="lienSquareGame" href="#MesProjets:SquareGame"></a>

                <a class="lienTreeClip" href="#MesProjets:TreeClip"></a>
            </div>

            

            <article>

                <h3 class="NameProject">Die Hard Kart</h3>

                

                <div class="DiapoSimple">   

                    <img src="photos/projets/DieHardKart/DieHardKart.gif" width="260" height="173" alt="Screenshot" />

                </div>

                

                <div class="Description">

                    <ul>

                        <li><span class="Value"><span class="Value icon small green">K</span>AS3</span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span>FlashDevelop</span></li>

                        <li><span class="Value icon"><a class="clean" target="_blank" href="https://github.com/Pespo/Die-Hard-Kart">b</a></span> <span class="Value icon"><a class="clean" target="_blank" href="https://github.com/Pespo/Die-Hard-Kart/archive/master.zip">v</a></span></li>

                    </ul>

                </div>



                <div class="clear"></div><br/>



                <p class="Comment">Die Hard Kart est un projet qui m'a énormément plu à développer et m'a beaucoup apprit sur la structure d'un projet. Bien que notre groupe de travail n'a pas eu le temps de finir le jeu, je garde l'envie de le terminer.</p>

                <p class="Comment">Nous voulions réaliser un arena shooter mélangé à un jeu de kart (course contre la montre). Le véritable challenge pour nous n'était pas de penser le jeu en soit, mais véritablement de penser le code de manière évolutive.

                Nous voulions réaliser une sorte de template de jeu, de manière à, par la suite, pouvoir améliorer le jeu à volonté et très facilement.

                Le temps nécessaire pour la réalisation d'une telle structure est beaucoup plus longue que l'on aurait pu l'imaginer et c'est pour cela que nous n'avons pu l'achever. </p>



                <p class="Comment">Le concept de notre code dans les grandes lignes : </p>

                <ul class="Comment">

                    <li>Création de vaisseaux, d'armes et de balles (tous personnalisables) grâce au design pattern Decorator.</li>

                    <li>Permettre d'ajouter et de combiner des modules à volonté afin de facilement pouvoir enrichir le jeu.</li>

                    <li>Chargement des données du jeu par XML.</li>

                    <li>Permettre même une fois le jeu compilé, de pouvoir très facilement créer des niveaux (ainsi que des ennemis et des équipements), voir même de créer  un éditeur de niveau en HTML.</li>

                </ul>

                <p class="Comment">Au final, nous avons la structure détaillée du Decorator qui fonctionne relativement bien, il ne manque que le système de configuration par XML. La structure du jeu est donc disponible mais sans son déroulement.</p>

            </article>

            

        </section>

        <!-- SquareGame -->   

        <section id="MesProjets:SquareGame" class="MesProjets">

    

            <div class="slider">

                <a class="lienDynalux" href="#MesProjets:Dynalux"></a>

                <a class="lienGalaxyProject" href="#MesProjets:GalaxyProject"></a>

                <a class="lienLemmings" href="#MesProjets:Lemmings"></a>

                <a class="lienDieHardKart" href="#MesProjets:DieHardKart"></a>

                <a class="lienSquareGame" href="#MesProjets:SquareGame"></a>
                
                <a class="lienTreeClip" href="#MesProjets:TreeClip"></a>

            </div>

            

            <article>

                <h3 class="NameProject">SquareGame</h3>

                

                <div class="DiapoSimple">   

                    <img src="photos/projets/SquareGame/SquareGame.gif" width="260" height="173" alt="Screenshot" />

                </div>

                

                <div class="Description">

                    <ul>

                        <li><span class="Value"><span class="Value icon small green">K</span>AS3</span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span>FlashDevelop</span></li>

                        <li><span class="Value icon"><a class="clean" target="_blank" href="http://squaregame.guillaume.albespy.me">Õ</a></span> <span class="Value icon"><a class="clean" href="http://squaregame.guillaume.albespy.me/SquareGame.zip">v</a></span></li>

                    </ul>

                </div>



                <div class="clear"></div><br/>



                <p class="Comment">Square games est mon premier projet réalisé en AS3. C'est un jeu classique mais au combien addictif, où l'objectif est de faire le plus gros score possible.

                    Le principe est simple: rammasser les formes géométriques noires tout en évitant les rouges. Quelques règles et bonus sont là pour pimenter le tout.</p>

                <p class="Comment">Les régles :</p>

                <ul class="Comment">

                    <li>Plus le temps passe plus votre score augmente.</li>

                    <li>Ramasser les cubes noirs fait augmenter vos points et la taille de votre carré.</li>

                    <li>Les ronds noirs vous donnent des bonus aléatoires (invincibilité, augmentation du score, réduction de la taille de votre carré).</li>

                    <li>Rentrer en contact avec un carré rouge met fin au jeu.</li>

                    <li>Les ronds rouges donnent des malus (immobilité, diminution du score, augmentation de la taille de votre carré)</li>

                </ul>

                

                <p class="Comment">Pas complètement aboutit le jeu est tout de même jouable et relativemet sympathique à jouer.

                    Si il vous tente, n'hésitez pas, <a href="http://squaregame.guillaume.albespy.me">jouez</a> !</p>

            </article>

            

        </section>
        
        <!-- TreeClip -->   
        <section id="MesProjets:TreeClip" class="MesProjets">
    
            <div class="slider">

                <a class="lienDynalux" href="#MesProjets:Dynalux"></a>

                <a class="lienGalaxyProject" href="#MesProjets:GalaxyProject"></a>

                <a class="lienLemmings" href="#MesProjets:Lemmings"></a>

                <a class="lienDieHardKart" href="#MesProjets:DieHardKart"></a>

                <a class="lienSquareGame" href="#MesProjets:SquareGame"></a>
                
                <a class="lienTreeClip" href="#MesProjets:TreeClip"></a>
            </div>
            
            <article>
                <h3 class="NameProject">TreeClip</h3>
                
                <div class="Diapo">   
                    <ul>
                        <li>
                            <div class="ImageTitle">
                                Recherche
                            </div>
                            <img src="photos/projets/Treeclip/recherche.jpg" width="260" height="173" alt="Zoom sur cube" />
                        </li>
                        <li>
                            <div class="ImageTitle">
                                Treecliper
                            </div>
                            <img src="photos/projets/Treeclip/treecliper.jpg" width="260" height="173" alt="Vue d'ensemble 2" />
                        </li>
                        <li>
                            <div class="ImageTitle">
                                Profil
                            </div>
                            <img src="photos/projets/Treeclip/profil.jpg" width="260" height="173" alt="Vue d'ensemble 1" />
                        </li>
                    </ul>
                </div>
                
                <div class="Description">

                    <ul>

                        <li><span class="Value"><span class="Value icon small green">K</span> PHP </span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> HTML</span></li>

                        <li><span class="Value"><span class="Value icon small green">K</span> CSS </span></li>

                        <li><span class="Value icon"><a class="clean" target="_blank" href="http://treeclip.guillaume.albespy.me">k</a></span> <span class="Value icon"><a class="clean" href="http://treeclip.svn.sourceforge.net/viewvc/treeclip/">b</a></span> <span class="Value icon"><a class="clean" href="http://treeclip.svn.sourceforge.net/viewvc/treeclip/?view=tar">v</a></span></li>

                    </ul>

                </div>

                <div class="clear"></div><br/>

                <p class="Comment">Treeclip est un projet réalisé en première année d'IMAC dont l'objectif était de réaliser un réseau social autour de la généalogie.</p>
                <p class="Comment">Nous avons donc implémenté les fonctionnalités classiques mais indispensables d'un réseau social :</p>
                <ul class="Comment">
                    <li>Création/Modification et Recherche de profil</li>
                    <li>Ajout/Suppression de lien karmique (amitié)</li>
                    <li>Création/Suppression de message avec un ou plusieurs interlocuteurs à la fois</li>
                    <li>Notification pour les nouveaux messages et demandes de lien karmique</li>
                </ul>
                <p class="Comment">A ces fonctionnalités classiques nous avons ajoutés la possibilité de lier à son profil ceux de nos parents avec, évidemment, la possibilité de supprimer ces relations.
                    Ces relations de parenté sont accessibles sous forme de shéma (arbre) grâce à la génération de SVG accessible sur le bouton Treecliper.</p>
                <p class="Comment">Ce projet m'a avant tout permis de me familiariser avec le modèle de conception communément appelé <abbr title="Modèle Vue Controleur">MVC</abbr>. Il m'a également aidé à me rendre compte de l'ampleur d'un projet comme celui ci.
                    Malgré sa simplicité apparente, de nombreuses choses ont été nécessaires pour qu'il soit véritablement fonctionnel : </p>
                <ul class="Comment">
                    <li>Envoi de mail pour confirmation de compte</li>
                    <li>Redimmensionnement d'image</li>
                    <li>Conception d'une base de donnée optimisée</li>
                    <li>Suppression correcte des éléments de <abbr title="Base de donnée">BDD</abbr> liés entre eux</li>
                </ul>
                <p class="Comment">Si vous désirez tester ou voir de plus près le résultat : <a target="_blank" href="http://treeclip.guillaume.albespy.me">treeclip.guillaume.albespy.me</a>.</p>
                <p class="Comment">Compte de test :</p>
                <ul class="Comment">
                    <li>Login : bart@simpson.com</li>
                    <li>Mot de passe : bart</li>
                </ul>
            </article>
            
        </section>

    <!-- Fin: Mes projets-->
    
    <!-- Début: Contact -->
        <section id="MeContacter" >
            <article>
                <h2>Me contacter</h2>

                <div id="SavoirPlus">
                    <p>Pour en savoir plus sur moi :</p>
                    <ul>
                        <li><a href="http://www.facebook.com/guillaume.albespy" target="blank"><img src="images/SocialIcon/Facebook.png" alt="logo facebook"/></a></li>
                        <li><a href="https://plus.google.com/u/0/103333268404952483327" target="blank"><img src="images/SocialIcon/Google_plus.png" alt="logo google+"/></a></li>
                        <li><a href="http://www.linkedin.com/pub/guillaume-albespy/45/723/1" target="blank"><img src="images/SocialIcon/Linkedin.png" alt="logo linkedin"/></a></li>
                        <li><a href="https://github.com/Pespo" target="blank"><img src="images/SocialIcon/Github.png" alt="logo github"/></a></li>
                    </ul>
                </div>

                <div id="Formulaire">
                    <p>Ou me contacter : </p>
                    <form action="#MeContacter" method="POST">
<?php
    if(isset($_POST) && !empty($_POST)) {
        $test = 0;
        $message = "";
        if(isset($_POST["Name"]) && !empty($_POST["Name"])) {
            $test ++;
            $message .= '<div><div class="icon">Y</div><input  type="text" name="Name" id="Name" value="'.$_POST["Name"].'" placeholder="Nom/Raison sociale" required/></div>';
        } else {
            $message .= '<div><div class="icon">Y</div><input class="Empty" type="text" name="Name" id="Name" placeholder="Nom/Raison sociale" required/></div>';
        }
        if(isset($_POST["Mail"]) && !empty($_POST["Mail"])) {
            $test ++;
            $message .= '<div><div class="icon">Å</div><input type="text" name="Mail" id="Mail" value="'.$_POST["Mail"].'" placeholder="eMail" required/></div>';
        } else {
            $message .= '<div><div class="icon">Å</div><input class="Empty" type="text" name="Mail" id="Mail" placeholder="eMail" required/></div>';
        }
        if(isset($_POST["Subject"]) && !empty($_POST["Subject"])) {
            $test ++;
            $message .= '<div><div class="icon">I</div><input type="text" name="Subject" id="Subject" value="'.$_POST["Subject"].'" placeholder="Objet" required/></div>';
        } else {
            $message .= '<div><div class="icon">I</div><input class="Empty" typee="text" name="Subject" id="Subject" placeholder="Objet" required/></div>';
        }
        if(isset($_POST["Comment"]) && !empty($_POST["Comment"])) {
            $test ++;
            $message .= '<div><div class="icon">8</div><textarea name="Comment" id="Comment" placeholder="Commentaire" required>'.$_POST["Comment"].'</textarea></div>';
        } else {
            $message .= '<div><div class="icon">8</div><textarea class="Empty" name="Comment" id="Comment" placeholder="Commentaire" required></textarea></div>';
        }
        if($test==4) {
            mail ( "guillaume.albespy@gmail.com" , "[Stage]".$_POST["Subject"] , $_POST["Comment"]."\n\n".$_POST["Name"], 'From: ' . $_POST["Mail"] . "\r\n" . 'Reply-To: ' . $_POST["Mail"] );
            $message = '<p>Votre message a été correctement envoyé, merci pour votre intérêts.</p>

                        <div><div class="icon">Y</div><input  type="text" name="Name" id="Name" placeholder="Nom/Raison sociale" required/></div>

                        <div><div class="icon">Å</div><input type="text" name="Mail" id="Mail" placeholder="eMail" required/></div>

                        <div><div class="icon">I</div><input type="text" name="Subject" id="Subject" placeholder="Objet" required/></div>

                        <div><div class="icon">8</div><textarea name="Comment" id="Comment" placeholder="Commentaire" required></textarea></div>';
        } 
        echo $message;
    } else {
?>

                        <div><div class='icon'>Y</div><input type="text" name="Name" id="Name" placeholder="Nom/Raison sociale" required/></div>
                        <div><div class='icon'>Å</div><input type="text" name="Mail" id="Mail" placeholder="eMail" required/></div>
                        <div><div class='icon'>I</div><input type="text" name="Subject" id="Subject" placeholder="Objet" required/></div>
                        <div><div class='icon'>8</div><textarea name="Comment" id="Comment" placeholder="Proposition d'emploi, commentaire, message de sympathie, ... Faites vous plaisir !" required></textarea></div>
                         
<?php } ?>   
                    <input class="button" type="submit" value="envoyer"/>
                    </form>  
                </div>                
            </article>
        </section>
    <!--Fin: Contact -->

     <!-- Start: nav -->
        <nav>
            <ul>
                <li id="MenuParcours"><a href="#MonParcours"> <img src="images/MagnetParcours.png" alt="Parcours"> <p>Parcours</p> </a></li>
                <li id="MenuConnaissances"> <a href="#MesConnaissances"> <img src="images/MagnetConnaissances.png" alt="Connaissances"/> <p>Connaissances</p> </a></li>
                <li id="MenuProjets"><a href="#MesProjets"> <img src="images/MagnetProjets.png" alt="Projets"/> <p>Projets</p></a> </li>
                <li id="MenuContact"><a href="#MeContacter"> <img src="images/MagnetContact.png" alt="Contacter"/> <p>Contacter</p></a> </li>
            </ul>
        </nav>
    <!-- End: nav -->

   
        <div class="clear"></div>
    
    <!--  Début: Footer-->
        <footer>
            <div class="Right">
            <p>Retrouvez moi sur : </p><a href="http://www.facebook.com/guillaume.albespy" target="blank"><img src="images/SocialIcon/Facebook.png" alt="logo facebook"/></a>
                        <a href="https://plus.google.com/u/0/103333268404952483327" target="blank"><img src="images/SocialIcon/Google_plus.png" alt="logo Google plus"/></a>
                        <a href="http://www.linkedin.com/pub/guillaume-albespy/45/723/1" target="blank"><img src="images/SocialIcon/Linkedin.png" alt="logo Linkedin"/></a>
                        <a href="https://github.com/Pespo" target="blank"><img src="images/SocialIcon/Github.png" alt="logo Github"/></a>
            </div>

            <div class="Left">

                <p>* Site full HTML5/CSS3 certifié sans JavaScript</p>

            </div>
        </footer>

       

    <!-- Start: Accueil -->

        <section id="Accueil" >

            <h2>En stage et heureux de l'être !</h2>

            <article>

                <p class="comment">Et oui une entreprise m'a donné ma chance et je compte bien leur donner raison.</p>

                <p class="comment">Cependant il faut déjà prévoir demain et comme je compte poser mes bagages à <strong>Nantes</strong>, je prends de l'avance.<p>

                <p class="comment">Multi compétent en <strong>programmation</strong>, je m'épanouis dans des univers tels que le <strong>jeux vidéo</strong>, le <strong>cinéma</strong> ou encore les domaines <strong>artistiques</strong>. Mais ce n'est pas tout !</p>

                <p class="comment">Ayant eu la chance de faire ma formation à l'<a href="HTTP://www.ingenieur-imac.fr" target="_blank"><abbr title="Image Multimédia Audiovisuelle Communication"><strong>IMAC</strong></abbr></a> je suis également à l'aise dans le développement web et ai été initié au travail de la vidéo, de l'image et du son.</p>

                <p class="comment"><strong>Ingénieux</strong> au possible, j'ai toujours de <strong>bonnes idées</strong> et sais me faire entendre lors des phases de <strong>conception</strong>. Volontaire et toujours de bonne humeur, j'apporterai le petit plus à tous vos projets et m'intégrerai parfaitement à votre structure.</p>

                <p class="comment">Alors Si vous êtes dans la région de Nantes, n'hésitez plus et <strong><a href="#MeContacter">contactez moi </a></strong>. Par mail, par téléphone ou par votre réseau social préféré, je vous répondrai dans les plus brefs délais.<p>

            </article>

        </section>

    <!-- End: Accueil -->

 

        
    </body>

</html>
<?php
    ob_end_flush();
?>