<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Editor</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="h-100">
    <header>

    </header>
    <main class="container p-3 bg-secondary h-100">
        <form action="" method="post" id="monFormulaire">
            <h1  class="text-center">Nouveau Post</h1>
            <br>
            <label for="categorie" class="form-label">CATEGORIE :</label>
            <select name="select" id="select" class="form-select form-select-sm">
                <option value="html">HTML</option>
                <option value="java">JAVA</option>
                <option value="javascript">JavaScript</option>
                <option value="css">CSS</option>
                <option value="python">Python</option>
                <option value="android">Android</option>
                <option value="react">React</option>
                <option value="angular">Angular</option>
                <option value="php">PHP</option>
                <option value="django">Django</option>
                <option value="laravel">Laravel</option>
                <option value="c">C</option>
                <option value="c+">C+</option>
                <option value="c++">C++</option>
                <option value="c#">C#</option>
            </select>
            <label for="categorie" class="form-label">TITRE DU POST :</label>
            <input type="text" class="form-control" placeholder="Entrez le titre...">
            <label for="categorie" class="form-label">DESCRIPTION :</label>
            <input type="text" class="form-control" placeholder="La description...">
            <hr>
            <label for="categorie" class="form-label">ARTICLE 1:</label>
            <div class="px-3">
                <input name="article1" type="text" class="form-control px-3" placeholder="Entrez le Sous-titre...">
                <textarea name="aire1" class="form-control my-2" style="min-width: 100%;" rows="25" placeholder="Entrez le contenu de l'article..."></textarea>
            </div>
            <button class="btn " onclick="ajouterChampTexte()">Nouvel article</button>
            <div class="d-flex justify-content-center align-item-center"><button type="submit" class="btn btn-success w-50">Publier</button></div>
        </form>
    </main>
    <script>
        var i = 1;
        // Fonction pour ajouter un nouveau champ de texte au formulaire
        function ajouterChampTexte() {
            var formulaire = document.getElementById("monFormulaire");
            var nouvelArticle = document.createElement("div");
            var nouvelInput = document.createElement("input");
            var nouveauLbl = document.createElement("label");
            var nouveauText = document.createElement("textarea");
            i += 1;
            nouvelArticle.classList.add("px-3");
            nouvelInput.type = "text";
            nouvelInput.name = "article"+i;
            nouvelInput.classList.add("form-control");
            nouvelInput.classList.add("px-3");
            nouvelInput.placeholder="Entrez le sous-titre...";
            nouveauText.style.minWidth = "100% !important";
            nouveauText.name = "aire"+i;
            nouveauText.rows = "25";
            nouveauText.classList.add("form-control");
            nouveauText.classList.add("my-2");
            nouveauText.placeholder="Entrez le contenu de l'article...";
            nouvelArticle.appendChild(nouvelInput);
            nouvelArticle.appendChild(nouveauText);
            formulaire.appendChild(nouvelArticle);
            nouveauLbl.classList.add("form-label");
            nouveauLbl.innerText="ARTICLE "+i;
            formulaire.appendChild(document.createElement("br")); // Ajouter un saut de ligne après chaque champ de texte
            formulaire.appendChild(nouveauLbl); // Ajouter un saut de ligne après chaque champ de texte
        }
    </script>
</body>
</html>