<?php

namespace App\Http\Controllers;
use Parsedown;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Inertia\Inertia;

class BlogController extends Controller
{

    public function index()
    {
        $posts = collect(scandir(resource_path('blog')))
                    ->filter(fn($file) => substr($file, -3) === '.md')
                    ->map(function ($file) {
                        $document = YamlFrontMatter::parse(file_get_contents(resource_path("blog/{$file}")));
    
                        return [
                            'title' => $document->matter('title'),
                            'meta_description' => $document->matter('meta_description'),
                            'date' => $document->matter('date'),
                            'category' => $document->matter('category'),
                            'slug' => basename($file, '.md'),
                        ];
                    })
                    ->values();
    
        return Inertia::render('Blog', ['posts' => $posts]);
    }
    

    public function show($slug)
    {
        $path = resource_path("blog/{$slug}.md");
    
        if (!file_exists($path)) {
            abort(404);
        }
    
        $markdown = file_get_contents($path);
        $document = YamlFrontMatter::parse($markdown);
    
        $parsedown = new Parsedown();
        $contentHtml = $parsedown->text($document->body()); // Convert Markdown to HTML
    
        $post = [
            'title' => $document->matter('title'),
            'meta_description' => $document->matter('meta_description'),
            'date' => $document->matter('date'),
            'category' => $document->matter('category'),
            'content' => $contentHtml, 
        ];
    
        return Inertia::render('Leggi', ['post' => $post]);
    }
    
    

}
