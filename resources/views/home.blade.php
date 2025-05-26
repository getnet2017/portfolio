@extends('layouts.app')
@section('title', 'Home')

@section('content')
<h1 class="text-4xl font-bold mb-4">Hi, I'm Getnet Amare</h1>
<h3 style="color:blue"><i>Welcome to my portfolio website!</i></h3>

<p>
    <b><u>About Me</u></b><br>

<p>

    I am a 5th-year Software Engineering student with a strong academic background and a solid foundation in computer
    science principles and algorithms. Throughout my studies, I have completed coursework in object-oriented
    programming,
    database systems, web technologies, mobile application development, and software project management, which has
    provided
    me with a broad and deep understanding of the software development lifecycle.

    I have gained hands-on experience by working on real-world software development projects, which has helped me
    develop
    skills in both front-end and back-end development. I am proficient in HTML, CSS, JavaScript, and PHP, and have
    practical
    experience with frameworks such as Laravel and Bootstrap. Additionally, I am familiar with RESTful APIs and handling
    JSON data, which enhances my ability to integrate different systems effectively.

    My technical skillset also includes basic knowledge of Python and Java, along with comfort in working with MySQL and
    PostgreSQL databases. I have a solid understanding of system design and software testing methodologies, and I am
    proficient in version control tools such as Git and GitHub, which I use to collaborate efficiently in team-based
    development environments.

    I am experienced with essential development tools including Postman, Figma, and Visual Studio Code, and I am
    comfortable
    working in both Linux and Windows environments. My knowledge extends to Agile and Scrum methodologies, allowing me
    to
    adapt well to modern software project workflows.

    Throughout my academic journey and practical experiences, I have developed into an effective team player who thrives
    in
    collaborative environments. I am passionate about continuous learning, innovation, and professional growth, and I am
    eager to apply my skills and knowledge to contribute meaningfully to the tech community.
</p>
<br>
<br>
<b><u>
        <h1 style="color: green;">Technical Skills</h1>
    </u></b>
<ul class="list-disc ml-6 mt-4">
    <li>Proficient in HTML, CSS, JavaScript, and PHP</li>
    <br>
    <li>Experience with Laravel and Bootstrap frameworks</li>
    <br>
    <li>Familiar with RESTful APIs and JSON data handling</li>
    <br>
    <li>Basic knowledge of Fundamental progrmming and Java</li><br>
    <li>Proficient in object-oriented programming</li><br>
    <li>Skilled in both front-end and back-end development</li><br>
    <li>Comfortable with MySQL</li>
</ul>
<br><br>
<u>
    <h2 style="color: maroon;">Projects</h2>
</u>
<!-- Outer Card -->
<div class="bg-white p-6 rounded-lg shadow mb-6">


    <!-- Card Body -->
    <style>
        .project-description:hover {
            background-color: rgb(165, 210, 165) !important;
            transition: background-color 0.3s ease;

        }

        a :hover {
            text-underline-offset: underline;

        }
    </style>
    <div class="project-description"
        style="background-color:rgb(235, 242, 248); padding: 20px; border-radius: 8px; color: #374151; font-family: Arial, sans-serif; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">

        <u>
            <h3 class="text-2xl font-semibold mb-2" style="color: purple; text-align:center;">Portfolio in
                Laravel</h3>
        </u>
        <p style="margin-bottom: 12px;">
            This is a personal portfolio web application built using the Laravel PHP framework...
        </p>
        <ul style="list-style-type: disc; padding-left: 20px; margin-bottom: 12px;">
            <li>Home page with an introduction</li>
            <li>About me section</li>
            <li>Project listings with descriptions</li>
            <li>Contact form to get in touch</li>
            <li>Uses Blade templating engine for views</li>
            <li>Follows MVC architecture for clean code organization</li>
        </ul>
        <p style="margin-bottom: 20px;">
            This portfolio demonstrates my ability to build modern web applications...
        </p>
        <br>

        <a href="https://github.com/getnet2017/portfolio" target="_blank" class="text-blue-500 hover:underline">
            View Portfolio Repository on GitHub
        </a>

    </div>

    <br><br>
    <div class="project-description"
        style="background-color:rgb(235, 242, 248); padding: 20px; border-radius: 8px; color: #374151; font-family: Arial, sans-serif; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">

        <u>
            <h3 class="text-2xl font-semibold mb-2" style="color: purple; text-align:center;">Dormitory Management
                System in
                Laravel</h3>
        </u>
        <p style="margin-bottom: 12px;">
            This is a dormitory management web application built using the Laravel PHP framework. It helps manage
            student housing in universities and colleges.
        </p>
        <ul style="list-style-type: disc; padding-left: 20px; margin-bottom: 12px;">
            <li>Student registration and dorm assignment</li>
            <li>Room and building management</li>
            <li>Role-based access for Admin, Manager, and Student</li>
            <li>Student request and complaint handling</li>
            <li>Simple dashboard for monitoring dorm activity</li>
            <li>Uses Blade templates and MVC architecture</li>
        </ul>
        <p style="margin-bottom: 20px;">
            This system improves dormitory management by making the process faster, organized, and more efficient.
        </p>



        <a href="https://github.com/gtnet2017/dmudms_project" target="_blank" class="text-blue-500 hover:underline">
            View dmudms_project Repository on GitHub
        </a>
    </div>
    <br><br>
    <div class="project-description"
        style="background-color:rgb(235, 242, 248); padding: 20px; border-radius: 8px; color: #374151; font-family: Arial, sans-serif; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">

        <u>
            <h3 class="text-2xl font-semibold mb-2" style="color: purple; text-align:center;">Forgot Password System in
                Laravel</h3>
        </u>
        <p style="margin-bottom: 12px;">
            This is a secure password reset feature built using the Laravel PHP framework. It allows users to reset
            their forgotten passwords via email verification.
        </p>
        <ul style="list-style-type: disc; padding-left: 20px; margin-bottom: 12px;">
            <li>User submits email for password reset</li>
            <li>Verification link sent through email</li>
            <li>Token-based secure reset process</li>
            <li>Simple and responsive UI for input</li>
            <li>Validation and error handling included</li>
            <li>Uses built-in Laravel Auth and Mail system</li>
        </ul>
        <p style="margin-bottom: 20px;">
            This project enhances user experience and account security by providing a reliable and easy-to-use password
            recovery process.
        </p>

        <a href="https://github.com/getnet2017/forgot_password" target="_blank" class="text-blue-500 hover:underline">
            View forgot_password Repository on GitHub
        </a>
    </div>

    <br><br>
    <u>
        <h2 class="text-3xl font-bold mb-4" style="color:magenta">Contact</h2>
    </u>

    <!-- Add Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @if(session('success'))
    <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="mt-10 space-y-8 text-4xl">
        <!-- Email with icon and link to mailto: -->
        <p class="flex items-center space-x-6">
            <i class="fas fa-envelope text-blue-600" style="font-size: 2rem;"></i>
            <strong>
                <a href="{{ route('email.contact') }}" class="hover:underline text-blue-800">
                    E-mail
                </a>
            </strong>
        </p>
        <br><br>
        <!-- Phone with icon -->
        <p class="flex items-center space-x-6">
            <i class="fas fa-phone-alt text-green-600" style="font-size: 2rem;"></i>
            <strong class="text-gray-800">Phone:</strong>
            <span class="text-black">0918097194</span>
        </p>
        <br><br>
        <!-- Telegram with icon and link to Telegram -->
        <p class="flex items-center space-x-6">
            <i class="fab fa-telegram-plane text-blue-500" style="font-size: 2rem; padding:5px;"></i>
            <strong class="text-gray-800">
                Telegram:
                <a href="https://t.me/getnet1621" target="_blank" class="hover:underline text-blue-700">
                    t.me/@getnet1621
                </a>
            </strong>
        </p>
        <br><br>
        <!-- GitHub with icon and link -->
        <p class="flex items-center space-x-6 mt-8">
            <i class="fab fa-github text-gray-800" style="font-size: 2rem;"></i>
            <strong class="text-gray-800">
                GitHub:
                <a href="https://github.com/getnet2017" target="_blank" class="hover:underline text-blue-700">
                    github.com/getnet2017
                </a>
            </strong>
        </p>
    </div>



    @endsection