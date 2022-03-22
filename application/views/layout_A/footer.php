<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2022 <div class="bullet"></div> Create By <a href="https://github.com/PrenD26">Frendy</a> | Made With <a href="https://github.com/stisla/stisla">Stisla</a>
    </div>
    <div class="footer-right">
        v1.0
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url('assets/stisla') ?>/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<!-- Page Specific JS File -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Template JS File -->
<script src="<?= base_url('assets/stisla') ?>/assets/js/scripts.js"></script>
<script src="<?= base_url('assets/stisla') ?>/assets/js/custom.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $("#table-1").dataTable({
        "columnDefs": [{
            "sortable": true,
        }]
    });

    function previewImg() {
        const gambar = document.querySelector('#image');
        const gambarLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        gambarLabel.textContent = gambar.files[0].name;

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
    $('.tombol-hapus').on('click', function(e) {
        e.preventDefault(); //membatalkan fungsi sebelumnya
        const link = $(this).attr('href');
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data ini akan dihapus dari database!",
            icon: 'warning',
            showCancelButton: true,

            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: 'success',
                    title: 'Data ini berhasil dihapus',
                    showConfirmButton: false,
                    timer: 1100,
                })
                setTimeout(function() {
                    document.location.href = link;
                }, 1100);
            }
        })
    });

    $('.tombol-fire').on('click', function(e) {

        Toast.fire({
            icon: 'info',
            timer: 1800,
            title: 'Info',
            text: 'Preview Gambar tidak work saat update data',
            timerProgressBar: true
        })
    });

    $(document).on('change', '.custom-file-input', function(event) {
        $(this).next('.custom-file-label').html(event.target.files[0].name);
    })

    //sweetalert toast
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    //create kamar dll Admin
    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        Toast.fire({
            icon: 'success',
            timer: 1500,
            title: flashData,
            customClass: {
                popup: 'colored-toast'
            },
        })
    }

    const flashData8 = $('.flash-data8').data('flashdata');
    if (flashData8) {
        Toast.fire({
            icon: 'error',
            timer: 1500,
            title: flashData8,
            customClass: {
                popup: 'colored-toast'
            },
        })
    }
    //toast dashboard
    const flashData10 = $('.flash-data10').data('flashdata');
    if (flashData10) {
        Toast.fire({
            icon: 'success',
            timer: 1500,
            title: flashData10 + ' <?= $this->session->userdata['username'] ?>',
            customClass: {
                popup: 'colored-toast'
            },
        })
    }
</script>
</body>

</html>