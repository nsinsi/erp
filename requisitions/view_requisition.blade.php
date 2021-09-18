<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
        <div class="container">
        <div class="row">
            <table class="table"  width='100%' style='border-collapse: collapse;'>
               {!! Form::open(['route' => 'requisitions.print', 'method' => 'POST']) !!}
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">
                   <p>YOUTH NET AND COUNSELLING<br>
                       <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('\assets\images\yoneco.png'))) }}" width="80px"><br>
                       P.O. Box 471 <br>
                       Zomba <br>
                       Tel: 265 1525 560
                       </p>
                </th>
                <th scope="col"></th>
                </tr>
            </thead>
            </table>
        </div>
        <div class="row" width='100%' >
        <table class="table"  height="200px" width='100%' style='border-collapse: collapse;'>
            <thead style="background-color: #e3f2fd;">
                <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"><strong> PAYMENT REQUISITION FORM </strong></th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            </table>
        </div>
        <br>
        <div class="row" width="100%">
            <table class="table" height="200px" width='100%' style='border-collapse: collapse;'>
                <thead style="background-color: #e3f2fd;">
                    <tr>
                    <th scope="col"><strong>Part A (To be completed by a Requesting Officer)</strong></th>
                    </tr>
                </thead>
            </table>
        </div>
        <br>
        <div class="row">
            <table class="table" height="200px" width='100%' style='border-collapse: collapse;'>
            <tbody>
                <tr>
                <th scope="row"><strong>Name of Requesting Officer : </strong></th>
                <td>{{ $requisition->user->first_name }} {{ $requisition->user->last_name }}</td>
                </tr>
                <tr>
                <th scope="row"><strong>Date Of Request : </strong></th>
                <td>{{ $requisition->user->first_name }}</td>
                </tr>
                <tr>
                <th scope="row"><strong> Activity Start Date : </strong></th>
                <td>{{ $requisition->start_date }} </td>
                </tr>
                <th scope="row"><strong> Activity End Date : </strong></th>
                <td>{{ $requisition->end_date}}</td>
                </tr>
            </tbody>
            </table>
        </div>
        <br>
        <hr>
        <div height="200px" width='100%'>
        <strong>Purpose of Request : </strong>
            <div width='100%' >
            {{ $requisition->purpose }}
            </div>
        </div>
        <hr>
            <!--- End Owner of the requisitions ----------------------->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Payable to Name:</strong>
                            {{ $requisition->payable_to }}
                        </div>
                    </div>

                </div>

            <!--- Start Owner of the requisitions ----------------------->
            <div class="row">
                <div >
                    <div class="form-group">
                        <span width="50%"> <strong>Project Name     :</strong> </span>{{ $requisition->budgetline->project->name}}<br>
                        <span width="50%"> <strong>Project Number   :</strong>  </span>{{ $requisition->budgetline->project->code }}<br>
                        <span width="50%"> <strong>Budget Line Name :</strong>  </span>{{ $requisition->budgetline->name }}<br>
                        <span width="50%"> <strong>Budget Code      :</strong>  </span>{{ $requisition->budgetline->code }}<br>
                        <br>
                        <strong>Signature Of Requesting Officer  :</strong> {{ $requisition->user->first_name}}<br>
                    </div>
                </div>
                <br>
                <div class="row" width='100%' >
                <table class="table"  height="200px" width='100%' style='border-collapse: collapse;'>
                    <thead style="background-color: #e3f2fd;">
                        <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"><strong> Part B (To be completed by Management and Approving Officers) </strong></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    </table>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        @foreach($requisition->progresses as $progress)
                        <hr>
                        Status: <span>{{ $progress->status->name }}</span><br>
                        Officer:
                        {{ $progress->user->first_name }} {{ $progress->user->last_name }}<br>
                        Details : {{ $progress->details}}<br>
                        Date : {{ $progress->date }}<br>
                        <hr>
                        @endforeach
                    </div>
                </div>
                </div>
            <!--- End Owner of the requisitions ----------------------->
            </div>
        </main>
    </div>
</body>
</html>
