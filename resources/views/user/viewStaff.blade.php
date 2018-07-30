<script type="text/javascript">
    
    $('#addedstaff').dataTable({
                 "dom" : "Bfrtip",
                  "buttons" : [{
                    extend: "excelHtml5",
                    title : "Staff"
                  }, {
                    extend: "pdfHtml5",
                    title : "Staff"
                  }, {
                    extend: "csvHtml5",
                    title : "Staff"
                  }, "copy","print"]
               });
</script>

 <table id="addedstaff" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone no</th>
                                            <th>Status</th>
                                           
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone no</th>
                                            <th>Status</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $staff)
                                        <tr>
                                            <td>{{$staff->fname}} {{$staff->lname}}</td>
                                            <td>{{$staff->email}}</td>
                                            <td>{{$staff->phone_no}}</td>
                                            <td>{{$staff->status}}</td>
                                            
                                        </tr> 
                                         @endforeach
                                    </tbody>
                                   
                                </table>
                            
                 


 