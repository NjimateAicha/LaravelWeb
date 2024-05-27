@extends('layouts.app')
@section('content')



<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Matrice n°1</h3>
                    <p class="card-text">Saisie des dimensions</p>
                    <div class="form-group">
                        <label for="rows">Nombre de lignes:</label>
                        <input type="number" class="form-control" id="rows">
                    </div>
                    <div class="form-group">
                        <label for="cols">Nombre de colonnes:</label>
                        <input type="number" class="form-control" id="cols">
                    </div>
                    <br>
                    <button class="btn " onclick="generateMatrix('matrix1')">Générer des valeurs aléatoires</button>
                    <textarea class="form-control mt-3" id="matrix1" readonly></textarea>
                    <button class="btn mt-3" onclick="calculateSum('matrix1')">Calculer la somme</button>
                    <div class="result mt-3">
                        <p>Résultat de la somme:</p>
                        <textarea class="form-control" id="sum1Result" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Matrice n°2</h3>
                    <p class="card-text">Saisie des dimensions</p>
                    <div class="form-group">
                        <label for="rows2">Nombre de lignes:</label>
                        <input type="number" class="form-control" id="rows2">
                    </div>
                    <div class="form-group">
                        <label for="cols2">Nombre de colonnes:</label>
                        <input type="number" class="form-control" id="cols2">
                    </div>
                    <br>
                    <button class="btn " onclick="generateMatrix('matrix2')">Générer des valeurs aléatoires</button>
    
                    <textarea class="form-control mt-3" id="matrix2" readonly></textarea>
                    <button class="btn  mt-3" onclick="calculateProduct('matrix2')">Calculer le produit</button>
                    <div class="result mt-3">
                        <p>Résultat du produit:</p>
                        <textarea class="form-control" id="productResult" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function generateMatrix(targetId) {
        var rowsInput = document.getElementById(targetId === 'matrix1' ? 'rows' : 'rows2');
        var colsInput = document.getElementById(targetId === 'matrix1' ? 'cols' : 'cols2');
        var rows = parseInt(rowsInput.value);
        var cols = parseInt(colsInput.value);
        var matrix = [];
        for (var i = 0; i < rows; i++) {
            matrix[i] = [];
            for (var j = 0; j < cols; j++) {
                matrix[i][j] = Math.floor(Math.random() * 10); // Valeurs aléatoires entre 0 et 9
            }
        }
        document.getElementById(targetId).value = matrixToString(matrix);
    }

    function matrixToString(matrix) {
        return matrix.map(row => row.join('\t')).join('\n');
    }
    
function calculateProduct(targetId) {
    var matrix1 = document.getElementById('matrix1').value.split('\n').map(row => row.split('\t').map(Number));
    var matrix2 = document.getElementById('matrix2').value.split('\n').map(row => row.split('\t').map(Number));
    var result = multiplyMatrices(matrix1, matrix2);
    document.getElementById('productResult').textContent = matrixToString(result);
}

function multiplyMatrices(matrix1, matrix2) {
    var result = [];
    var rowsA = matrix1.length;
    var colsA = matrix1[0].length;
    var rowsB = matrix2.length;
    var colsB = matrix2[0].length;

    if (colsA !== rowsB) {
        console.error("Nombre de colonnes de la première matrice doit correspondre au nombre de lignes de la deuxième matrice.");
        return;
    }

    for (var i = 0; i < rowsA; i++) {
        result[i] = [];
        for (var j = 0; j < colsB; j++) {
            var sum = 0;
            for (var k = 0; k < colsA; k++) {
                sum += matrix1[i][k] * matrix2[k][j];
            }
            result[i][j] = sum;
        }
    }
    return result;
}
function calculateSum(targetId) {
    var matrix1 = document.getElementById('matrix1').value.split('\n').map(row => row.split('\t').map(Number));
    var matrix2 = document.getElementById('matrix2').value.split('\n').map(row => row.split('\t').map(Number));

    // Vérifier que les dimensions des matrices sont compatibles
    if (matrix1.length !== matrix2.length || matrix1[0].length !== matrix2[0].length) {
        console.error("Les dimensions des matrices ne sont pas compatibles pour la somme.");
        return;
    }

    var result = [];

    for (var i = 0; i < matrix1.length; i++) {
        result[i] = [];
        for (var j = 0; j < matrix1[0].length; j++) {
            result[i][j] = matrix1[i][j] + matrix2[i][j];
        }
    }

    // Mettre à jour l'élément HTML avec le résultat de la somme
    document.getElementById('sum1Result').textContent = matrixToString(result);
}

</script>


@endsection

<style>
    btn{
        color:#7777af;
    }
</style>