function readImg(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
	    $('#profile-img-tag').attr('src', e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
    }
}
$("#input-select-images").change(function() {
    readImg(this);
});

function readBanner(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
	    $('#profile-img-tag-banner').attr('src', e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
    }
}
$("#input-select-banner").change(function() {
    readBanner(this);
});

function readBannerCategory(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
	    $('#profile-img-tag-banner-category').attr('src', e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
    }
}
$("#input-select-banner-category").change(function() {
    readBannerCategory(this);
});

function readBannerProduct(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
	    $('#profile-img-tag-banner-product').attr('src', e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
    }
}
$("#input-select-banner-product").change(function() {
    readBannerProduct(this);
});
