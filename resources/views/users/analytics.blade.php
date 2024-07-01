@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <div class="d-flex flex-column align-items-start">
                    <a href={{ route('home') }} class="nav-link my-2 py-2"><i class="fas fa-tachometer-alt"></i>
                        Dashboard</a>
                    <a href="{{ route('user.index') }}" class="nav-link my-2 py-2 active"><i class="fas fa-users"></i>
                        Users</a>
                    <a href="{{ route('user.analytics') }}" class="nav-link my-2 py-2"><i class="fas fa-chart-line"></i> Analytics</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary my-2 py-2" style="padding: 0 60px;"><i class="fas fa-sign-out-alt"></i>
                        Logout</button>
                </form>
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
