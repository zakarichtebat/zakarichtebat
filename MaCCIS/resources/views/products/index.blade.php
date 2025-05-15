@extends('layouts.app')

@section('title', 'Liste des produits')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Liste des produits</h2>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Nouveau produit</a>
        </div>
        <div class="card-body">
            @if(count($products) > 0)
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }} €</td>
                                    <td>{{ $product->stock }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">Voir</a>
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-sm btn-warning">Modifier</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit?')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info">
                    Aucun produit n'a été trouvé. <a href="{{ route('products.create') }}">Créez-en un nouveau</a>.
                </div>
            @endif
        </div>
    </div>
@endsection