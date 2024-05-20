<form action="{{ route('comics.destroy', $comic) }}" class="d-inline" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
</form>
