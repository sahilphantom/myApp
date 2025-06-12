<?php

namespace App\Http\Controllers;

class BlogController extends Controller{
    public function blog(){
         $posts = [
             [
        'title' => 'Getting Started with Laravel',
        'summary' => 'Learn the basics of setting up your first Laravel project.',
        'author' => 'Ali Raza',
        'published' => true,
    ],
    [
        'title' => 'Understanding Blade Templates',
        'summary' => 'A guide to mastering Laravel’s Blade templating engine.',
        'author' => 'Hira Khan',
        'published' => true,
    ],
    [
        'title' => 'Laravel Routing Explained',
        'summary' => 'Learn how Laravel handles web routes with examples.',
        'author' => 'Usman Ahmed',
        'published' => false,
    ],
    [
        'title' => 'Database Migrations in Laravel',
        'summary' => 'How to manage and version your database using migrations.',
        'author' => 'Fatima Noor',
        'published' => true,
    ],
    [
        'title' => 'Eloquent ORM Basics',
        'summary' => 'An introduction to working with databases using Eloquent.',
        'author' => 'Zain Malik',
        'published' => false,
    ],
    [
        'title' => 'Working with Controllers',
        'summary' => 'How to organize your Laravel logic using controllers.',
        'author' => 'Ayesha Tariq',
        'published' => true,
    ],
    [
        'title' => 'Creating Reusable Layouts',
        'summary' => 'Structure your Blade views with layouts and components.',
        'author' => 'Hassan Shah',
        'published' => true,
    ],
    [
        'title' => 'Form Handling in Laravel',
        'summary' => 'Accept, validate, and process form data in your app.',
        'author' => 'Sana Iqbal',
        'published' => false,
    ],
    [
        'title' => 'Laravel Validation Tips',
        'summary' => 'Best practices for validating user input.',
        'author' => 'Bilal Asif',
        'published' => true,
    ],
    [
        'title' => 'Deploying Laravel Projects',
        'summary' => 'Steps to deploy your Laravel app to a live server.',
        'author' => 'Mariam Akhtar',
        'published' => true,
    ],
         ];

        return view("blog" , [
            'posts' => $posts
        ]);
    }
}