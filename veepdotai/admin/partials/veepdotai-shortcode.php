<?php

function generate_hero_title(){
    $result="
<div id='hero-title'>
    <h1 style='text-align:center'>".get_option('veepdotai_ai_hero_title')."</h1>
</div>
    ";
    return $result;
}
add_shortcode('veep_hero_title', 'generate_hero_title');

add_shortcode('veep_tagline', 'generate_tagline');
function generate_tagline(){
    $result="
<div id='tagline'>
    <p style='text-align:center'><em>".get_option('veepdotai_ai_tagline')."</em></p>
</div>
    ";
    return $result;
}

add_shortcode('veep_section_1', 'generate_section1');
function generate_section1() {
    $img='https://media.istockphoto.com/id/1322220448/fr/photo/%C5%93il-futuriste-num%C3%A9rique-abstrait.jpg?s=612x612&w=0&k=20&c=b9EtQYg5c3_IDoPdqusxBaAD00AhH2ygsiRHZib7Xk8=';
    if(get_option('veepdotai_ai_section1_img')!=null) {
        $img=get_option('veepdotai_ai_section1_img');
    }
    $result="
<div style='margin-top: 100px'>
    <section style='display:flex; justify-content: space-around'>
        <article style='margin-right:50px'>
            <h2 style='text-align:center; font-size: 2.5rem'>".get_option('veepdotai_ai_title_section1')."</h2>
            <p style='text-align: justify'>".get_option('veepdotai_ai_section1_article1')."</p>
        </article>
        <aside style='max-width: 40%; margin:10px'>
            <img src=$img style='height: 250px'>
        </aside>
    </section>
</div>";
    return $result;
}

add_shortcode('veep_section_2', 'generate_section2');
function generate_section2() {
    $img='https://media.istockphoto.com/id/1295900106/fr/photo/scientifiques-des-donn%C3%A9es-programmeur-masculin-utilisant-lordinateur-portable-analysant-et.jpg?s=612x612&w=0&k=20&c=S4DKSLKzv4OcCcuCYkKeNwJsnAHTXDSaqPRBHohizIg=';
    if(get_option('veepdotai_ai_section2_img')!=null) {
        $img=get_option('veepdotai_ai_section2_img');
    }
    $result="
<div style='margin-top: 100px'>
    <section style='display:flex; flex-direction: row-reverse; justify-content: space-around'>
        <article style='margin-left:50px'>
            <h2 style='text-align:center; font-size: 2.5rem'>".get_option('veepdotai_ai_title_section2')."</h2>
            <p style='text-align: justify'>".get_option('veepdotai_ai_section2_article1')."</p>
        </article>
        <aside style='max-width: 40%; margin:10px'>
            <img src=$img style='height: 250px'>
        </aside>
    </section>
</div>";
    return $result;
}

