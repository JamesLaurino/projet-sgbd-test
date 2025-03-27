<?php

namespace App\Http\Controllers;

class ProduitController extends Controller
{
    public $produits = [
        ['id' => 1, 'nom' => 'PC Portable', 'prix' => 1200, 'en_promo' => true],
        ['id' => 2, 'nom' => 'Souris Gaming', 'prix' => 80, 'en_promo' => false],
        ['id' => 3, 'nom' => 'Clavier Mécanique', 'prix' => 150, 'en_promo' => true],
        ['id' => 4, 'nom' => 'Casque Audio', 'prix' => 100, 'en_promo' => false],
    ];


    public function index()
    {
        return view('product.produit',['produits' => $this->produits]);
    }

    public function getById($id)
    {
        $res = [];
        foreach ($this->produits as $produit) {
            if($produit['id'] == $id){
                $res = $produit;
            }
        }
        return view('product.product-detail',['res' => $res]);
    }
}
