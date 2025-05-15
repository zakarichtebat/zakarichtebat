<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire de Session Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3>Gestionnaire de Session Laravel</h3>
                    </div>
                    <div class="card-body">
                        <h4>ID de Session: <span class="badge bg-secondary">{{ $sessionId }}</span></h4>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        Ajouter des données à la session
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('/session') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="key" class="form-label">Clé</label>
                                                <input type="text" class="form-control" id="key" name="key" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="value" class="form-label">Valeur</label>
                                                <input type="text" class="form-control" id="value" name="value"
                                                    required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        Données de session actuelles
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Clé</th>
                                                    <th>Valeur</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($sessionData as $key => $value)
                                                    @if(!is_array($value) && $key != '_token' && $key != '_flash')
                                                        <tr>
                                                            <td>{{ $key }}</td>
                                                            <td>{{ $value }}</td>
                                                            <td>
                                                                <form action="{{ url('/session/' . $key) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-danger">Supprimer</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>