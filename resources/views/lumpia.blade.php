<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumpia Budesi</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #chat-popup {
            display: none;
            position: fixed;
            bottom: 80px;
            right: 5%;
            background: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 95%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: opacity 0.3s ease-in-out;
        }
    
        #chat-popup-header {
            background: #f87171;
            color: white;
            padding: 15px;
            font-weight: bold;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
        }
    
        #chat-content {
            padding: 15px;
            display: flex;
            flex-direction: column;
        }
    
        #chat-content div {
            word-wrap: break-word;
        }
        
    </style>
</head>
<body class="bg-gray-100">

    <!-- Hero Section -->
    <section class="bg-gray-100 flex flex-col lg:flex-row items-center px-6 lg:px-16 py-10">
        <div class="w-full lg:w-1/2 mb-6 lg:mb-0">
            <div class="flex items-center mb-4 animate__animated animate__fadeInUp">
                <div class="w-8 h-8 bg-red-500 flex justify-center items-center rounded-full">
                    <span class="text-white font-bold text-2xl">&#9733;</span>
                </div>
                <h1 class="text-5xl font-bold ml-3">Lumpia Budesi</h1>
            </div>
            <p class="text-gray-600 text-xl mb-6 animate__animated animate__fadeInUp">Delicious food for every mood</p>
            <a href="{{ route('login') }}" class="bg-red-500 text-white px-6 py-3 rounded hover:bg-red-600 transform transition-transform hover:scale-105 text-xl">LOGIN HERE</a>
        </div>
        <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
            <div class="w-72 h-72 rounded-full overflow-hidden animate__animated animate__zoomIn">
                <img src="/images/5.jpg" alt="Lumpia Budesi" class="w-full h-full object-cover">
            </div>
        </div>
    </section>
    

    <!-- About Section -->
    <section class="text-white py-10">
        <div class="flex flex-col lg:flex-row items-center max-h-[62rem]">
            <!-- Image Section -->
            <div class="w-full lg:w-1/2 mb-6 lg:mb-0 flex items-center">
                <div class="relative w-full h-full overflow-hidden shadow-lg max-h-[62rem]">
                    <img src="/images/6.jpg" alt="About Lumpia Budesi" class="w-full h-full object-cover">
                </div>
            </div>
            <!-- Text Section -->
            <div class="h-screen bg-red-500 w-full lg:w-1/2 bg-gradient-to-l from-red-500 via-red-600 to-red-500 text-white rounded-lg shadow-lg flex items-center justify-center transform transition-transform hover:scale-105">
                <div class="max-w-xl text-left p-3 animate__animated animate__fadeIn">
                    <h2 class="text-4xl lg:text-6xl font-bold mb-6">All About Lumpia Budesi</h2>
                    <p class="text-2xl lg:text-3xl mb-6">We have been serving irresistible comfort food since 2018. Our mission is to keep you smiling with every bite.</p>
                    <p class="text-lg lg:text-2xl">Treat yourself to a feel-good meal today!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="bg-gray-100 px-6 lg:px-16 py-10">
        <h2 class="text-3xl font-bold text-center mb-8">What We Offer</h2>
        <p class="text-center text-gray-600 mb-6">Curious? Here are our most popular menu items.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-4 shadow-md rounded-lg text-center transform transition-transform hover:scale-105 animate__animated animate__fadeIn">
                <img src="/images/7.jpg" alt="Lumpia Kentang Wortel" class="w-full h-96 object-cover rounded">
                <h3 class="mt-4 font-bold">LUMPIA KENTANG WORTEL</h3>
            </div>
            <div class="bg-white p-4 shadow-md rounded-lg text-center transform transition-transform hover:scale-105 animate__animated animate__fadeIn">
                <img src="/images/8.jpg" alt="Lumpia Mihun" class="w-full h-96 object-cover rounded">
                <h3 class="mt-4 font-bold">LUMPIA MIHUN</h3>
            </div>
            <div class="bg-white p-4 shadow-md rounded-lg text-center transform transition-transform hover:scale-105 animate__animated animate__fadeIn">
                <img src="/images/9.jpg" alt="Tahu Bakso" class="w-full h-96 object-cover rounded">
                <h3 class="mt-4 font-bold">TAHU BAKSO</h3>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="https://www.instagram.com/lumpia_budesi/" target="_blank" class="bg-red-500 text-white px-6 py-3 rounded hover:bg-red-600 transform transition-transform hover:scale-105">
                ORDER NOW
            </a>
        </div>
        
    </section>

    <!-- Customer Testimonials -->
    <section class="bg-red-500 text-white px-6 lg:px-16 py-10">
        <div class="mt-12 bg-red-500">
            <h1 class="text-3xl font-bold text-center mb-6">What Our Customers Say</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Review 1 -->
                <div class="rounded-lg overflow-hidden transform transition-transform hover:scale-105 animate__animated animate__fadeIn">
                    <img src="/images/4.jpg" alt="Customer 1" class="w-full h-auto object-contain">
                    <div class="text-center mt-2">
                        <span class="text-yellow-500 text-4xl font-bold mb-5">★★★★★</span>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="rounded-lg overflow-hidden transform transition-transform hover:scale-105 animate__animated animate__fadeIn">
                    <div class="text-center mb-2">
                        <span class="text-yellow-500 text-4xl font-bold mb-5">★★★★★</span>
                    </div>
                    <img src="/images/3.jpg" alt="Customer 2" class="w-full h-auto object-contain">
                </div>

                <!-- Review 3 -->
                <div class="rounded-lg overflow-hidden transform transition-transform hover:scale-105 animate__animated animate__fadeIn">
                    <img src="/images/2.jpg" alt="Customer 3" class="w-full h-auto object-contain">
                    <div class="text-center mt-2">
                        <span class="text-yellow-500 text-4xl font-bold mb-5">★★★★★</span>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="rounded-lg overflow-hidden transform transition-transform hover:scale-105 animate__animated animate__fadeIn">
                    <div class="text-center mb-2">
                        <span class="text-yellow-500 text-4xl font-bold mb-5">★★★★★</span>
                    </div>
                    <img src="/images/1.jpg" alt="Customer 4" class="w-full h-auto object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="text-white">
        <div class="flex flex-col lg:flex-row items-center max-h-[62rem]">
            <!-- Image footer -->
            <div class="w-full lg:w-1/2 mb-6 lg:mb-0 flex items-center">
                <div class="relative w-full h-full overflow-hidden shadow-lg max-h-[62rem]">
                    <img src="/images/6.jpg" alt="About Lumpia Budesi" class="w-full h-full object-cover">
                </div>
            </div>
            <!-- Text footer -->
            <div class="h-screen bg-black w-full lg:w-1/2 bg-gradient-to-l from-black via-black to-black text-white rounded-lg shadow-lg flex items-center justify-center transform transition-transform hover:scale-105">
                <div class="bg-black text-white p-8 rounded w-screen text-center">
                    <h3 class="text-6xl font-bold mb-4">Lumpia Budesi</h3>
                    <ul class="space-y-6">
                        <li class="mb-4 flex items-center justify-center text-2xl">
                            <span class="text-red-500 mr-2 text-4xl">&#128337;</span>
                            <span>Everyday: 8 am – 5 pm</span>
                        </li>
                        <li class="mb-4 flex items-center justify-center text-2xl">
                            <span class="text-red-500 mr-2 mb-7 text-4xl">&#128205;</span>
                            <span>Jl. DI Panjaitan, Gn Guntur RT 26 No 44<br>Balikpapan 76124</span>
                        </li>
                        <li class="mb-4 flex items-center justify-center text-2xl">
                            <span class="text-red-500 mr-2 text-4xl">
                                <i class="fab fa-instagram"></i>
                            </span>
                            <span>Instagram: <a href="https://instagram.com/lumpia_budesi" target="_blank" class="underline text-red-500 hover:text-red-400">@lumpiabudesi</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Live Chat Section -->
    <div class="fixed bottom-5 right-5">
        <button onclick="toggleChat()" class="bg-red-500 text-white px-4 py-3 rounded-full shadow-lg hover:bg-red-600 transform transition-transform hover:scale-105">
            Live Chat
        </button>
    </div>

    <!-- Live Chat Section -->
<div class="fixed bottom-5 right-5">
    <button onclick="toggleChat()" class="bg-red-500 text-white px-4 py-3 rounded-full shadow-lg hover:bg-red-600 transform transition-transform hover:scale-105">
        Live Chat
    </button>
</div>

<!-- Live Chat Section -->
<div class="fixed bottom-5 right-5">
    <button onclick="toggleChat()" class="bg-red-500 text-white px-4 py-3 rounded-full shadow-lg hover:bg-red-600 transform transition-transform hover:scale-105">
        Live Chat
    </button>
</div>

<div id="chat-popup">
    <div id="chat-popup-header">Live Chat</div>
    <div id="chat-content" class="p-4" style="max-height: 500px; overflow-y: auto;">
        <!-- Chat bubbles will appear here -->
    </div>
    <div class="p-4 border-t">
        <input id="chat-input" type="text" placeholder="Type your message..." class="w-full p-2 border rounded" />
        <div class="flex justify-between mt-2">
            <button onclick="sendMessage()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transform transition-transform hover:scale-105">Send</button>
            <button onclick="clearChat()" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transform transition-transform hover:scale-105">Clear</button>
        </div>
    </div>
</div>

<script>
    function toggleChat() {
        const chatPopup = document.getElementById('chat-popup');
        chatPopup.style.display = chatPopup.style.display === 'none' || chatPopup.style.display === '' ? 'block' : 'none';
    }

    function sendMessage() {
        const chatContent = document.getElementById('chat-content');
        const chatInput = document.getElementById('chat-input');
        const userMessage = chatInput.value.trim();

        if (!userMessage) {
            return;
        }

        // Append user message bubble
        const userBubble = document.createElement('div');
        userBubble.className = 'bg-blue-500 text-white p-4 rounded-lg my-2 ml-auto max-w-lg text-right shadow-lg';
        userBubble.textContent = userMessage;
        chatContent.appendChild(userBubble);

        // Clear input field
        chatInput.value = '';

        // Scroll to the bottom
        chatContent.scrollTop = chatContent.scrollHeight;

        // Simulate bot response
        setTimeout(() => {
            const botBubble = document.createElement('div');
            botBubble.className = 'bg-gray-300 text-black p-4 rounded-lg my-2 mr-auto max-w-lg shadow-lg';
            botBubble.textContent = 'We Will Reply As Soon As Possible';
            chatContent.appendChild(botBubble);

            // Scroll to the bottom
            chatContent.scrollTop = chatContent.scrollHeight;
        }, 500);
    }

    function clearChat() {
        const chatContent = document.getElementById('chat-content');
        chatContent.innerHTML = ''; // Clear all chat bubbles
    }
</script>
    
</body>
</html>
