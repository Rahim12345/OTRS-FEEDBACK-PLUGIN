<!DOCTYPE html>
<html>
<head>
    <title>ADPU - İKT xidmət sorğusu</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('main.css') }}">
</head>
<body>
<div class="testbox">
    <form action="" method="post">
        <h1>İKT XİDMƏT SORĞUSU</h1>
        <p class="">Bizə rəy bildirərək, xidmət keyfiyyətini yaxşılaşdırmağa bizə kömək edin.</p>
        <table>
            <tr>
                <th class="first-col"></th>
                <th>Əla</th>
                <th>Yaxşı</th>
                <th>Kafi</th>
                <th>Zəif</th>
            </tr>
            <tr>
                <td class="first-col">Sorğu 1 ?</td>
                <td><input type="radio" value="none" name="s1" /></td>
                <td><input type="radio" value="none" name="s1" /></td>
                <td><input type="radio" value="none" name="s1" /></td>
                <td><input type="radio" value="none" name="s1" /></td>
            </tr>
            <tr>
                <td class="first-col">Sorğu 2 ?</td>
                <td><input type="radio" value="none" name="s2" /></td>
                <td><input type="radio" value="none" name="s2" /></td>
                <td><input type="radio" value="none" name="s2" /></td>
                <td><input type="radio" value="none" name="s2" /></td>
            </tr>

        </table>
        <h4>Daha yaxşı xidmət etmək üçün nə təklif edirsiz?</h4>
        <div class="question-answer">
            <label for="suggest"></label>
            <textarea name="suggest" id="suggest" cols="30" rows="4" class="form-control"></textarea>
        </div>
        <div class="btn-block">
            <button type="submit" class="float-end">Geri bildirim</button>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
