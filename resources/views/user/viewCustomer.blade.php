<script type="text/javascript">
    $('#viewcustomer').dataTable({
                  "dom" : "Bfrtip",
                  "buttons" : [{
                    extend: "excelHtml5",
                    title : "Customer"
                  }, {
                    extend: "pdfHtml5",
                    title : "Customer"
                  }, {
                    extend: "csvHtml5",
                    title : "Customer"
                  }, "copy","print"]
                  });
</script>


 <table id="viewcustomer" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone no</th>
                                            <th>created At</th>
                                            
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone no</th>
                                            <th>created At</th>
                                            <th>Last LoggedIn</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $customer)
                                        <tr>
                                            <td>{{$customer->fname}} {{$customer->lname}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->phone_no}}</td>
                                            <td>{{$customer->created_at}}</td>
                                            
                                        </tr> 
                                         @endforeach
                                    </tbody>
                                   
                                </table>
                            
                 


 