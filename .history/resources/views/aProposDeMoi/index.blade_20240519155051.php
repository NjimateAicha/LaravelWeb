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
    <main>
        <header>
            <div class="photo">
                <img src="image/mee.png"  width ="100%" height="100%"alt="ùon image">
            </div>
            <div class="des">
                <h2>Aicha Njimate</h2>
              
      
            </div>
            
            <div class="right">
            
                  
                <p><img src="image/email.png" class="info"><strong> Email:</strong> Njimatea@gmail.com</p>
                <p><img src="image/loca.png" class="info"> <strong> Adress:</strong>Kenitra_Morocco</p>
               <p><img src="image/telephone_10945101.png" class="info"><strong> Phone:</strong> +212621309024</p>
                

            </div>
            

        </header>
        <section class="section-left">
            
            <h4>About Me</h4>
            <hr class="light">
            
            <div class="div">
                IT engineer (design and development) looking for a challenging 3-month internship 
                 Strong skills in programming languages, software development methodologies, and a passion for creating
                    innovative solutions.
            </div> 
                <div class="resume"> 
                    <h4>EDUCATION AND TRAINING</h4>
                    <hr class="light">
                    <div class="func">
                        <div class="work">
                        
                          <ul>
                            <li><b>Master in Science and Technology <strong> "Computer Networks and Systems"</strong></b><small> SETTAT[01/09/2023 - Current ]</small></li>
                            <li><b>Bachelor of Science in</b><strong>"Computer Engineering"</strong><br><small> SETTAT [01/09/2022 - 01/06/2023 ] </small></li>
                            <li><b>DEUST <strong> "Mathematics, Computer Science and Physics</strong></b><br><small> SETTAT [01/09/2021 - 01/06/2022 ] </small></li>
                          </ul>
                        </div>
                </div>
            
           
            
                <div class="resume"> 
                    <h4>WORK EXPERIENCE</h4>
                    <hr class="light">
                    <div class="func">
                        <div class="work">
                        
                          <ul>
                            <li><b>Application internship: </b><strong>Sews , Kenitra</strong>
                                Creation of an online QCM application with <strong> LARAVEL</strong><br><small> [ 01/04/2023 - 01/06/2023 ] </small> <br></li>
                          </ul>
                        </div>
                </div>
               
         


                



        </section>
        <section class="section-right">
           <h4>DIGITAL SKILLS </h4>
           <hr class="light">
            <div class="div">
                <div><b>Programming languages: </b>
                    <strong>PHP, C++,Java ,Python</strong>
                </div>
            </div>
            <br>
            <div class="div">
                <div><b>Modeling: </b>
                    <strong> UML , Merise</strong>
                </div>
            </div>
            <br>
            <div class="div">
                <div><b>Databases: </b>
                    <strong>MySQL ,Oracle and MongoDB</strong>
                </div>
            </div>
            <br>
            <div class="div">
                <div><b> Web technologies : </b>
                    <strong>HTML5, Css3 and Javascript</strong>
                </div>
            </div>
            <br>
            <div class="div">
                <div><b>  Framework: </b>
                    <strong>LaraveL, Express.js, Socket.io, JavaEE </strong>
                </div>
            </div>
            <br>
        
            <div class="div">
                <div><b>Development Tools: </b>
                    <strong> Git,  GitHub, Visual Studio  </strong>
                </div>
            </div>
            <br>
               
          
           
           
            </div> 
            <div class="resume"> 
                <h4> LANGUAGE SKILLS</h4>
                <hr class="light">
                <div class="func">
                    <div class="work">
                    
                      <ul>
                        <li><b>Mother tongue(s): <strong> Arabic</strong></b></li>
                        <li><b> Other language(s):</b><strong>French | English</strong><br></li>
 
                      </ul>
                    </div>
            </div>
            <div class="resume"> 
                <h4> CERTIFICATION </h4>
                <hr class="light">
                <div class="func">
                    <div class="work">
                    
                      <ul>
                        <li><b>SOLOLEARN:<strong> Html, Css ,Java ,Sql ,JavaScript</strong></b></li>
                        <li><b> GOOGLE:</b><strong>Project management</strong><br></li>
 
                      </ul>
                    </div>
            </div>
          
            <div class="resume"> 
                <h4> HOBBIES AND INTERESTS </h4>
                <hr class="light">
                <div class="func">
                    <div class="work">
                    
                      <ul>
                        <li><b>Programming</b></li>
                        <li><b>Artificial intelligence </b></li>
                        <li><b>Photography</b></li>
 
                      </ul>
                    </div>
            </div>
          
        </section>
        <div class="srkl">

        </div>
        <hr class="light">
    </main>
</body>
</html>
@endsection
