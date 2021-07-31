<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

/**
 * Publications Controller
 * 0 Carimbo de data/hora
 * 1 Endereço de e-mail
 * 2 Equipe
 * 3 Idioma do trabalho
 * 4 Ano de publicação/defesa
 * 5 Título do trabalho
 * 6 Lista de autores
 * 7 Local de Publicação
 * 8 Tipo do Trabalho
 * 9 Curso Acadêmico
 * 10 Tipo do Curso Acadêmico
 * 11 Link do PDF do Trabalho
 * 12 Upload do PDF do Trabalho
 * 13 GitHub
 */
class PublicationsController extends Controller {

    private function get_publications() {
        //https://docs.google.com/spreadsheets/d/1ThLAcvEL1faDrJKJo4cbHhX8RDtv3RcPj6mze2Q99Bs/edit?usp=sharing
        $spreadsheet_url="https://docs.google.com/spreadsheets/d/1ThLAcvEL1faDrJKJo4cbHhX8RDtv3RcPj6mze2Q99Bs/export?format=csv";

        if(!ini_set('default_socket_timeout', 15)) echo "<!-- unable to change socket timeout -->";

        $contents = file_get_contents($spreadsheet_url);
        #echo $contents;

        $csv = str_getcsv($contents);
        $publications = [];
        $publications["tdp"] = array();
        $publications["general"] = array();
        foreach (explode(PHP_EOL, $contents) as $key => &$Row) {
            if($key === 0) continue;
            $data = str_getcsv($Row, ",");
            $pub = array();
            
            $key = "general";
            if ($data[8] == "TDP (Team Descriptor Paper)") {
                $key = "tdp";
            }
            #$team = $publications[$data[1]];

            $pub = [
                "equipe" => $data[2],
                "idioma" => $data[3],
                "ano" => $data[4],
                "titulo" => $data[5],
                "autores" => $data[6],
                "tipo" => $data[8],
                "curso" => $data[9],
                "tipo_curso" => $data[10]
            ];

            if (!empty($data[7])) {
                $pub["local"] = $data[7];
            }

            if (!empty($data[11])) {
                $pub["link_pdf"] = $data[11];
            } else {
                $pub["link_pdf"] = $data[12];
            }

            if (!empty($data[13])) {
                $pub["github"] = $data[13];
            }

            #print_r($pub);

            $publications[$key][] = $pub;
        }

        $ano = array_column($publications["general"], 'ano');
        array_multisort($ano, SORT_DESC, $publications["general"]);

        $ano = array_column($publications["tdp"], 'ano');
        array_multisort($ano, SORT_DESC, $publications["tdp"]);
        #$equipe = array_column($publications["tdp"], 'equipe');
        #array_multisort($equipe, SORT_DESC, $publications["tdp"]);

        return $publications;

    }

    /**
     * Exibir tela interna da equipe @home
     * @return view
     */
    public function publications(Request $request) {

        $publications = $this->get_publications();

        $assetsFolder = "assets/img/";
        $path = public_path($assetsFolder);

        $files = File::files($path);
        $gallery = [];

        foreach ($files as $f) {
            array_push($gallery, asset($assetsFolder."/".$f->getFilename()));
        }

        return view("publications", [
            "pubs_general" => $publications["general"], "pubs_tdp" => $publications["tdp"], "gallery" => $gallery
        ]);
    }
}
