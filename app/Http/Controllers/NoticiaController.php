<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index() 
    {
        $noticia = new Noticia();
        $noticias = $noticia->orderByDesc('data')
                            ->orderByDesc('hora')
                            ->take(5)
                            ->get();
        return view('noticias.index', compact('noticias'));
    }

    public function importar() 
    {
        $noticia = new Noticia();
        $total = 0;
        $novas = 0;
        $cadastradas = 0;
        $pages = [0,30,60,90,120];

        $url = getURL('acesso-informacao');
        
        $lista_noticias = array();
        foreach ($pages as $page) {
            $lista_noticias = extractAcessoInformacao($url.$page);

            foreach ($lista_noticias as $key => $value) {
                $insert = [
                    'manchete' => $value['manchete'],
                    'link' => $value['link'],
                    'data' => $value['data'],
                    'hora' => $value['hora'],
                ];
                $procurar = $noticia->where('manchete', $value['manchete']);
                if ( $procurar->count() > 0) {
                    $cadastradas++;
                } else {
                    $noticia->create($insert);
                    $novas++;
                }
                $total++;
            }
        }
        return view('noticias.importar', compact('total', 'novas', 'cadastradas'));
    }
}
