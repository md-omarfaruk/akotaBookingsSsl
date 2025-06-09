jQuery(document).ready(function($) {
    $('#payNow').change(function() {
        if ($(this).is(':checked')) {
            let customerFullName = $('#firstName').val() + " " + $('#lastName').val();
            let first_name = $('#firstName').val();
            let last_name = $('#lastName').val();
            let customerEmail = $('#email').val();
            let customerPhone = $('#phone').val();
            let customerCountry = $('#country').val();
            let companyName = $('#companyName').val();
            let address = $('#address').val();
            let apartment = $('#apartment').val();
            let cityTown = $('#cityTown').val();
            let postcode = $('#postcode').val();
            let subTotal = $('#subTotal').val();
            let taxVat = $('#taxVat').val();
            let amount = $('#total').val();
            let bookedPlan = $('#bookedPlan').val();
            let bookedForPeople = $('#bookedForPeople').val();
            let bookingDate = $('#bookingDate').val();
            let paymentOption = 'paid';
            let termsAndConditions = 1;
            let currentWindowUrl = window.location.href;

            if (customerFullName && customerEmail && customerPhone && amount) {
                $.ajax({
                    url: sslcommerz_ajax.ajax_url,
                    method: 'POST',
                    data: {
                        action: 'sslcommerz_payment',
                        cus_name: customerFullName,
                        first_name: first_name,
                        last_name: last_name,
                        email: customerEmail,
                        phone: customerPhone,
                        country: customerCountry,
                        company_name: companyName,
                        address: address,
                        apartment: apartment,
                        city: cityTown,
                        postcode: postcode,
                        sub_total: subTotal,
                        tax_vat: taxVat,
                        total_amount: amount,
                        booked_plan: bookedPlan,
                        booked_for_people: bookedForPeople,
                        booking_date: bookingDate,
                        payment_option: paymentOption,
                        terms_conditions: termsAndConditions,
                        fail_url: currentWindowUrl,
                        cancel_url: currentWindowUrl,
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            console.log(response);
                            window.location.href = response.GatewayPageURL;
                        } else {
                            alert('Payment session creation failed!');
                            $('#payNow').prop('checked', false);
                        }
                    }
                });
            } else {
                alert('Please fill all fields before proceeding with payment.');
                $('#payNow').prop('checked', false);
            }
        }
    });
});
