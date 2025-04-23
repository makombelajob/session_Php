<?php
session_start();
if($_SESSION['user']) : ;?>
    <?php require_once 'includes/header.php';?>
        <main class="container">
            <ul class="list-unstyled d-flex justify-content-between">
                <li><a class="text-secondary fs-1 text-decoration-none" href="index.php">Home</a></li>
                <li><a class="text-secondary fs-1 text-decoration-none" href="logout.php">Logout</a></li>
            </ul>
            <div class="row">
                <h1 class="text-center text-uppercase fs-1 my-3 fw-bolder">Protected Page</h1>
                <article class="text-center">
                    <p class="fs-2">Ceci est une page protégée</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" fill="lightblue" class="bi bi-file-earmark-lock2-fill m-5" viewBox="0 0 16 16">
                        <path d="M7 7a1 1 0 0 1 2 0v1H7z"/>
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M10 7v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V9.3c0-.627.46-1.058 1-1.224V7a2 2 0 1 1 4 0"/>
                    </svg>
                </article>
            </div>
        </main>
    </body>
    </html>
<?php endif;?>
