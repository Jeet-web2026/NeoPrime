<x-LoginFormLayout login="client" loginsubheading="Client Register">
    @section('formcss')
    <style>
        #client-login {
            background-color: #D1D1FF;
        }
    </style>
    @endsection
    @section('extrajs')
    <script>
        $(document).ready(function() {
            $.get("https://countriesnow.space/api/v0.1/countries/", function(response) {
                if (response.error === false) {
                    $('#client-country').append(`<option value="">Choose country</option>`);
                    $.each(response.data, function(index, country) {
                        $('#client-country').append(
                            `<option value="${country.country}">${country.country}</option>`
                        );
                    });
                }
            });
            $('#client-country').on('change', function() {
                let val = $(this).val();
                $.post({
                    url: "https://countriesnow.space/api/v0.1/countries/states",
                    data: {
                        country: val
                    },
                    success: function(response) {
                        if (response.error === false) {
                            $('#client-state').empty().append(`<option value="">Choose State</option>`);
                            $.each(response.data.states, function(index, state) {
                                $('#client-state').append(
                                    `<option value="${state.name}">${state.name}</option>`
                                );
                            });
                        }
                    }

                });
            });
            $('#client-state').on('change', function() {
                let state = $(this).val();
                let country = $('#client-country').val(); // You must also send the country

                if (state && country) {
                    $.ajax({
                        url: "https://countriesnow.space/api/v0.1/countries/state/cities",
                        method: "POST",
                        contentType: "application/json",
                        data: JSON.stringify({
                            country: country,
                            state: state
                        }),
                        success: function(response) {
                            if (response.error === false) {
                                $('#client-city').empty().append(`<option value="">Choose City</option>`);
                                $.each(response.data, function(index, city) {
                                    $('#client-city').append(
                                        `<option value="${city}">${city}</option>`
                                    );
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
    @endsection
</x-LoginFormLayout>