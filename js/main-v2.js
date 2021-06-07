Vue.use(window.vuelidate.default);
Vue.use(VueMask.VueMaskPlugin);

const { required, minLength } = window.validators;

let callbackForm = new Vue({
    el: "#form",
    data: {
        name: '',
        phone: '',
    },
    watch: {
        phone(val) {
            if (val === '8') {
                this.phone = '7';
            }
        }
    },
    validations: {
        name: { required },
        phone: { required, minLength: minLength(16) },
    },
    methods: {
        submit() {
            this.$v.$touch()
            if (!this.$v.$invalid) {
                $.ajax({
                    type: "POST",
                    url: "send.php",
                    data: "name=" + this.name + "&phone=" + this.phone,
                    success: function(data) {
                        if (data == 'ok') {
                            alert ("Ваша заявка отправлена");
                        }
                    }
                });
            }
        }
    }
});