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
<div class="modal fade" tabindex="-1" role="dialog" id="alert">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alert</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda harus login terlebih dahulu !
                <div class="modal-footer">
                    <a href="<?= base_url('log') ?>" class="btn btn-primary"> Login</a>
                    </form>
                </div>
            </div>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Inputmask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8-beta.17/jquery.inputmask.min.js"></script>
    <!-- Template JS File -->
    <script src="<?= base_url('assets/stisla') ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/assets/js/custom.js"></script>
    <script>
        $("#table-1").dataTable({
            "columnDefs": [{
                "sortable": true,
            }]
        });
        //Inputmask
        $('[data-mask]').inputmask()
        "use strict";
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

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

        const flashData2 = $('.flash-data2').data('flashdata');
        if (flashData2) {
            Toast.fire({
                icon: 'success',
                timer: 2500,
                title: flashData2,
                customClass: {
                    popup: 'colored-toast'
                },
            })
        }
    </script>
    </body>

    </html>