jQuery.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || /^[0-9]+$/i.test(value);
}, "");
$(document).ready(function () {
    $(document.getElementById("reg-form")).validate({
        rules: {
            first_name: {
                required: true,
                minlength: 3,
                maxlength: 35
            },
            last_name: {
                required: true,
                minlength: 3,
                maxlength: 35
            },
            email: {
                required: true,
                email: true,
                minlength: 2,
                maxlength: 35
            },
            username: {
                required: true,
                minlength: 2,
                maxlength: 35
            },
            birthday: {
                required: true
            },
            phone: {
                required: true
            },
            password: {
                required: true
            },
        },
        messages: {
            first_name: {
                required: "Это поле обязательно для заполнения",
                minlength: "Минимум 3 символа",
                maxlength: "Максиму 35 символов"
            },
            last_name: {
                required: "Это поле обязательно для заполнения",
                minlength: "Минимум 3 символа",
                maxlength: "Максиму 35 символов"
            },
            email: {
                required: "Это поле обязательно для заполнения",
                email: "Введите корректный адрес",
                minlength: "Минимум 3 символа",
                maxlength: "Максиму 35 символов"
            },
            username: {
                required: "Это поле обязательно для заполнения",
                minlength: "Минимум 3 символа",
                maxlength: "Максиму 35 символов"
            },
            birthday: {
                required: "Это поле обязательно для заполнения",
            },
            phone: {
                required: "Это поле обязательно для заполнения",
            },
            password: {
                required: "Это поле обязательно для заполнения",
            }

        }
    });
});



