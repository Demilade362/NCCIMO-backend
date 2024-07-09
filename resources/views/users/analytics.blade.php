@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <x-sidebar />
            </div>
            <div class="col-md-10 bg-white">
                <div class="container mt-4">
                    <h2>User Growth Analytics</h2>
                    <canvas id="userGrowthChart" width="400" height="200"></canvas>
                </div>
                <script>
                    // Data from Laravel controller
                    const userGrowth = @json($userGrowth);
                    const labels = Object.keys(userGrowth);
                    const data = Object.values(userGrowth);

                    // Chart configuration
                    const config = {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'User Growth',
                                data: data,
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    };

                    // Initialize the chart
                    const userGrowthChart = new Chart(
                        document.getElementById('userGrowthChart'),
                        config
                    );
                </script>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
