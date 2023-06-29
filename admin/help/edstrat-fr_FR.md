## Stratégie éditoriale

La stratégie éditoriale permet de créer un ensemble de questions à partir d'un nombre réduit de mots-clés (généralement entre 5 et 10). Ces mots-clés sont analysés par l'IA via un prompt qui demande de donner 4 questions pour chaque mot-clé.

A titre d'exemple, le prompt disponible par défaut (et uniquement visible en mode expert) est le suivant (les variables *$keywords* et *$context* sont respectivement remplacés par les mots-clés saisis dans le champ correspondant et par l'interview que vous avez éventuellement fait - issu de votre vocal) :

<div class="pre">
$context

Aide-toi de ce contexte pour me donner une liste de 4 questions (Pourquoi, Comment, Quand, Quoi) pour chacun des mots-clés suivants ($keywords) au format csv, sans aucun texte ni avant ni après, avec le format suivant, et sans oublier la première ligne :
"Mot-clé", "Préposition", "Question"
</div>

Vous pouvez modifier 'liste de 4 questions (Pourquoi, Comment, Quand, Quoi)' et la remplacer par des *indices* plus adaptés à votre contexte. Attention à ne pas modifier les instructions suivantes  car elles permettent de produire des informations respectant des règles que VEEP comprend.

Si cela ne fonctionne plus, c'est que votre prompt ne respecte pas les règles que Veep comprend. Effacez TOUT votre prompt, il sera alors remplacé par le prompt initial.