<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>EYE Sport Football League</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="generator" content="Scirra Construct">
    <meta name="author" content="Lodhi Bangash">
    <meta name="description" content="Penalty kick game">
    <link rel="manifest" href="appmanifest.json">
    <link rel="apple-touch-icon" sizes="256x165" href="{{ asset('asset/images/etc/logo_main.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/images/etc/logo_main.png') }}">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <script>
        let gameData = '{!! $data !!}';
        console.log(gameData);
        if (location.protocol.substr(0, 4) === "file") {
            alert(
                "Web exports won't work until you upload them. (When running on the file: protocol, browsers block many features from working for security reasons.)"
            );
        }
    </script>
    <script src="init.js"></script>
    <script src="box2d.wasm.js"></script>
    <noscript>
        <div id="notSupportedWrap">
            <h2 id="notSupportedTitle">This content requires JavaScript</h2>
            <p class="notSupportedMessage">JavaScript appears to be disabled. Please enable it to view this content.</p>
        </div>
    </noscript>
    <script src="scripts/supportcheck.js"></script>
    <script src="scripts/offlineclient.js" type="module"></script>
    <script src="scripts/main.js" type="module"></script>
    <script src="scripts/register-sw.js" type="module"></script>

</body>

</html>
