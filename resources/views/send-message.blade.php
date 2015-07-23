
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Telegram & Laravel</title>

    <!-- Bootstrap core CSS -->
    {!! HTML::style('css/bootstrap.min.css') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(['url' => '/send-message', 'class' => 'form-signin']) !!}
            <h2 class="form-signin-heading">Send Message as Telegram Bot</h2>
            <label for="inputText" class="sr-only">Message</label>
            <textarea name="message" type="text" id="inputText" class="form-control" placeholder="Message" required autofocus></textarea>
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            {!! Form::close() !!}
            <br />
            @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('status') }} status-box">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    {{ Session::get('message') }}
                </div>
            @endif
        </div>
    </div>


</div> <!-- /container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
{!! HTML::script('/js/bootstrap.min.js') !!}
</body>
</html>
