jQuery(document).ready(function ($) {

    // Handle form submission
    $("form").submit(function(e){
    // $("form").on("submit", function (e) {
        e.preventDefault();

        const formData = $(this).serialize();

        $.ajax({
            url: booking_ajax.ajax_url,
            method: "POST",
            data: {
                action: "submit_booking",
                ...formData,
            },
            success: function (response) {
                const data = JSON.parse(response);
                console.log("Post ID:", data.post_id);
                alert("Booking submitted successfully!");
                $("form").fadeOut(); // Close popup after submission
            },
            error: function () {
                alert("Error submitting the form!");
            },
        });
    });
});
