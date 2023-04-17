<?php

function generate_header_section(){
    $img='https://media.istockphoto.com/id/1212064060/fr/photo/abs-hologram-data-flow-grid.jpg?s=612x612&w=0&k=20&c=8gcR3tSm1etZp0JL0aZAs5VwnGQrvgigVKq9tMdgjJI=';
    if(get_option('veepdotai-ai-hero-img')!=null) {
        $img=get_option('veepdotai-ai-hero-img');
    }
    $result="
<!-- wp:group -->
<div style='margin-top: 100px'>
    <section style='display:flex; flex-direction: row-reverse; justify-content: space-around'>
        <article style='text-align: center; margin-left:50px'>
            <!-- wp:heading {\"level\":1} -->
                <h1 style='text-align:center'>".get_option('veepdotai-ai-hero-title')."</h1>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
                <p style='text-align:center'><em>".get_option('veepdotai-ai-hero-tagline')."</em></p>
            <!-- /wp:paragraph -->
            <button href='#' style='width: auto'>En savoir plus</button>
        </article>
        <aside style='max-width: 40%; margin:10px'>
            <!-- wp:image -->
            <img src=$img style='height: 250px'>
            <!-- /wp:image -->
        </aside>
    </section>
</div>
<!-- /wp:group -->";
    return $result;
}
add_shortcode('veep_header_section', 'generate_header_section');

add_shortcode('veep_section_1', 'generate_section1');
function generate_section1() {
    $img='https://media.istockphoto.com/id/1322220448/fr/photo/%C5%93il-futuriste-num%C3%A9rique-abstrait.jpg?s=612x612&w=0&k=20&c=b9EtQYg5c3_IDoPdqusxBaAD00AhH2ygsiRHZib7Xk8=';
    if(get_option('veepdotai-ai-section1-img')!=null) {
        $img=get_option('veepdotai-ai-section1-img');
    }
    $result="
<!-- wp:group -->
<div style='margin-top: 100px'>
    <section style='display:flex; justify-content: space-around'>
        <article style='margin-right:50px'>
            <!-- wp:heading {\"level\":2} -->
                <h2 style='text-align:center; font-size: 2.5rem'>".get_option('veepdotai-ai-section1-title')."</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
                <p style='text-align: justify'>".get_option('veepdotai-ai-section1-text')."</p>
            <!-- /wp:paragraph -->
            <button href='#'>En savoir plus</button>
        </article>
        <aside style='max-width: 40%; margin:10px'>
            <!-- wp:image -->
            <img src=$img style='height: 250px'>
            <!-- /wp:image -->
        </aside>
    </section>
</div>
<!-- /wp:group -->";
    return $result;
}

add_shortcode('veep_section_2', 'generate_section2');
function generate_section2() {
    $img='https://media.istockphoto.com/id/1295900106/fr/photo/scientifiques-des-donn%C3%A9es-programmeur-masculin-utilisant-lordinateur-portable-analysant-et.jpg?s=612x612&w=0&k=20&c=S4DKSLKzv4OcCcuCYkKeNwJsnAHTXDSaqPRBHohizIg=';
    if(get_option('veepdotai-ai-section2-img')!=null) {
        $img=get_option('veepdotai-ai-section2-img');
    }
    $result="
<!-- wp:group -->
<div style='margin-top: 100px'>
    <section style='display:flex; flex-direction: row-reverse; justify-content: space-around'>
        <article style='margin-left:50px'>
            <!-- wp:heading {\"level\":2} -->
                <h2 style='text-align:center; font-size: 2.5rem'>".get_option('veepdotai-ai-section2-title')."</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
                <p style='text-align: justify'>".get_option('veepdotai-ai-section2-text')."</p>
            <!-- /wp:paragraph -->
            <button href='#'>En savoir plus</button>
        </article>
        <aside style='max-width: 40%; margin:10px'>
            <!-- wp:image -->
                <img src=$img style='height: 250px'>
            <!-- /wp:image -->
        </aside>
    </section>
</div>
<!-- /wp:group -->";
    return $result;
}

