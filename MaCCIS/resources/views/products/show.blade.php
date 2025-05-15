@extends('layouts.app')

@section('title', 'Détails du produit')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Détails du produit: {{ $product->name }}</h2>
            <div>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Modifier</a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h3>Informations générales</h3>
                    <table class="table">
                        <tr>
                            <th style="width: 150px;">ID</th>
                            <td>{{ $product->id }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $product->description ?? 'Aucune description' }}</td>
                        </tr>
                        <tr>
                            <th>Prix</th>
                            <td>{{ $product->price }} €</td>
                        </tr>
                        <tr>
                            <th>Stock</th>
                            <td>{{ $product->stock }}</td>
                        </tr>
                        <tr>
                            <th>Créé le</th>
                            <td>{{ $product->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        <tr>
                            <th>Modifié le</th>
                            <td>{{ $product->updated_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="mt-4">
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit?')">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection