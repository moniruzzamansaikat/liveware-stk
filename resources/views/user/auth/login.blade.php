<form method="post" action="{{ route('login') }}">
    @csrf
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <button type="submit">Login</button>
</form>
