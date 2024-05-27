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
    
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

main {
    box-shadow: 30px 0px 40px rgb(196, 196, 196), -30px 0px 40px rgb(196, 196, 196);
    margin: auto;
    max-width: 900px;
}

.srkl {
    display: flex;
    justify-content: space-between;
    margin-top: 25px;
    background-color: white;
    width: 100%;
}
header {
    height: 160px;
    padding-top: 10px;
    color: white;
    background-color: #7777af;
}

.photo {
    margin-left: 7%;
    border-radius: 50%;
    width: 130px;
    height: 130px;
    overflow: hidden;
}
.des{
    margin-left: 25%;
    margin-top: -10%;
}   
h3{
    color: #2b1285;
    font-weight: bold;
    letter-spacing: .1rem;
    font-size: 20px;
}

.right{
    padding: 0;
    margin: 5px;
    margin-top: -10%;
}
.right p{
   margin-left: 600px;
   letter-spacing: .1rem;    
}
.info{
    width: 20px;
    height: 20px;
}
.section-left{
    background-color: white;
    float: left;
    width: 400px;
}
.section-right{
    background-color: white;
    float: right;
    width: 400px;
}
 h4{
    margin-left: 10%;
    color: #2b1285;
    letter-spacing: .1rem;
    font-size: 16px;
}
hr.light{
 border-top: 2px solid #2b1285;
 width: 90%;
 margin-top: .1rem;

}
.atouts{
    margin-left: 10%;
}
.div{
    margin-left: 5%;
   
}

.skls {
    padding: 0px;
    width: 40%;
    margin-left: 10%
}
.cool {
    background-color: #fff;
    border: 2px solid #ccc;
    width: 300px;
    height: 7px;
}

.po {
    margin-top: 20px;
}
strong{
    color: #0bb5f4;
    text-decoration: none; 
}

.interet{
    margin-left: 10%;
}
span{
    margin-left: 10px;
}
.resume{
   
}
.light {
    margin-bottom: 0; /* Supprime la marge en bas de la ligne horizontale */
}

.func {
    margin-top: 5px; /* Ajoute une marge en haut du paragraphe suivant */
}
ul {
    list-style-type: none;
    padding: 0;
  }
  
  .resume .base, .resume .func {
    box-sizing: border-box;
    float: left;
  }
  .resume .base > div, .resume .func > div {
    padding-bottom: 10px;
  }
  .resume .base > div:last-of-type, .resume .func > div:last-of-type {
    padding-bottom: 0;
  }
  
.resume .func {
    width: 645px;
    padding: 30px 25px;
  }

 
  
  .resume .func .work ul li, .resume .func .edu ul li {
    position: relative;
    margin-left: 15px;
    padding-left: 25px;
    padding-bottom: 15px;
  }
  .resume .func .work ul li:hover::before, .resume .func .edu ul li:hover::before {
    animation: circle 1.2s infinite;
  }
  
  @keyframes circle {
    from {
      box-shadow: 0 0 0 0px #3d405b;
    }
    to {
      box-shadow: 0 0 0 6px rgba(61, 64, 91, 0);
    }
  }
  .resume .func .work ul li:first-of-type::before, .resume .func .edu ul li:first-of-type::before {
    width: 10px;
    height: 10px;
    left: -2px;
  }
  .resume .func .work ul li:last-of-type, .resume .func .edu ul li:last-of-type {
    padding-bottom: 3px;
  }
  .resume .func .work ul li:last-of-type::after, .resume .func .edu ul li:last-of-type::after {
    border-radius: 1.5px;
  }
  .resume .func .work ul li::before, .resume .func .work ul li::after, .resume .func .edu ul li::before, .resume .func .edu ul li::after {
    content: "";
    display: block;
    position: absolute;
  }
  .resume .func .work ul li::before, .resume .func .edu ul li::before {
    width: 7px;
    height: 7px;
    border: 3px solid #3d405b;
    background: #fcfcfc;
    border-radius: 50%;
    left: 0;
    z-index: 1;
  }
  .resume .func .work ul li::after, .resume .func .edu ul li::after {
    width: 3px;
    height: 100%;
    background: #3d405b;
    left: 5px;
    top: 0;
  }
  .resume .func .work ul li span, .resume .func .edu ul li span {
    transition-duration: 0.3s;
  }
  .resume .func .work {
    width: 42%;
  }
  .resume .func .edu {
    width: 58%;
  }
  .resume .func .skills-prog {
    clear: both;
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

</body>
</html>
@endsection
