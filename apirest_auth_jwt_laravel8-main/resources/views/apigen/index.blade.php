<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <title>gestion usuarios</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
  .container{
  display: flex;
  margin-left: 0%;
  flex-direction: row;
  
}
#clientes, #vistas, #procedimientos{
  
  padding: 5px;
  
  width: 200px;
  margin: 10px;
  
  
}
   

#tdc, #thc, #thv, #tdv{
    text-align: center;


}

#apigen{
  position: absolute;
  top: 80px; 
  left: 750px;
 
}
#itse{
  position: absolute;
  top: 23px; 
  left: 750px;
}
#click{
  position: absolute;
  top: 100px; 
  left: 890px;
}
#apigenerada{
  position: absolute;
  top: 200px; 
  left: 890px;


}


</style>
    </head>
    <body>
   
    
    <div class="container">
    <div id="clientes">
    <div data-role="collapsible" data-collapsed="true">
    <h1>Clientes ID</h1>
         <tr>
            
        
            
        
    <table class="table">
    
        <thead class="table-dark">
        <tr>
          <th id="thv" scope="col">Clientes</th>
            
        </tr>
        </thead>
        <tr>
            @foreach ($idc as $c)
        <td id="tdv" scope="row"><input type="checkbox" name="opciones1" class="btn btn-primary" value="{{$c->id}}">{{$c->id}}</td>
            
        </tr>
        @endforeach
        </table>
        </tr>
        </div>
    </div>

    <div id="vistas">
        
   
    <div data-role="collapsible" data-collapsed="true">
    <h1>Vistas ID</h1>
         <tr>
            
        
            
        
    <table class="table">
    
        <thead class="table-dark">
        <tr>
          <th id="thv" scope="col">vistas</th>
            
        </tr>
        </thead>
        <tr>
            @foreach ($idv as $v)
        <td id="tdv" scope="row"><input type="checkbox" name="opciones2" class="btn btn-primary" value="{{$v->id}}">{{$v->id}}</td>
            
        </tr>
        @endforeach
        </table>
        </tr>



        </div>
        
        </div>

        <div id="procedimientos">
        
   
        <div data-role="collapsible" data-collapsed="true">
        <h1>Procedures ID</h1>
             <tr>
                
            
                
            
        <table class="table">
        
            <thead class="table-dark">
            <tr>
              <th id="thp" scope="col">Procedures</th>
                
            </tr>
            </thead>
            <tr>
                @foreach ($idp as $p)
            <td id="tdv" scope="row"><input type="checkbox" name="opciones3" class="btn btn-primary" value="{{$p->id}}">{{$p->id}}</td>
                
            </tr>
            @endforeach
            </table>
            </tr>
    
    
    
            </div>
   <div>
    
   </div>
   <div id="apigen">
   
   
   

   <script>$(document).ready(function () {
   
    
    $(":checkbox").change(function () {
      
        
        
      
      
      // definir un arreglo
      var selected = [];
      $(":checkbox[name=opciones1]").each(function () {
          if (this.checked) {
              // agregar cada elemento.
              selected.push("Cliente_ID: "+$(this).val());
          }
      });
      $(":checkbox[name=opciones2]").each(function () {
          if (this.checked) {
              // agregar cada elemento.
              selected.push("Vistas_ID: "+$(this).val());
          }
      });
      $(":checkbox[name=opciones3]").each(function () {
          if (this.checked) {
              // agregar cada elemento.
              selected.push("Procedure_ID: "+$(this).val());
          }
      });






      $('#apigen').empty();
      
      if (selected.length) {
          
      
        
         for(h=0;h<selected.length; h++){
           item=`${selected[h]} `;
           
           $('#apigen').append(
                 $(document.createElement('li')).text(item)
           );
         }
         
      } 
      
    });
});
</script>
</div>

<div id="click">

   <input type="submit" name="a" value="Generar API">
    
   </div>

<div id="itse">
  

<table class="table">
   <thead class="thead-dark">
    <tr>
      <th scope="col">Items selected</th>
    </tr>
   </table>
   </div>
<div id="apigenerada">
<h6>API generada</h6>

<textarea id="message" placeholder="Here will be the API"></textarea>
  
</div>
        </div>
    </body>
</html>