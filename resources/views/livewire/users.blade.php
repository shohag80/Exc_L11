<div>
    <div class="container mt-5">
        <h3 class="mb-3">User List</h3>
        <table class="table table-hover text-center">
            <thead>
                <tr colspan="4">
                    User search
                    <input wire:model.live="search" type="text" class="form-control">
                </tr>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Create Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $key => $item)
                    <tr>
                        <th scope="row">{{ $users->firstItem() + $key }}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->created_at}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No data found!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{$users->links()}}
    </div>
</div>
