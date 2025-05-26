@extends('layouts.app')
@section('title', 'My Projects')

@section('content')
<u>
    <h2 class="text-3xl font-bold mb-4" style="color: crimson; text-align:center;">Projects</h2>
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
            <h3 class="text-2xl font-semibold mb-2" style="color: purple; text-align:center;">
                Portfolio in
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
            <h3 class="text-2xl font-semibold mb-2" style="color: purple; text-align:center;">Dormitory Management in
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



        <a href="https://github.com/getnet2017/dmudms_project" target="_blank" class="text-blue-500 hover:underline">
            View dmudms_project Repository on GitHub
        </a>
    </div>
    <br><br>
    <div class="project-description"
        style="background-color:rgb(235, 242, 248); padding: 20px; border-radius: 8px; color: #374151; font-family: Arial, sans-serif; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">

        <u>
            <h3 class="text-2xl font-semibold mb-2" style="color: purple; text-align:center;">Forgot_Password in
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
        <a href="https://github.com/getnet2017/forgot_password" target="_blank" class="text-blue-500 hover:underline">
            View dmudms_project Repository on GitHub
        </a>
    </div>

    <!-- Dynamic Project Cards -->
    @foreach($projects as $project)
    <div class="project-card border p-4 mb-4 rounded shadow">
        <h3 class="text-xl font-semibold">{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
        @if($project->link)
        <a href="{{ $project->link }}" target="_blank" class="text-blue-500 hover:underline">View Project</a>
        @endif
    </div>
    @endforeach

    @endsection