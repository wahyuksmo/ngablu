let SpeechRecognition = window.SpeechRecognition || webkitSpeechRecognition;
let SpeechGrammarList = window.SpeechGrammarList || webkitSpeechGrammarList;
let SpeechRecognitionEvent = window.SpeechRecognitionEvent || webkitSpeechRecognitionEvent;

let recognition = new SpeechRecognition();

recognition.continuous = true;
recognition.lang = 'id';
recognition.interimResults = true;




recognition.onError = () => {
    console.log('Error....')
}

recognition.onresult = function(event) {
    console.log(event.results)

    let textResult = ''
    for (let i = 0;  i < event.results.length; i++) {
        textResult += event.results[i][0].transcript
        
    }

    console.log(textResult)
    document.querySelector("#result").innerHTML = textResult
    
}

document.querySelector("#start").onclick = () => {
    recognition.start();
}


document.querySelector("#stop").onclick = () => {
    recognition.stop();
}
