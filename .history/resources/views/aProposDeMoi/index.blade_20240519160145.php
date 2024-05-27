@extends('layouts.app')
@section('content')
<div class="container mt-5">
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
        .container {
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
            display: flex;
            justify-content: space-between;
        }
        .photo {
            margin-left: 7%;
            border-radius: 50%;
            width: 130px;
            height: 130px;
            overflow: hidden;
        }
        .des {
            margin-left: 25%;
            margin-top: -10%;
        }   
        h3 {
            color: #2b1285;
            font-weight: bold;
            letter-spacing: .1rem;
            font-size: 20px;
        }
        .right {
            padding: 0;
            margin: 5px;
            margin-top: -10%;
        }
        .right p {
            margin-left: 600px;
            letter-spacing: .1rem;    
        }
        .info {
            width: 20px;
            height: 20px;
        }
        .section {
            background-color: white;
            width: 45%;
        }
        h4 {
            margin-left: 10%;
            color: #2b1285;
            letter-spacing: .1rem;
            font-size: 16px;
        }
        hr.light {
            border-top: 2px solid #2b1285;
            width: 90%;
            margin-top: .1rem;
        }
        .div {
            margin-left: 5%;
        }
        .resume {
            margin: 10px;
        }
        .func {
            margin-top: 5px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        .func ul li {
            position: relative;
            margin-left: 15px;
            padding-left: 25px;
            padding-bottom: 15px;
        }
        .func ul li:hover::before {
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
        .func ul li::before, .func ul li::after {
            content: "";
            display: block;
            position: absolute;
        }
        .func ul li::before {
            width: 7px;
            height: 7px;
            border: 3px solid #3d405b;
            background: #fcfcfc;
            border-radius: 50%;
            left: 0;
            z-index: 1;
        }
        .func ul li::after {
            width: 3px;
            height: 100%;
            background: #3d405b;
            left: 5px;
            top: 0;
        }
    </style>
    <body>
        <main>
            <header>
                <div class="photo">
                    <img src="images/mee.png" width="100%" height="100%" alt="My image">
                </div>
                <div class="des">
                    <h2>Aicha Njimate</h2>
                </div>
                <div class="right">
                    <p><img src="images/email.png" class="info"><strong>Email:</strong> Njimatea@gmail.com</p>
                    <p><img src="images/loca.png" class="info"><strong>Address:</strong> Kenitra, Morocco</p>
                    <p><img src="images/telephone_10945101.png" class="info"><strong>Phone:</strong> +212621309024</p>
                </div>
            </header>
            <div class="container">
                <section class="section">
                    <h4>About Me</h4>
                    <hr class="light">
                    <div class="div">
                        IT engineer (design and development) looking for a challenging 3-month internship 
                        Strong skills in programming languages, software development methodologies, and a passion for creating innovative solutions.
                    </div> 
                    <div class="resume"> 
                        <h4>EDUCATION AND TRAINING</h4>
                        <hr class="light">
                        <div class="func">
                            <div class="work">
                                <ul>
                                    <li><b>Master in Science and Technology <strong>"Computer Networks and Systems"</strong></b><small> SETTAT[01/09/2023 - Current ]</small></li>
                                    <li><b>Bachelor of Science in</b><strong>"Computer Engineering"</strong><br><small> SETTAT [01/09/2022 - 01/06/2023 ] </small></li>
                                    <li><b>DEUST <strong>"Mathematics, Computer Science and Physics"</strong></b><br><small> SETTAT [01/09/2021 - 01/06/2022 ] </small></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="resume"> 
                        <h4>WORK EXPERIENCE</h4>
                        <hr class="light">
                        <div class="func">
                            <div class="work">
                                <ul>
                                    <li><b>Application internship: </b><strong>Sews, Kenitra</strong>
                                        Creation of an online QCM application with <strong>LARAVEL</strong><br><small>[ 01/04/2023 - 01/06/2023 ]</small> <br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <h4>DIGITAL SKILLS</h4>
                    <hr class="light">
                    <div class="div">
                        <div><b>Programming languages: </b>
                            <strong>PHP, C++, Java, Python</strong>
                        </div>
                    </div>
                    <br>
                    <div class="div">
                        <div><b>Modeling: </b>
                            <strong>UML, Merise</strong>
                        </div>
                    </div>
                    <br>
                    <div class="div">
                        <div><b>Databases: </b>
                            <strong>MySQL, Oracle, MongoDB</strong>
                        </div>
                    </div>
                    <br>
                    <div class="div">
                        <div><b>Web technologies: </b>
                            <strong>HTML5, CSS3, JavaScript</strong>
                        </div>
                    </div>
                    <br>
                    <div class="div">
                        <div><b>Framework: </b>
                            <strong>Laravel, Express.js, Socket.io, JavaEE</strong>
                        </div>
                    </div>
                    <br>
                    <div class="div">
                        <div><b>Development Tools: </b>
                            <strong>Git, GitHub, Visual Studio</strong>
                        </div>
                    </div>
                    <br>
                    <div class="resume"> 
                        <h4>LANGUAGE SKILLS</h4>
                        <hr class="light">
                        <div class="func">
                            <div class="work">
                                <ul>
                                    <li><b>Mother tongue(s): <strong>Arabic</strong></b></li>
                                    <li><b>Other language(s):</b><strong>French | English</strong><br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="resume"> 
                        <h4>CERTIFICATION</h4>
                        <hr class="light">
                        <div class="func">
                            <div class="work">
                                <ul>
                                    <li><b>SOLOLEARN:<strong>Html, Css, Java, Sql, JavaScript</strong></b></li>
                                    <li><b>GOOGLE:</b><strong>Project management</strong><br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="resume"> 
                        <h4>HOBBIES AND INTERESTS</h4>
                        <hr class="light">
                        <div class="func">
                            <div class="work">
                                <ul>
                                    <li><b>Programming</b></li>
                                    <li><b>Artificial intelligence</b></li>
                                    <li><b>Photography</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <hr class="light">
        </main>
    </body>
    </html>
</div>
@endsection
