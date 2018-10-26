<h1>Thank {{ $name }} for creating a Quote!</h1>
<p>Please register here: <a href="{{ route('mail_callback', ['author_name' => $name]) }}">Link here</a></p>