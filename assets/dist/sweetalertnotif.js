$('.hapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
		title: 'Apa Kamu Yakin?',
		text: "Kamu tidak akan bisa mengembalikan data yang sudah terhapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes'
	}).then((result) => {
		if (result.isConfirmed) {
            document.location.href = href;
		}
	})
})