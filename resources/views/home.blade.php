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
</div>



@endsection