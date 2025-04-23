<?php require_once 'includes/header.php';?>
<body class="container">
    <main class="row w-75 m-auto my-5">
        <ul class="list-unstyled d-flex justify-content-between">
            <li><a class="text-secondary fs-1 text-decoration-none" href="index.php">Home</a></li>
            <li><a class="text-secondary fs-1 text-decoration-none" href="about.php">About</a></li>
        </ul>
        <h1 class="text-center text-uppercase fs-1 fw-bolder">Login</h1>
        <form class="" action="treatement_login.php" method="post">
            <div>
                <label class="form-label fs-3 my-3" for="name">Nom utilisateur</label>
                <input class="form-control fs-3" id="name" type="text" name="username" placeholder="Entrez votre nom"/>
            </div>
            <div>
                <label class="form-label fs-3 my-3" for="passwd">Mots de passe</label>
                <input class="form-control fs-3" id="passwd" type="password" name="password"/>
            </div>
            <div class="text-center my-3">
                <button class="btn btn-primary fs-3" type="submit">Login</button>
            </div>
        </form>
    </main>
</body>
</html>