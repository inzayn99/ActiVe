@section('footer')


    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © {{date('Y')}}.<a href="" target="_blank">  N.P. News & World Report
. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developed By ztechnology.com <i class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{url('backend/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{url('backend/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('backend/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{url('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{url('backend/js/dataTables.select.min.js')}}"></script>


    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('backend/js/off-canvas.js')}}"></script>
    <script src="{{url('backend/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('backend/js/template.js')}}"></script>
    <script src="{{url('backend/js/settings.js')}}"></script>
    <script src="{{url('backend/js/todolist.js')}}"></script>
    <script src="{{url('backend/js/file-upload.js')}}"></script>



    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{url('backend/js/dashboard.js')}}"></script>
    <script src="{{url('backend/js/Chart.roundedBarCharts.js')}}"></script>
    <!-- End custom js for this page-->
    </body>

    </html>


@endsection
