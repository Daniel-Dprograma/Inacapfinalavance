document.addEventListener('DOMContentLoaded', function() {
    const chatbotIcon = document.querySelector('.chatbot-icon');
    const chatbotWindow = document.querySelector('.chatbot-window');
    const chatbotSend = document.getElementById('chatbot-send');
    const chatbotInput = document.getElementById('chatbot-input');
    const chatbotMessages = document.getElementById('chatbot-messages');

    if (chatbotIcon) {
        chatbotIcon.addEventListener('click', function() {
            chatbotWindow.style.display = chatbotWindow.style.display === 'block' ? 'none' : 'block';
        });
    }

    if (chatbotSend) {
        chatbotSend.addEventListener('click', function() {
            const message = chatbotInput.value;
            if (message.trim() !== '') {
                addMessage('You', message);
                chatbotInput.value = '';
                fetchChatbotResponse(message);
            }
        });
    }

    function addMessage(sender, text) {
        if (chatbotMessages) {
            const messageElement = document.createElement('div');
            messageElement.textContent = `${sender}: ${text}`;
            chatbotMessages.appendChild(messageElement);
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        }
    }

    function fetchChatbotResponse(message) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/chatbot', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ message: message })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            addMessage('Bot', data.response);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
});