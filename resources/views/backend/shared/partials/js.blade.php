<script type="text/javascript" src="{{ mix('vendor/canvas/assets/js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ mix('vendor/canvas/assets/js/app.js') }}"></script>
<script type="text/javascript">
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>