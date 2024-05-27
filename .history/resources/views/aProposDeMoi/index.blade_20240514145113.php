@extends('layouts.app')
@section('content')
<div class="container mt-5">
{{--     <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="styled-div">
          <p>Bonjour, je suis un jeune Marocain spécialisé dans le domaine informatique, je me distingue par une
            solide formation et une approche créative, fondées sur une recherche approfondie en réseaux, 
            systèmes informatiques et développement web. La base de ma formation repose sur une quête
            constante de solutions efficaces et innovantes.</p>
          <p>Mon engagement envers l'apprentissage continu et ma passion pour la programmation constituent
            les piliers de cette démarche, faisant de la maîtrise des environnements stimulants une aspiration
            professionnelle.</p>
          <p><a href="#parcours_académique"> Télécharger curriculum vitae </a></p>
        </div>
      </div>
    </div>
  </div> --}}
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="cv.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Nunito', sans-serif;
}

body{
   /*  background-color: #94D9EA; */
}

.main-content{
    min-height: 100vh;
    width: 99%;
    margin: 2rem auto;
    display: grid;
    grid-template-columns: repeat(7, 1fr);
}

.left-section{
    grid-column: span 2;
    height: 100%;
    background-color: #00324A;
}
.right-section{
    grid-column: span 5;
    background-color: #f7f7f7;
    height: 100%;
}


.left-content{
    padding: 2rem 3rem;
}
.profile{
    width: 100%;
    border-bottom: 1px solid #002333;
}

.image{
    width: 100%;
    text-align: center;
}
.profile img{
    width: 100%;
    border-radius: 50%;
    border: 8px solid #002333;
    
}

.name{
    font-size: 2rem;
    color: white;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 1.2rem 0;
}

.career{
    font-size: 1.2rem;
    color: #94D9EA;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding-bottom: 1rem;
}

.main-title{
    font-size: 1.8rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #f7f7f7ec;
    padding-top: 3rem;
}

.contact-info ul{
    padding-top: 2rem;
}

.contact-info ul li{
    padding: .4rem 0;
    display: flex;
    align-items: center;
    color: #718096;
}
.contact-info ul li i{
    padding-right: 1rem;
    font-size: 1.2rem;
    color: #2D9CDB; 
}

.skills-section ul{
    padding-top: 2rem;
}
.skills-section ul li{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding: .4rem 0;
}

.progress-bar{
    width: 100%;
    height: .4rem;
    background-color: #2f81ed5b;
    position: relative;
    border-radius: 12px;
}
.progress{
    height: 100%;
    position: absolute;
    left: 0;
     background-color: #2D9CDB; 
    border-radius: 12px;
}
.js-progress{
    width: 70%;
}
.ps-progress{
    width: 90%;
}
.j-progress{
    width: 85%;
}
.c-progress{
    width: 40%;
}
.n-progress{
    width: 63%;
}
.w-progress{
    width: 78%;
}


.skill-title{
    text-transform: uppercase;
    color: #f7f7f7;
    font-size: 1rem;
}

.sub-title{
    padding-top: 2rem;
    font-size: 1.2rem;
    text-transform: uppercase;
    color: #f7f7f7;
}

.sub-para{
    color: #ccc;
    padding: .4rem 0;
}

.references-section li{
    color: #ccc;
    padding: .2rem 0;
}
.references-section li i{
    padding-right: .5rem;
    font-size: 1.2rem;
     color: #2D9CDB; 
}

.right-main-content{
    padding: 2rem 3rem;
}


.right-title{
    letter-spacing: 1px;
    text-transform: uppercase;
  color: #2F80ED; 
    margin-bottom: 1.2rem;
    position: relative;
}

.right-title::after{
    content: "";
    position: absolute;
    width: 60%;
    height: .2rem;
    background-color: #ccc;
    border-radius: 12px;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}

.para{
    line-height: 1.6rem;
    color: #718096;
    font-size: 1.1rem;
}

.sect{
    padding-bottom: 2rem;
}

.timeline{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.tl-title{
    letter-spacing: 1px;
    font-size: 1.3rem;
    color: #002333;
    text-transform: uppercase;
}
.tl-title-2{
    letter-spacing: 1px;
    font-size: 1.3rem;
   color: #2D9CDB; 
    text-transform: uppercase;
}

.tl-content{
    border-left: 1px solid #ccc;
    padding-left: 2rem;
    position: relative;
    padding-bottom: 2rem;
}

.tl-title-2::before{
    content: "";
    position: absolute;
    width: .7rem;
    height: .7rem;
 background-color: #ececec; 
    border-radius: 50%;
    transform: translateX(-50%);
    left: 0;
}

/Media Querries/
@media screen and (max-width:823px){
    .right-title::after{
        width: 40%;
    }
}
@media screen and (max-width:681px){
    .right-title::after{
        width: 30%;
    }
}
@media screen and (max-width:780px){
    .timeline{
        grid-template-columns: repeat(1, 1fr);
    }
}
@media screen and (max-width:780px){
    .left-section{
        grid-column: span 3;
    }
    .right-section{
        grid-column: span 4;
    }
}
@media screen and (max-width:1200px){
    .main-content{
        grid-template-columns: repeat(1, 1fr);
    }
    .profile img{
        width: 40%;
    }
}
@media screen and (max-width:700px){
    .profile img{
        width: 60%;
    }
}
@media screen and (max-width:390px){
    .name{
        font-size: 1.5rem;
    }
}
</style>
<body>
    <main class="main-content">
        <section class="left-section">
            <div class="left-content">
                <div class="profile">
                    <div class="image">
                      <img src="/images/Profile.jpg" alt="Ma phot de profile">
                    </div>
                    <h2 class="name">Aicha Mouhssine</h2>
                    <p class="career">Software Engineer</p>
                </div>
                <div class="contact-info">
                    <h3 class="main-title">Contact</h3>
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>
                            0684781806
                        </li>
                        <li>
                            <i class="fa fa-fax"></i>
                            Aicha.fst@uhp.ac.ma
                        </li>
                       
                        <li>
                            <i class="fa fa-map-marker"></i>
                            Oujda, Oriontal-Oujda
                        </li>
                    </ul>
                </div>
                <div class="skills-section">
                    <h3 class="main-title">Compétences</h3>
                    <ul>
                        <li>
                            <p class="skill-title">Javascript</p>
                            <div class="progress-bar">
                                <div class="progress js-progress"></div>
                            </div>
                        </li>
                        <li>
                            <p class="skill-title">PHP</p>
                            <div class="progress-bar">
                                <div class="progress ps-progress"></div>
                            </div>
                        </li>
                        <li>
                            <p class="skill-title">Java</p>
                            <div class="progress-bar">
                                <div class="progress j-progress"></div>
                            </div>
                        </li>
                        <li>
                            <p class="skill-title">C++</p>
                            <div class="progress-bar">
                                <div class="progress c-progress"></div>
                            </div>
                        </li>
                        <li>
                            <p class="skill-title">Dart</p>
                            <div class="progress-bar">
                                <div class="progress ps-progress"></div>
                            </div>
                        </li>
                        <li>
                            <p class="skill-title">Laravel</p>
                            <div class="progress-bar">
                                <div class="progress n-progress"></div>
                            </div>
                        </li>
                        <li>
                            <p class="skill-title">html/css</p>
                            <div class="progress-bar">
                                <div class="progress ps-progress"></div>
                            </div>
                        </li>
                        <li>
                            <p class="skill-title">Flutter</p>
                            <div class="progress-bar">
                                <div class="progress ps-progress"></div>
                            </div>
                        </li>
                        <li>
                            <p class="skill-title">React</p>
                            <div class="progress-bar">
                                <div class="progress ps-progress"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="references-section">
                    <h3 class="main-title">Prférences</h3>
                    <div class="referee">
                        <h6 class="sub-title">Rien</h6>
                        <p class="sub-para">Back-end developer</p>
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                07661892982
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                libourki.fst@uhp.ac.ma
                            </li>
                        </ul>
                    </div>
                    <div class="referee">
                        <h6 class="sub-title">ERRAKHA Aymane</h6>
                        <p class="sub-para">Full-stuck developer</p>
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                07661892982
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                errakha@gmail.com
                            </li>
                        </ul>
                    </div>
                    <div class="referee">
                        <h6 class="sub-title">SALFI Ayoub</h6>
                        <p class="sub-para">front-end developer</p>
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                07661892982
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                ayoub@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="right-section">
            <div class="right-main-content">
                <section class="about sect">
                    <h2 class="right-title">Profile</h2>
                    <p class="para">
                      Bonjour, je suis un jeune développeur Marocain, je me distingue par une
                        solide formation et une approche créative, fondées sur une recherche approfondie en réseaux, 
                        systèmes informatiques et développement web. La base de ma formation repose sur une quête
                        constante de solutions efficaces et innovantes. 
                        <br>
                      Mon engagement envers l'apprentissage continu et ma passion pour la programmation constituent
                        les piliers de cette démarche, faisant de la maîtrise des environnements stimulants une aspiration
                        professionnelle.</p>
                      <p><a href="#parcours_académique"> Télécharger curriculum vitae </a></p>
                </section>

                <section class="experince sect">
                    <h2 class="right-title">Expérience</h2>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">Société ENDOSMART</h5>
                            <p class="para">AVRIL 2023-JUIN 2023 | Casablanca</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">Développeur web</h5>
                                <p class="para">
                                Développer une plateforme d'évaluation des impacts
                                environnementaux des produits. Cette plateforme permettra à
                                l'administrateur de gérer efficacement ces informations
                                environnementales et aidera les entreprises à mesurer l'impact
                                environnemental de leurs activités.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">OCP Group</h5>
                            <p class="para">JUIN 2022 - JUIL 2022 | EL Jadida</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">Développeur web</h5>
                                <p class="para">
                                Développer un site web dynamique de la connexion ,ce site permettra
                                aux utilisateurs de se connecter, s'inscrire, changer le mot de passe .
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">Google Inc</h5>
                            <p class="para">2019 - 2020</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">Lead Web developer</h5>
                                <p class="para">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cupiditate vitae 
                                    voluptatem deleniti, 
                                    laboriosam odio nobis quae fugit facilis quo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">Apple</h5>
                            <p class="para">2020 - Present</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">Senior Developer</h5>
                                <p class="para">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cupiditate vitae 
                                    voluptatem deleniti, 
                                    laboriosam odio nobis quae fugit facilis quo.
                                </p>
                            </div>
                        </div>
                    </div> 
                </section>
                <section class="education sect">
                    <h2 class="right-title">Formation</h2>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">FST Settat</h5>
                            <p class="para"> SEPTEMBRE 2023 - présent</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">Master</h5>
                                <p class="para">
                                Master en Sciences et Techniques des Réseaux et Systèmes Informatiques
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">FST Settat</h5>
                            <p class="para">2022 - 2023</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">Licence</h5>
                                <p class="para">
                                Licence en système d'information et transformation digitale.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">FST Settat</h5>
                            <p class="para">2019 - 2022</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">DEUST</h5>
                                <p class="para">
                                Deust en mathématique informatique physique.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">LYCEE IBN KHALDOUN</h5>
                            <p class="para">2018 - 2019</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">Baccalauréat</h5>
                                <p class="para">
                                Baccalauréat sciences physiques</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="awards sect">
                    <h2 class="right-title">Projets</h2>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">Application web</h5>
                            <p class="para">Décembre 2023</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">Excellent Work</h5>
                                <p class="para">
                                création d'une application web de vente du matériel informatique en utilisant Angular et SpringBoot .
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">Application mobile</h5>
                            <p class="para">Mai 2024</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">The Star Student</h5>
                                <p class="para">
                                    création d'une application intelligente en ligne fournissant un
                                    assistant personnel automatique en utilisant Flutter , permettant
                                    d'aider les utilisateurs dans leurs questionnement d'une manière
                                    automatique par texte et voix.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
</body>
</html>
@endsection
