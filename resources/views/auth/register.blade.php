@extends('layouts.app')

@section('content')
    <div class="container mt-4 p-4">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <div class="card w-full shadow-none bg-white" data-aos="flip-up">
                        <div class="card-body text-start">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                                            class="form-control mb-3  @error('name') is-invalid @enderror">
                                        @error('name')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                                            class="form-control mb-3 @error('email') is-invalid @enderror">
                                        @error('email')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="number" class="form-label">Number</label>
                                        <input type="text" name="number" id="number" value="{{ old('number') }}"
                                            class="form-control mb-3 @error('number') is-invalid @enderror">
                                        @error('number')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" name="state" id="state" value="{{ old('state') }}"
                                            class="form-control mb-3 @error('state') is-invalid @enderror">
                                        @error('state')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="stateCode" class="form-label">State Code</label>
                                        <input type="text" name="stateCode" id="stateCode" value="{{ old('stateCode') }}"
                                            class="form-control mb-3 @error('stateCode') is-invalid @enderror">
                                        @error('stateCode')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password"
                                            class="form-control mb-3 @error('password') is-invalid @enderror">
                                        @error('password')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="form-control mb-3 @error('password_confirmation') is-invalid @enderror">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="zone" class="form-label">Zone</label>
                                        <select type="text" name="zone" id="zone" value=""
                                            class="form-select mb-3 @error('zone') is-invalid @enderror">
                                            <option value="">Choose Your Zone</option>
                                        </select>
                                        @error('zone')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <label for="name" class="form-label">Sub-Zone</label>
                                <select type="text" name="subzone" id="subZone" value=""
                                    class="form-select mb-3 @error('subzone') is-invalid @enderror">
                                    <option value="">Choose your Subzone</option>
                                </select>
                                @error('subzone')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="btn btn-dark col-12">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sub = [{
                    zone: 'Owerri Municipal',
                    subzones: ['Umuguma', 'EGBU', 'Irete']
                },
                {
                    zone: 'Owerri North',
                    subzones: ['Ikeredu', 'Mbatoli']
                },
                {
                    zone: 'Owerri South',
                    subzones: ['Ngorkpala', 'Ulaku', 'Obibi Ezeama', 'Agbala']
                },
                {
                    zone: 'Ohazi',
                    subzones: ['Obinze', 'Obosoma', 'Egbema']
                },
                {
                    zone: 'Nkwere',
                    subzones: ['Nwageli', 'Isu']
                },
                {
                    zone: 'Orlu',
                    subzones: ['Njaba', 'Osu']
                },
                {
                    zone: 'Ideato',
                    subzones: ['Ideato North', 'Ideato South']
                },
                {
                    zone: 'Okigwe',
                    subzones: ['Okigwe', 'Onuimo']
                },
                {
                    zone: 'Mbano',
                    subzones: ['Ehime Mbano', 'Isiala', 'Ihitte Uboma']
                },
                {
                    zone: 'Mbaise',
                    subzones: ['Mbowu', 'Ezenita', 'Azu', 'Arbor']
                },
                {
                    zone: 'Oguta',
                    subzones: ['Oru East', 'Oru West', 'Oguta', 'Arbor']
                }
            ];

            const zoneSelect = document.getElementById('zone');
            const subZoneSelect = document.getElementById('subZone');

            // Populate the zone select field
            sub.forEach(zone => {
                const option = document.createElement('option');
                option.value = zone.zone;
                option.textContent = zone.zone;
                zoneSelect.appendChild(option);
            });

            // Handle zone change event to populate subzone select field
            zoneSelect.addEventListener('change', function() {
                const selectedZone = zoneSelect.value;
                const subzones = sub.find(zone => zone.zone === selectedZone)?.subzones || [];

                // Clear existing subzone options
                subZoneSelect.innerHTML = '<option value="">Choose your Subzone</option>';

                // Populate the subzone select field
                subzones.forEach(subzone => {
                    const option = document.createElement('option');
                    option.value = subzone;
                    option.textContent = subzone;
                    subZoneSelect.appendChild(option);
                });
            });
        });
    </script>
@endsection
