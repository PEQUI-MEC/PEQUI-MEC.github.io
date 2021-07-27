<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

/**
 * Teams Controller
 */
class TeamsController extends Controller {

    private function get_members_data() {
        $spreadsheet_url="https://docs.google.com/spreadsheets/d/1H9ofWJM28SeQ4Yuig94vHevLLF9hgOXAV48K8nUfk8Y/export?format=csv";

        if(!ini_set('default_socket_timeout', 15)) echo "<!-- unable to change socket timeout -->";

        $contents = file_get_contents($spreadsheet_url);
        #echo $contents;

        $csv = str_getcsv($contents);
        $teams = [];
        foreach (explode(PHP_EOL, $contents) as $key => &$Row) {
            if($key === 0) continue;
            $data = str_getcsv($Row, ",");
            $member = array();
            
            if (!array_key_exists($data[1], $teams)) {
                $teams[$data[1]] = array();
            }
            #$team = $teams[$data[1]];

            if (empty($data[8])) {
                $member["image"] = asset('assets/img/default.jpg');
            } else {
                $member["image"] = $data[8];
            }     
            
            $member["name"] = $data[2];
            $member["description"] = $data[3];
            $member["text"] = $data[2];
            $member["social"] = [
                "linkedin" => $data[4],
                "github" => $data[5],
                "email" => "mailto:" . $data[6]
            ];

            $teams[$data[1]][] = $member;
        }

        return $teams;

    }

    /**
     * Exibir tela interna da equipe @home
     * @return view
     */
    public function home(Request $request) {

        $teams = $this->get_members_data();
        $team = $teams["@Home"];

        $assetsFolder = "assets/img/equipes/home";
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

        $teams = $this->get_members_data();
        $team = $teams["Humanoid"];

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

        $teams = $this->get_members_data();
        $team = $teams["SEK"];

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

        $teams = $this->get_members_data();
        $team = $teams["VSSS"];

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
