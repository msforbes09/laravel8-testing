<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('test.index'));
});

// Home > About
Breadcrumbs::for('mail', function ($trail) {
    $trail->parent('home');
    $trail->push('Mail', route('test.mail'));
});

// Home > Blog
Breadcrumbs::for('pdf', function ($trail) {
    $trail->parent('mail');
    $trail->push('DomPDF', route('test.domPDF'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});
