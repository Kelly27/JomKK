<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AboutController extends Controller
{
    public function index($locale)
    {
        $intro_en = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique luctus orci, ac dapibus lectus egestas vitae. Integer eget lacus nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas accumsan dolor a purus vehicula, vitae blandit quam laoreet. Maecenas ut feugiat massa. Morbi id pharetra augue. Nullam pulvinar nisi quis nibh tristique dictum ac at risus. Nunc non metus sit amet sapien sagittis vestibulum vel ut mi. Aenean posuere id quam tempus mollis. Maecenas non lorem nec lectus consequat laoreet non sed sapien. Cras non tortor fermentum, sagittis eros non, maximus risus. Pellentesque augue lorem, ornare nec tincidunt at, blandit ac sapien. Morbi lacus metus, vehicula vitae est eu, accumsan facilisis dolor. <br><br>

        Sed nec augue ac augue consectetur imperdiet. Phasellus hendrerit massa quis enim venenatis rhoncus. Mauris lacus nulla, scelerisque sit amet varius vitae, placerat sed sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam varius lacinia diam ut finibus. Nam aliquet risus leo, sed dapibus diam bibendum pretium. Vivamus blandit massa imperdiet magna varius dictum. Curabitur nulla purus, pharetra vel elit at, cursus congue urna. Maecenas urna dolor, consequat non dolor sit amet, pulvinar pellentesque felis. Sed lobortis volutpat odio vitae convallis. Praesent pulvinar neque ac ligula posuere, in fringilla nunc porta. Proin auctor nunc ut sodales pretium. Sed venenatis posuere accumsan. In eget orci augue. <br><br>

        Curabitur non tortor ac ante cursus ultrices. Sed interdum, odio quis sollicitudin tempus, neque purus accumsan orci, quis maximus nisi massa id quam. Etiam in augue maximus, blandit elit vel, ultrices justo. Donec et nisi mi. Fusce posuere tellus nec dui faucibus tristique. Nam semper laoreet pellentesque. Ut varius facilisis erat. Pellentesque rutrum maximus magna, ac ultricies felis posuere eget. Sed ut quam egestas, sollicitudin augue a, vulputate nibh. Quisque et rhoncus tortor.";

        $intro_ch ="边内群信干所展解思认，统京马查花证达要治，极更录装质惹易取。 名经加量铁发它天区，书市族同务定示，查复H可劫茄式。 米立时平革色品音两，得酸毛文老海立，示业束放头外克。 精油华江它委社都之，见现土集极济定等利，什屈询兵录同吴。 完色支质影得米，它做角除达，头B壳可投。 别活复教查改利转题然厂，我并采元B建孝态。
        求广毛始下家收交求，许活速决理史器点，白集极构委列者。
        号它真影劳和空这毛已，取开于米向安张选，标利C严质8增工。
        入海观管七得图那单消世，构意这置E议但团。
        月也际传亲列们红见等，备例算料届画验邮。 千体往包亲战作平活石，布口风论米应间也，志物K卖图蠢块芹。
        规样面团的她酸小总整技验相点，派干使传素问门-态A刷芹茄。 先各运选基作飞省些，力细引要它设号周，放系录孤气选导。
        非权住最看自再式，命点整少放理且议，是刷单T杨心。 非向期三这感场段了从，取龙效给人强要研，识还A别及否叫始。
        般队少日件何省自，计快月6僚将。 备建至动新离结话般角规三进，装才直等确根西众图去领，化即了G省来O身苗发可。 及然车很联的别志话，非照空标种查五始，快圆C抖华我很。
        斯他她外山圆而资则族速，代外增特省非二导参路，需育9蠢毛壳科而条。 列边花值部更存将准，行看京委同领，方达1八H肃秤。 准身标向权业此无社号作人，北流么无对进信今明等说，省管L茄值生芦投吼邮。
        那工者及许利次世，少才长白圆的路类，件-学豆局习。
        等会心料往几边我果界热，要养界值制领亲代完农工，系地3此秧需年取我。 界非政团极单器北认增今深，林入通选争清划争带总，之例来-感变严O拒他。 千权青水示力农会，数具接义着器利体，安9住矿G英。 商县称变定条改内马，用拉里近加风提，社过K区往给住。 水装管小感九即真打统，队民起派是装变主，须主居增八吵技技。";

        $intro_my = "Lorem Ipsum atau Lipsum merupakan satu kaedah atau satu cara yang digunakan dalam penerbitan untuk mempersembahkan elemen grafik dalam sesuatu dokumen dari segi fon, rekabentuk dan rekaletak. Lorem Ipsum juga boleh dijadikan sebagai teks sementara sebelum teks sebenar dimasukkan.

        Walaupun Lorem Ipsum menggunakan tulisan Latin Klasik, ia tidak mempunyai makna. Ini adalah kerana fokus utamanya adalah rupabentuk teks tersebut, bukannya isi kandungannya. Ini kerana apabila teks kelihatan dalam dokumen, seseorang cenderung untuk menumpu kepada kandungan teks bukannya pembentangan tatarajah keseluruhan, dengan itu penerbit menggunakan lorem ipsum apabila menggambarkan typeface atau reka bentuk agar mengalihkan perhatian kepada pembentangan. \"Lorem ipsum\" turut menyerupai taburan huruf dalam bahasa Inggeris, yang membantu mengalih penukaran penumpuan kepada pembentangan.


        Antara perenggan Lorem Ipsum yang termasyhur

        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

        $vision_en = [0 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.',
                      1 => 'Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim '];
        $vision_ch = [0 => '求广毛始下家收交求，许活速决理史器点，白集极构委列者。 它真影劳和空这毛已，取开于米向安张选，标利C严质8增工。',
                      1=> '名经加量铁发它天区，书市族同务定示，查复H可劫茄式。 米立时平革色品音两，得酸毛文老海立，示业束放头外克。'];
        $vision_my = [0 =>'Ini adalah kerana fokus utamanya adalah rupabentuk teks tersebut, bukannya isi kandungannya.',
                      1=> 'Lorem Ipsum atau Lipsum merupakan satu kaedah atau satu cara yang digunakan dalam penerbitan untuk mempersembahkan elemen grafik dalam sesuatu dokumen dari segi fon, rekabentuk dan rekaletak.'];

        App::setLocale($locale);
        $i = 'intro_' . $locale;
        $v = 'vision_' . $locale;
        return view('about.about', [
            'locale' => $locale,
            'intro' => $$i,
            'vision' =>$$v
        ]);
    }
}
