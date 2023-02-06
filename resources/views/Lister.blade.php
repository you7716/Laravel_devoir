<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <div>
        <h1 style="font-size:50px; color:black">Liste Etudiant</h1>
    </div>
    <br>
        <a href="{{ route('projet') }}">
            Ajouter un Projet
        </a>
        <br>
        <br>
        <table>
            <tr>
                <td>ID</td>
                <td>NOM</td>
                <td>Prenom</td>
                <td>Matiere</td>
                <td>NOTE</td>
                <td>Examen</td>
                <td>Semestre</td>
                
            </tr>

            @if ($etudiants->count() > 0)
                        @foreach ($etudiants as $etudiant) 
                            <tr>
                            <td>{{ $etudiant->id }}</td>
                                <td>{{ $etudiant->nom }}</td>
                                <td> {{$etudiant->prenom }} </td> 
                                <td> {{$etudiant->matiere }} </td>
                                <td> {{$etudiant->note }} </td>
                                <td> {{$etudiant->examen }} </td>
                                <td> {{$etudiant->semestre }} </td>
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucun projet  dans la base</span>
            @endif 
            <br>
        
        </table>
    </center>
</body>
</html>





