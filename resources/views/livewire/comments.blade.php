<div style="padding: 32px">
    <button wire:click='loadComment' class="btn btn-primary mb-4">Load Comments</button>
    <div wire:loading>Loading..........</div>
    <table class="table table-cell w-full p-10" wire:loading.remove>
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>body</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comments as $comment)
                <tr>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->email }}</td>
                    <td class="whitespace-normal">{{ $comment->body }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">EMPTY</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
