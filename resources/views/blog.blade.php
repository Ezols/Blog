<ul>


    @foreach($blog as $post)
        <li>

            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>

        </li>
    @endforeach


</ul>






<form action="/insert" method="get">

    Title:<br>
    <input type="text" name="title">
    <br>
    Content:<br>
    <input type="text" name="content">
    <br><br>
    <input type="submit" value="Submit">

</form>