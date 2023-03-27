<?php


add_shortcode('veep_hero_title', 'generate_hero_title');
function generate_hero_title(){
    $result="
<div id='hero-title'>
    <h1 style='text-align:center'>Veep.ai :<br>
    Ton jumeau digital qui réalise automatiquement à ta place toutes les tâches répétitives et chronophages pour les professionnels du numérique</h1>
</div>
    ";
    return $result;
}

add_shortcode('veep_tagline', 'generate_tagline');
function generate_tagline(){
    $result="
<div id='tagline'>
    <p style='text-align:center'><em>Solution d’IA assistée par l’homme pour lui dégager du temps et le désaliéner de sa condition de travailleur.</em></p>
</div>
    ";
    return $result;
}

add_shortcode('veep_section_1', 'generate_section');
function generate_section() {
    $result="
<div>
    <h2 style='text-align:center; font-size: 2.5rem'>Automatisation à 100%</h2>
    <section style='display:flex'>
        <article>
            <p>Veep.ai réalise la mise en place d’une présence virtuelle en réalisant toutes les tâches associées à votre place.<br>
            Vous avez toujours la possibilité de passer derrière avec l’outil de votre choix pour corriger ou améliorer le travail réalisé.</p>
        </article>
        <aside>
            <p>Image</p>
        </aside>
    </section>
</div>";
    return $result;
}

