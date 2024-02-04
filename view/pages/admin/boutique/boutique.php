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
                                    <a href="#"  type="button" data-bs-toggle="modal" data-bs-target="#modalAddProduit"> Ajouter Produit</a>
                                </li>
                                
                                <li class="breadcrumb-item"><a href=""> Lister produit</a></li>
                                
                                <li class="breadcrumb-item"><a href="">Commandes</a></li>
                                
                                <li class="breadcrumb-item"><a href="">Stock</a></li>
                                
                                <li class="breadcrumb-item"><a href="">Dépenses</a></li>
                                
                                <li class="breadcrumb-item"><a href="">Paiements</a></li>
                            </ol>
                        </nav>

                        <div class="main-card mb-3 card container">
                            <div class="mt-2 titre-card">
                                <i class="metismenu-icon pe-7s-study mt-3"></i> 
                                Liste - Produits
                            </div><hr>
                            <!-- 
                            	createdat	createdby	
                            updatedat	updatedby	id_boutique	id_categorie	etat -->
                            <div class="table-responsive">
                                <table id="example1" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Photo</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Code</th>
                                            <th class="text-center">Prix Achat</th>
                                            <th class="text-center">Prix. U</th>
                                            <th class="text-center">Qte</th>
                                            <th class="text-center">Categorie</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <!-- Photo -->
                                            <td class="text-center" title="Cliquez pour afficher plus d'infos">
                                                <a href="">
                                                    <img class="image-ronde img-thumbnail" style="width:40px" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                                </a>
                                            </td>

                                            <!-- Nom -->
                                            <td class="text-center">Telephone</td>
                                            
                                            <!-- Code -->
                                            <td class="text-center">123</td>

                                            <!-- Prix Achat -->
                                            <td class="text-center">500 f</td>

                                            <!-- Prix Unitaire -->
                                            <td class="text-center">600 f</td>

                                            <!-- Quantité -->
                                            <td class="text-center">12</td>

                                            <!-- Catégorie -->
                                            <td class="text-center">Mobile</td>
                                            
                                            <!-- Action -->
                                            <td class="text-center">
                                                <a href="" title="Voir détail produit">
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
                                    <h3 class="text-center">Il n'y a aucun produit pour le moment 😇!</h3>
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


    <!-- Modal Ajout produit-->
    <div class="modal fade" id="modalAddProduit" tabindex="-1" aria-labelledby="modalAddProduit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title fs-5 " id="modalAddProduit"><b>Ajout Produit</b></h3>
            <i data-bs-dismiss="modal" class="fa-solid fa-xmark" style="cursor:pointer"></i>
        </div>
        <div class="modal-body">
            
            <form action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <!-- Nom & code -->
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="nom" class="form-label">Nom</label>
                            <input id="nom" type="text" name="nom" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="code" class="form-label">Code</label>
                            <input id="code" type="text" name="code" class="form-control" required>
                        </div>
                    </div>

                    <!-- Prix Achat & Prix unitaire-->
                    <div class="row">
                        <div class="col-lg-6 mt-3">
                            <label for="pa" class="form-label">Prix Achat</label>
                            <input id="pa" type="text" name="pa" class="form-control" required>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <label for="pu" class="form-label">Prix Unitaire</label>
                            <input id="pu" type="text" name="pu" class="form-control" required>
                        </div>
                    </div>

                    <!-- Quantité & Photo-->
                    <div class="row">
                        <div class="col-lg-6 mt-3">
                            <label for="qte" class="form-label">Quantité</label>
                            <input id="qte" type="number" name="qte" class="form-control" required>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input id="photo" type="file" name="photo" class="form-control" required>
                        </div>
                    </div>

                      <!-- Catégorie-->
                      <div class="row">
                        <div class="col-lg-12 mt-3">
                            <label for="categorie" class="form-label">Catégorie</label>
                            <select name="categorie" id="categorie" class="form-control">
                                <option value="Telephone">Téléphone</option>
                                <option value="redio">Radio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Bouttons soumission -->
                <div class="modal-footer">
                    <button type="submit" name="frmAddProduit" class="btn btn-primary">Enrégistrer</button>
                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                </div>

            </form>
        </div>
        </div>
    </div>
    </div>
        
    <!------------ ❖❖❖ Foot ❖❖❖ --------------->
    <?php require_once("../../../partials/admin/foot.php") ?>
    <!------------ ❖❖❖ Foot ❖❖❖ --------------->