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
            <div class="mb-3"><label for="exampleFormControlInput1">Nom</label><input class="form-control" id="exampleFormControlInput1" name="nomCompetiteur" type="text" placeholder="nom"></div>
            <div class="mb-3"><label for="exampleFormControlInput1">Prénom</label><input class="form-control" id="exampleFormControlInput1" name="prenomCompetiteur" type="text" placeholder="Prénom"></div>
            <div class="mb-3"><label for="exampleFormControlInput1">Amateur ou Pro</label><input class="form-control" id="exampleFormControlInput1" name="amateurPro" type="text" placeholder="..."></div>
            <div class="row">
                <div class="col-4">
                    <div class="mb-3"><label for="exampleFormControlInput1">Victoire</label>
                    <input class="form-control" id="exampleFormControlInput1" name="victoire" type="number" min="0" value="0" placeholder="..."></div>
                </div>
                <div class="col-4">
                    <div class="mb-3"><label for="exampleFormControlInput1">Nul</label><input class="form-control" id="exampleFormControlInput1" name="nul" type="number" min="0" value="0" placeholder="..."></div>
                </div>
                <div class="col-4">
                    <div class="mb-3"><label for="exampleFormControlInput1">Défaite</label><input class="form-control" id="exampleFormControlInput1" name="defaite" type="number" min="0" value="0" placeholder="..."></div>
                </div>
            </div>


            <div class="text-center py-2">
                <div class="input-group mb-3">
                    <input type="file" name="photos" class="form-control" id="inputGroupFile01">
                </div>
                <button class="buttonActu" type="submit" class="buttonActu2">Valider</button>
            </div>

        </form>

    </div>