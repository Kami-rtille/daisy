
@extends("layouts.general")

@section("content")
    define('content_path', dirname(__DIR__).DIRECTORY_SEPARATOR.'content');

   $app = new \Slim\Slim(['debug' => true]);

   $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(content_path));
    
   @foreach($files as $files)
    var_dump($files);
   @endforeach
   
@endsection

