<template>
    <div class="container">

        <div  v-if="showSuccessMessage" class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ successMessage }}</strong>
        </div>

        <div  v-if="showErrorMessage" class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ errorMessage }}</strong>
        </div>

        <div class="row justify-content-center">
            Привет {{ user.name }}


            <select v-model="user.role">
                <option value="admin">Админ</option>
                <option value="user">Юзер</option>
            </select>

            <button @click="send"> Отправить</button>

        </div>
    </div>
</template>

<script>
export default {
    props:[
        'initialUser',
    ],
    data: function (){
        return {
            user: {
                role:null,
            },
            showSuccessMessage: false,
            successMessage: '',
            showErrorMessage: false,
            errorMessage: '',
        }
    },
    mounted() {
        this.user = this.initialUser;
        console.log(this.user)
        console.log('Component mounted.')
    },

    methods:{
        send(){

            axios.post('/api/admin/users/edit/'+ this.user.id, this.user).then(response => {
                this.showSuccessMessage = true;
                this.successMessage = 'Пользователь успешно сохранён';
                console.log(response.data);
            });

            console.log(this.user);

        }
    }
            }
</script>
