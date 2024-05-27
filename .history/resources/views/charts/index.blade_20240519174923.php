
@extends('layouts.app')
@section('content')
<style>
    .text
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="myChart" width="300" height="150"></canvas>
<p class="text-center mt-3"><a href="{{ route('etudiant.index') }}">Consulter la liste des étudiantes</a></p>

<script>
    var data = @json($data);

    // Trier les données par moyenne décroissante
    data.sort((a, b) => b.moyenne - a.moyenne);

    var labels = data.map(function(item) {
        return item.nom;
    });

    var moyennes = data.map(function(item) {
        return item.moyenne;
    });

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Moyennes des étudiants',
                data: moyennes,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)', // Rouge
                    'rgba(54, 162, 235, 0.5)', // Bleu
                    'rgba(255, 206, 86, 0.5)', // Jaune
                    'rgba(75, 192, 192, 0.5)', // Vert
                    'rgba(153, 102, 255, 0.5)', // Violet
                    'rgba(255, 159, 64, 0.5)' // Orange
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

@endsection
