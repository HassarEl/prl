<h1>test chef</h1>

<form action="{{route('logout')}}" method="post">
    @csrf
    <input type="submit" value="logout">
</form>