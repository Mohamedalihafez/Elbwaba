@extends('layouts.master.master')

@section('css')

@endsection
@section('content')

<div class="container-fluid  wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
     
        <div class="row g-5">
            <div class="col-lg-12 wow sellproduct " data-wow-delay="0.6s">
                <div class="section-title text-center position-relative pb-3 mx-auto" >
                    <h3 class="fw-bold text-primary text-uppercase">اضف إعلانك </h3>
                    <h3 class="text-lg md:text-xl font-bold my-1 font-semibold"> </h3><hr class="my-2"><span>بسم الله الرحمن الرحيم</span><br><span>قال الله تعالى:</span><b>" وَأَوْفُواْ بِعَهْدِ اللهِ إِذَا عَاهَدتُّمْ وَلاَ تَنقُضُواْ الأَيْمَانَ بَعْدَ تَوْكِيدِهَا وَقَدْ جَعَلْتُمُ اللهَ عَلَيْكُمْ كَفِيلاً "</b><span>صدق الله العظيم</span><br><br>
                </div>
                <div  id="location_map">
                    <label  class="h3" for="exampleInputEmail1">حدد موقع إعلانك</label>

                    <div class="mt-2" id="map" style="width: 100%; height: 400px;"></div>
                    <div class="d-none">
                      <input name="currentLat" value=""  id="currentLat"/>
                        <input name="currentLat" value=""  id="currentLng"/>
                    </div>
                    
                    <div class="col-12 mt-2">
                        <a id="setlocation" class="btn btn-primary w-100 py-3  mt-2">تأكيد العنوان </a>
                    </div>
                </div>
            </div>
            <i id="back_map" class="fa fa-arrow-right f-xl  d-none  product_details" > العوده </i>
            <div class="col-lg-12 wow  slideInUp d-none product_details" >
                <div class="">
                    <form method="post" enctype="multipart/form-data" action="{{ route('contact.modify') }}" class="ajax-form" resetAfterSend  swalOnSuccess="{{ __('pages.sucessdata') }}" title="{{ __('pages.opps') }}" swalOnFail="{{ __('pages.wrongdata') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="mb-1" >حدد المنطقه </label>
                                    <select id="regions"  class="form-control" name="region_id">
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->region_id }}">{{ $region->name_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1" >حدد المدينه أو المحافظه  </label>
                                    <select id="cities"  class="form-control" name="region_id">
                     
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-1" for="exampleInputEmail1">عنوان الاعلان :</label>

                                <input type="text" name="title" class="form-control border-0 bg-light px-4" placeholder="العنوان" style="height: 55px;">
                                <p class="error error_name"></p>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-1" for="exampleInputEmail1">صفة المعلن                                </label>

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
            </div>
       
         
        </div>
    </div>
</div>
@endsection


@section('js')
<script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyD5P1aaaeShZf5EehRdc8RBY8MqhXvrtLc&language=fa&callback=initMap" ></script>
<script>
        let map;
        let marker;

		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: { lat: 0, lng: 0 },
				zoom: 15,
			});

			// Initialize the marker at a default location
			marker = new google.maps.Marker({
				position: { lat: 0, lng: 0 },
				map: map,
				draggable: true, // Make the marker draggable
			});
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(
					function (position) {
						const userLocation = {
							lat: position.coords.latitude,
							lng: position.coords.longitude,
						};
		
						// Set the map center to the user's location
						map.setCenter(userLocation);
		
						// Update the marker's position with the user's location
						marker.setPosition(userLocation);
		
						// Display the user's current latitude and longitude
						document.getElementById('currentLat').attr('value') = userLocation.lat.toFixed(6);
						document.getElementById('currentLng').attr('value') = userLocation.lng.toFixed(6);
					},
					function (error) {
						console.error('Error getting user location:', error);
					}
				);
			} else {
				console.error('Geolocation is not supported by this browser.');
			}
			// Add a dragend event listener to the marker
			google.maps.event.addListener(marker, 'dragend', function () {
				updateCoordinates(marker.getPosition());
			});
		}

        function updateCoordinates(position) {
            const currentLat = position.lat();
            const currentLng = position.lng();

            // Update the HTML elements displaying the coordinates
            document.getElementById('currentLat').textContent = currentLat.toFixed(6);
            document.getElementById('currentLng').textContent = currentLng.toFixed(6);
        }
        $(document).ready(function () {
        $('#regions').on('change', function () {
            var region = this.value;
            $("#cities").html('');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
                url: '{{ route("region.fetch") }}',
                method: 'post',
                data: {region_id: region},
                success: function (results) {
                    $('#cities').html('');
                    results.forEach((result, index) => {
                        $("#cities").append('<option value="' + result['region_id'] + '">' + result['name_ar'] + '</option>');
                    });
                },
            });
        });
    });
        

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



$( "#setlocation" ).on( "click", function() {
  $('#location_map').addClass('d-none');
  $('.product_details').removeClass('d-none');
} );

$( "#back_map" ).on( "click", function() {
  $('.product_details').addClass('d-none');
  $('#location_map').removeClass('d-none');
} );


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