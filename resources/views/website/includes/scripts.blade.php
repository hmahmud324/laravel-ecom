  <!-- script file here -->
  <script src="{{ asset('/') }}website/assets/plugins/js/jquery.js"></script>
  <script src="{{ asset('/') }}website/assets/plugins/js/swipper.js"></script>
  <script src="{{ asset('/') }}website/assets/plugins/js/select2.js"></script>
  <script src="{{ asset('/') }}website/assets/plugins/js/mixitUp.js"></script>
  <script src="{{ asset('/') }}website/js/app.js"></script>

 @push('script')
 <script>
  function dismiss(el){
  el.parentNode.style.display='none';
  };
</script>
 @endpush

 @section('scripts')
 <script>
  $(document).ready(function() {
      $('.minus').click(function() {
          var $input = $(this).parent().find('input');
          var count = parseInt($input.val()) - 1;
          count = count < 1 ? 1 : count;
          $input.val(count);
          $input.change();
          return false;
      });
      $('.plus').click(function() {
          var $input = $(this).parent().find('input');
          $input.val(parseInt($input.val()) + 1);
          $input.change();
          return false;
      });
  });
</script>
 @endsection