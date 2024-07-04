<form action="{{route('contact')}}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="1">
    <input type="text" name="message" id="">
    <input type="submit">
</form>
