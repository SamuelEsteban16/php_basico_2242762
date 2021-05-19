<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{

    //cliente
    public function formulario_buscador(){
        //mostrar formulario del metabuscador
        return view("metabuscador");

    }

    //servidor donde llegan los datos
    public function buscar(){

        $termino=$_POST["termino"];
        $motores=$_POST["motores"];
        echo $motores;
        switch($motores){
            case 1://redireccionar a google
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2: //debe redirecionar a gib
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3: //debe redirecionar a Duckduckgo
                return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 4: //debe redirecionar a baidu
                return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=moto&fenlei=256&oq=$termino");
                break;
            case 5: //debe redirecionar a  Yahoo
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 6: //debe redirecionar a Yandex
                return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
            case 7: //debe redirecionar a naver
                return redirect()->to("https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=0&ie=utf8&query=$termino");
                break;
            case 8: //debe redirecionar a ecosia
                return redirect()->to("https://www.ecosia.org/search?q=$termino");
                break;
            case 9: //debe redirecionar a wolframalpha
                return redirect()->to("https://www.wolframalpha.com/input/?i=$termino");
                break;
            case 10: //debe redirecionar a qwant
                return redirect()->to("https://www.qwant.com/?l=es&q=$termino");
                break;
        }

        //print_r($_POST);


    }
}

