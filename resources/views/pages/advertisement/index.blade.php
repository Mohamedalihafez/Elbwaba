@extends('layouts.master.master')

@section('css')

@endsection
@section('content')

<div class="container-fluid  wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mx-auto" style="max-width: 600px;">
            <h3 class="fw-bold text-primary text-uppercase">اضف إعلانك </h3>
            <h3 class="text-lg md:text-xl font-bold my-1 font-semibold"> </h3><hr class="my-2"><span>بسم الله الرحمن الرحيم</span><br><span>قال الله تعالى:</span><b>" وَأَوْفُواْ بِعَهْدِ اللهِ إِذَا عَاهَدتُّمْ وَلاَ تَنقُضُواْ الأَيْمَانَ بَعْدَ تَوْكِيدِهَا وَقَدْ جَعَلْتُمُ اللهَ عَلَيْكُمْ كَفِيلاً "</b><span>صدق الله العظيم</span><br><hr class="my-2"><br>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form method="post" enctype="multipart/form-data" action="{{ route('contact.modify') }}" class="ajax-form" resetAfterSend  swalOnSuccess="{{ __('pages.sucessdata') }}" title="{{ __('pages.opps') }}" swalOnFail="{{ __('pages.wrongdata') }}">
                    @csrf
                    <div class="row g-3">
                        
                        <div class="col-md-6">
                            <label class="mb-1" for="exampleInputEmail1">العنوان</label>

                            <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="العنوان" style="height: 55px;">
                            <p class="error error_name"></p>
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1" for="exampleInputEmail1">كلمه السر</label>

                            <input type="email"  name="email"  class="form-control border-0 bg-light px-4" placeholder="بريدك الالكتروني" style="height: 55px;">
                            <p class="error error_email"></p>
                        </div>
                        <div class="col-12">
                            <label class="mb-1" for="exampleInputEmail1">كلمه السر</label>

                            <input type="number" name="phone"  class="form-control border-0 bg-light px-4" placeholder="رقم الجوال" style="height: 55px;">
                            <p class="error error_phone"></p>
                        </div>
                        <div class="col-12">
                            <label class="mb-1" for="exampleInputEmail1">كلمه السر</label>

                            <textarea class="form-control border-0 bg-light px-4 py-3" name="comments"  rows="4" placeholder="الوصف"></textarea>
                            <p class="error error_comments"></p>
                        </div>

                        <div class="col-12">
                            <div class="image-upload-container">
                                <label for="imageInput" class="custom-file-upload">
                                    <i class="fas fa-cloud-upload-alt"></i> إضافه صور للاعلان
                                </label>
                                <input type="file" id="imageInput" accept="image/*" multiple>
                                <div class="image-preview" id="imagePreview">
                                    {{-- <p>إضافه صور للاعلان</p> --}}
                                </div>
                            </div>
                        </div>
                        
                    
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp " data-wow-delay="0.6s">
                <div id="map" style="width: 100%; height: 400px;"></div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">اضف إعلانك</button>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5P1aaaeShZf5EehRdc8RBY8MqhXvrtLc&libraries=places"></script>
<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 0, lng: 0 }, // Default center
            zoom: 10, // Default zoom level
        });
        

        // Get the user's current location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    };

                    // Set the map center to the user's location
                    map.setCenter(userLocation);

                    // Create a marker for the user's location
                    new google.maps.Marker({
                        position: userLocation,
                        map: map,
                        title: 'Your Location',
                    });
                },
                () => {
                    // Handle errors (e.g., user denied location access)
                    console.error('Error getting user location');
                }
            );
        } else {
            console.error('Geolocation is not supported by this browser.');
        }
        
    }

    // Initialize the map when the page loads
    google.maps.event.addDomListener(window, 'load', initMap);
</script>
<script>
    function displayImagePreviews(input) {
    var imagePreview = document.getElementById("imagePreview");
    imagePreview.innerHTML = "";

    if (input.files) {
        for (var i = 0; i < input.files.length; i++) {
            var file = input.files[i];
            var image = document.createElement("img");
            image.src = URL.createObjectURL(file);
            imagePreview.appendChild(image);
        }
    }
}

// Attach event listener to the file input for image previews
document.getElementById("imageInput").addEventListener("change", function () {
    displayImagePreviews(this);
});

// Function to handle image upload (you can customize this)
document.getElementById("uploadButton").addEventListener("click", function () {
    var input = document.getElementById("imageInput");

    if (input.files && input.files.length > 0) {
        // Here, you can write code to upload the selected images to your server.
        // You can use XMLHttpRequest or fetch to send the files to your backend.
        // See the previous response for backend handling.
        alert("Images uploaded successfully.");
    } else {
        alert("Please select images to upload.");
    }
});
</script>
@endsection