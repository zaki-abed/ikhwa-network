
<h1>Zaku Abed</h1>
<p><strong>Username: </strong> {{ $full_name }}</p>
<p><strong>E-mail: </strong> {{ $email }}</p>
<p><strong>Phone: </strong> {{ $phone }}</p>
<p><strong>Description: </strong> {{ $description }}</p>
<p><strong>Option: </strong> {{ $option }}</p>

@if($file)
    <p><strong>File: </strong> {{ $file->getClientOriginalName() }}</p>
@endif

