   {{-- jquery --}}
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <!-- Required vendors -->
   <script src="{{ asset('backend/vendor/global/global.min.js') }}"></script>
   <script src="{{ asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"') }}></script>
   <script src="{{ asset('backend/vendor/chart.js/Chart.bundle.min.js') }}"></script>

   <!-- Chart piety plugin files -->
   <script src="{{ asset('backend/vendor/peity/jquery.peity.min.js') }}"></script>

   <!-- Apex Chart -->
   <script src="{{ asset('backend/vendor/apexchart/apexchart.js') }}"></script>

   <!-- Dashboard 1 -->
   <script src="{{ asset('backend/js/dashboard/dashboard-1.js') }}"></script>

   <script src="{{ asset('backend/vendor/owl-carousel/owl.carousel.js') }}"></script>
   <script src="{{ asset('backend/js/custom.min.js') }}"></script>
   <script src="{{ asset('backend/js/deznav-init.js') }}"></script>

   {{-- summer note --}}
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

   {{-- Toast --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

   {{-- data table --}}
   <script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script>

   {{-- font-awesome --}}
   <script src="https://kit.fontawesome.com/622cc589c6.js" crossorigin="anonymous"></script>

   {{-- sweet alert --}}
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   {{-- tags js --}}
   <script src="{{ asset('backend/js/selectize.js') }}"></script>
   <script>
    $('#tag').selectize({
     delimiter: ',',
                 persist: false,
                 create: function(input) {
                     return {
                         value: input,
                         text: input
                     }
                 }
    });
</script>

   <script>
       @if (Session::has('message'))
           var type = "{{ Session::get('alert-type', 'info') }}"
           switch (type) {
               case 'info':
                   toastr.info("{{ Session::get('message') }}");
                   break;
               case 'success':
                   toastr.success("{{ Session::get('message') }}");
                   break;
               case 'warning':
                   toastr.warning("{{ Session::get('message') }}");
                   break;
               case 'error':
                   toastr.error("{{ Session::get('message') }}");
                   break;
           }
       @endif
   </script>
   <script>
       $(document).ready(function() {
           $('#summernote').summernote();
       });
   </script>
   <script>
       $(document).ready(function() {
           $('#video').summernote();
       });
   </script>
    <script>
        $(document).ready(function() {
            $('#terms').summernote();
        });
    </script>
     <script>
        $(document).ready(function() {
            $('#refund').summernote();
        });
    </script>
   @stack('script')

   </body>

   </html>
