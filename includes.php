<?php
  use Handlebars\Handlebars;
  $engine = new Handlebars(array(
    'loader' => new \Handlebars\Loader\FilesystemLoader(__DIR__.'/views/'),
    'partials_loader' => new \Handlebars\Loader\FilesystemLoader(
        __DIR__ . '/views/partials/'
    )
));
