<?php
$errors = [];
if (!empty($_POST)) {
    if (empty($_POST['name'])) {
        $errors[] = "Le nom est obligatoire";
    }
    // La vérification pour le champ email
    if (empty($_POST['email'])) {
        $errors[] = "Le email est obligatoire";
    }

    // La vérification pour le champ sujet
    if (empty($_POST['sujet'])) {
        $errors[] = "Le sujet est obligatoire";
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome on board</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php include '_navbar.php' ?>
        <div class="container">
            <h1>Welcome on board!</h1>
            <img src="/assets/images/avatar.png" alt="">
        </div>
    </header>
    <main>
        <section class="container">
            <h2 id="articles">Recent articles</h2>
            <div class="articles">
                <article>
                    <img src="/assets/images/responsive.png" alt="Responsive">
                    <h3>Responsive</h3>
                    <a href="#">Read</a>
                </article>
                <article>
                    <img src="/assets/images/scalable.png" alt="Scalable">
                    <h3>Scalable</h3>
                    <a href="#">Read</a>
                </article>
                <article>
                    <img src="/assets/images/inclusive.png" alt="Inclusive">
                    <h3>Inclusive</h3>
                    <a href="#">Read</a>
                </article>
            </div>
        </section>
        <section class="container">
            <h2 id="about">About</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi rerum debitis fugit similique laborum,
                eveniet nam ratione sed, itaque, minus in hic dolores suscipit molestias quis quibusdam error blanditiis
                sapiente.
                Laborum laudantium aut, consequuntur voluptatum animi eaque mollitia? Saepe neque facilis minima
                laborum, provident numquam ipsum laudantium totam porro placeat exercitationem voluptates quia explicabo
                temporibus sapiente non. Quo, repellat corrupti.
            </p>
            <p>
                Excepturi dolore saepe, temporibus est voluptate necessitatibus molestiae sit minima eum quisquam et qui
                quaerat nemo nam, consequuntur nisi alias in praesentium. Fuga amet esse nam doloremque ut nemo nostrum.
            </p>
        </section>
        <section class="container">
            <h2 id="Get ">Get in touch</h2>
            <p>Leave US a message and wew ill get back to you as soon a possible.</p>
            <p>Fieds marked will red wilcard* are required</p>
            <form action="/remerciment.php" method="POST">
                <?php
                // Afficher les erreurs s'il y en a
                if (!empty($errors)) {
                    foreach ($errors as $error) {
                        echo $error . PHP_EOL;
                }
            }
                ?>
                <div class="form-group">
                    <label for="name">Nom <span>*</span></label>
                    <input type="text" id="name" name="name"><required>
                </div>
                <div class="form-group">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" name="email"><required>
                </div>
                <div class="form-group">
                    <label for="subject">Sujet du message <span>*</span></label>
                    <select id="subject" name="subject"><required>
                        <option> Sélectionnez un sujet</option>
                        <option> rendez-vous: Prendre rendez-vous </option>
                        <option> newsletter: Inscription à la newsletter </option>
                        <option> reclamatio: Réclamation </option>
                        <option> devis: Demander un devis </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5"></textarea>
                </div>
                <input type="submit" value="Envoyer">
            </form>

        </section>

    </main>

    <?php include '_footer.php' ?>

</body>

</html>