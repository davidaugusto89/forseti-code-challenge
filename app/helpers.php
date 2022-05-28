<?php

function getURL($site) {
    switch ($site) {
        case 'acesso-informacao':
            $return = 'https://www.gov.br/compras/pt-br/acesso-a-informacao/noticias?b_start:int=';
        break;
        
        default:
            $return = '';
        break;
    }
    return $return;
}

function loadHTML($url) {
    $dom = new DomDocument();
    @$dom->loadHTMLFile($url);

    return $dom;
}

function extractTag($dom, $tagHTML, $className) {
    $tag_search = new DomXPath($dom);
    $query = sprintf("//%s[@class='%s']", $tagHTML, $className);
    return $tag_search->query($query);     
}

function matchDate($value) {
    preg_match('/(\w\w\/\w\w\/\w\w\w\w)/', $value, $return);
    return implode('-', array_reverse(explode('/', $return[0])));
}

function matchHour($value) {
    preg_match('/(\w\wh\w\w)/', $value, $return);
    return str_replace('h', ':', $return[0]).':00';
}

function extractAcessoInformacao($url){
    if ( !empty($url) ) {
        $dom = loadHTML($url);
        $manchete = extractTag($dom, '*', 'summary url');            
        $data_hora = extractTag($dom, 'span',  'documentByLine');

        $noticias = [];
        for ($i = 0; $i < $manchete->length; $i++) {
            $noticias[$i]['manchete'] = $manchete->item($i)->nodeValue;
            $noticias[$i]['data'] = matchDate($data_hora->item($i)->nodeValue);
            $noticias[$i]['hora'] = matchHour($data_hora->item($i)->nodeValue);
            $noticias[$i]['link'] = $manchete->item($i)->getAttribute('href');
        }
        return $noticias;
    } else {
        echo 'Nenhuma url informada';
        die();
    }
}

?>