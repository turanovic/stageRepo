<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Login 0.7</title>
        <link href="assets/img/favicon.png" rel="icon">
        <link href="resources/css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Enquête</h1>
        </header>
        <main>
                <!-- Form for existing users -->
                <form method="post" name="existing_user">
                    <h2>Bestaande gebruiker</h2>
                    <input type="text" name="id" placeholder="Jouw ID">
                    <button>Inloggen</button>
                    <label>&cross;</label>
                </form>
                <!-- Form for new users -->
                <form method="post" name="new_user">
                    <h2>Nieuwe gebruiker</h2>
                    <button>Aanmaken</button>
                </form>
        </main>
        <footer>
            <label>©Copyright [...]</label>
        </footer>
    </body>
    <script src="assets/jquery/jquery-3.1.1.slim.min.js"></script> 
    <script src="resources/js/script.js"></script>
</html>