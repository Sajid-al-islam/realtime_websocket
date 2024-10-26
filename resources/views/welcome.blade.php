<!DOCTYPE html>
<html>

<head>
    <title>Laravel Broadcasting</title>
    <script src="{{ mix('js/app.js') }}"></script> <!-- Use Laravel Mix for compiled assets -->
</head>

<body>
    <h1>Realtime Broadcasting</h1>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.Echo.channel('chat')
                .listen('MessageSent', (e) => {
                    console.log('Message received:', e);
                });
        });
    </script>
</body>

</html>
