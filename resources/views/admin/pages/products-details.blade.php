@extends('admin.layout.app')
@section('contentt')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Ajouter un Produit</h4>
                <p class="card-description"> Détails du Produit </p>
                <form class="forms-sample" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="productName">Nom du Produit</label>
                    <input type="text" class="form-control" id="productName" name="name" placeholder="Nom du produit" required>
                  </div>
                  <div class="form-group">
                    <label for="productSKU">SKU</label>
                    <input type="text" class="form-control" id="productSKU" name="sku" placeholder="SKU du produit" required>
                  </div>
                  <div class="form-group">
                    <label for="productBarcode">Code-barres</label>
                    <input type="text" class="form-control" id="productBarcode" name="barcode" placeholder="Code-barres du produit">
                  </div>
                  <div class="form-group">
                    <label for="productPrice">Prix</label>
                    <input type="number" class="form-control" id="productPrice" name="price" step="0.01" placeholder="Prix du produit" required>
                  </div>
                  <div class="form-group">
                    <label for="productQuantity">Quantité</label>
                    <input type="number" class="form-control" id="productQuantity" name="quantity" placeholder="Quantité disponible" required>
                  </div>
                  <div class="form-group">
                    <label for="productDescription">Description</label>
                    <textarea class="form-control" id="productDescription" name="description" rows="4" placeholder="Description du produit"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Image du Produit</label>
                    <input type="file" name="image" class="file-upload-default" accept="image/*">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Télécharger une image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Télécharger</button>
                      </span>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                  <button type="reset" class="btn btn-dark">Annuler</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
