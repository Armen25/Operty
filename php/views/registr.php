    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../source/css/style.css">
    <title>Document</title>
</head>
<body>
<form action="../engine/registration.php" method="post">
    <div class="page-auth">
        <div class="logo mb-10">    
            <img class="logo__img" src="../../source/img/logo.svg" alt="logo">
        </div>
        <form class="auth-form mb-4">
            <input class="auth-form__input" type="email" name="email" placeholder="Email" required>
            <input class="auth-form__input mb-4" type="password" name="password" placeholder="Пароль" required>
            <button class="button button_login  button_full" type="submit"> Зарегистрироваться</button>
        </form>
    </div>
</form>
</body>