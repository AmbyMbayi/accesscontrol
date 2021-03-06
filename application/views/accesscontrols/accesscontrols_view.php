  
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">

        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
      
        <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">


        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


        <title>Accesscontrols</title>

    </head>
  
    <body>
         <div class="container">

                <br>
                <br>

                <h3>Door Accesscontrol List</h3>
                    <button style="float: right; " type="button" id="btn-filter" class="btn btn-primary">
                            <a style="text-decoration: none; color: white;" href="<?= site_url(); ?>accesscontrols/logout">Logout</a>

                    </button>
                <br>
                
                <br>
                <br>

        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  
            <thead>
                 <tr>
                   
                    <th>Name</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th> Date</th>
                    <th> Time</th>

                   
              
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    
                   <th>Name</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th> Date</th>
                    <th> Time</th>

                  
              
                </tr>
            </tfoot>

        </table>

    </div>




        <script type="text/javascript">
            

            $(document).ready(function(){

               $('#table').DataTable({

                    "pageLength": 50,
                    dom: "lBfrtip",
                  
                    "ajax": {
                        url: "<?php echo site_url('accesscontrols/ajax_list')?>",
                        type: 'GET'
                    },
                    "columnDefs": [
                    {
                        "targets": [ 0 ],
                        "orderable": true,
                        "select": 0,
                             
                        
                    },

                        ],
                        buttons: [
                             'pdf','print','excel'
                        ],
                        
                });
            });
          


        </script>


        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

    </body>
</html>
 



<!--code-->




	





