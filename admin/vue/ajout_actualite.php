<div class="containerAdminHome">
    <div class="logo-bc-behren">

    </div>

    <div>
        <h1 class="text-center my-2"></h1>
        <h1 class="titlePage"><span class="colorTitleB">A</span>JOUT ACTUALITÉ</h1>
        <div class="borderTitlePage"></div>
    </div>
    <div class="container my-3">

        <form method="post" action="../controller/traitement_ajout_actualite.php" enctype="multipart/form-data">
            <div class="mb-3"><label for="exampleFormControlInput1">Nom de l'actualité</label><input class="form-control" id="exampleFormControlInput1" name="nomActualite" type="text" placeholder="Titre"></div>
            <div class="mb-3">
                <div class="mb-0"><label for="exampleFormControlTextarea1">Description de l'actualité</label><textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea></div>

            </div>
            <div class="mb-3">
                <!-- <label for="exampleFormControlSelect2">Example multiple select</label> -->
                <label for="start">Start date:</label>
                <!-- <input type="date" id="start" name="date" value="2018-07-22" min="2018-01-01" /> -->
                <input class="form-control" type="date" name="date">

            </div>
            <div class="text-center py-2">
                <div class="input-group mb-3">
                    <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                    <input type="file" name="photos" class="form-control" id="inputGroupFile01">
                </div>
                <button class="buttonActu" type="submit" class="buttonActu2">Valider</button>
            </div>

        </form>

    </div>