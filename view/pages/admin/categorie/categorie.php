    <!------------ ❖❖❖ Head ❖❖❖ --------------->
    <?php require_once("../../../partials/admin/head.php") ?>
    <!------------ ❖❖❖ Head ❖❖❖ --------------->

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        
        <!------------ ❖❖❖ Menu Haut ❖❖❖ --------------->
        <?php require_once("../../../partials/admin/menuHaut.php") ?>
        <!------------ ❖❖❖ Menu Haut ❖❖❖ --------------->
        
        <!------------ ❖❖❖ Menu Droite ❖❖❖ --------------->
        <?php require_once("../../../partials/admin/menuDroite.php") ?>
        <!------------ ❖❖❖ Menu Droite ❖❖❖ --------------->
        
        <div class="app-main">
            <!------------ ❖❖❖ Menu Gauche ❖❖❖ --------------->
            <?php require_once("../../../partials/admin/menuGauche.php") ?>
            <!------------ ❖❖❖ Menu Gauche ❖❖❖ --------------->
                
            <!------------ ❖❖❖ Content ❖❖❖ --------------->
            <div class="app-main__outer">
                
                <!------------ ❖❖❖ Top Info ❖❖❖ ------------>
                <div class="container mt-3">
                    <?php require_once("../../../partials/admin/topBarreInfos.php") ?>
                </div>
                <!------------ ❖❖❖ Top Info ❖❖❖ ------------>
                
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb" class="main-breadcrumb col-lg-12">
                            <ol class="breadcrumb">
                                
                                <li class="breadcrumb-item">
                                    <a href="#"  type="button" data-bs-toggle="modal" data-bs-target="#modalAddCategorie"> Ajouter Categorie</a>
                                </li>
                                
                                <li class="breadcrumb-item"><a href=""> Liste Catégorie</a></li>
                                
                                <li class="breadcrumb-item"><a href="">Commandes</a></li>
                                
                                <li class="breadcrumb-item"><a href="">Stock</a></li>
                                
                                <li class="breadcrumb-item"><a href="">Dépenses</a></li>
                                
                                <li class="breadcrumb-item"><a href="">Paiements</a></li>
                            </ol>
                        </nav>

                        <div class="main-card mb-3 card container">
                            <div class="mt-2 h4 titre-card">
                                <i class="metismenu-icon pe-7s-study mt-3"></i>
                                <b>Liste - Catégorie</b>
                            </div><hr>
                           
                            <div class="table-responsive">
                                <table id="example1" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">id</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Date création</th>
                                            <th class="text-center">Date derniere modif.</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <!-- Id -->
                                            <td class="text-center">1</td>

                                            <!-- Nom -->
                                            <td class="text-center">Telephone</td>
                                            
                                            <!-- Date création -->
                                            <td class="text-center">12/12/2023</td>

                                            <!-- Date derniere modif. -->
                                            <td class="text-center">12/12/2023</td>
                                            
                                            <!-- Action -->
                                            <td class="text-center">
                                                <a href="#" >
                                                    <span class="btn btn-focus"
                                                        style="border: 3px solid white; border-radius: 20px;">
                                                        <i class="fas fa-eye"></i>
                                                    </span>
                                                </a>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                                
                                <div class="main-card mb-3 card container p-4 message_shadow">
                                    <h3 class="text-center">Il n'y a aucune catégorie pour le moment 😇!</h3>
                                </div>
                            </div>
                            
                            <div class="d-block text-center card-footer">
                                footer list
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!-- {if isset($message)}  -->
                    <!-- <script src="public/jquery/sweetalert2.min.js"></script> -->
                    <!-- <div hidden id="message">{$message}</div>   -->
                    <!-- {include file='../../partials/extract_content/sweetAlert/sweetAlertSuccess1.html'} 
                {/if} -->

            </div>
            <!------------ ❖❖❖ Content ❖❖❖ --------------->
        </div>
    </div>


    <!-- Modal Ajout Categorie-->
    <div class="modal fade" id="modalAddCategorie" tabindex="-1" aria-labelledby="modalAddCategorie" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title fs-5 " id="modalAddCategorie"><b>Ajout Categorie</b></h3>
            <i data-bs-dismiss="modal" class="fa-solid fa-xmark" style="cursor:pointer"></i>
        </div>
        <div class="modal-body">
            
            <form action="addCategorieController" method="post" enctype="multipart/form-data">
                <div class="container">
                    <!-- Nom de la catégorie -->
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="nom" class="form-label">Nom Categorie</label>
                            <input id="nom" type="text" name="nom" class="form-control" required>
                        </div>
                    </div>

                    <!-- Bouttons soumission -->
                    <div class="modal-footer">
                        <button type="submit" name="frmAddCategorie" class="btn btn-primary">Enrégistrer</button>
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
        
    <!------------ ❖❖❖ Foot ❖❖❖ --------------->
    <?php require_once("../../../partials/admin/foot.php") ?>
    <!------------ ❖❖❖ Foot ❖❖❖ --------------->