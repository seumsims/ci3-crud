<script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'crud/fetch_user'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });  
 </script>  

</body>
</html>