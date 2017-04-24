<h1>Thank You for creating a Quote {{ $name }}</h1>

<p>Please register here: <a href="{{ route('mail_callback', ['author_name' => $name]) }}">Link</a></p>