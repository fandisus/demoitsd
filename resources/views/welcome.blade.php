<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
    <body>
        <div id="app">
            <button @@click="count++"> Count is: @{{ count }}</button>
            isi form: @{{form}}

            <input type="text" v-model="form.nama" />
            <input type="password" v-model="form.password" />
            <button @@click="kirimData" class="btn btn-large btn-success">abc</button>

            <table class="table">
                <tr v-for="o in orangs">
                    <td>@{{o.nama}}</td>
                    <td>@{{o.gender}}</td>
                </tr>
            </table>
            <button class="btn btn-small btn-primary">Oke</button>
        </div>


    </body>
</html>
    <script>
        $(document).ready(function() {
            const csrfToken = '{{csrf_token()}}';
            const app = {

                data() {
                    return { 
                        count:80,
                        nama:'fandi',
                        nilai:100,
                        form: { nama:'a', password:'b', email:'c@admin.com'},
                        orangs:[]
                    }
                },
                methods:{
                    kirimData:function() {
                        $.post('/login', {_token: csrfToken, username:this.form.nama, password: this.form.password}, (rep) => {
                            this.orangs = rep.data;
                        });
                    }
                },

            };
            window.vueapp = Vue.createApp(app).mount('#app');
        });
    </script>
