@extends('template')

@section('contenu')
    <header>

        <div>
            <h2>Liste des films</h2>
            <button type="submit">Créé un film</button>
        </div>
        
    </header>

    <main>
        <div>
            <table>
                <thead>
                    <th>id</th>
                    <th>titre</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($films as $film)
                    <tr>
                        <td> {{ $film->id }} </td>
                        <td> {{ $film->titre }} </td>
                        <td> <a href="{{ route('voir',$film->id) }}">Voir+</a></td>
                        <td> <a href="#">Modifier</a></td>
                        <td>
                            <button type='submit'>
                                @csrf
                                @method('DELETE')
                                Supprimer
                            </button>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>  
        </div>
    </main>
@endsection