<!-- resources/views/partials/data-list.blade.php -->

@foreach($data as $item)
    <div class="data-item p-6 text-black">
        <h3>Name: {{ $item->name }}</h3>
        <p>Email: {{ $item->email }}. This email Created at {{ date('d-m-Y', strtotime($item->created_at)) }}. This email created at {{ $item->created_at->diffForHumans() }}.</p>
        <hr/>
    </div>
@endforeach
