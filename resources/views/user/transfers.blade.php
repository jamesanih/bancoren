<script type="text/javascript">
    $('#viewtransfers').dataTable({
                  "dom" : "Bfrtip",
                  bFilter: true,
                  "paging":   true,
                    "ordering": true,
                    "info":     true,
                     responsive: true,
                  "buttons" : [{
                    extend: "excelHtml5",
                    title : "transfers"
                  }, {
                    extend: "pdfHtml5",
                    title : "transfers"
                  }, {
                    extend: "csvHtml5",
                    title : "transfers"
                  }, "copy","print"]
                  });
</script>



 <table id="viewtransfers" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <tr>
                                            <th>Datetime</th>
                                            <th>Transfer Type</th>
                                            <th>Account Name</th>
                                            <th>Account Number</th>
                                            <th>Amount</th>
                                            <th>Month/Year</th>
                                            
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date-time</th>
                                            <th>Transfer Type</th>
                                            <th>Account Name</th>
                                            <th>Account Number</th>
                                            <th>Amount</th>
                                            <th>Month-Year</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $transfers)
                                        <tr>
                                            <td>{{$transfers->created_at}}</td>
                                            <td>{{$transfers->transfer_type}} Transfer</td>
                                            <td>{{$transfers->account_name}}</td>
                                            <td>{{$transfers->ac_number}}</td>
                                            <td>&#36;{{$transfers->amount}}</td>
                                            <td>{{$transfers->month}}-{{$transfers->year}}</td>
                                            
                                        </tr> 
                                         @endforeach
                                    </tbody>
                                   
                                </table>
                            
                 


 