<?php

namespace App\Models;



class post
{
private static $article_post =[
    [
        "title"=>"Pertama",
        "slug"=> "judul-post-pertama",
        "author"=>"Aku",
        "body"=>"aaaLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra mi tincidunt lacinia lobortis. 
                    Fusce eget ornare lorem. Donec iaculis, libero nec pharetra cursus, urna nisi tristique eros, at tincidunt massa arcu vitae purus. 
                    Donec dignissim dolor nec egestas posuere. Vivamus gravida pretium turpis, non tincidunt nunc condimentum in. Ut ut molestie eros. 
                     In accumsan, purus et laoreet finibus, sem lectus sagittis justo, ut tristique quam nibh sed tellus. Vivamus ac dictum sapien, ac fringilla risus.
                    Aenean nunc ipsum, pellentesque vitae molestie eu, rhoncus venenatis eros. Integer in iaculis nisi.
                    Nam condimentum ex sed lobortis aliquam. Praesent elementum, erat in dictum mollis, erat nisi laoreet quam, id rutrum sapien massa commodo est.
                    Morbi sit amet convallis purus, nec dignissim augue. Curabitur luctus elit id nisl dignissim eleifend. 
                    Ut convallis suscipit blandit. Curabitur fringilla, orci in condimentum auctor, massa ipsum pretium nulla, ac elementum ex quam non lacus. Etiam tincidunt tellus id erat molestie varius. 
                    Nunc venenatis auctor metus, ac tempus tortor feugiat rhoncus. 
                    Etiam imperdiet, felis et lacinia sodales, est leo efficitur justo, eu dignissim turpis urna at ligula. Mauris id euismod dolor. 
                    Proin sed consequat ipsum, in eleifend dui. Morbi in sagittis odio. Cras neque nisl, pulvinar ut lacus eget, rutrum aliquam mauris."
    ],
    [
        "title"=>"Kedua",
        "slug"=> "judul-post-kedua",
        "author"=>"Kamu",
        "body"=>"aaaLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra mi tincidunt lacinia lobortis. 
                    Fusce eget ornare lorem. Donec iaculis, libero nec pharetra cursus, urna nisi tristique eros, at tincidunt massa arcu vitae purus. 
                    Donec dignissim dolor nec egestas posuere. Vivamus gravida pretium turpis, non tincidunt nunc condimentum in. Ut ut molestie eros. 
                     In accumsan, purus et laoreet finibus, sem lectus sagittis justo, ut tristique quam nibh sed tellus. Vivamus ac dictum sapien, ac fringilla risus.
                    Aenean nunc ipsum, pellentesque vitae molestie eu, rhoncus venenatis eros. Integer in iaculis nisi.
                    Nam condimentum ex sed lobortis aliquam. Praesent elementum, erat in dictum mollis, erat nisi laoreet quam, id rutrum sapien massa commodo est.
                    Morbi sit amet convallis purus, nec dignissim augue. Curabitur luctus elit id nisl dignissim eleifend. 
                    Ut convallis suscipit blandit. Curabitur fringilla, orci in condimentum auctor, massa ipsum pretium nulla, ac elementum ex quam non lacus. Etiam tincidunt tellus id erat molestie varius. 
                    Nunc venenatis auctor metus, ac tempus tortor feugiat rhoncus. 
                    Etiam imperdiet, felis et lacinia sodales, est leo efficitur justo, eu dignissim turpis urna at ligula. Mauris id euismod dolor. 
                    Proin sed consequat ipsum, in eleifend dui. Morbi in sagittis odio. Cras neque nisl, pulvinar ut lacus eget, rutrum aliquam mauris."
    ]
    ];

    public static function all(){
        return collect(self:: $article_post); //collection
    }

    public static function find($slug){
       $posted= static::all();
     
       return $posted->firstWhere('slug',$slug);
    } 
}