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
    $result="
<div style='margin-top: 100px'>
    <section style='display:flex; justify-content: space-around'>
        <article style='margin-right:50px'>
            <h2 style='text-align:center; font-size: 2.5rem'>".get_option('veepdotai_ai_title_section1')."</h2>
            <p style='text-align: justify'>".get_option('veepdotai_ai_section1_article1')."</p>
        </article>
        <aside style='max-width: 40%; margin:10px'>
            <img src='http://localhost/wordpress/wp-content/uploads/2023/04/istockphoto-1322220448-612x612-1.jpg' style='height: 250px'>
        </aside>
    </section>
</div>";
    return $result;
}

add_shortcode('veep_section_2', 'generate_section2');
function generate_section2() {
    $result="
<div style='margin-top: 100px'>
    <section style='display:flex; flex-direction: row-reverse; justify-content: space-around'>
        <article style='margin-left:50px'>
            <h2 style='text-align:center; font-size: 2.5rem'>".get_option('veepdotai_ai_title_section2')."</h2>
            <p style='text-align: justify'>".get_option('veepdotai_ai_section2_article1')."</p>
        </article>
        <aside style='max-width: 40%; margin:10px'>
            <img src='http://localhost/wordpress/wp-content/uploads/2023/04/istockphoto-1295900106-612x612-1.jpg' style='height: 250px'>
        </aside>
    </section>
</div>";
    return $result;
}

