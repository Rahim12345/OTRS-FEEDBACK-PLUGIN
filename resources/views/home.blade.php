@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <form action="" method="GET">
                        <div class="card-header">
                            <div style="
                                padding: 5px;
                                display: flex;
                                justify-content: space-between;
                                align-items: center;">
                                TİCKET
                                <label for="sorgu_action"></label>
                                <select name="sorgu_action" id="sorgu_action" class="form-control w-25 float-end"
                                        onchange="$(this).closest('form').submit();">
                                    <option value="butun" {{ request('sorgu_action') == 'butun' ? 'selected' : '' }}>
                                        Bütün
                                    </option>
                                    <option
                                            value="sorgusuz" {{ request('sorgu_action') == 'sorgusuz' ? 'selected' : '' }}>
                                        Sorğulanmayan
                                    </option>
                                    <option
                                            value="sorgulu" {{ request('sorgu_action') == 'sorgulu' ? 'selected' : '' }}>
                                        Sorğulanan
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <table class="table">
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <td>ticket_id</td>
                                    <td>Problem</td>
                                    <td>Sifarişçi</td>
                                    <td>
                                        <label for="user_id"></label>
                                        <select name="user_id" id="user_id" class="form-control"
                                                onchange="$(this).closest('form').submit();">
                                            <option value="">Həll edən</option>
                                            @foreach($users as $user)
                                                <option
                                                        value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>{{ $user->first_name.' '.$user->last_name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>Təklif</td>
                                    <td>
                                        <input type="date" name="start_time" value="{{ request('start_time') }}"
                                               class="form-control"
                                               onchange="$(this).closest('form').submit();">
                                    </td>
                                    <td>
                                        <input type="date" name="end_time" value="{{ request('end_time') }}"
                                               class="form-control"
                                               onchange="$(this).closest('form').submit();">
                                    </td>
                                    <td>
                                        Duration
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    @php
                                        $customer_user_id = explode('.', $ticket->customer_user_id);
                                        $first_name = ucfirst($customer_user_id[0]);
                                        $last_name = ucfirst($customer_user_id[1]);
                                        $full_name = $first_name.' '.$last_name;
                                    @endphp
                                    <tr>
                                        <td>{{ ($tickets ->currentpage()-1) * $tickets ->perpage() + $loop->index + 1 }}</td>
                                        <td><a href="{{ route('ticket.history',['ticket_id'=>$ticket->id]) }}"
                                               target="_blank">{{ $ticket->tn }}</a></td>
                                        <td>{{ $ticket->title }}</td>
                                        <td>{{ $full_name }}</td>
                                        <td>{{ $ticket->getWorker->first_name.' '.$ticket->getWorker->last_name }}</td>
                                        <td>{{ $ticket->suggest  }}</td>
                                        <td>{{ $ticket->create_time  }}</td>
                                        <td>{{ $ticket->change_time  }}</td>
                                        <td>
                                            @php
                                                $start_time = new \Carbon\Carbon($ticket->create_time);
                                                $end_time = new \Carbon\Carbon($ticket->change_time);
                                                $time_difference_in_seconds = $end_time->diffInSeconds($start_time);
                                            @endphp
                                            {{ \App\Traits\SecondConverter::setSecond($time_difference_in_seconds) }}
                                        </td>
                                        <td>
                                            @if($ticket->mail_send == 1)
                                                <a href="{{ route('show.feedback.admin',['ticket_token'=>$ticket->ticket_token]) }}"
                                                   class="btn btn-primary" target="_blank">bax</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-10 float-start">
                                    {!! $tickets->appends(request()->query())->links('pagination::bootstrap-4') !!}
                                </div>
                                <div class="col-md-2 float-end">
                                    <select name="count" id="count" class="form-control"
                                            onchange="$(this).closest('form').submit();">
                                        <option value="10" {{ request('count') == 10 ?  'selected' : '' }}>10</option>
                                        <option value="20" {{ request('count') == 20 ?  'selected' : '' }}>20</option>
                                        <option value="50" {{ request('count') == 50 ?  'selected' : '' }}>50</option>
                                        <option value="100" {{ request('count') == 100 ?  'selected' : '' }}>100</option>
                                        </select>
                                    </div>

                                </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
