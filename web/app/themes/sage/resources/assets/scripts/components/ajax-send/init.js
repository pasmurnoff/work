
import validateInput from '../../util/validate-input';
import wrongInput from '../../util/wrong-input';
import Noty from 'noty';

export default function () {
    $('form.form:not(.form-login)').submit(function (e) {
        e.preventDefault();

        let form = $(this);
        let fields = form.find('input[type="text"], input[type="tel"], input[type="email"], textarea');
        let isSend = 0;

        fields.each(function () {
            let pass = validateInput({
                el: $(this),
            });

            if (pass.pass == false) {
                wrongInput(pass.el);
            } else {
                isSend++;
            }
        })

        if(isSend === fields.length) {
            let formData = new FormData(form[0]);

            $.ajax({
                contentType: false,
                processData: false,
                url: window.wp_data.ajax_url + '?action=send_mail',
                type: 'POST',
                data: formData,
                success: function () {
                    form[0].reset();

                    new Noty({
                        type: 'success',
                        text: 'Ваше сообщение было успешно отправлено.\n' + 'Mы свяжемся с Вами в ближайшее время.',
                        theme: 'metroui',
                        timeout: 5000,
                    }).show();
                },
                error: function () {
                    new Noty({
                        type: 'error',
                        text: 'Что-то пошло не так, попробуйте в другой раз',
                        theme: 'metroui',
                        timeout: 5000,
                    }).show();
                },
            });
        }

        return false;
    })
}
