@extends('layouts.app')

@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="testbox">
            <table class="table table-bordered table-responsive-md table-striped table-hover">
                <thead>
                <tr>
                    <th colspan="3">{{ $ticket->title }}</th>
                </tr>
                <tr>
                    <th>İşçi</th>
                    <th>Şərh</th>
                    <th>Tarix</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ticket_histories as $ticket_history)
                    @if($ticket_history->getArticle->article_sender_type_id != 2)
                        <tr>
                            <td>{{ $ticket_history->getArticle->getCreator->first_name.' '.$ticket_history->getArticle->getCreator->last_name }}</td>
                            <td>{{ $ticket_history->article_value }}</td>
                            <td>{{ $ticket_history->getArticle->create_time }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
