function check_all() {
    $('input[class = "item_checkbox"]:checkbox').each(function () {
        if ($('input[class="check_all"]:checkbox:checked').length == 0)
        {
            $(this).prop('checked' , false);
        }
        else
        {
            $(this).prop('checked' , true);
        }

    })
}

function delete_all() {
    $(document).on('click' , '.del_all' , function () {
        $('#form_data').submit();
    });

    $(document).on('click' ,'.del_btn' , function () {
        var item_checked = $('input[class = "item_checkbox"]:checkbox').filter(":checked").length;
        console.log(item_checked);
        if(item_checked > 0)
        {
            console.log('yes');

            $('.record_count').text(item_checked);
            $('.not_empty_record').removeAttr('hidden');
            $('.empty_record').attr('hidden');
        }
        else
        {
            $('.record_count').text('');
            $('.not_empty_record').attr('hidden');
            $('.empty_record').removeAttr('hidden');
        }
        $('#multipleDelete').modal('show');
    });
}
