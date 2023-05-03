<?php

$API_KEY = "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";

$PROMPT = "Bonjour";
$MAX_TOKENS = 1024;
$TEMP = 0.7;

$data = <<<_EOF_
{
	"model": "text-davinci-003",
        "prompt": "$PROMPT",
        "max_tokens": $MAX_TOKENS,
        "temperature": $TEMP
}
_EOF_;
$postdata = json_encode($data);

var_dump($postdata);

// Création d'une nouvelle ressource cURL
$ch = curl_init();

$CURLOPT_URL="https://api.openai.com/v1/completions";
curl_setopt($ch, CURLOPT_URL, $CURLOPT_URL);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
	"Content-Type: application/json",
	"Authorization: Bearer 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"
	//"Authorization: Bearer $API_KEY"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

//exit();

// Récupération de l'URL et affichage sur le navigateur
$result = curl_exec($ch);

curl_close($ch);

print_r ($result);

?>
