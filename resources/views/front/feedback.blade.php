<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADPU - İKT xidmət sorğusu</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('main.css') }}">
</head>
<body>
<div class="testbox">
    <form action="{{ route('feedback.store') }}" method="post" onsubmit="return false" id="feedback-form">
        @csrf
        <input type="hidden" name="ticket_token" value="{{ request()->segment(2) }}">
        <h1>İKT XİDMƏT SORĞUSU</h1>
        <p class="">Bizə rəy bildirərək, xidmət keyfiyyətini yaxşılaşdırmağa bizə kömək edin.</p>
        <table>
            <tr>
                <th class="first-col"></th>
                <th><span>😍</span></th>
                <th><span>😁</span></th>
                <th><span>😶</span></th>
                <th><span>🙁</span></th>
                <th><span>🤬</span></th>
            </tr>
            <tr>
                <td class="first-col">Ümumilikdə dəstək xidmətindən nə dərəcədə razısınız?</td>
                <td><input type="radio" value="5" name="s1" {{ $ticket->s1 == 5 ? 'checked' : '' }}/></td>
                <td><input type="radio" value="4" name="s1" {{ $ticket->s1 == 4 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="3" name="s1" {{ $ticket->s1 == 3 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="2" name="s1" {{ $ticket->s1 == 2 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="1" name="s1" {{ $ticket->s1 == 1 ? 'checked' : '' }} /></td>
            </tr>
            <tr>
                <td class="first-col">Dəstək xidmətinə müraciət etmək və dəstək komandamızla əlaqə saxlamaq nə qədər asan idi?</td>
                <td><input type="radio" value="5" name="s2" {{ $ticket->s2 == 5 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="4" name="s2" {{ $ticket->s2 == 4 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="3" name="s2" {{ $ticket->s2 == 3 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="2" name="s2" {{ $ticket->s2 == 2 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="1" name="s2" {{ $ticket->s2 == 1 ? 'checked' : '' }} /></td>
            </tr>
            <tr>
                <td class="first-col">Dəstək xidməti əməkdaşının peşəkarlığını necə qiymətləndirərdiniz?</td>
                <td><input type="radio" value="5" name="s3" {{ $ticket->s3 == 5 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="4" name="s3" {{ $ticket->s3 == 4 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="3" name="s3" {{ $ticket->s3 == 3 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="2" name="s3" {{ $ticket->s3 == 2 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="1" name="s3" {{ $ticket->s3 == 1 ? 'checked' : '' }} /></td>
            </tr>
            <tr>
                <td class="first-col">Dəstək xidməti əməkdaşının kommunikasiya bacarıqlarını necə qiymətləndirərdiniz?</td>
                <td><input type="radio" value="5" name="s4" {{ $ticket->s4 == 5 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="4" name="s4" {{ $ticket->s4 == 4 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="3" name="s4" {{ $ticket->s4 == 3 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="2" name="s4" {{ $ticket->s4 == 2 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="1" name="s4" {{ $ticket->s4 == 1 ? 'checked' : '' }} /></td>
            </tr>
            <tr>
                <td class="first-col">Dəstək xidməti əməkdaşının müraciətin həllinə sərf etdiyi zaman sizi qane etdimi?</td>
                <td><input type="radio" value="5" name="s5" {{ $ticket->s5 == 5 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="4" name="s5" {{ $ticket->s5 == 4 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="3" name="s5" {{ $ticket->s5 == 3 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="2" name="s5" {{ $ticket->s5 == 2 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="1" name="s5" {{ $ticket->s5 == 1 ? 'checked' : '' }} /></td>
            </tr>
            <tr>
                <td class="first-col">Dəstək xidməti əməkdaşı müraciətinizi tam olaraq anlaya bildimi?</td>
                <td><input type="radio" value="5" name="s6" {{ $ticket->s6 == 5 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="4" name="s6" {{ $ticket->s6 == 4 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="3" name="s6" {{ $ticket->s6 == 3 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="2" name="s6" {{ $ticket->s6 == 2 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="1" name="s6" {{ $ticket->s6 == 1 ? 'checked' : '' }} /></td>
            </tr>
            <tr>
                <td class="first-col">Müraciət etdiyiniz mövzu üzrə ilk dəfə əlaqə saxladınız?</td>
                <td><input type="radio" value="5" name="s7" {{ $ticket->s7 == 5 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="4" name="s7" {{ $ticket->s7 == 4 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="3" name="s7" {{ $ticket->s7 == 3 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="2" name="s7" {{ $ticket->s7 == 2 ? 'checked' : '' }} /></td>
                <td><input type="radio" value="1" name="s7" {{ $ticket->s7 == 1 ? 'checked' : '' }} /></td>
            </tr>

        </table>
        <h4>Daha yaxşı xidmət etmək üçün nə təklif edirsiz?</h4>
        <div class="question-answer">
            <label for="suggest"></label>
            <textarea name="suggest" id="suggest" cols="30" rows="4" class="form-control">{{ $ticket->suggest }}</textarea>
        </div>
        <div class="btn-block">
            <button type="button" class="float-end" id="feedbackBtn">Geri bildirim</button>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function(){
   $('#feedbackBtn').click(function(){
        let myThis = $(this);
        myThis.prop('disabled',true);
        let feedForm = document.getElementById("feedback-form");
        let data = new FormData(feedForm);

       $.ajax({
           url: '{!! route('feedback.store') !!}',
           data: data,
           cache: false,
           processData: false,
           contentType: false,
           type: 'POST',
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           success: function () {
               toastr.success('Sorğu uğurla göndərildi');
               myThis.prop('disabled',false);
           },
           error : function (myErrors) {
               $.each(myErrors.responseJSON.errors, function (key, error) {
                   toastr.error(error);
               });
               myThis.prop('disabled',false);
           }
       });
   });
});
</script>
</body>
</html>
