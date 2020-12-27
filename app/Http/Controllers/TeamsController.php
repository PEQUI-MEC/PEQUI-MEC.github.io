<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

/**
 * Teams Controller
 */
class TeamsController extends Controller {

    /**
     * Exibir tela interna da equipe @home
     * @return view
     */
    public function home(Request $request) {

        $team = [
            [
                "image" => "https://inspirothemes.com/polo/images/team/6.jpg",
                "name" => "Alea Smith",
                "description" => "Engenharia da Computação",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/7.jpg",
                "name" => "Ariol Doe",
                "description" => "Engenharia Elétrica",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/8.jpg",
                "name" => "Emma Ross",
                "description" => "Engenharia Mecânica",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/9.jpg",
                "name" => "Victor Loda",
                "description" => "Ciência da Computação",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ]
        ];

        for ($i = 0; $i < random_int(1, 3); $i++) {
            array_push($team, $team[random_int(0, count($team) - 1)]);
        }

        $assetsFolder = "assets/img/equipes/humanoide";
        $path = public_path($assetsFolder);

        $files = File::files($path);
        $gallery = [];

        foreach ($files as $f) {
            array_push($gallery, asset($assetsFolder."/".$f->getFilename()));
        }

        return view("equipes.home", [
            "team" => $team, "gallery" => $gallery
        ]);
    }
    
    /**
     * Exibir tela interna da equipe humanóde
     * @return view
     */
    public function humanoide(Request $request) {

        $team = [
            [
                "image" => "https://inspirothemes.com/polo/images/team/6.jpg",
                "name" => "Alea Smith",
                "description" => "Engenharia da Computação",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/7.jpg",
                "name" => "Ariol Doe",
                "description" => "Engenharia Elétrica",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/8.jpg",
                "name" => "Emma Ross",
                "description" => "Engenharia Mecânica",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/9.jpg",
                "name" => "Victor Loda",
                "description" => "Ciência da Computação",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ]
        ];

        for ($i = 0; $i < random_int(1, 3); $i++) {
            array_push($team, $team[random_int(0, count($team) - 1)]);
        }

        $assetsFolder = "assets/img/equipes/humanoide";
        $path = public_path($assetsFolder);

        $files = File::files($path);
        $gallery = [];

        foreach ($files as $f) {
            array_push($gallery, asset($assetsFolder."/".$f->getFilename()));
        }

        return view("equipes.humanoide", [
            "team" => $team, "gallery" => $gallery
        ]);
    }

    /**
     * Exibir tela interna da equipe SEK
     * @return view
     */
    public function sek(Request $request) {

        $team = [
            [
                "image" => "https://inspirothemes.com/polo/images/team/6.jpg",
                "name" => "Alea Smith",
                "description" => "Engenharia da Computação",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/7.jpg",
                "name" => "Ariol Doe",
                "description" => "Engenharia Elétrica",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/8.jpg",
                "name" => "Emma Ross",
                "description" => "Engenharia Mecânica",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/9.jpg",
                "name" => "Victor Loda",
                "description" => "Ciência da Computação",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ]
        ];

        for ($i = 0; $i < random_int(1, 3); $i++) {
            array_push($team, $team[random_int(0, count($team) - 1)]);
        }

        $assetsFolder = "assets/img/equipes/sek";
        $path = public_path($assetsFolder);

        $files = File::files($path);
        $gallery = [];

        foreach ($files as $f) {
            array_push($gallery, asset($assetsFolder."/".$f->getFilename()));
        }

        return view("equipes.sek", [
            "team" => $team, "gallery" => $gallery
        ]);
    }

    /**
     * Exibir tela interna da equipe VSS
     * @return view
     */
    public function vsss(Request $request) {

        $team = [
            [
                "image" => "https://inspirothemes.com/polo/images/team/6.jpg",
                "name" => "Alea Smith",
                "description" => "Engenharia da Computação",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/7.jpg",
                "name" => "Ariol Doe",
                "description" => "Engenharia Elétrica",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/8.jpg",
                "name" => "Emma Ross",
                "description" => "Engenharia Mecânica",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ],
            [
                "image" => "https://inspirothemes.com/polo/images/team/9.jpg",
                "name" => "Victor Loda",
                "description" => "Ciência da Computação",
                "text" => "The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet.",
                "social" => [
                    "facebook" => "faceboom.com/victornoleto",
                    "twitter" => "twitter.com/victornoleto",
                    "instagram" => "instagram.com/victornoleto"
                ]
            ]
        ];

        for ($i = 0; $i < random_int(1, 3); $i++) {
            array_push($team, $team[random_int(0, count($team) - 1)]);
        }

        $assetsFolder = "assets/img/equipes/vsss";
        $path = public_path($assetsFolder);

        $files = File::files($path);
        $gallery = [];

        foreach ($files as $f) {
            array_push($gallery, asset($assetsFolder."/".$f->getFilename()));
        }

        return view("equipes.vsss", [
            "team" => $team, "gallery" => $gallery
        ]);
    }

}
