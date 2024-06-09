<div class="d-flex">
    <a href="{{ route('umkm.show', ['umkm' => $umkm->id]) }}"
        class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-person-lines-fill"></i></a>
    <a href="{{ route('umkm.edit', ['umkm' => $umkm->id]) }}"
        class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
    <div>
    

        <form action="{{ route('umkm.destroy', ['umkm' => $umkm->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete">
                <i class="bi-trash"></i>
            </button>
        </form>

    </div>
</div>
