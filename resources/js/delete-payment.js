$('#delBtn').on('click', function(e) {
    e.preventDefault();
    Swal.fire({
        title: "Are you sure to delete?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
            //submit the form
            $('#delForm').submit();
        }
    });
})
