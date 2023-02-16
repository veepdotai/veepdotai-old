#!/bin/sh

API_KEY=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
PROMPT=$1
MAX_TOKENS=4000
TEMP=0.7

function answer() {
curl -s https://api.openai.com/v1/completions \
  -H 'Content-Type: application/json' \
  -H "Authorization: Bearer $API_KEY" \
  -d "{
  	\"model\": \"text-davinci-003\",
  	\"prompt\": \"$PROMPT\",
  	\"max_tokens\": $MAX_TOKENS,
  	\"temperature\": $TEMP
	}" \
  --insecure
}

function clean() {
	cat menu.txt | perl -pe 's/\\n|\\t//g' | perl -pe 's/\\"/"/g' | perl -pe 's/^"|"$//g'
}

PARAMS='{
  	"model": "text-davinci-003",
  	"prompt": '\"$PROMPT\"',
  	"max_tokens": '$MAX_TOKENS',
  	"temperature": '$TEMP'
	}'

echo $PARAMS

answer | jq .choices[].text


