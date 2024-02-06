<style>
    .imageTestimonial{
        width: 200px;
        height: 230px;
    }
    </style>
    
    <div class="container">
        <h1 class="text-center fw-bold pb-5">Testimonial</h1>
        <div id="testimonials" class="row justify-content-center">
            @forelse  ($testimonials as $testimonial)
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-10 text-center">
                    <img class="imageTestimonial" src="storage/{{ $testimonial->Image}}" alt="" srcset="">
                    <div class="">
                        <p>{{ $testimonial->Titre }}</p>
                        <p>{{ $testimonial->Message }}</p>
                    </div>
                </div>
                @empty
                <p>No users</p>
            @endforelse
        </div>
    </div>
    
    <script>
    $( function() {
        $( "#testimonials" ).sortable();
    } );
    </script>
    