@extends('master')

@section('content')
    <div class="container bg-white col-md-4 offset-md-4 p-3 rounded-lg mt-5" id="dataContainer">
        <h1 class="text-center text-3xl text-black underline underline-offset-8 font-serif">Scroll Loader</h1>
        @include('pages.data-list', ['data' => $data])
    </div>

    <!-- Scroll Trigger for AJAX Load More -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let page = 1;

        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                page++;
                loadMoreData(page);
            }
        });

        function loadMoreData(page) {
            $.ajax({
                    url: '{{ route('load-more-data') }}',
                    type: "GET",
                    data: {
                        page: page
                    },
                    beforeSend: function() {
                        // You can show a loading spinner here.
                    }
                })
                .done(function(data) {
                    if (data.length == 0) {
                        // Stop making requests if no more data is available
                        return;
                    }
                    $('#dataContainer').append(data);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Error loading data.');
                });
        }
    </script>
@endsection
