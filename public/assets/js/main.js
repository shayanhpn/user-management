// Add Tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

// Delete Record Using Ajax
$(document).on('click','.remove-record-btn',function(){
    let postId = $(this).data("record-id");
    console.log(postId)
    $.ajax({
        url :'/delete/record/' + postId,
        type: 'DELETE',
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (response) => {
            if(response.success){
                location.reload()
            }
        },
        error: (error) => {
            console.log('Error: ',error)
        }
    })
})

$(document).ready(() => {
    $('#alert-danger').fadeOut(5000)
    $('#alert-success').fadeOut(5000)
})
