<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/../css/bootstrap.css">
<link href="/../css/sidebar.css" rel="stylesheet">
<link href="/../css/style.css" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">

	<title></title>
</head>
<body>

@include('admin.partials.navbar')

@include('admin.partials.sidebar')

</body>
<script type="text/javascript" src="/../js/jquery.js"></script>
<script type="text/javascript" src="/../js/bootstrap.js"></script>
<script type="text/javascript" src="/../js/mystyle.js"></script>
<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
$(document).on('click', 'a.jquery-postback', function(e) {
    e.preventDefault(); // does not go through with the link.

    var $this = $(this);

    $.post({
        type: $this.data('method'),
        url: $this.attr('href')
    }).done(function (data) {
        alert('success');
        console.log(data);
    });
});
</script>


</html>