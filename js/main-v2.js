Vue.use(window.vuelidate.default);
Vue.use(VueMask.VueMaskPlugin);

const { required, minLength } = window.validators;

let callbackForm = new Vue({
    el: "#f-callback",
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
                    success: function(msg) {
                        $.fancybox.close();
                        $.fancybox.open(
                            '<div id="success" class="modal-form form-success">' +
                            '<div class="form-success__title">Спасибо!</div>' +
                            '<div class="form-success__text">' +
                            'Ваша заявка принята.<br>' +
                            'В ближайшее время с вами свяжется наш менеджер.' +
                            '</div>' +
                            '</div>');
                    }
                });
            }
        }
    }
});