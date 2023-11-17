<!----- Dashboard Body Content Section End ----->
</section>
</div>
<!----- Dashboard Body Content Section End ----->
</div>


<!--Js File-->
<script src="{{asset('assets/admin/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>

<!--Data Table JS-->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script src="{{asset('assets/admin/js/custom.js') }}"></script>

<script>
    new DataTable('#example', {
      fixedHeader: true,
      responsive: true
    });
</script>

</body>

</html>