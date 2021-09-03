@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Filter</div>

                <div class="card-body">
                    <form method="get" action="{{ route('filter') }}">
                        <div class="row">
                        <div class="form-group col-md-3">
                            <select class="form-control" name="country">
                                <option disabled selected value>Select country</option>
                                @foreach($countries as $country)
                                <option value="{{ $country['code'] }}" {{ (isset($queryParams) && isset($queryParams['country'])  && $queryParams['country'] == $country['code'])?  'selected' : '' }}>{{ $country['country'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <select class="form-control" name="state">
                                <option disabled selected value>Select valid or not valid</option>
                                <option value="0" {{ (isset($queryParams) && isset($queryParams['state']) && $queryParams['state'] == 0)?  'selected' : '' }}>Not valid numbers</option>
                                <option value="1" {{ (isset($queryParams) && isset($queryParams['state']) && $queryParams['state'] == 1)?  'selected' : '' }}>Valid numbers</option>
                            </select>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Phone Numbers</div>

                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Country</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Country Code</th>
                        <th scope="col">State</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customersWithCodeAndCountryAndState as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->country }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->code }}</td>
                            <td>{{ $customer->state }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    @if(isset($queryParams))
                    {{ $customersWithCodeAndCountryAndState->appends($queryParams)->links() }}
                    @else
                    {{ $customersWithCodeAndCountryAndState->links() }}
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
