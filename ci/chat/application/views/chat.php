<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI3 ChatApp</title>
    <style>
        body { font-family: Arial, sans-serif; }
        #chat-box { width: 100%; height: 300px; border: 1px solid #ccc; overflow-y: auto; padding: 10px; }
        #message { width: 80%; }
        #send { width: 18%; }
    </style>
</head>
<body>
    <h1>CodeIgniter 3 Chat Application</h1>
    <div id="chat-box"></div>
    <input type="text" id="message" placeholder="Type a message...">
    <button id="send">Send</button>

    <script>
        const chatBox = document.getElementById('chat-box');
        const messageInput = document.getElementById('message');
        const sendButton = document.getElementById('send');

        // Connect to the WebSocket server
        const ws = new WebSocket('ws://localhost:8888');

        ws.onmessage = function(event) {
            const message = document.createElement('div');
            message.textContent = event.data;
            chatBox.appendChild(message);
            chatBox.scrollTop = chatBox.scrollHeight;
        };

        sendButton.addEventListener('click', function() {
            const message = messageInput.value;
            if (message) {
                ws.send(message);
                messageInput.value = '';
            }
        });
    </script>
</body>
</html>