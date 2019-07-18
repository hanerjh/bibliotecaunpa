@extends('layout.layout2')
@section('titulo','Estatus Biblioteca')
@section('contenido')
    <style>
            table.borders-yellow > thead > tr > th{
            border:1px solid #d6caa5;
            color: #856404;
            }
        
            table.borders-yellow > tbody > tr > td{
                border:1px solid #d6caa5;  
                color: #856404;
            }
        </style>


<div class="col-md-12" id="app">
  <h4>Consultar estatus en Biblioteca</h4>
  <p>
      Para consultar su estado en biblioteca con relación a multas, ingresar el código si es estudiante, de lo contrario, documento de identidad si eres docente o funcionario.
      </p>
 <div class="row">
    <div class="col-md-8">
        <form id="form_multa">
            <div class="form-group">  
                                      
              <input type="text" name="docu" class="form-control" id="documento" v-model="documento" placeholder="Ingresa tu documento" required/>
             
            </div>
            <button type="submit" v-on:click="multas" class="btn btn-primary mb-2">Buscar</button>
        </form>
        <div v-html="datos"></div>
      </div>   
      

 </div>
  
</div>

<div id="result" ></div>
@endsection 
                

@section('script')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
var app = new Vue({
    el: '#app',
    data: {
      message:'',
      documento:'',
      datos:[]="",
      
      saldo:0 
    },     
    methods:{
      multas:function(e){
        e.preventDefault();
        this.datos="";
        this.saldo=0;
        if(this.documento!=""){
        axios.get('/usuario/'+this.documento)
                .then(response => {
                   this.datos = response.data
                      
                    }).catch(function (error) {
                    console.log(error);
                  });
        } 
      }
    }
  })
</script>

<!--<script>
    $(document).ready(function(){
      $("button").click(function(event){
        event.preventDefault(); 
      
        var url="/usuario/"+ $("#documento").val();;
       
        $.ajax({
            url: url,
            type: 'GET', 
           success: function(result){
          console.log(result);
          $("#result").html(result);
        }});
      });
    });
    </script>-->
@endsection