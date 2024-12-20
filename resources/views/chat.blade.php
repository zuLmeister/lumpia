<script>
    function sendMessage() {
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;

        if (!email || !message) {
            alert('Please fill out all fields.');
            return;
        }

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '/send-email', true); // Menggunakan endpoint dari Laravel
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(`email=${encodeURIComponent(email)}&subject=${encodeURIComponent(subject)}&message=${encodeURIComponent(message)}`);

        xhr.onload = function () {
            if (xhr.status === 200) {
                alert('Message sent!');
                document.getElementById('chat-popup').style.display = 'none';
            } else {
                alert('Failed to send message.');
            }
        };
    }
</script>
