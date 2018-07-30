 <script type="text/javascript">
    $('#bill').dataTable({
                  "dom" : "Bfrtip",
                  bFilter: true,
                  "paging":   true,
                    "ordering": true,
                    "info":     true,
                     responsive: true,
                  "buttons" : [{
                    extend: "excelHtml5",
                    title : "madeBills"
                  }, {
                    extend: "pdfHtml5",
                    title : "madeBills"
                  }, {
                    extend: "csvHtml5",
                    title : "madeBills"
                  }, "copy","print"]
                  });
</script>

 <table id="bill" class="table table-bordered table-striped table-hover  dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Payment Type</th>
                                            <th>Amount</th>
                                            <th>Depositor</th>
                                            <th>Tel</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>
                                            <th>Payment Type</th>
                                            <th>Amount</th>
                                            <th>Depositor</th>
                                            <th>Tel</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                         @foreach($data as $bill) 

                                        <tr>
                                        	 <td>{{$bill->created_at}} </td>
                                            <td>
                                                 {{$bill->bill_type}}
                                                
                                            </td>

                                            <td><span>&#36;</span>{{$bill->amount}}</td>
                                             <td>{{$bill->depositor_name}}</td>
                                           <td>{{$bill->phone_no}}</td>
                                            
                                           
                                        </tr>
                                      
                                        @endforeach
                                    
                                    </tbody>
                                </table>