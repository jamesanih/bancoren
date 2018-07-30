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

 
 <table id="bill" class="table table-bordered table-striped table-hover  dataTable js-exportable">
                                    <thead>
                                        <tr>
                                             <th>Date</th>
                                            <th>Account Name</th>
                                             <th>Depositor</th>
                                             <th>Amount</th>
                                            <th>Tel</th>
                                            <th></th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>
                                            <th>Account Name</th>
                                             <th>Depositor</th>
                                             <th>Amount</th>
                                            <th>Tel</th>
                                            <th></th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                         @foreach($data as $transfer) 
                                        
                                        <tr>
                                          

                                        	 <td>{{$transfer->created_at}} </td>
                                            <td>
                                                 {{$transfer->account_name}}
                                                
                                            </td>

                                            <td>{{$transfer->depositor_name}}</td>
                                             <td><span>&#36;</span>{{$transfer->amount}}</td>
                                           <td>{{$transfer->phone_no}}</td>
                                            
                                           <td>
                                             <!--  <button class="btn btn-lg btn-primary waves-effect" id="{{$transfer->status}}"  >confirm Transfer</button> -->
                                             <a href="{{route('confirmTransfer',['id'=>$transfer->id])}}" class="btn btn-lg btn-primary waves-effect">confirm Transfer</a>
                                            </td>
                                        </tr>
                                      
                                        @endforeach
                                    
                                    </tbody>
                                </table>