<form action="{{route('baiviet.store')}}" method="post">
    @csrf
    <div>
        <label for="title">Tieu de :</label>
        <input type="text" name="title" >
    </div>
    <div>
        <label for="content">Noi dung:</label>
        <br/>
        <textarea cols="30" rows="8"></textarea>
    </div>
    <div>
        <button type="submit">Dang bai</button>>
    </div>
</form>