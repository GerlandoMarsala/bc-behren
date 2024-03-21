<div class="containerAdminHome">
    <div class="logo-bc-behren">

    </div>

    <div>
        <h1 class="text-center my-2"></h1>
        <h1 class="titlePage"><span class="colorTitleB">A</span>JOUT COMPÉTITEUR</h1>
        <div class="borderTitlePage"></div>
    </div>


    <div class="container my-3">

        <form method="post" action="../controller/traitement_ajout_competiteur.php" enctype="multipart/form-data">
            <!--  Nom    -->
            <div class="mb-3">
                <label for="nom">Nom</label>
                <input class="form-control"
                       id="nom"
                       name="nom" type="text"
                       placeholder="nom">
            </div>
            <!--  Prenom  -->
            <div class="mb-3">
                <label for="prenom">Prénom</label>
                <input class="form-control"
                       id="prenom"
                       name="prenom"
                       type="text"
                       placeholder="Prénom">
            </div>
            <!--  Categorie  -->
            <div class="mb-3">
                <label for="categorie">Categorie</label>
                <input class="form-control"
                       id="categorie"
                       name="categorie"
                       type="text"
                       placeholder="Catégorie">
            </div>
            <!--  Poids  -->
            <div class="mb-3">
                <label for="poids">Poids</label>
                <input class="form-control"
                       id="poids"
                       name="poids"
                       type="number"
                       placeholder="Poids">
            </div>
            <!--  Pro  -->
            <div class="mb-3">
                <label for="pro"> Pro</label>
                <input id="pro"
                       name="pro"
                       type="checkbox"
                       placeholder="...">
            </div>
            <div class="text-center py-2">
                <div class="input-group mb-3">
                    <input type="file" name="photos" class="form-control" id="inputGroupFile01">
                </div>
                <button class="buttonActu" type="submit" class="buttonActu2">Valider</button>
            </div>

        </form>

    </div>