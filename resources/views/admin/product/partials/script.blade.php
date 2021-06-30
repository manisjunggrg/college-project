<script>
    $(function () {

        $(document).on('submit', '#filter-form', function () {

            var data = $(this).find(':input').filter(function () {
                return !!this.value;
            }).serialize();

            var url = '{{ route($base['base_route'].'.index') }}';
            url = url + '?' + data;
            window.location.href = url;

            return false;
        });


         /** delete row */
           $(document).on('click', '#delete-row', function () {
              var $this = $(this);
               bootbox.confirm("Are you sure want to delete?", function(result) {
                   if(result) {
                       $this.closest('form').submit();
                   }
               });
               return false;
            });

    });
</script>