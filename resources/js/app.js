// Import necessary modules
import Echo from "laravel-echo";
import Pusher from "pusher-js";

// Set up the Pusher instance with Laravel Echo
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: "3bbc9641cfa31bef1c81",  // Replace with your Pusher key
    cluster: "ap1",               // Replace with your Pusher cluster
    wsHost: window.location.hostname, // Set to your WebSocket server
    wsPort: 6001,                 // WebSocket port for Laravel WebSockets
    forceTLS: false,              // Set to true if using HTTPS
    disableStats: true            // Optional: Disable Pusher stats
});

// Listening for events on the 'chat' channel
window.Echo.channel("chat")
    .listen(".message.sent", (e) => {
        console.log("Message received:", e); // Logs the message data
    });

window.Echo.channel('bd_chat')
    .listen('MessageSent', (e) => {
        console.log('Message received:', e);
    });

window.Echo.channel('ss_chat')
    .listen('MessageSent', (e) => {
        console.log('Message received:', e);
    });
