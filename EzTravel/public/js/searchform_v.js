$(function(){
    'use strict';
    $("#tourdestination_searchForm").validate({
        rules: {
            destination_slug: {
                required:true
            }
        },
        messages: {
            destination_slug: {
                required: "Mohon pilih destinasi Anda."
            }
        },
        errorClass:"errSearchFRM",
        submitHandler:function(form){
            $(form).prop('action', base_url+'tour/search_tour');
            $(form).find('button').attr('type', 'button');
            setTimeout(function(){
                form.submit();
            }, 10);
        },
        ignore:":hidden"
    });
    $('#destination_slug').change(function(){
        var selectedReg=$('#destination_slug option:selected').attr('regid');
        $('#country_slug').prop('selectedIndex',0);
        $('button[data-id="country_slug"] .filter-option').html('Semua Negara');
        $('.valuecountry').removeClass('hide').not('.'+selectedReg).addClass('hide');
        $(this).next('.errSearchFRM').hide();
    });

    'use strict';
    $("#hoteldestination_searchForm").validate({
        rules: {
            'hotel-destination_HiFrm': {
                required:true
            },
            'hotel-departDate_HiFrm': {
                required:true
            },
            'hotel-returnDate_HiFrm': {
                required:true
            },
            'hotel-roomNumber_HiFrm': {
                required:true,
                range:[1,4]
            },
            'hotel-destination-slug': {
                required:true
            }
        },
        messages: {
            'hotel-destination_HiFrm': {
                required: "Tujuan menginap Anda?"
            },
            'hotel-departDate_HiFrm': {
                required: "Tanggal Anda check-in?"
            },
            'hotel-returnDate_HiFrm': {
                required: "Tanggal Anda check-out?"
            },
            'hotel-roomNumber_HiFrm': {
                required: "Jumlah kamar?",
                range: "Pilih 1-4 kamar"
            },
            'hotel-destination-slug': {
                required: "Mohon masukkan destinasi menginap yang lain."
            }
        },
        errorClass:"errSearchFRM",
        submitHandler:function(form){
            $(form).prop('action', base_url+'hotel/search_hotel');
            $(form).find('button').attr('type', 'button');
            setTimeout(function(){
                form.submit();
            }, 10);
        },
        ignore:"#Hs_frmS"
    });
});

