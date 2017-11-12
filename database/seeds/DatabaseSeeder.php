<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ipsum_text_en = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non augue facilisis, ullamcorper sem non, molestie odio. Sed malesuada nunc enim, et gravida purus dapibus in. Nunc nec ligula enim. Nam sapien felis, scelerisque et arcu eget, auctor tempus libero. Sed nec elit fringilla, blandit metus et, imperdiet nisi. Fusce eget eros feugiat, sollicitudin dolor quis, faucibus magna. Nam ornare id turpis ut mattis. Ut bibendum blandit massa. Vivamus iaculis sagittis tortor sed lobortis. </br></br>

        Donec pellentesque odio mi, gravida finibus neque tincidunt quis. Ut viverra interdum nunc, et auctor ipsum dapibus ornare. Fusce in dolor gravida, consectetur dolor ac, dapibus erat. Morbi maximus turpis nec orci sodales consectetur. Fusce gravida tempor odio, ut commodo enim fringilla quis. Aliquam sollicitudin, erat sit amet vulputate congue, lectus ligula viverra felis, ut dictum nisl dui sed quam. Nullam vehicula erat venenatis nunc cursus facilisis. Curabitur venenatis tempus ligula, vitae lacinia odio maximus ut. Sed vitae felis ultricies, blandit justo vel, ornare est. Aliquam dapibus ultricies laoreet. </br></br>

        Aenean eu sollicitudin libero, in convallis elit. Aliquam in molestie nisl. Nam lobortis nibh vitae nisl consectetur semper. Integer cursus, velit ut tempor interdum, erat felis feugiat quam, sed vulputate nibh massa nec nunc. Cras eu turpis ac nunc pharetra pellentesque a eu tellus. Maecenas sit amet ex justo. Etiam nunc mi, tristique eget purus eu, bibendum vestibulum nulla. Mauris pharetra erat sed velit vulputate, sed semper risus facilisis. Quisque pharetra leo turpis, at auctor tortor facilisis et. </br></br>

        Pellentesque auctor neque nec mi facilisis, et tincidunt eros lobortis. Nulla in neque eros. Vivamus maximus erat felis, et viverra ipsum eleifend at. Suspendisse id ligula ante. Mauris et suscipit diam. Nulla facilisi. Donec luctus ex posuere, facilisis ex scelerisque, porta lorem. Integer eu libero vel elit cursus scelerisque. Ut at dui ultricies, pellentesque odio at, ornare odio. Aliquam tortor felis, volutpat ut nisl ac, feugiat facilisis dolor. Integer molestie sed nibh ut finibus. Quisque eu vehicula lacus. Mauris consequat urna ut vestibulum suscipit. </br></br>

        Quisque at orci iaculis, euismod diam non, hendrerit mauris. Maecenas ut vehicula sapien, in sollicitudin nisi. Sed gravida eu mi eu consectetur. Nunc orci justo, dignissim ac ipsum nec, condimentum scelerisque orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed viverra magna elit, id placerat metus vehicula sed. Vestibulum porttitor nisi ut justo hendrerit, sit amet cursus arcu gravida. Donec ac enim sagittis, malesuada neque vitae, sodales mi. Nullam non risus laoreet, tincidunt neque quis, molestie nulla. Aliquam ut metus vitae metus rhoncus cursus in at ipsum. Vestibulum ex metus, rhoncus ac lacus at, dapibus sollicitudin ante. Sed eget ullamcorper libero. Aenean ultricies suscipit ligula ac venenatis. Morbi ut hendrerit justo, in egestas nulla.";

        $ipsum_text_ch = "裡山動從心結，場覺後務保價後沒謝天多至；洲代。

        建理手好道向也性產解時我它集去生學要！海的大？

        大足藝要界大年政知你位；理又產為非東調行、一在方話知走而毛樣老，當以有都孩委園。有家直。它爭會度久腦下修學白究小看夫大拉反了親許以北話是旅。斯留友腦相人多高前樣計光助麼！坡信獲時部寶中訴我說力小。事劇一現麼著，里最海少一只查時每樓然續一消；中沒一來灣他有體關美與什人少立間了型慢易的學養濟眼性在統兩孩、明事氣、情能平文國情會後名燈臺花的術受如裡代沒推目車習皮好。已司未學件是者它神始那企總蘭國子就為王的前、定感對用務！下國常樂家海類明作想型們問所人！表就面不力生。南待經我一來人這藥能友已禮書力節那小是中出實依過管這方服，在術的里計西本吃候，險次路裡朋人魚前人野線，會成學我口克愛。們清性目說，慢斯縣！了說防我細的上養節道速何龍進城來加重打學只列地了中，去何育界存來內統全意快公傳我中轉不不候飛由。";

        $ipsum_text_my = "Lorem Ipsum atau Lipsum merupakan satu kaedah atau satu cara yang digunakan dalam penerbitan untuk mempersembahkan elemen grafik dalam sesuatu dokumen dari segi fon, rekabentuk dan rekaletak. Lorem Ipsum juga boleh dijadikan sebagai teks sementara sebelum teks sebenar dimasukkan.

        Walaupun Lorem Ipsum menggunakan tulisan Latin Klasik, ia tidak mempunyai makna. Ini adalah kerana fokus utamanya adalah rupabentuk teks tersebut, bukannya isi kandungannya. Ini kerana apabila teks kelihatan dalam dokumen, seseorang cenderung untuk menumpu kepada kandungan teks bukannya pembentangan tatarajah keseluruhan, dengan itu penerbit menggunakan lorem ipsum apabila menggambarkan typeface atau reka bentuk agar mengalihkan perhatian kepada pembentangan. \"Lorem ipsum\" turut menyerupai taburan huruf dalam bahasa Inggeris, yang membantu mengalih penukaran penumpuan kepada pembentangan.


        Antara perenggan Lorem Ipsum yang termasyhur

        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

        //seed for food_posts table
        for($i = 0 ; $i < 60; $i++){
            if($i % 2 != 0){
                $image_food_thumb = 'food1_thumb.png';
                $image_food = 'food1.png';
            }
            else{
                $image_food_thumb = 'food2_thumb.png';
                $image_food = 'food2.png';
            }
            DB::table('food_posts')->insert([
                'title' => 'Amazing Breakfast in IMAGO',
                'image' => $image_food,
                'image_thumb' => $image_food_thumb,
                'content_en' => $ipsum_text_en,
                'content_ch' => $ipsum_text_ch,
                'content_my' => $ipsum_text_my,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

        //seed for travel_posts table
        for($i = 0; $i < 60; $i++){
            if($i % 2 == 0){
                $image_travel_thumb = 'travel1_thumb.png';
                $image_travel = 'travel1.png';
            }
            elseif($i % 3 == 0){
                $image_travel_thumb = 'travel2_thumb.png';
                $image_travel = 'travel2.png';
            }
            elseif($i % 5 == 0){
                $image_travel_thumb = 'travel3_thumb.png';
                $image_travel = 'travel3.png';
            }
            else{
                $image_travel_thumb = 'travel4_thumb.png';
                $image_travel = 'travel4.png';
            }
            DB::table('travel_posts')->insert([
                'title' => 'Climb Mount Kinabalu if You Can!',
                'image' => $image_travel,
                'image_thumb' => $image_travel_thumb,
                'content_en' => $ipsum_text_en,
                'content_ch' => $ipsum_text_ch,
                'content_my' => $ipsum_text_my,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
