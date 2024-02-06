<style>
    body {
        background-color: #f3f4f6;
    }

    .content_form {
        background: #ffffff
    }

    input {
        background-color: #f3f4f6;
    }

    .bottom {
        border: 2px solid #f08709;
        color: #f08709;
        background-color: #ffffff;
        font-weight: bold;
    }

    .bottom:hover {
        border: 1px solid #f08709;
        color: #ffffff;
        background-color: #f08709;
        transition: 0.5s;
    }
    span{
        color: red;
    }
</style>
<div class="container my-5 ">
    <div class="row justify-content-center my-5">
        <div class="col-xl-7 col-sm-10 content_form py-5">
            <form action="/temoignage" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-10 pb-3">
                        <label class="py-1 text-uppercase fw-bold">Titre <span class="">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Titre" name="Titre">
                        @error('Titre')
                            <div class="alert alert-danger py-2 my-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-10 pb-3">
                        <label class="py-1 text-uppercase fw-bold">Image</label>
                        <input type="file" class="form-control" name="Image">
                        @error('Image')
                            <div class="alert alert-danger py-2 my-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-10 pb-3">
                        <label class="py-1 text-uppercase fw-bold">Message <span class="">*</span></label>
                        <textarea class="form-control" placeholder="Message" name="Message" rows="5"></textarea>
                        @error('Message')
                            <div class="alert alert-danger py-2 my-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <div class="col-xl-6 col-sm-10 text-center">
                        <button class="bottom px-5 py-2" type="submit" class="btn">Add New Testimonial</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
