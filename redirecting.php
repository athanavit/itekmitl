<html>

<head>
    <link rel="manifest" href="assets/common/object/manifest.json">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- for chrome mobile -->
    <meta name="theme-color" content="#FF8539">
    <link rel="icon" sizes="192x192" href="assets/common/img/ite-logo/ite-logo-b-m.png">
    <link rel="apple-touch-icon" href="assets/common/img/ite-logo/ite-logo-b-m.png">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/common/css/style.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <!-- loaders -->
    <script src='assets/lib/js/nprogress.js'></script>
    <link rel='stylesheet' href='assets/lib/css/nprogress.css' />
    <title>Keep calm! | ITE - KMITL</title>
</head>

<body>
    <link rel="manifest" href="assets/common/object/manifest.json">
    <script type="text/javascript">
        var num1 = Math.random() * (0.3 - 0.1) + 0.1;
        var num2 = Math.random() * (0.75 - 0.3) + 0.3;
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start;
        setTimeout(function() {
            NProgress.set(num1);
        }, 900);
        setTimeout(function() {
            NProgress.set(num2);
        }, 1500);
        setTimeout(function() {
            NProgress.set(0.85);
        }, 3000);
        setTimeout(function() {
            NProgress.done();
        }, 15000);

    </script>
    <center>
        <br><br><br>
        <img src="assets/common/img/ite-logo/ite-logo.png" width="250px"><br><br>
        <img src="assets/common/img/loading.gif" width="60px;">
        <H3 style="font-family: 'Prompt', sans-serif!important; margin: 0px; color: #555555">Signing out..</H3>
        <script>
            var timer = setTimeout(function() {
                window.location.href = 'index.php';
            }, 4000);

        </script>
    </center>
</body>

</html>
